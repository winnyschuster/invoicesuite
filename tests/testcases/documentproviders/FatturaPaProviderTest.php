<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentproviders;

use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProvider;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProviderBuilder;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProviderReader;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaSerializerHandler;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\FatturaElettronica;
use horstoeko\invoicesuite\tests\TestCase;

final class FatturaPaProviderTest extends TestCase
{
    public function testGetUniqueId(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();
        $this->assertSame('fatturapa', $provider->getUniqueId());
    }

    public function testGetDescription(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();
        $this->assertNotEmpty($provider->getDescription());
    }

    public function testGetParameters(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertEmpty($provider->getParameters());
    }

    public function testPdfParameters(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertFalse($provider->getIsPdfSupportAvailable());
        $this->assertCount(0, $provider->getAllowedPdfAttachmentFilenames());
        $this->assertSame('', $provider->getPdfConstructorClassName());
    }

    public function testGetSerializerMetadataDirectories(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertEmpty($provider->getSerializerMetadataDirectories());
    }

    public function testGetSerializerHandlers(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertCount(1, $provider->getSerializerHandlers());
        $this->assertContains(InvoiceSuiteFatturaPaSerializerHandler::class, $provider->getSerializerHandlers());
    }

    public function testGetSerializerListeners(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertEmpty($provider->getSerializerListeners());
    }

    public function testGetSerializerSubscribers(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertEmpty($provider->getSerializerSubscribers());
    }

    public function testGetSerializerGroups(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertCount(1, $provider->getSerializerGroups());
        $this->assertContains('fatturapa', $provider->getSerializerGroups());
    }

    public function testIsSatisfiableBy(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $xml = <<<'XML_WRAP'
        <?xml version="1.0" encoding="UTF-8"?>
        <FatturaElettronica xmlns="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd">
            <FatturaElettronicaHeader>
            </FatturaElettronicaHeader>
        </FatturaElettronica>
        XML_WRAP;

        $this->assertTrue($provider->getIsSatisfiableBySerializedContent($xml));

        $xml = <<<'XML_WRAP'
        <?xml version="1.0" encoding="UTF-8"?>
        <p:FatturaElettronica versione="FPA12" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd">
            <p:FatturaElettronicaHeader>
            </p:FatturaElettronicaHeader>
        </p:FatturaElettronica>
        XML_WRAP;

        $this->assertTrue($provider->getIsSatisfiableBySerializedContent($xml));

        $xml = <<<'XML_WRAP'
        <?xml version="1.0" encoding="UTF-8"?>
        <rsm:CrossIndustryInvoice xmlns:rsm="urn:un:unece:uncefact:data:standard:CrossIndustryInvoice:100" xmlns:qdt="urn:un:unece:uncefact:data:standard:QualifiedDataType:100" xmlns:ram="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:udt="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <rsm:ExchangedDocumentContext>
                <ram:TestIndicator>
                    <udt:Indicator>true</udt:Indicator>
                </ram:TestIndicator>
                <ram:BusinessProcessSpecifiedDocumentContextParameter>
                    <ram:ID>urn:fdc:peppol.eu:2017:poacc:billing:01:1.0</ram:ID>
                </ram:BusinessProcessSpecifiedDocumentContextParameter>
                <ram:GuidelineSpecifiedDocumentContextParameter>
                    <ram:ID>urn:cen.eu:en16931:2017#conformant#urn:factur-x.eu:1p0:extended</ram:ID>
                </ram:GuidelineSpecifiedDocumentContextParameter>
            </rsm:ExchangedDocumentContext>
        </rsm:CrossIndustryInvoice>
        XML_WRAP;

        $this->assertFalse($provider->getIsSatisfiableBySerializedContent($xml));

        $xml = <<<'XML'
    Dummy
    XML;

        $this->assertFalse($provider->getIsSatisfiableBySerializedContent($xml));
    }

    public function testGetRootClassName(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertsame(FatturaElettronica::class, $provider->getRootClassName());
    }

    public function testGetReaderClassName(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertsame(InvoiceSuiteFatturaPaProviderReader::class, $provider->getReaderClassName());
    }

    public function testGetBuilderClassName(): void
    {
        $provider = new InvoiceSuiteFatturaPaProvider();

        $this->assertsame(InvoiceSuiteFatturaPaProviderBuilder::class, $provider->getBuilderClassName());
    }
}
