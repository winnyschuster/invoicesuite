<?php

declare(strict_types=1);

$options = getopt('', ['summary-file:', 'clover-file:', 'crap4j-file:']);

$summaryFile = $options['summary-file'] ?? getenv('GITHUB_STEP_SUMMARY') ?: '';
$cloverFile = $options['clover-file'] ?? 'build/logs/clover.xml';
$crap4jFile = $options['crap4j-file'] ?? 'build/logs/crap4j.xml';

if ('' === $summaryFile) {
    fwrite(STDERR, "Missing summary file. Pass --summary-file or set GITHUB_STEP_SUMMARY.\n");
    exit(1);
}

$loadXml = static function (string $file): ?DOMDocument {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);

    if (!is_file($file) || !$dom->load($file)) {
        return null;
    }

    return $dom;
};

$formatPercent = static function (int $covered, int $total): string {
    if (0 === $total) {
        return 'n/a';
    }

    return number_format(($covered / $total) * 100, 2, '.', '') . '%';
};

$formatPercentValue = static function (float $value): string {
    return number_format($value, 2, '.', '') . '%';
};

$normalizePath = static function (string $path): string {
    return str_replace('\\', '/', $path);
};

$toRelativePath = static function (string $path) use ($normalizePath): string {
    $path = $normalizePath($path);

    $marker = '/src/';
    $position = strpos($path, $marker);

    if (false !== $position) {
        return substr($path, $position + 1);
    }

    if (str_starts_with($path, 'src/')) {
        return $path;
    }

    return ltrim($path, '/');
};

$resolvePackage = static function (string $path) use ($toRelativePath): string {
    $path = $toRelativePath($path);

    if (str_starts_with($path, 'src/')) {
        $parts = explode('/', $path);

        return count($parts) >= 2 ? $parts[0] . '/' . $parts[1] : 'src';
    }

    $directory = dirname($path);

    return '.' === $directory ? '(root)' : $directory;
};

$append = static function (string $content) use ($summaryFile): void {
    file_put_contents($summaryFile, $content, FILE_APPEND);
};

$append("## Coverage Summary\n\n");

$cloverDom = $loadXml($cloverFile);

if (!$cloverDom instanceof DOMDocument) {
    $append('No Clover coverage report found at ' . $cloverFile . ".\n");

    exit(0);
}

$xpath = new DOMXPath($cloverDom);
$metrics = $xpath->query('//project/metrics')->item(0);

if (!$metrics instanceof DOMElement) {
    $append('Coverage report found, but does not contain project metrics: ' . $cloverFile . ".\n");

    exit(0);
}

$getInt = static function (DOMElement $element, string $name): int {
    $value = $element->getAttribute($name);

    return '' === $value ? 0 : (int) $value;
};

$statements = $getInt($metrics, 'statements');
$coveredStatements = $getInt($metrics, 'coveredstatements');
$methods = $getInt($metrics, 'methods');
$coveredMethods = $getInt($metrics, 'coveredmethods');
$conditionals = $getInt($metrics, 'conditionals');
$coveredConditionals = $getInt($metrics, 'coveredconditionals');
$elements = $getInt($metrics, 'elements');
$coveredElements = $getInt($metrics, 'coveredelements');
$classes = $getInt($metrics, 'classes');
$files = $getInt($metrics, 'files');
$ncloc = $getInt($metrics, 'ncloc');

$output = '';
$output .= "| Metric | Covered | Total | Coverage |\n";
$output .= "| --- | ---: | ---: | ---: |\n";
$output .= '| Statements | ' . $coveredStatements . ' | ' . $statements . ' | ' . $formatPercent($coveredStatements, $statements) . " |\n";
$output .= '| Methods | ' . $coveredMethods . ' | ' . $methods . ' | ' . $formatPercent($coveredMethods, $methods) . " |\n";
$output .= '| Conditionals | ' . $coveredConditionals . ' | ' . $conditionals . ' | ' . $formatPercent($coveredConditionals, $conditionals) . " |\n";
$output .= '| Elements | ' . $coveredElements . ' | ' . $elements . ' | ' . $formatPercent($coveredElements, $elements) . " |\n\n";
$output .= "### Coverage Distribution\n\n";

$fileRows = [];
$packageRows = [];
$zeroCoverageFiles = 0;
$below50Files = 0;
$below70Files = 0;
$below80Files = 0;
$atLeast90Files = 0;

