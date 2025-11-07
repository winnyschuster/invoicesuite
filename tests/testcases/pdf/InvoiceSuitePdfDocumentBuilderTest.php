<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\pdf;

use Closure;
use DateTime;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;
use horstoeko\invoicesuite\InvoiceSuitePdfDocumentBuilder;
use horstoeko\invoicesuite\pdfs\zffx\InvoiceSuiteZffxPdfWriter;
use horstoeko\invoicesuite\pdfs\zffx\InvoiceSuiteZffxPdfConstructor;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistDocumentTypes;
use horstoeko\invoicesuite\pdfs\abstracts\InvoiceSuiteAbstractPdfConstructor;

final class InvoiceSuitePdfDocumentBuilderTest extends TestCase
{
    private function getAssetPath(): string
    {
        return InvoiceSuitePathUtils::combineAllPaths(__DIR__, "..", "..", "assets");
    }

    private function getSamplePlainPdfFile(): string
    {
        return InvoiceSuitePathUtils::combinePathWithFile($this->getAssetPath(), "pdf_plain.pdf");
    }

    public static function zffxProfileProvider(): iterable
    {
        return [
            // First case
            'zffxminimum' => ['zffxminimum', '<ram:ID>urn:factur-x.eu:1p0:minimum</ram:ID>', false, false],
            'zffxbasicwl' => ['zffxbasicwl', '<ram:ID>urn:factur-x.eu:1p0:basicwl</ram:ID>', false, false],
            'zffxbasic' => ['zffxbasic', '<ram:ID>urn:cen.eu:en16931:2017#compliant#urn:factur-x.eu:1p0:basic</ram:ID>', false, false],
            'zffxcomfort' => ['zffxcomfort', '<ram:ID>urn:cen.eu:en16931:2017</ram:ID>', false, false],
            'zffxextended' => ['zffxextended', '<ram:ID>urn:cen.eu:en16931:2017#conformant#urn:factur-x.eu:1p0:extended</ram:ID>', false, false],
            // Second case
            'zffxminimum2' => ['zffxminimum', '<ram:ID>urn:factur-x.eu:1p0:minimum</ram:ID>', "02_technical_xml_zffx_minimum.xml", false],
            'zffxbasicwl2' => ['zffxbasicwl', '<ram:ID>urn:factur-x.eu:1p0:basicwl</ram:ID>', "02_technical_xml_zffx_basicwl.xml", false],
            'zffxbasic2' => ['zffxbasic', '<ram:ID>urn:cen.eu:en16931:2017#compliant#urn:factur-x.eu:1p0:basic</ram:ID>', "02_technical_xml_zffx_basic.xml", false],
            'zffxcomfort2' => ['zffxcomfort', '<ram:ID>urn:cen.eu:en16931:2017</ram:ID>', "02_technical_xml_zffx_comfort.xml", false],
            'zffxextended2' => ['zffxextended', '<ram:ID>urn:cen.eu:en16931:2017#conformant#urn:factur-x.eu:1p0:extended</ram:ID>', "02_technical_xml_zffx_extended.xml", false],
            // Third case
            'zffxminimum3' => ['zffxminimum', '<ram:ID>urn:factur-x.eu:1p0:minimum</ram:ID>', false, true],
            'zffxbasicwl3' => ['zffxbasicwl', '<ram:ID>urn:factur-x.eu:1p0:basicwl</ram:ID>', false, true],
            'zffxbasic3' => ['zffxbasic', '<ram:ID>urn:cen.eu:en16931:2017#compliant#urn:factur-x.eu:1p0:basic</ram:ID>', false, true],
            'zffxcomfort3' => ['zffxcomfort', '<ram:ID>urn:cen.eu:en16931:2017</ram:ID>', false, true],
            'zffxextended3' => ['zffxextended', '<ram:ID>urn:cen.eu:en16931:2017#conformant#urn:factur-x.eu:1p0:extended</ram:ID>', false, true],
            // Fourth case
            'zffxminimum4' => ['zffxminimum', '<ram:ID>urn:factur-x.eu:1p0:minimum</ram:ID>', "02_technical_xml_zffx_minimum.xml", true],
            'zffxbasicwl4' => ['zffxbasicwl', '<ram:ID>urn:factur-x.eu:1p0:basicwl</ram:ID>', "02_technical_xml_zffx_basicwl.xml", true],
            'zffxbasic4' => ['zffxbasic', '<ram:ID>urn:cen.eu:en16931:2017#compliant#urn:factur-x.eu:1p0:basic</ram:ID>', "02_technical_xml_zffx_basic.xml", true],
            'zffxcomfort4' => ['zffxcomfort', '<ram:ID>urn:cen.eu:en16931:2017</ram:ID>', "02_technical_xml_zffx_comfort.xml", true],
            'zffxextended4' => ['zffxextended', '<ram:ID>urn:cen.eu:en16931:2017#conformant#urn:factur-x.eu:1p0:extended</ram:ID>', "02_technical_xml_zffx_extended.xml", true],
        ];
    }

