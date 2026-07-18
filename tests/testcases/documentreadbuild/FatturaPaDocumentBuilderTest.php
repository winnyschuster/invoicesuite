<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentreadbuild;

use DateTimeImmutable;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistDocumentTypes;
use horstoeko\invoicesuite\documents\abstracts\InvoiceSuiteAbstractDocumentFormatBuilder;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteAddressDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteCommunicationDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteDocumentHeaderDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteDocumentPositionDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteIdDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteNoteDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuitePartyDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuitePaymentMeanDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuitePaymentTermDiscountDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuitePaymentTermDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuitePaymentTermPenaltyDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuitePriceNetDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteProductDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteQuantityDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteReferenceDocumentDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteReferenceDocumentExtDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteSummationDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuitesummationLineDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteTaxDTO;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProviderBuilder;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProviderReader;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\FatturaElettronica;
use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\tests\traits\HandlesXmlTests;
use horstoeko\invoicesuite\utils\InvoiceSuiteContentType;
use horstoeko\invoicesuite\utils\InvoiceSuiteContentTypeResolver;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;
use horstoeko\invoicesuite\validators\InvoiceSuiteXsdDocumentValidator;

final class FatturaPaDocumentBuilderTest extends TestCase
{
    use HandlesXmlTests;

    public static function setUpBeforeClass(): void
    {
        static::$document = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('fatturapa');
    }

    public function testHasCurrentDocumentProvider(): void
    {
        $this->assertTrue(static::$document->hasCurrentDocumentFormatProvider());
        $this->assertSame('fatturapa', static::$document->getCurrentDocumentFormatProvider()->getUniqueId());
        $this->assertNotNull(static::$document->getCurrentDocumentFormatProvider()->getBuilder());
        $this->assertInstanceOf(InvoiceSuiteFatturaPaProviderBuilder::class, static::$document->getCurrentDocumentFormatProvider()->getBuilder());
        $this->assertInstanceOf(InvoiceSuiteAbstractDocumentFormatBuilder::class, static::$document->getCurrentDocumentFormatProvider()->getBuilder());
        $this->assertInstanceOf(FatturaElettronica::class, static::$document->getCurrentDocumentFormatProvider()->getBuilder()->getDocumentRootObject());
    }