foreach ($xpath->query('//file') as $fileNode) {
    if (!$fileNode instanceof DOMElement) {
        continue;
    }

    $fileMetricsNode = null;

    foreach ($fileNode->childNodes as $childNode) {
        if ($childNode instanceof DOMElement && 'metrics' === $childNode->tagName) {
            $fileMetricsNode = $childNode;
            break;
        }
    }

    if (!$fileMetricsNode instanceof DOMElement) {
        continue;
    }

    $filePath = $toRelativePath($fileNode->getAttribute('name'));
    $fileStatements = $getInt($fileMetricsNode, 'statements');
    $fileCoveredStatements = $getInt($fileMetricsNode, 'coveredstatements');
    $fileMethods = $getInt($fileMetricsNode, 'methods');
    $fileCoveredMethods = $getInt($fileMetricsNode, 'coveredmethods');
    $fileConditionals = $getInt($fileMetricsNode, 'conditionals');
    $fileCoveredConditionals = $getInt($fileMetricsNode, 'coveredconditionals');

    if (0 === $fileStatements && 0 === $fileMethods && 0 === $fileConditionals) {
        continue;
    }

    $uncoveredStatements = max(0, $fileStatements - $fileCoveredStatements);
    $coverageRatio = $fileStatements > 0
        ? ($fileCoveredStatements / $fileStatements) * 100
        : ($fileMethods > 0 ? ($fileCoveredMethods / $fileMethods) * 100 : 0.0);

    if ($fileStatements > 0 && 0 === $fileCoveredStatements) {
        ++$zeroCoverageFiles;
    }

    if ($coverageRatio < 50.0) {
        ++$below50Files;
    }

    if ($coverageRatio < 70.0) {
        ++$below70Files;
    }

    if ($coverageRatio < 80.0) {
        ++$below80Files;
    }

    if ($coverageRatio >= 90.0) {
        ++$atLeast90Files;
    }

    $fileRows[] = [
        'file' => $filePath,
        'statements' => $fileStatements,
        'coveredStatements' => $fileCoveredStatements,
        'uncoveredStatements' => $uncoveredStatements,
        'coverageRatio' => $coverageRatio,
    ];

    $package = $resolvePackage($filePath);

    if (!isset($packageRows[$package])) {
        $packageRows[$package] = [
            'package' => $package,
            'files' => 0,
            'statements' => 0,
            'coveredStatements' => 0,
            'uncoveredStatements' => 0,
        ];
    }

    ++$packageRows[$package]['files'];
    $packageRows[$package]['statements'] += $fileStatements;
    $packageRows[$package]['coveredStatements'] += $fileCoveredStatements;
    $packageRows[$package]['uncoveredStatements'] += $uncoveredStatements;
}

$output .= "| Files | Classes | NCLOC | 0% Files | < 50% | < 70% | < 80% | ≥ 90% |\n";
$output .= "| ---: | ---: | ---: | ---: | ---: | ---: | ---: | ---: |\n";
$output .= '| ' . $files . ' | ' . $classes . ' | ' . $ncloc . ' | ' . $zeroCoverageFiles . ' | ' . $below50Files . ' | ' . $below70Files . ' | ' . $below80Files . ' | ' . $atLeast90Files . " |\n\n";

if ([] !== $fileRows) {
    usort(
        $fileRows,
        static function (array $left, array $right): int {
            return [$left['coverageRatio'], -$left['uncoveredStatements'], $left['file']]
                <=> [$right['coverageRatio'], -$right['uncoveredStatements'], $right['file']];
        }
    );

    $output .= "### Weakest Files by Statement Coverage\n\n";
    $output .= "| File | Uncovered | Statements | Coverage |\n";
    $output .= "| --- | ---: | ---: | ---: |\n";

    foreach (array_slice($fileRows, 0, 10) as $row) {
        $output .= '| `' . $row['file'] . '` | ' . $row['uncoveredStatements'] . ' | ' . $row['statements'] . ' | ' . $formatPercentValue($row['coverageRatio']) . " |\n";
    }

    $output .= "\n";

    $largestGaps = $fileRows;
    usort(
        $largestGaps,
        static function (array $left, array $right): int {
            return [$right['uncoveredStatements'], $left['coverageRatio'], $left['file']]
                <=> [$left['uncoveredStatements'], $right['coverageRatio'], $right['file']];
        }
    );

    $output .= "### Largest Uncovered Statement Gaps\n\n";
    $output .= "| File | Uncovered | Covered | Statements | Coverage |\n";
    $output .= "| --- | ---: | ---: | ---: | ---: |\n";

    foreach (array_slice($largestGaps, 0, 10) as $row) {
        $output .= '| `' . $row['file'] . '` | ' . $row['uncoveredStatements'] . ' | ' . $row['coveredStatements'] . ' | ' . $row['statements'] . ' | ' . $formatPercentValue($row['coverageRatio']) . " |\n";
    }

    $output .= "\n";
}

