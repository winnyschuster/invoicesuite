<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentproviders;

use DateTimeImmutable;
use horstoeko\invoicesuite\codelists\InvoiceSuiteCodelistDocumentTypes;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProvider;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProviderBuilder;
use horstoeko\invoicesuite\documents\providers\fatturapa\models\FatturaElettronica;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\tests\traits\HandlesXmlTests;
use horstoeko\invoicesuite\validators\InvoiceSuiteXsdDocumentValidator;

final class FatturaPaProviderBuilderTest extends TestCase
{
    use HandlesXmlTests;

    public static function setUpBeforeClass(): void
    {
        static::$document = new InvoiceSuiteFatturaPaProviderBuilder(new InvoiceSuiteFatturaPaProvider());
    }

    public function testHasCurrentDocumentProvider(): void
    {
        $this->assertTrue(static::$document->hasCurrentDocumentFormatProvider());
        $this->assertFalse(static::$document->hasNotCurrentDocumentFormatProvider());
        $this->assertInstanceOf(InvoiceSuiteFatturaPaProvider::class, static::$document->getCurrentDocumentFormatProvider());
    }

    public function testInitDocumentRootObject(): void
    {
        static::$document->initDocumentRootObject();

        $this->assertInstanceOf(FatturaElettronica::class, static::$document->getDocumentRootObject());
    }

    public function testDocumentProfile(): void
    {
        $this->assertStringContainsString('versione="FPR12"', static::$document->getContent());
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/FormatoTrasmissione', 'FPR12');
    }

