<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\console;

use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotReadableException;
use Symfony\Component\Console\Command\Command;

class InvoiceSuiteDetectCommandTest extends InvoiceSuiteConsoleCommandTestCase
{
    /**
     * Test that the command detects an XML invoice and returns the provider metadata as JSON.
     *
     * @return void
     */
    public function testCommandDetectsXmlInvoiceAndOutputsJson(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('00_case_comfort_simple.xml'),
            '--output-json' => true,
        ]);

        self::assertSame(Command::SUCCESS, $exitCode);

        $decodedOutput = $this->decodeJsonOutput($commandTester->getDisplay());

        self::assertArrayHasKey('id', $decodedOutput);
        self::assertIsString($decodedOutput['id']);
        self::assertSame('zffxcomfort', $decodedOutput['id']);

        self::assertArrayHasKey('description', $decodedOutput);
        self::assertIsString($decodedOutput['description']);
        self::assertStringContainsString('EN 16931', $decodedOutput['description']);

        self::assertArrayHasKey('error', $decodedOutput);
        self::assertIsBool($decodedOutput['error']);
        self::assertFalse($decodedOutput['error']);
    }

    /**
     * Test that the command renders table output for an XML invoice by default.
     *
     * @return void
     */
    public function testCommandDetectsXmlInvoiceAndOutputsTable(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('00_case_comfort_simple.xml'),
        ]);

        self::assertSame(Command::SUCCESS, $exitCode);

        $commandOutput = $commandTester->getDisplay();

        self::assertStringContainsString('Info', $commandOutput);
        self::assertStringContainsString('Value', $commandOutput);
        self::assertStringContainsString('zffxcomfort', $commandOutput);
        self::assertStringContainsString('Error', $commandOutput);
    }

    /**
     * Test that the command detects an XML invoice and returns the provider metadata as JSON.
     *
     * @return void
     */
    public function testCommandDetectsPdfInvoiceAndOutputsJson(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('pdf_with_multiple_attachments.pdf'),
            '--output-json' => true,
        ]);

        self::assertSame(Command::SUCCESS, $exitCode);

        $decodedOutput = $this->decodeJsonOutput($commandTester->getDisplay());

        self::assertArrayHasKey('id', $decodedOutput);
        self::assertIsString($decodedOutput['id']);
        self::assertSame('zffxcomfort', $decodedOutput['id']);

        self::assertArrayHasKey('description', $decodedOutput);
        self::assertIsString($decodedOutput['description']);
        self::assertStringContainsString('EN 16931', $decodedOutput['description']);

        self::assertArrayHasKey('error', $decodedOutput);
        self::assertIsBool($decodedOutput['error']);
        self::assertFalse($decodedOutput['error']);

        self::assertArrayHasKey('documentAttachmentName', $decodedOutput);
        self::assertIsString($decodedOutput['documentAttachmentName']);
        self::assertSame('factur-x.xml', $decodedOutput['documentAttachmentName']);

        self::assertArrayHasKey('documentAttachmentMimeType', $decodedOutput);
        self::assertIsString($decodedOutput['documentAttachmentMimeType']);
        self::assertSame('text/xml', $decodedOutput['documentAttachmentMimeType']);

        self::assertArrayHasKey('noOfAdditionalAttachments', $decodedOutput);
        self::assertIsInt($decodedOutput['noOfAdditionalAttachments']);
        self::assertSame(2, $decodedOutput['noOfAdditionalAttachments']);

        self::assertArrayHasKey('additionalAttachments', $decodedOutput);
        self::assertIsArray($decodedOutput['additionalAttachments']);
        self::assertCount(2, $decodedOutput['additionalAttachments']);

        self::assertArrayHasKey(0, $decodedOutput['additionalAttachments']);
        self::assertIsArray($decodedOutput['additionalAttachments']);
        self::assertArrayHasKey('name', $decodedOutput['additionalAttachments'][0]);
        self::assertArrayHasKey('mimeType', $decodedOutput['additionalAttachments'][0]);
        self::assertSame('EN16931_Elektron_Aufmass.png', $decodedOutput['additionalAttachments'][0]['name']);
        self::assertSame('image/png', $decodedOutput['additionalAttachments'][0]['mimeType']);

        self::assertArrayHasKey(1, $decodedOutput['additionalAttachments']);
        self::assertIsArray($decodedOutput['additionalAttachments']);
        self::assertArrayHasKey('name', $decodedOutput['additionalAttachments'][1]);
        self::assertArrayHasKey('mimeType', $decodedOutput['additionalAttachments'][1]);
        self::assertSame('EN16931_Elektron_ElektronRapport.pdf', $decodedOutput['additionalAttachments'][1]['name']);
        self::assertSame('application/pdf', $decodedOutput['additionalAttachments'][1]['mimeType']);
    }

    /**
     * Test that the command detects an XML invoice and returns the provider metadata as JSON.
     *
     * @return void
     */
    public function testCommandDetectsPdfInvoiceAndOutputsTable(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('pdf_with_multiple_attachments.pdf'),
        ]);

        self::assertSame(Command::SUCCESS, $exitCode);

        $commandOutput = $commandTester->getDisplay();

        self::assertStringContainsString('Info', $commandOutput);
        self::assertStringContainsString('Value', $commandOutput);
        self::assertStringContainsString('zffxcomfort', $commandOutput);
        self::assertStringContainsString('Error', $commandOutput);
        self::assertStringContainsString('EN16931_Elektron_Aufmass.png', $commandOutput);
        self::assertStringContainsString('EN16931_Elektron_ElektronRapport.pdf', $commandOutput);
    }

    /**
     * Test that the command renders table output for an XML invoice by default.
     *
     * @return void
     */
    public function testCommandUnknownFile(): void
    {
        $this->expectException(InvoiceSuiteFileNotReadableException::class);

        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('unknown.xml'),
            '--output-json' => true,
        ]);
    }

    /**
     * Test that the command renders table output for an XML invoice by default.
     *
     * @return void
     */
    public function testCommandUnknownTypeAndOutputsJson(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('99_dummy_attachment_1.dummy'),
            '--output-json' => true,
        ]);

        self::assertSame(Command::FAILURE, $exitCode);

        $decodedOutput = $this->decodeJsonOutput($commandTester->getDisplay());

        self::assertArrayHasKey('id', $decodedOutput);
        self::assertIsString($decodedOutput['id']);
        self::assertSame('unknown', $decodedOutput['id']);

        self::assertArrayHasKey('description', $decodedOutput);
        self::assertIsString($decodedOutput['description']);
        self::assertStringContainsString('unknown', $decodedOutput['description']);

        self::assertArrayHasKey('error', $decodedOutput);
        self::assertIsBool($decodedOutput['error']);
        self::assertTrue($decodedOutput['error']);
    }

    /**
     * Test that the command renders table output for an XML invoice by default.
     *
     * @return void
     */
    public function testCommandUnknownTypeAndOutputsTable(): void
    {
        $commandTester = $this->createCommandTester('invoicesuite:detect');

        $exitCode = $commandTester->execute([
            'input-file' => $this->getTestAssetFilePath('99_dummy_attachment_1.dummy'),
        ]);

        self::assertSame(Command::FAILURE, $exitCode);

        $commandOutput = $commandTester->getDisplay();

        self::assertStringContainsString('Info', $commandOutput);
        self::assertStringContainsString('Value', $commandOutput);
        self::assertStringContainsString('unknown', $commandOutput);
        self::assertStringContainsString('Error', $commandOutput);
        self::assertStringContainsString('Yes', $commandOutput);
    }
}