if ([] !== $packageRows) {
    $packageRows = array_values($packageRows);

    foreach ($packageRows as &$packageRow) {
        $packageRow['coverageRatio'] = $packageRow['statements'] > 0
            ? ($packageRow['coveredStatements'] / $packageRow['statements']) * 100
            : 0.0;
    }
    unset($packageRow);

    usort(
        $packageRows,
        static function (array $left, array $right): int {
            return [$left['coverageRatio'], -$left['uncoveredStatements'], $left['package']]
                <=> [$right['coverageRatio'], -$right['uncoveredStatements'], $right['package']];
        }
    );

    $output .= "### Package Overview\n\n";
    $output .= "| Package | Files | Uncovered | Statements | Coverage |\n";
    $output .= "| --- | ---: | ---: | ---: | ---: |\n";

    foreach ($packageRows as $row) {
        $output .= '| `' . $row['package'] . '` | ' . $row['files'] . ' | ' . $row['uncoveredStatements'] . ' | ' . $row['statements'] . ' | ' . $formatPercentValue($row['coverageRatio']) . " |\n";
    }

    $output .= "\n";
}

$output .= "### CRAP Hotspots\n\n";

$crapDom = $loadXml($crap4jFile);

if (!$crapDom instanceof DOMDocument) {
    $output .= 'No Crap4J report found at ' . $crap4jFile . ".\n\n";
} else {
    $crapXpath = new DOMXPath($crapDom);
    $crapRows = [];

    foreach ($crapXpath->query('//method') as $methodNode) {
        if (!$methodNode instanceof DOMElement) {
            continue;
        }

        $crap = $methodNode->getAttribute('crap');

        if ('' === $crap) {
            continue;
        }

        $className = $methodNode->getAttribute('className');

        if ('' === $className) {
            $className = $methodNode->getAttribute('class');
        }

        $methodName = $methodNode->getAttribute('method');

        if ('' === $methodName) {
            $methodName = $methodNode->getAttribute('name');
        }

        $file = $toRelativePath($methodNode->getAttribute('file'));
        $complexity = $methodNode->getAttribute('complexity');
        $coverage = $methodNode->getAttribute('coverage');

        $crapRows[] = [
            'crap' => (float) $crap,
            'className' => '' !== $className ? $className : '(unknown class)',
            'methodName' => '' !== $methodName ? $methodName : '(unknown method)',
            'file' => '' !== $file ? $file : '(unknown file)',
            'complexity' => '' !== $complexity ? (int) $complexity : 0,
            'coverage' => '' !== $coverage ? (float) $coverage : 0.0,
        ];
    }

    if ([] === $crapRows) {
        $output .= 'No CRAP hotspots found in ' . $crap4jFile . ".\n\n";
    } else {
        usort(
            $crapRows,
            static function (array $left, array $right): int {
                return [$right['crap'], $right['complexity'], $left['className'], $left['methodName']]
                    <=> [$left['crap'], $left['complexity'], $right['className'], $right['methodName']];
            }
        );

        $output .= "| Class::Method | File | CRAP | Complexity | Coverage |\n";
        $output .= "| --- | --- | ---: | ---: | ---: |\n";

        foreach (array_slice($crapRows, 0, 10) as $row) {
            $output .= '| `' . $row['className'] . '::' . $row['methodName'] . '` | `' . $row['file'] . '` | ' . number_format($row['crap'], 2, '.', '') . ' | ' . $row['complexity'] . ' | ' . $formatPercentValue($row['coverage']) . " |\n";
        }

        $output .= "\n";
    }
}

$output .= "Coverage reports:\n";
$output .= "- `build/logs/clover.xml`\n";
$output .= "- `build/logs/crap4j.xml`\n";
$output .= "- `build/coverage`\n";
$output .= "- `build/coverage-html`\n";

$append($output);
