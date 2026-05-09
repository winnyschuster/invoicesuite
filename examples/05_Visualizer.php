<?php

use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;
use horstoeko\invoicesuite\visualizers\InvoiceSuiteVisualizer;

/**
 * Visualize an electronic invoice XML document as HTML and PDF
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/00_ExampleHelpers.php';

$sourceFilesDirectory = InvoiceSuitePathUtils::combineAllPaths(__DIR__, '..', 'tests', 'assets');
$invoiceXmlFilename = InvoiceSuitePathUtils::combinePathWithFile($sourceFilesDirectory, '03_zugferddocumentreader_3.xml');
$targetHtmlFilename = InvoiceSuitePathUtils::combinePathWithFile(__DIR__, '05_Invoice.html');
$targetPdfFilename = InvoiceSuitePathUtils::combinePathWithFile(__DIR__, '05_Invoice.pdf');

/*
 * The visualizer reads an electronic invoice document and renders it by using a template.
 * The built-in default template can be used for a quick visualization as HTML or PDF.
 */

$visualizer = InvoiceSuiteVisualizer::createFromFile($invoiceXmlFilename);
$visualizer->setDefaultTemplate()->renderMarkupFile($targetHtmlFilename)->renderPdfFile($targetPdfFilename);

echo sprintf("Created invoice visualization HTML: %s\n", $targetHtmlFilename);
echo sprintf("Created invoice visualization PDF: %s\n", $targetPdfFilename);