    public function testSetDocumentGeneral(): void
    {
        static::$document
            ->setDocumentNo('2026-07-000001')
            ->setDocumentType(InvoiceSuiteCodelistDocumentTypes::COMMERCIAL_INVOICE->value)
            ->setDocumentDate(new DateTimeImmutable('2026-07-18'))
            ->setDocumentCurrency('EUR')
            ->setDocumentNote('First invoice note')
            ->addDocumentNote('Second invoice note');

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/ProgressivoInvio', '2026-07-00');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Numero', '2026-07-000001');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/TipoDocumento', 'TD01');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Data', '2026-07-18');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Divisa', 'EUR');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Causale', 0, 'First invoice note');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Causale', 1, 'Second invoice note');
    }

    public function testSetAddDocumentReferences(): void
    {
        static::$document
            ->setDocumentBuyerOrderReference('ORDER-1', new DateTimeImmutable('2026-07-01'))
            ->setDocumentContractReference('CONTRACT-1', new DateTimeImmutable('2026-06-01'))
            ->addDocumentContractReference('CONTRACT-2', new DateTimeImmutable('2026-06-02'))
            ->setDocumentInvoiceReference('INVOICE-REF-1', new DateTimeImmutable('2026-05-01'))
            ->addDocumentInvoiceReference('INVOICE-REF-2', new DateTimeImmutable('2026-05-02'));

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiOrdineAcquisto/IdDocumento', 'ORDER-1');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiContratto/IdDocumento', 0, 'CONTRACT-1');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiContratto/IdDocumento', 1, 'CONTRACT-2');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiFattureCollegate/IdDocumento', 0, 'INVOICE-REF-1');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiFattureCollegate/IdDocumento', 1, 'INVOICE-REF-2');
    }

    public function testSetDocumentParties(): void
    {
        static::$document
            ->setDocumentSellerName('Example Seller S.r.l.')
            ->setDocumentSellerTaxRegistration('VA', '12345678901')
            ->addDocumentSellerTaxRegistration('FC', 'SELLERFISCAL01')
            ->setDocumentSellerAddress('Via Roma 1', null, null, '00100', 'Roma', 'IT', 'RM')
            ->setDocumentBuyerName('Example Buyer S.p.A.')
            ->setDocumentBuyerTaxRegistration('VA', '98765432109')
            ->addDocumentBuyerTaxRegistration('FC', 'BUYERFISCAL001')
            ->setDocumentBuyerAddress('Via Milano 2', null, null, '20100', 'Milano', 'IT', 'MI')
            ->setDocumentBuyerCommunication('CODICE_DESTINATARIO', 'ABC1234');

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/DatiAnagrafici/Anagrafica/Denominazione', 'Example Seller S.r.l.');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/DatiAnagrafici/Anagrafica/Denominazione', 'Example Buyer S.p.A.');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/CodiceDestinatario', 'ABC1234');
    }

    public function testSetDocumentPaymentAndTax(): void
    {
        static::$document
            ->setDocumentPaymentMean('58', 'Example Bank', null, null, null, 'IT60X0542811101000000123456', 'Example Seller S.r.l.', null, 'BCITITMM', 'PAYMENT-REF-1')
            ->setDocumentPaymentTerm('TP01', new DateTimeImmutable('2026-08-17'))
            ->setDocumentPaymentDiscountTermsInLastPaymentTerm(null, 2.5, null, new DateTimeImmutable('2026-08-01'))
            ->setDocumentPaymentPenaltyTermsInLastPaymentTerm(null, 5.0, null, new DateTimeImmutable('2026-08-18'))
            ->setDocumentTax('S', 'I', 200.123456, 44.03, 22.0)
            ->setDocumentSummation(200.123456, 0.0, 0.0, 200.123456, 44.03, null, 244.15, 244.15);

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ModalitaPagamento', 'MP05');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/DataScadenzaPagamento', '2026-08-17');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ScontoPagamentoAnticipato', '2.50');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/PenalitaPagamentiRitardati', '5.00');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DatiRiepilogo/ImponibileImporto', '200.12');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/ImportoTotaleDocumento', '244.15');
    }

    public function testAddDocumentPositions(): void
    {
        static::$document
            ->addDocumentPosition('1')
            ->setDocumentPositionProductDetails('PRODUCT-1', 'Consulting service', null, null, null, null, null, 'INTERNAL')
            ->setDocumentPositionNetPrice(100.123456, 1.0)
            ->setDocumentPositionQuantities(1.0, 'H87')
            ->setDocumentPositionBillingPeriod(new DateTimeImmutable('2026-07-01'), new DateTimeImmutable('2026-07-15'))
            ->setDocumentPositionTax('S', 'VAT', null, 22.0)
            ->setDocumentPositionAllowanceCharge(false, 1.123456, null, null, null, 1.5)
            ->setDocumentPositionSummation(100.123456)
            ->addDocumentPosition('line-two')
            ->setDocumentPositionProductDetails('PRODUCT-2')
            ->setDocumentPositionNetPrice(200.0, 2.0)
            ->setDocumentPositionQuantities(1.0, 'H87')
            ->setDocumentPositionTax('S', 'VAT', null, 22.0)
            ->setDocumentPositionSummation(100.0);

        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/NumeroLinea', 0, '1');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/NumeroLinea', 1, '2');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/PrezzoUnitario', 0, '100.123456');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/PrezzoUnitario', 1, '100.00');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/CodiceArticolo/CodiceTipo', 1, 'INTERNO');
    }

    public function testGetContentAsXml(): void
    {
        $resolvedContentType = InvoiceSuiteContentTypeResolver::resolveContentType(static::$document->getContent());

        $this->assertSame(InvoiceSuiteContentType::XML, $resolvedContentType);
    }

    public function testGeneratedDocumentIsSchemaValid(): void
    {
        $validator = InvoiceSuiteXsdDocumentValidator::createFromContent(static::$document->getContent())->validate();

        $this->assertFalse($validator->hasMessagesInMessageBag());
    }

    public function testSaveAsXmlFile(): void
    {
        $xmlFilename = InvoiceSuitePathUtils::combinePathWithFile(__DIR__, 'fatturapa-invoice.xml');

        $this->registerFileForTestCaseTeardown($xmlFilename);

        static::$document->saveContentToFile($xmlFilename);

        $this->assertFileExists($xmlFilename);
        $this->assertSame(static::$document->getContent(), file_get_contents($xmlFilename));
    }

    public function testCopyToReader(): void
    {
        $documentReader = static::$document->copyToReader();

        $this->assertInstanceOf(InvoiceSuiteDocumentReader::class, $documentReader);
        $this->assertSame('fatturapa', $documentReader->getCurrentDocumentFormatProvider()->getUniqueId());
        $this->assertInstanceOf(InvoiceSuiteFatturaPaProviderReader::class, $documentReader->getCurrentDocumentFormatProvider()->getReader());
    }

    public function testCreateFromDTO(): void
    {
        static::$document = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('fatturapa');

        $sellerParty = (new InvoiceSuitePartyDTO())
            ->addName('DTO Seller S.r.l.')
            ->addTaxRegistration(new InvoiceSuiteIdDTO('12345678901', 'VA'))
            ->addAddress(new InvoiceSuiteAddressDTO('Via Roma 1', null, null, '00100', 'Roma', 'IT', 'RM'));

        $buyerParty = (new InvoiceSuitePartyDTO())
            ->addName('DTO Buyer S.p.A.')
            ->addTaxRegistration(new InvoiceSuiteIdDTO('98765432109', 'VA'))
            ->addAddress(new InvoiceSuiteAddressDTO('Via Milano 2', null, null, '20100', 'Milano', 'IT', 'MI'))
            ->addCommunication(new InvoiceSuiteCommunicationDTO('ABC1234', 'CODICE_DESTINATARIO'));

        $position = (new InvoiceSuiteDocumentPositionDTO())
            ->setLineId('1')
            ->setProduct(new InvoiceSuiteProductDTO('DTO-PRODUCT-1', 'DTO consulting service'))
            ->setNetPrice(new InvoiceSuitePriceNetDTO(100.123456, new InvoiceSuiteQuantityDTO(1.0, 'H87')))
            ->setQuantityBilled(new InvoiceSuiteQuantityDTO(1.0, 'H87'))
            ->addTax(new InvoiceSuiteTaxDTO('S', 'VAT', null, null, 22.0))
            ->setSummation(new InvoiceSuitesummationLineDTO(100.123456));

        $paymentTerm = (new InvoiceSuitePaymentTermDTO('TP01', new DateTimeImmutable('2026-08-17')))
            ->addDiscountTerm(new InvoiceSuitePaymentTermDiscountDTO(null, 2.5, null, new DateTimeImmutable('2026-08-01')))
            ->addPenaltyTerm(new InvoiceSuitePaymentTermPenaltyDTO(null, 5.0, null, new DateTimeImmutable('2026-08-18')));

        $documentDTO = (new InvoiceSuiteDocumentHeaderDTO())
            ->setNumber('DTO-2026-0001')
            ->setType('380')
            ->setDate(new DateTimeImmutable('2026-07-18'))
            ->setCurrency('EUR')
            ->addNote(new InvoiceSuiteNoteDTO('DTO invoice note'))
            ->addBuyerOrderReference(new InvoiceSuiteReferenceDocumentDTO('DTO-ORDER-1', new DateTimeImmutable('2026-07-01')))
            ->addContractReference(new InvoiceSuiteReferenceDocumentDTO('DTO-CONTRACT-1', new DateTimeImmutable('2026-06-01')))
            ->addInvoiceReference(new InvoiceSuiteReferenceDocumentExtDTO('DTO-INVOICE-REF-1', new DateTimeImmutable('2026-05-01')))
            ->setSellerParty($sellerParty)
            ->setBuyerParty($buyerParty)
            ->addPaymentMean(new InvoiceSuitePaymentMeanDTO('58', 'DTO Bank', null, null, null, 'IT60X0542811101000000123456', 'DTO Seller S.r.l.', null, 'BCITITMM', 'DTO-PAYMENT-REF-1'))
            ->addPaymentTerm($paymentTerm)
            ->addTax(new InvoiceSuiteTaxDTO('S', 'I', 100.123456, 22.03, 22.0))
            ->addSummation(new InvoiceSuiteSummationDTO(100.123456, 0.0, 0.0, 100.123456, 22.03, null, 122.15, 122.15))
            ->addPosition($position);

        static::$document->createFromDTO($documentDTO);

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Numero', 'DTO-2026-0001');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/DatiAnagrafici/Anagrafica/Denominazione', 'DTO Seller S.r.l.');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/DatiAnagrafici/Anagrafica/Denominazione', 'DTO Buyer S.p.A.');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/CodiceDestinatario', 'ABC1234');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ModalitaPagamento', 'MP05');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ScontoPagamentoAnticipato', '2.50');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/PenalitaPagamentiRitardati', '5.00');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/CodiceArticolo/CodiceValore', 'DTO-PRODUCT-1');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/PrezzoUnitario', '100.123456');

        $validator = InvoiceSuiteXsdDocumentValidator::createFromContent(static::$document->getContent())->validate();

        $this->assertFalse($validator->hasMessagesInMessageBag());
    }
}
