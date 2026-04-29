<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\console;

use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotReadableException;
use RuntimeException;
use Symfony\Component\Console\Command\Command;

class InvoiceSuiteValidateCommandTest extends InvoiceSuiteConsoleCommandTestCase
{
    /**
     * Test that the command validates the given XML successfully and outputs a JSON
     *
     * @return void
     */
    public function testCommandValidatesXmlAndOutputsJson(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:validate');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('00_case_comfort_simple.xml'),
            '--validator' => 'xsd',
            '--output-json' => true,
        ]);

        $this->assertSame(Command::SUCCESS, $exitCode);

        $decodedOutput = $this->decodeJsonOutput($commandTester->getDisplay());

        $this->assertIsArray($decodedOutput);
        $this->assertArrayHasKey('status', $decodedOutput);
        $this->assertArrayHasKey('errors', $decodedOutput);
        $this->assertArrayHasKey('warnings', $decodedOutput);
        $this->assertArrayHasKey('infos', $decodedOutput);
        $this->assertSame('valid', $decodedOutput['status']);
        $this->assertSame(0, $decodedOutput['errors']);
        $this->assertSame(0, $decodedOutput['warnings']);
        $this->assertSame(0, $decodedOutput['infos']);
    }

    /**
     * Test that the command validates the given XML successfully and outputs a table
     *
     * @return void
     */
    public function testCommandValidatesXmlAndOutputsTable(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:validate');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('00_case_comfort_simple.xml'),
            '--validator' => 'xsd',
        ]);

        $this->assertSame(Command::SUCCESS, $exitCode);

        $commandOutput = $commandTester->getDisplay();

        $this->assertStringContainsString('│ XSD', $commandOutput);
        $this->assertStringContainsString('│ Status', $commandOutput);
        $this->assertStringContainsString('│ Errors', $commandOutput);
        $this->assertStringContainsString('│ Warnings', $commandOutput);
        $this->assertStringContainsString('│ Infos', $commandOutput);
        $this->assertStringContainsString('│ valid', $commandOutput);
    }

    /**
     * Test that the command with unknown file
     *
     * @return void
     */
    public function testCommandWithUnknownFile(): void
    {
        $this->expectException(InvoiceSuiteFileNotReadableException::class);
        $this->expectExceptionMessageMatches('/.*unknown\.xml is not readable.*/');

        $commandTester = $this->createCommandTester('invoicesuite:validate');

        $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('unknown.xml'),
            '--validator' => 'xsd',
        ]);
    }

    /**
     * Test that the command with unknown mime type
     *
     * @return void
     */
    public function testCommandWithUnknownMimeTyoe(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessageMatches('/.*is not a XML or JSON file.*/');

        $commandTester = $this->createCommandTester('invoicesuite:validate');

        $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('99_dummy_attachment_1.dummy'),
            '--validator' => 'xsd',
        ]);
    }
}