    /**
     * @dataProvider zffxProfileProvider
     */
    public function testZfFxPdfBuilder(string $expectedProfile, string $expectedXmlContains, $expectedUseOfXmlFile, bool $expectusePdfContent): void
    {
        if ($expectusePdfContent !== true) {
            if ($expectedUseOfXmlFile !== false) {
                $xmlFilename = InvoiceSuitePathUtils::combinePathWithFile($this->getAssetPath(), $expectedUseOfXmlFile);
                $xmlContent = file_get_contents($xmlFilename);
                $pdfDOcumentBuilder = InvoiceSuitePdfDocumentBuilder::createFromDocumentContentAndPdfFile(
                    $xmlContent,
                    $this->getSamplePlainPdfFile()
                );
            } else {
                $documentBuilder = InvoiceSuiteDocumentBuilder::createByProviderUniqueId($expectedProfile);
                $documentBuilder->setDocumentNo('2025-00000001');
                $documentBuilder->setDocumentType(InvoiceSuiteCodelistDocumentTypes::COMMERCIAL_INVOICE->value);
                $documentBuilder->setDocumentSellerId('0815');
                $documentBuilder->setDocumentSellerName('Seller Name');
                $documentBuilder->setDocumentDate(DateTime::createFromFormat('Ymd', '19700101'));
                $pdfDOcumentBuilder = InvoiceSuitePdfDocumentBuilder::createFromDocumentBuilderAndPdfFile(
                    $documentBuilder,
                    $this->getSamplePlainPdfFile()
                );
            }
        } else {
            $pdfContent = file_get_contents($this->getSamplePlainPdfFile());
            if ($expectedUseOfXmlFile !== false) {
                $xmlFilename = InvoiceSuitePathUtils::combinePathWithFile($this->getAssetPath(), $expectedUseOfXmlFile);
                $xmlContent = file_get_contents($xmlFilename);
                $pdfDOcumentBuilder = InvoiceSuitePdfDocumentBuilder::createFromDocumentContentAndPdfContent(
                    $xmlContent,
                    $pdfContent
                );
            } else {
                $documentBuilder = InvoiceSuiteDocumentBuilder::createByProviderUniqueId($expectedProfile);
                $documentBuilder->setDocumentNo('2025-00000001');
                $documentBuilder->setDocumentType(InvoiceSuiteCodelistDocumentTypes::COMMERCIAL_INVOICE->value);
                $documentBuilder->setDocumentSellerId('0815');
                $documentBuilder->setDocumentSellerName('Seller Name');
                $documentBuilder->setDocumentDate(DateTime::createFromFormat('Ymd', '19700101'));
                $pdfDOcumentBuilder = InvoiceSuitePdfDocumentBuilder::createFromDocumentBuilderAndPdfContent(
                    $documentBuilder,
                    $pdfContent
                );
            }
        }

        // Provider

        $this->assertSame($expectedProfile, $pdfDOcumentBuilder->getCurrentDocumentFormatProvider()->getUniqueId());

        // PdfConstructor properties

        $prop = $this->getPrivatePropertyFromObject($pdfDOcumentBuilder, 'currentPdfConstructor');
        $propValue = $prop->getValue($pdfDOcumentBuilder);

        $this->assertInstanceOf(InvoiceSuiteAbstractPdfConstructor::class, $propValue);
        $this->assertInstanceOf(InvoiceSuiteZffxPdfConstructor::class, $propValue);

        // PdfConstructor methods

        $method = $this->getPrivateMethodFromObject($pdfDOcumentBuilder, 'getCurrentPdfConstructor');
        $methodValue = $method->invoke($pdfDOcumentBuilder);

        $this->assertInstanceOf(InvoiceSuiteAbstractPdfConstructor::class, $methodValue);
        $this->assertInstanceOf(InvoiceSuiteZffxPdfConstructor::class, $methodValue);

        // PdfWriter

        $propPdfWriter = $this->getPrivatePropertyFromObject($propValue, 'pdfWriter');
        $propPdfWriterValue = $propPdfWriter->getValue($propValue);

        $this->assertInstanceOf(InvoiceSuiteZffxPdfWriter::class, $propPdfWriterValue);

        // Initial values

        $this->assertSame("", $pdfDOcumentBuilder->getAdditionalCreatorTool());
        $this->assertSame("Data", $pdfDOcumentBuilder->getDocumentRelationshipType());
        $this->assertEmpty($pdfDOcumentBuilder->getaddAdditionalDocument());
        $this->assertFalse($pdfDOcumentBuilder->getDeterministicMode());
        $this->assertSame("", $pdfDOcumentBuilder->getMetaInformationAuthorTemplate());
        $this->assertSame("", $pdfDOcumentBuilder->getMetaInformationKeywordTemplate());
        $this->assertSame("", $pdfDOcumentBuilder->getMetaInformationTitleTemplate());
        $this->assertSame("", $pdfDOcumentBuilder->getMetaInformationSubjectTemplate());
        $this->assertNull($pdfDOcumentBuilder->getMetaInformationCallback());
        $this->assertTrue($pdfDOcumentBuilder->getAttachmentPaneVisibility());

        // Raw Content properties

        $prop = $this->getPrivatePropertyFromObject($pdfDOcumentBuilder, 'rawDocumentContent');
        $propValue = $prop->getValue($pdfDOcumentBuilder);

        $this->assertStringContainsString($expectedXmlContains, $propValue);

        $prop = $this->getPrivatePropertyFromObject($pdfDOcumentBuilder, 'rawPdfContent');
        $propValue = $prop->getValue($pdfDOcumentBuilder);

        $this->assertStringContainsString("%PDF-1.5", $propValue);

        // Raw content getter-methods

        $method = $this->getPrivateMethodFromObject($pdfDOcumentBuilder, 'getRawDocumentContent');
        $methodValue = $method->invoke($pdfDOcumentBuilder);

        $this->assertStringContainsString($expectedXmlContains, $methodValue);

        $method = $this->getPrivateMethodFromObject($pdfDOcumentBuilder, 'getRawPdfContent');
        $methodValue = $method->invoke($pdfDOcumentBuilder);

        $this->assertStringContainsString("%PDF-1.5", $methodValue);

        // Setters

        $pdfDOcumentBuilder->setAdditionalCreatorTool('Some Creator Tool');
        $this->assertSame("Some Creator Tool", $pdfDOcumentBuilder->getAdditionalCreatorTool());

        $pdfDOcumentBuilder->setDocumentRelationshipType('Alternative');
        $this->assertSame("Alternative", $pdfDOcumentBuilder->getDocumentRelationshipType());
        $pdfDOcumentBuilder->setDocumentRelationshipType('Data');
        $this->assertSame("Data", $pdfDOcumentBuilder->getDocumentRelationshipType());
        $pdfDOcumentBuilder->setDocumentRelationshipType('Source');
        $this->assertSame("Source", $pdfDOcumentBuilder->getDocumentRelationshipType());
        $pdfDOcumentBuilder->setDocumentRelationshipType('unknown');
        $this->assertSame("Data", $pdfDOcumentBuilder->getDocumentRelationshipType());
        $pdfDOcumentBuilder->setDocumentRelationshipTypeToSource();
        $this->assertSame("Source", $pdfDOcumentBuilder->getDocumentRelationshipType());
        $pdfDOcumentBuilder->setDocumentRelationshipTypeToAlternative();
        $this->assertSame("Alternative", $pdfDOcumentBuilder->getDocumentRelationshipType());
        $pdfDOcumentBuilder->setDocumentRelationshipTypeToData();
        $this->assertSame("Data", $pdfDOcumentBuilder->getDocumentRelationshipType());

        $pdfDOcumentBuilder->setDeterministicMode(true);
        $this->assertTrue($pdfDOcumentBuilder->getDeterministicMode());
        $pdfDOcumentBuilder->setDeterministicMode(false);
        $this->assertFalse($pdfDOcumentBuilder->getDeterministicMode());
        $pdfDOcumentBuilder->setDeterministicModeToEnabled();
        $this->assertTrue($pdfDOcumentBuilder->getDeterministicMode());
        $pdfDOcumentBuilder->setDeterministicModeToDisabled();
        $this->assertFalse($pdfDOcumentBuilder->getDeterministicMode());

        $pdfDOcumentBuilder->setMetaInformationAuthorTemplate('Some author template');
        $this->assertSame("Some author template", $pdfDOcumentBuilder->getMetaInformationAuthorTemplate());
        $pdfDOcumentBuilder->setMetaInformationKeywordTemplate('Some keyword template');
        $this->assertSame("Some keyword template", $pdfDOcumentBuilder->getMetaInformationKeywordTemplate());
        $pdfDOcumentBuilder->setMetaInformationTitleTemplate('Some title template');
        $this->assertSame("Some title template", $pdfDOcumentBuilder->getMetaInformationTitleTemplate());
        $pdfDOcumentBuilder->setMetaInformationSubjectTemplate('Some subject template');
        $this->assertSame("Some subject template", $pdfDOcumentBuilder->getMetaInformationSubjectTemplate());
        $pdfDOcumentBuilder->setMetaInformationCallback(function () {
            return "Some Result";
        });
        $this->assertInstanceOf(Closure::class, $pdfDOcumentBuilder->getMetaInformationCallback());

        $pdfDOcumentBuilder->setAttachmentPaneVisibility(false);
        $this->assertFalse($pdfDOcumentBuilder->getAttachmentPaneVisibility());
        $pdfDOcumentBuilder->setAttachmentPaneVisibility(true);
        $this->assertTrue($pdfDOcumentBuilder->getAttachmentPaneVisibility());

        $pdfDOcumentBuilder->addAdditionalDocumentByRealFile(InvoiceSuitePathUtils::combinePathWithFile($this->getAssetPath(), "02_picture.jpg"));
        $additionalContent = file_get_contents(InvoiceSuitePathUtils::combinePathWithFile($this->getAssetPath(), "02_picture.jpg"));
        $pdfDOcumentBuilder->addAdditionalDocumentByContent($additionalContent, 'pdf.pdf', 'Attached PDF');

        $this->assertCount(2, $pdfDOcumentBuilder->getaddAdditionalDocument());
        $this->assertArrayHasKey(0, $pdfDOcumentBuilder->getaddAdditionalDocument());
        $this->assertArrayHasKey(1, $pdfDOcumentBuilder->getaddAdditionalDocument());
        $this->assertIsArray($pdfDOcumentBuilder->getaddAdditionalDocument()[0]);
        $this->assertIsArray($pdfDOcumentBuilder->getaddAdditionalDocument()[1]);
        $this->assertArrayHasKey('content', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]);
        $this->assertArrayHasKey('filename', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]);
        $this->assertArrayHasKey('displayname', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]);
        $this->assertArrayHasKey('relationship', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]);
        $this->assertArrayHasKey('mimetype', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]);
        $this->assertNotEquals('', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]['content']);
        $this->assertSame('02_picture.jpg', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]['filename']);
        $this->assertSame('02_picture.jpg', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]['displayname']);
        $this->assertSame('Supplement', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]['relationship']);
        $this->assertSame('image/jpeg', $pdfDOcumentBuilder->getaddAdditionalDocument()[0]['mimetype']);
        $this->assertArrayHasKey('content', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]);
        $this->assertArrayHasKey('filename', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]);
        $this->assertArrayHasKey('displayname', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]);
        $this->assertArrayHasKey('relationship', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]);
        $this->assertArrayHasKey('mimetype', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]);
        $this->assertNotEquals('', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]['content']);
        $this->assertSame('pdf.pdf', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]['filename']);
        $this->assertSame('Attached PDF', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]['displayname']);
        $this->assertSame('Supplement', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]['relationship']);
        $this->assertSame('application/pdf', $pdfDOcumentBuilder->getaddAdditionalDocument()[1]['mimetype']);

        // PdfConstrucor Getter/Setter

        $propPdfConstructor = $this->getPrivatePropertyFromObject($pdfDOcumentBuilder, 'currentPdfConstructor');
        $propPdfConstructorValue = $propPdfConstructor->getValue($pdfDOcumentBuilder);

        $this->assertInstanceOf(InvoiceSuiteAbstractPdfConstructor::class, $propPdfConstructorValue);
        $this->assertInstanceOf(InvoiceSuiteZffxPdfConstructor::class, $propPdfConstructorValue);

        $this->assertSame("Some Creator Tool", $propPdfConstructorValue->getAdditionalCreatorTool());
        $pdfDOcumentBuilder->setAdditionalCreatorTool('My Creator Tool');
        $this->assertSame("My Creator Tool", $propPdfConstructorValue->getAdditionalCreatorTool());

        $this->assertSame("Data", $propPdfConstructorValue->getDocumentRelationshipType());
        $pdfDOcumentBuilder->setDocumentRelationshipType('Source');
        $this->assertSame("Source", $propPdfConstructorValue->getDocumentRelationshipType());

        $this->assertFalse($propPdfConstructorValue->getDeterministicMode());
        $pdfDOcumentBuilder->setDeterministicMode(true);
        $this->assertTrue($propPdfConstructorValue->getDeterministicMode());
        $pdfDOcumentBuilder->setDeterministicMode(false);
        $this->assertFalse($propPdfConstructorValue->getDeterministicMode());
        $pdfDOcumentBuilder->setDeterministicModeToEnabled();
        $this->assertTrue($propPdfConstructorValue->getDeterministicMode());
        $pdfDOcumentBuilder->setDeterministicModeToDisabled();
        $this->assertFalse($propPdfConstructorValue->getDeterministicMode());

        $this->assertSame("Some author template", $propPdfConstructorValue->getMetaInformationAuthorTemplate());
        $pdfDOcumentBuilder->setMetaInformationAuthorTemplate('My author template');
        $this->assertSame("My author template", $propPdfConstructorValue->getMetaInformationAuthorTemplate());

        $this->assertSame("Some keyword template", $propPdfConstructorValue->getMetaInformationKeywordTemplate());
        $pdfDOcumentBuilder->setMetaInformationKeywordTemplate('My keyword template');
        $this->assertSame("My keyword template", $propPdfConstructorValue->getMetaInformationKeywordTemplate());

        $this->assertSame("Some title template", $propPdfConstructorValue->getMetaInformationTitleTemplate());
        $pdfDOcumentBuilder->setMetaInformationTitleTemplate('My title template');
        $this->assertSame("My title template", $propPdfConstructorValue->getMetaInformationTitleTemplate());

        $this->assertSame("Some subject template", $propPdfConstructorValue->getMetaInformationSubjectTemplate());
        $pdfDOcumentBuilder->setMetaInformationSubjectTemplate('My subject template');
        $this->assertSame("My subject template", $propPdfConstructorValue->getMetaInformationSubjectTemplate());

        $this->assertInstanceOf(Closure::class, $propPdfConstructorValue->getMetaInformationCallback());
        $pdfDOcumentBuilder->setMetaInformationCallback(null);
        $this->assertNull($propPdfConstructorValue->getMetaInformationCallback());

        $this->assertTrue($propPdfConstructorValue->getAttachmentPaneVisibility());
        $pdfDOcumentBuilder->setAttachmentPaneVisibility(false);
        $this->assertFalse($propPdfConstructorValue->getAttachmentPaneVisibility());
        $pdfDOcumentBuilder->setAttachmentPaneVisibility(true);
        $this->assertTrue($propPdfConstructorValue->getAttachmentPaneVisibility());

        $this->assertCount(2, $propPdfConstructorValue->getaddAdditionalDocuments());
        $this->assertArrayHasKey(0, $propPdfConstructorValue->getaddAdditionalDocuments());
        $this->assertArrayHasKey(1, $propPdfConstructorValue->getaddAdditionalDocuments());
        $this->assertIsArray($propPdfConstructorValue->getaddAdditionalDocuments()[0]);
        $this->assertIsArray($propPdfConstructorValue->getaddAdditionalDocuments()[1]);
        $this->assertArrayHasKey('content', $propPdfConstructorValue->getaddAdditionalDocuments()[0]);
        $this->assertArrayHasKey('filename', $propPdfConstructorValue->getaddAdditionalDocuments()[0]);
        $this->assertArrayHasKey('displayname', $propPdfConstructorValue->getaddAdditionalDocuments()[0]);
        $this->assertArrayHasKey('relationship', $propPdfConstructorValue->getaddAdditionalDocuments()[0]);
        $this->assertArrayHasKey('mimetype', $propPdfConstructorValue->getaddAdditionalDocuments()[0]);
        $this->assertNotEquals('', $propPdfConstructorValue->getaddAdditionalDocuments()[0]['content']);
        $this->assertSame('02_picture.jpg', $propPdfConstructorValue->getaddAdditionalDocuments()[0]['filename']);
        $this->assertSame('02_picture.jpg', $propPdfConstructorValue->getaddAdditionalDocuments()[0]['displayname']);
        $this->assertSame('Supplement', $propPdfConstructorValue->getaddAdditionalDocuments()[0]['relationship']);
        $this->assertSame('image/jpeg', $propPdfConstructorValue->getaddAdditionalDocuments()[0]['mimetype']);
        $this->assertArrayHasKey('content', $propPdfConstructorValue->getaddAdditionalDocuments()[1]);
        $this->assertArrayHasKey('filename', $propPdfConstructorValue->getaddAdditionalDocuments()[1]);
        $this->assertArrayHasKey('displayname', $propPdfConstructorValue->getaddAdditionalDocuments()[1]);
        $this->assertArrayHasKey('relationship', $propPdfConstructorValue->getaddAdditionalDocuments()[1]);
        $this->assertArrayHasKey('mimetype', $propPdfConstructorValue->getaddAdditionalDocuments()[1]);
        $this->assertNotEquals('', $propPdfConstructorValue->getaddAdditionalDocuments()[1]['content']);
        $this->assertSame('pdf.pdf', $propPdfConstructorValue->getaddAdditionalDocuments()[1]['filename']);
        $this->assertSame('Attached PDF', $propPdfConstructorValue->getaddAdditionalDocuments()[1]['displayname']);
        $this->assertSame('Supplement', $propPdfConstructorValue->getaddAdditionalDocuments()[1]['relationship']);
        $this->assertSame('application/pdf', $propPdfConstructorValue->getaddAdditionalDocuments()[1]['mimetype']);
    }
}