    public function testSetDocumentNo(): void
    {
        static::$document->setDocumentNo(null);

        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/ProgressivoInvio');
        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Numero');

        static::$document->setDocumentNo('');

        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/ProgressivoInvio');
        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Numero');

        static::$document->setDocumentNo('2026-07-000001');

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/ProgressivoInvio', '2026-07-00');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Numero', '2026-07-000001');
    }

    public function testSetDocumentType(): void
    {
        static::$document->setDocumentType(null);

        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/TipoDocumento');

        static::$document->setDocumentType('unsupported');

        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/TipoDocumento');

        static::$document->setDocumentType(InvoiceSuiteCodelistDocumentTypes::COMMERCIAL_INVOICE->value);

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/TipoDocumento', 'TD01');

        static::$document->setDocumentType(InvoiceSuiteCodelistDocumentTypes::CREDIT_NOTE->value);

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/TipoDocumento', 'TD04');

        static::$document->setDocumentType(InvoiceSuiteCodelistDocumentTypes::COMMERCIAL_INVOICE->value);
    }

    public function testSetDocumentDate(): void
    {
        static::$document->setDocumentDate(null);

        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Data');

        static::$document->setDocumentDate(new DateTimeImmutable('2026-07-18'));

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Data', '2026-07-18');
    }

    public function testSetDocumentCurrency(): void
    {
        static::$document->setDocumentCurrency(null);

        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Divisa');

        static::$document->setDocumentCurrency('EUR');

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Divisa', 'EUR');
    }

    public function testSetAddDocumentNote(): void
    {
        static::$document->setDocumentNote(null);

        $this->assertXPathNotExistsWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Causale', 0);

        static::$document->setDocumentNote('First invoice note');
        static::$document->addDocumentNote('Second invoice note');

        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Causale', 0, 'First invoice note');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Causale', 1, 'Second invoice note');
        $this->assertXPathNotExistsWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/Causale', 2);
    }

    public function testSetAddDocumentReferences(): void
    {
        static::$document->setDocumentBuyerOrderReference('ORDER-1', new DateTimeImmutable('2026-07-01'));
        static::$document->setDocumentContractReference('CONTRACT-1', new DateTimeImmutable('2026-06-01'));
        static::$document->addDocumentContractReference('CONTRACT-2', new DateTimeImmutable('2026-06-02'));
        static::$document->setDocumentInvoiceReference('INVOICE-REF-1', new DateTimeImmutable('2026-05-01'));
        static::$document->addDocumentInvoiceReference('INVOICE-REF-2', new DateTimeImmutable('2026-05-02'));

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiOrdineAcquisto/IdDocumento', 'ORDER-1');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiOrdineAcquisto/Data', '2026-07-01');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiContratto/IdDocumento', 0, 'CONTRACT-1');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiContratto/IdDocumento', 1, 'CONTRACT-2');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiFattureCollegate/IdDocumento', 0, 'INVOICE-REF-1');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiFattureCollegate/IdDocumento', 1, 'INVOICE-REF-2');
    }

    public function testSetAddDocumentSeller(): void
    {
        static::$document->setDocumentSellerName('Example Seller S.r.l.');
        static::$document->setDocumentSellerTaxRegistration('VA', '12345678901');
        static::$document->addDocumentSellerTaxRegistration('FC', 'SELLERFISCAL01');
        static::$document->setDocumentSellerAddress('Via Roma 1', null, null, '00100', 'Roma', 'IT', 'RM');
        static::$document->setDocumentSellerContact('Mario Rossi', 'Accounting', '06123456', '06654321', 'seller@example.it');

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/DatiAnagrafici/Anagrafica/Denominazione', 'Example Seller S.r.l.');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/DatiAnagrafici/IdFiscaleIVA/IdPaese', 'IT');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/DatiAnagrafici/IdFiscaleIVA/IdCodice', '12345678901');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/DatiAnagrafici/CodiceFiscale', 'SELLERFISCAL01');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Sede/Indirizzo', 'Via Roma 1');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Sede/CAP', '00100');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Sede/Comune', 'Roma');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Sede/Provincia', 'RM');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Sede/Nazione', 'IT');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Contatti/Telefono', '06123456');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Contatti/Fax', '06654321');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CedentePrestatore/Contatti/Email', 'seller@example.it');
    }

    public function testSetAddDocumentBuyer(): void
    {
        static::$document->setDocumentBuyerName('Example Buyer S.p.A.');
        static::$document->setDocumentBuyerTaxRegistration('VA', '98765432109');
        static::$document->addDocumentBuyerTaxRegistration('FC', 'BUYERFISCAL001');
        static::$document->setDocumentBuyerAddress('Via Milano 2', null, null, '20100', 'Milano', 'IT', 'MI');

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/DatiAnagrafici/Anagrafica/Denominazione', 'Example Buyer S.p.A.');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/DatiAnagrafici/IdFiscaleIVA/IdPaese', 'IT');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/DatiAnagrafici/IdFiscaleIVA/IdCodice', '98765432109');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/DatiAnagrafici/CodiceFiscale', 'BUYERFISCAL001');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/Sede/Indirizzo', 'Via Milano 2');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/Sede/CAP', '20100');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/Sede/Comune', 'Milano');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/Sede/Provincia', 'MI');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/CessionarioCommittente/Sede/Nazione', 'IT');
    }

    public function testSetAddDocumentBuyerCommunication(): void
    {
        static::$document->setDocumentBuyerCommunication('CODICE_DESTINATARIO', 'ABC123');

        $this->assertStringContainsString('versione="FPA12"', static::$document->getContent());
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/FormatoTrasmissione', 'FPA12');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/CodiceDestinatario', 'ABC123');

        static::$document->setDocumentBuyerCommunication('PEC', 'buyer@example.it');

        $this->assertStringContainsString('versione="FPR12"', static::$document->getContent());
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/CodiceDestinatario', '0000000');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/PECDestinatario', 'buyer@example.it');

        static::$document->addDocumentBuyerCommunication('RECEIVER_CODE', 'abc1234');

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/FormatoTrasmissione', 'FPR12');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/CodiceDestinatario', 'ABC1234');
        $this->assertXPathNotExists('/p:FatturaElettronica/FatturaElettronicaHeader/DatiTrasmissione/PECDestinatario');
    }

    public function testSetAddDocumentPaymentMean(): void
    {
        static::$document->setDocumentPaymentMean('58', 'Example Bank', null, null, null, 'IT60X0542811101000000123456', 'Example Seller S.r.l.', null, 'BCITITMM', 'PAYMENT-REF-1');

        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ModalitaPagamento', 0, 'MP05');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/IstitutoFinanziario', 0, 'Example Bank');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/IBAN', 0, 'IT60X0542811101000000123456');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/BIC', 0, 'BCITITMM');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/CodicePagamento', 0, 'PAYMENT-REF-1');

        static::$document->addDocumentPaymentMean('49', 'Second Bank');

        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ModalitaPagamento', 1, 'MP09');

        static::$document->setDocumentPaymentMean('58', 'Example Bank', null, null, null, 'IT60X0542811101000000123456', 'Example Seller S.r.l.', null, 'BCITITMM', 'PAYMENT-REF-1');
    }

    public function testSetAddDocumentPaymentTerm(): void
    {
        static::$document->setDocumentPaymentTerm('TP01', new DateTimeImmutable('2026-08-17'));
        static::$document->setDocumentPaymentDiscountTermsInLastPaymentTerm(null, 2.5, null, new DateTimeImmutable('2026-08-01'));
        static::$document->setDocumentPaymentPenaltyTermsInLastPaymentTerm(null, 5.0, null, new DateTimeImmutable('2026-08-18'));

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/CondizioniPagamento', 'TP01');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/DataScadenzaPagamento', '2026-08-17');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ScontoPagamentoAnticipato', '2.50');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/DataLimitePagamentoAnticipato', '2026-08-01');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/PenalitaPagamentiRitardati', '5.00');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/DataDecorrenzaPenale', '2026-08-18');
    }

    public function testSetAddDocumentTaxAndSummation(): void
    {
        static::$document->setDocumentTax('S', 'I', 200.123456, 44.03, 22.0);
        static::$document->setDocumentSummation(200.123456, 0.0, 0.0, 200.123456, 44.03, null, 244.15, 244.15, 0.0, 0.0);

        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DatiRiepilogo/AliquotaIVA', '22.00');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DatiRiepilogo/ImponibileImporto', '200.12');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DatiRiepilogo/Imposta', '44.03');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DatiRiepilogo/EsigibilitaIVA', 'I');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiGenerali/DatiGeneraliDocumento/ImportoTotaleDocumento', '244.15');
        $this->assertXPathValue('/p:FatturaElettronica/FatturaElettronicaBody/DatiPagamento/DettaglioPagamento/ImportoPagamento', '244.15');
    }

    public function testAddDocumentPosition(): void
    {
        static::$document->addDocumentPosition('not-numeric');

        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/NumeroLinea', 0, '1');

        static::$document->setDocumentPositionProductDetails('PRODUCT-1', 'Consulting service', 'Detailed consulting service', null, null, null, null, 'INTERNAL');
        static::$document->setDocumentPositionNetPrice(200.246912, 2.0);
        static::$document->setDocumentPositionQuantities(1.0, 'H87');
        static::$document->setDocumentPositionBillingPeriod(new DateTimeImmutable('2026-07-01'), new DateTimeImmutable('2026-07-15'));
        static::$document->setDocumentPositionTax('S', 'VAT', null, 22.0);
        static::$document->setDocumentPositionAllowanceCharge(false, 1.123456, null, null, null, 1.5);
        static::$document->setDocumentPositionSummation(100.123456);

        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/CodiceArticolo/CodiceTipo', 0, 'INTERNAL');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/CodiceArticolo/CodiceValore', 0, 'PRODUCT-1');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/Descrizione', 0, 'Consulting service');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/PrezzoUnitario', 0, '100.123456');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/Quantita', 0, '1.00');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/UnitaMisura', 0, 'H87');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/DataInizioPeriodo', 0, '2026-07-01');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/DataFinePeriodo', 0, '2026-07-15');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/ScontoMaggiorazione/Tipo', 0, 'SC');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/ScontoMaggiorazione/Percentuale', 0, '1.50');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/ScontoMaggiorazione/Importo', 0, '1.123456');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/PrezzoTotale', 0, '100.123456');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/AliquotaIVA', 0, '22.00');

        static::$document->addDocumentPosition('line-two');
        static::$document->setDocumentPositionProductDetails('PRODUCT-2');
        static::$document->setDocumentPositionNetPrice(200.0, 2.0);
        static::$document->setDocumentPositionQuantities(1.0, 'H87');
        static::$document->setDocumentPositionTax('S', 'VAT', null, 22.0);
        static::$document->setDocumentPositionSummation(100.0);

        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/NumeroLinea', 1, '2');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/CodiceArticolo/CodiceTipo', 1, 'INTERNO');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/Descrizione', 1, 'PRODUCT-2');
        $this->assertXPathValueWithIndex('/p:FatturaElettronica/FatturaElettronicaBody/DatiBeniServizi/DettaglioLinee/PrezzoUnitario', 1, '100.00');
    }

    public function testGeneratedDocumentIsSchemaValid(): void
    {
        $validator = InvoiceSuiteXsdDocumentValidator::createFromContent(static::$document->getContent())->validate();

        $this->assertFalse($validator->hasMessagesInMessageBag());
    }
}
