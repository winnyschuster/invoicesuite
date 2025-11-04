<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\pdf;

use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\InvoiceSuitePdfDocumentBuilder;
use horstoeko\invoicesuite\pdfs\abstracts\InvoiceSuiteAbstractPdfConstructor;
use horstoeko\invoicesuite\pdfs\zffx\InvoiceSuiteZffxPdfConstructor;
use horstoeko\invoicesuite\pdfs\zffx\InvoiceSuiteZffxPdfWriter;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

final class InvoiceSuitePdfDocumentBuilderTest extends TestCase
{
    private function getSamplePlainPdfPath(): string
    {
        return InvoiceSuitePathUtils::combinePathWithFile(
            InvoiceSuitePathUtils::combineAllPaths(__DIR__, "..", "..", "assets"),
            "pdf_plain.pdf"
        );
    }

    private function getSampleZfFxBasicXmlPath(): string
    {
        return InvoiceSuitePathUtils::combinePathWithFile(
            InvoiceSuitePathUtils::combineAllPaths(__DIR__, "..", "..", "assets"),
            "02_technical_xml_zffx_basic.xml"
        );
    }

    private function getSampleZfFxBasicBuilder(): InvoiceSuiteDocumentBuilder
    {
        $documentBuilder = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('zffxbasic');
        $documentBuilder->setDocumentNo('2025-00000001');

        return $documentBuilder;
    }

    public function testZfFxBasicCreateFromDocumentBuilderAndPdfFile(): void
    {
        $pdfDOcumentBuilder = InvoiceSuitePdfDocumentBuilder::createFromDocumentBuilderAndPdfFile(
            $this->getSampleZfFxBasicBuilder(),
            $this->getSamplePlainPdfPath()
        );

        // Provider

        $this->assertSame("zffxbasic", $pdfDOcumentBuilder->getCurrentDocumentFormatProvider()->getUniqueId());

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

        $prop = $this->getPrivatePropertyFromObject($propValue, 'pdfWriter');
        $propValue = $prop->getValue($propValue);

        $this->assertInstanceOf(InvoiceSuiteZffxPdfWriter::class, $propValue);

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

        $this->assertStringContainsString("<rsm:ExchangedDocumentContext>", $propValue);
        $this->assertStringContainsString("<ram:GuidelineSpecifiedDocumentContextParameter>", $propValue);
        $this->assertStringContainsString("<ram:ID>urn:cen.eu:en16931:2017#compliant#urn:factur-x.eu:1p0:basic</ram:ID>", $propValue);
        $this->assertStringContainsString("</ram:GuidelineSpecifiedDocumentContextParameter>", $propValue);
        $this->assertStringContainsString("</rsm:ExchangedDocumentContext>", $propValue);
        $this->assertStringContainsString("<rsm:ExchangedDocument>", $propValue);
        $this->assertStringContainsString("<ram:ID>2025-00000001</ram:ID>", $propValue);
        $this->assertStringContainsString("</rsm:ExchangedDocument>", $propValue);
        $this->assertStringContainsString("</rsm:CrossIndustryInvoice>", $propValue);

        $prop = $this->getPrivatePropertyFromObject($pdfDOcumentBuilder, 'rawPdfContent');
        $propValue = $prop->getValue($pdfDOcumentBuilder);

        $this->assertStringContainsString("%PDF-1.5", $propValue);

        // Raw content getter-methods

        $method = $this->getPrivateMethodFromObject($pdfDOcumentBuilder, 'getRawDocumentContent');
        $methodValue = $method->invoke($pdfDOcumentBuilder);

        $this->assertStringContainsString("<rsm:ExchangedDocumentContext>", $methodValue);
        $this->assertStringContainsString("<ram:GuidelineSpecifiedDocumentContextParameter>", $methodValue);
        $this->assertStringContainsString("<ram:ID>urn:cen.eu:en16931:2017#compliant#urn:factur-x.eu:1p0:basic</ram:ID>", $methodValue);
        $this->assertStringContainsString("</ram:GuidelineSpecifiedDocumentContextParameter>", $methodValue);
        $this->assertStringContainsString("</rsm:ExchangedDocumentContext>", $methodValue);
        $this->assertStringContainsString("<rsm:ExchangedDocument>", $methodValue);
        $this->assertStringContainsString("<ram:ID>2025-00000001</ram:ID>", $methodValue);
        $this->assertStringContainsString("</rsm:ExchangedDocument>", $methodValue);
        $this->assertStringContainsString("</rsm:CrossIndustryInvoice>", $methodValue);

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
    }
}
