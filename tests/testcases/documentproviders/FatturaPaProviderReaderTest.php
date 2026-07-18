<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentproviders;

use DateTimeInterface;
use horstoeko\invoicesuite\documents\abstracts\InvoiceSuiteAbstractDocumentFormatReader;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteDocumentHeaderDTO;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProvider;
use horstoeko\invoicesuite\documents\providers\fatturapa\InvoiceSuiteFatturaPaProviderReader;
use horstoeko\invoicesuite\tests\TestCase;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

final class FatturaPaProviderReaderTest extends TestCase
{
    /**
     * The reader
     *
     * @var InvoiceSuiteAbstractDocumentFormatReader
     */
    private static $document;

    public static function setUpBeforeClass(): void
    {
        static::$document = new InvoiceSuiteFatturaPaProviderReader(new InvoiceSuiteFatturaPaProvider());

        static::$document->deserializeFromContent(
            file_get_contents(
                InvoiceSuitePathUtils::combinePathWithFile(
                    InvoiceSuitePathUtils::combineAllPaths(__DIR__, '..', '..', 'assets'),
                    '02_technical_xml_fatturapa.xml'
                )
            )
        );
    }

    public function testGetDocumentNo(): void
    {
        static::$document->getDocumentNo($newDocumentNo);

        $this->assertSame('2026-07-000001', $newDocumentNo);
    }

    public function testGetDocumentType(): void
    {
        static::$document->getDocumentType($newDocumentType);

        $this->assertSame('380', $newDocumentType);
    }

    public function testGetDocumentDate(): void
    {
        static::$document->getDocumentDate($newDocumentDate);

        $this->assertInstanceOf(DateTimeInterface::class, $newDocumentDate);
        $this->assertSame('20260718', $newDocumentDate?->format('Ymd'));
    }

    public function testGetDocumentCurrency(): void
    {
        static::$document->getDocumentCurrency($newDocumentCurrency);

        $this->assertSame('EUR', $newDocumentCurrency);
    }

    public function testFirstNextGetDocumentNote(): void
    {
        $this->assertTrue(static::$document->firstDocumentNote());

        static::$document->getDocumentNote($newContent, $newContentCode, $newSubjectCode);

        $this->assertSame('First invoice note', $newContent);
        $this->assertSame('', $newContentCode);
        $this->assertSame('', $newSubjectCode);

        $this->assertTrue(static::$document->nextDocumentNote());

        static::$document->getDocumentNote($newContent, $newContentCode, $newSubjectCode);

        $this->assertSame('Second invoice note', $newContent);
        $this->assertFalse(static::$document->nextDocumentNote());
    }

    public function testFirstNextGetDocumentBuyerOrderReference(): void
    {
        $this->assertTrue(static::$document->firstDocumentBuyerOrderReference());

        static::$document->getDocumentBuyerOrderReference($newReferenceNumber, $newReferenceDate);

        $this->assertSame('ORDER-1', $newReferenceNumber);
        $this->assertSame('20260701', $newReferenceDate?->format('Ymd'));
        $this->assertFalse(static::$document->nextDocumentBuyerOrderReference());
    }

    public function testFirstNextGetDocumentContractReference(): void
    {
        $this->assertTrue(static::$document->firstDocumentContractReference());

        static::$document->getDocumentContractReference($newReferenceNumber, $newReferenceDate);

        $this->assertSame('CONTRACT-1', $newReferenceNumber);
        $this->assertSame('20260601', $newReferenceDate?->format('Ymd'));

        $this->assertTrue(static::$document->nextDocumentContractReference());

        static::$document->getDocumentContractReference($newReferenceNumber, $newReferenceDate);

        $this->assertSame('CONTRACT-2', $newReferenceNumber);
        $this->assertSame('20260602', $newReferenceDate?->format('Ymd'));
        $this->assertFalse(static::$document->nextDocumentContractReference());
    }

    public function testFirstNextGetDocumentInvoiceReference(): void
    {
        $this->assertTrue(static::$document->firstDocumentInvoiceReference());

        static::$document->getDocumentInvoiceReference($newReferenceNumber, $newReferenceDate, $newTypeCode);

        $this->assertSame('INVOICE-REF-1', $newReferenceNumber);
        $this->assertSame('20260501', $newReferenceDate?->format('Ymd'));
        $this->assertSame('', $newTypeCode);

        $this->assertTrue(static::$document->nextDocumentInvoiceReference());

        static::$document->getDocumentInvoiceReference($newReferenceNumber, $newReferenceDate, $newTypeCode);

        $this->assertSame('INVOICE-REF-2', $newReferenceNumber);
        $this->assertSame('20260502', $newReferenceDate?->format('Ymd'));
        $this->assertFalse(static::$document->nextDocumentInvoiceReference());
    }

    public function testDocumentSeller(): void
    {
        static::$document->getDocumentSellerName($newName);

        $this->assertSame('Example Seller S.r.l.', $newName);

        $this->assertTrue(static::$document->firstDocumentSellerTaxRegistration());
        static::$document->getDocumentSellerTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);
        $this->assertSame('VA', $newTaxRegistrationType);
        $this->assertSame('12345678901', $newTaxRegistrationId);

        $this->assertTrue(static::$document->nextDocumentSellerTaxRegistration());
        static::$document->getDocumentSellerTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);
        $this->assertSame('FC', $newTaxRegistrationType);
        $this->assertSame('SELLERFISCAL01', $newTaxRegistrationId);
        $this->assertFalse(static::$document->nextDocumentSellerTaxRegistration());

        $this->assertTrue(static::$document->firstDocumentSellerAddress());
        static::$document->getDocumentSellerAddress($newAddressLine1, $newAddressLine2, $newAddressLine3, $newPostcode, $newCity, $newCountryId, $newSubDivision);
        $this->assertSame('Via Roma 1', $newAddressLine1);
        $this->assertSame('', $newAddressLine2);
        $this->assertSame('', $newAddressLine3);
        $this->assertSame('00100', $newPostcode);
        $this->assertSame('Roma', $newCity);
        $this->assertSame('IT', $newCountryId);
        $this->assertSame('RM', $newSubDivision);
        $this->assertFalse(static::$document->nextDocumentSellerAddress());

        $this->assertTrue(static::$document->firstDocumentSellerContact());
        static::$document->getDocumentSellerContact($newPersonName, $newDepartmentName, $newPhoneNumber, $newFaxNumber, $newEmailAddress);
        $this->assertSame('', $newPersonName);
        $this->assertSame('', $newDepartmentName);
        $this->assertSame('06123456', $newPhoneNumber);
        $this->assertSame('06654321', $newFaxNumber);
        $this->assertSame('seller@example.it', $newEmailAddress);
        $this->assertFalse(static::$document->nextDocumentSellerContact());
    }

    public function testDocumentBuyer(): void
    {
        static::$document->getDocumentBuyerName($newName);

        $this->assertSame('Example Buyer S.p.A.', $newName);

        $this->assertTrue(static::$document->firstDocumentBuyerTaxRegistration());
        static::$document->getDocumentBuyerTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);
        $this->assertSame('VA', $newTaxRegistrationType);
        $this->assertSame('98765432109', $newTaxRegistrationId);

        $this->assertTrue(static::$document->nextDocumentBuyerTaxRegistration());
        static::$document->getDocumentBuyerTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);
        $this->assertSame('FC', $newTaxRegistrationType);
        $this->assertSame('BUYERFISCAL001', $newTaxRegistrationId);
        $this->assertFalse(static::$document->nextDocumentBuyerTaxRegistration());

        $this->assertTrue(static::$document->firstDocumentBuyerAddress());
        static::$document->getDocumentBuyerAddress($newAddressLine1, $newAddressLine2, $newAddressLine3, $newPostcode, $newCity, $newCountryId, $newSubDivision);
        $this->assertSame('Via Milano 2', $newAddressLine1);
        $this->assertSame('20100', $newPostcode);
        $this->assertSame('Milano', $newCity);
        $this->assertSame('IT', $newCountryId);
        $this->assertSame('MI', $newSubDivision);
        $this->assertFalse(static::$document->nextDocumentBuyerAddress());

        $this->assertTrue(static::$document->firstDocumentBuyerCommunication());
        static::$document->getDocumentBuyerCommunication($newType, $newUri);
        $this->assertSame('CODICE_DESTINATARIO', $newType);
        $this->assertSame('ABC1234', $newUri);
        $this->assertFalse(static::$document->nextDocumentBuyerCommunication());
    }

    public function testDocumentSellerTaxRepresentative(): void
    {
        static::$document->getDocumentSellerTaxRepresentativeName($newName);

        $this->assertSame('Tax Representative S.r.l.', $newName);
        $this->assertTrue(static::$document->firstDocumentSellerTaxRepresentativeTaxRegistration());

        static::$document->getDocumentSellerTaxRepresentativeTaxRegistration($newTaxRegistrationType, $newTaxRegistrationId);

        $this->assertSame('VA', $newTaxRegistrationType);
        $this->assertSame('11111111111', $newTaxRegistrationId);
        $this->assertFalse(static::$document->nextDocumentSellerTaxRepresentativeTaxRegistration());
    }

    public function testFirstNextGetDocumentPaymentMean(): void
    {
        $this->assertTrue(static::$document->firstDocumentPaymentMean());

        static::$document->getDocumentPaymentMean(
            $newTypeCode,
            $newName,
            $newFinancialCardId,
            $newFinancialCardHolder,
            $newBuyerIban,
            $newPayeeIban,
            $newPayeeAccountName,
            $newPayeeProprietaryId,
            $newPayeeBic,
            $newPaymentReference,
            $newMandate
        );

        $this->assertSame('MP05', $newTypeCode);
        $this->assertSame('Example Bank', $newName);
        $this->assertSame('', $newFinancialCardId);
        $this->assertSame('Example Seller S.r.l.', $newFinancialCardHolder);
        $this->assertSame('', $newBuyerIban);
        $this->assertSame('IT60X0542811101000000123456', $newPayeeIban);
        $this->assertSame('Example Seller S.r.l.', $newPayeeAccountName);
        $this->assertSame('', $newPayeeProprietaryId);
        $this->assertSame('BCITITMM', $newPayeeBic);
        $this->assertSame('PAYMENT-REF-1', $newPaymentReference);
        $this->assertSame('', $newMandate);
        $this->assertFalse(static::$document->nextDocumentPaymentMean());
    }

    public function testFirstNextGetDocumentPaymentReference(): void
    {
        $this->assertTrue(static::$document->firstDocumentPaymentReference());

        static::$document->getDocumentPaymentReference($newId);

        $this->assertSame('PAYMENT-REF-1', $newId);
        $this->assertFalse(static::$document->nextDocumentPaymentReference());
    }

    public function testFirstNextGetDocumentPaymentTerm(): void
    {
        $this->assertTrue(static::$document->firstDocumentPaymentTerm());

        static::$document->getDocumentPaymentTerm($newDescription, $newDueDate, $newMandate);

        $this->assertSame('TP01', $newDescription);
        $this->assertSame('20260817', $newDueDate?->format('Ymd'));
        $this->assertSame('', $newMandate);

        $this->assertTrue(static::$document->firstDocumentPaymentDiscountTermsInLastPaymentTerm());
        static::$document->getDocumentPaymentDiscountTermsInLastPaymentTerm($newBaseAmount, $newDiscountAmount, $newDiscountPercent, $newBaseDate, $newBasePeriod, $newBasePeriodUnit);
        $this->assertEqualsWithDelta(0.0, $newBaseAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(2.5, $newDiscountAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(0.0, $newDiscountPercent, PHP_FLOAT_EPSILON);
        $this->assertSame('20260801', $newBaseDate?->format('Ymd'));
        $this->assertEqualsWithDelta(0.0, $newBasePeriod, PHP_FLOAT_EPSILON);
        $this->assertSame('', $newBasePeriodUnit);
        $this->assertFalse(static::$document->nextDocumentPaymentDiscountTermsInLastPaymentTerm());

        $this->assertTrue(static::$document->firstDocumentPaymentPenaltyTermsInLastPaymentTerm());
        static::$document->getDocumentPaymentPenaltyTermsInLastPaymentTerm($newBaseAmount, $newPenaltyAmount, $newPenaltyPercent, $newBaseDate, $newBasePeriod, $newBasePeriodUnit);
        $this->assertEqualsWithDelta(5.0, $newPenaltyAmount, PHP_FLOAT_EPSILON);
        $this->assertSame('20260818', $newBaseDate?->format('Ymd'));
        $this->assertFalse(static::$document->nextDocumentPaymentPenaltyTermsInLastPaymentTerm());
        $this->assertFalse(static::$document->nextDocumentPaymentTerm());
    }

    public function testFirstNextGetDocumentTax(): void
    {
        $this->assertTrue(static::$document->firstDocumentTax());

        static::$document->getDocumentTax(
            $newTaxCategory,
            $newTaxType,
            $newBasisAmount,
            $newTaxAmount,
            $newTaxPercent,
            $newExemptionReason,
            $newExemptionReasonCode,
            $newTaxDueDate,
            $newTaxDueCode
        );

        $this->assertSame('VAT', $newTaxCategory);
        $this->assertSame('I', $newTaxType);
        $this->assertEqualsWithDelta(200.12, $newBasisAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(44.03, $newTaxAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(22.0, $newTaxPercent, PHP_FLOAT_EPSILON);
        $this->assertSame('', $newExemptionReason);
        $this->assertSame('', $newExemptionReasonCode);
        $this->assertNull($newTaxDueDate);
        $this->assertSame('', $newTaxDueCode);
        $this->assertFalse(static::$document->nextDocumentTax());
    }

    public function testGetDocumentSummation(): void
    {
        static::$document->getDocumentSummation(
            $newNetAmount,
            $newChargeTotalAmount,
            $newDiscountTotalAmount,
            $newTaxBasisAmount,
            $newTaxTotalAmount,
            $newTaxTotalAmount2,
            $newGrossAmount,
            $newDueAmount,
            $newPrepaidAmount,
            $newRoungingAmount
        );

        $this->assertEqualsWithDelta(200.12, $newNetAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(0.0, $newChargeTotalAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(0.0, $newDiscountTotalAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(200.12, $newTaxBasisAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(44.03, $newTaxTotalAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(0.0, $newTaxTotalAmount2, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(244.15, $newGrossAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(244.15, $newDueAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(0.0, $newPrepaidAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(0.0, $newRoungingAmount, PHP_FLOAT_EPSILON);
    }

    public function testFirstNextGetDocumentPosition(): void
    {
        $this->assertTrue(static::$document->firstDocumentPosition());

        static::$document->getDocumentPosition($newPositionId, $newParentPositionId, $newLineStatusCode, $newLineStatusReasonCode);

        $this->assertSame('1', $newPositionId);
        $this->assertSame('', $newParentPositionId);
        $this->assertSame('', $newLineStatusCode);
        $this->assertSame('', $newLineStatusReasonCode);

        static::$document->getDocumentPositionProductDetails(
            $newProductId,
            $newProductName,
            $newProductDescription,
            $newProductSellerId,
            $newProductBuyerId,
            $newProductGlobalId,
            $newProductGlobalIdType,
            $newProductIndustryId,
            $newProductModelId,
            $newProductBatchId,
            $newProductBrandName,
            $newProductModelName,
            $newProductOriginTradeCountry
        );

        $this->assertSame('PRODUCT-1', $newProductId);
        $this->assertSame('Consulting service', $newProductName);
        $this->assertSame('INTERNAL', $newProductIndustryId);

        $this->assertTrue(static::$document->firstDocumentPositionNetPrice());
        static::$document->getDocumentPositionNetPrice($newNetPrice, $newNetPriceBasisQuantity, $newNetPriceBasisQuantityUnit);
        $this->assertEqualsWithDelta(100.123456, $newNetPrice, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(1.0, $newNetPriceBasisQuantity, PHP_FLOAT_EPSILON);
        $this->assertSame('H87', $newNetPriceBasisQuantityUnit);

        static::$document->getDocumentPositionQuantities($newQuantity, $newQuantityUnit, $newChargeFreeQuantity, $newChargeFreeQuantityUnit, $newPackageQuantity, $newPackageQuantityUnit, $newPerPackageUnitQuantity, $newPerPackageUnitQuantityUnit);
        $this->assertEqualsWithDelta(1.0, $newQuantity, PHP_FLOAT_EPSILON);
        $this->assertSame('H87', $newQuantityUnit);

        $this->assertTrue(static::$document->firstDocumentPositionBillingPeriod());
        static::$document->getDocumentPositionBillingPeriod($newStartDate, $newEndDate, $newDescription);
        $this->assertSame('20260701', $newStartDate?->format('Ymd'));
        $this->assertSame('20260715', $newEndDate?->format('Ymd'));

        $this->assertTrue(static::$document->firstDocumentPositionTax());
        static::$document->getDocumentPositionTax($newTaxCategory, $newTaxType, $newTaxAmount, $newTaxPercent, $newExemptionReason, $newExemptionReasonCode);
        $this->assertSame('VAT', $newTaxCategory);
        $this->assertEqualsWithDelta(22.03, $newTaxAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(22.0, $newTaxPercent, PHP_FLOAT_EPSILON);

        $this->assertTrue(static::$document->firstDocumentPositionAllowanceCharge());
        static::$document->getDocumentPositionAllowanceCharge($newChargeIndicator, $newAllowanceChargeAmount, $newAllowanceChargeBaseAmount, $newAllowanceChargeReason, $newAllowanceChargeReasonCode, $newAllowanceChargePercent);
        $this->assertFalse($newChargeIndicator);
        $this->assertEqualsWithDelta(1.123456, $newAllowanceChargeAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(1.5, $newAllowanceChargePercent, PHP_FLOAT_EPSILON);

        $this->assertTrue(static::$document->firstDocumentPositionSummation());
        static::$document->getDocumentPositionSummation($newNetAmount, $newChargeTotalAmount, $newDiscountTotalAmount, $newTaxTotalAmount, $newGrossAmount);
        $this->assertEqualsWithDelta(100.123456, $newNetAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(1.123456, $newDiscountTotalAmount, PHP_FLOAT_EPSILON);
        $this->assertEqualsWithDelta(22.03, $newTaxTotalAmount, PHP_FLOAT_EPSILON);

        $this->assertTrue(static::$document->nextDocumentPosition());

        static::$document->getDocumentPosition($newPositionId, $newParentPositionId, $newLineStatusCode, $newLineStatusReasonCode);
        $this->assertSame('2', $newPositionId);

        static::$document->getDocumentPositionProductDetails(
            $newProductId,
            $newProductName,
            $newProductDescription,
            $newProductSellerId,
            $newProductBuyerId,
            $newProductGlobalId,
            $newProductGlobalIdType,
            $newProductIndustryId,
            $newProductModelId,
            $newProductBatchId,
            $newProductBrandName,
            $newProductModelName,
            $newProductOriginTradeCountry
        );
        $this->assertSame('PRODUCT-2', $newProductId);
        $this->assertSame('PRODUCT-2', $newProductName);
        $this->assertSame('INTERNO', $newProductIndustryId);
        $this->assertFalse(static::$document->nextDocumentPosition());
    }

    public function testConvertToDTO(): void
    {
        static::$document->convertToDTO($newDocumentDTO);

        $this->assertInstanceOf(InvoiceSuiteDocumentHeaderDTO::class, $newDocumentDTO);
        $this->assertSame('2026-07-000001', $newDocumentDTO?->getNumber());
        $this->assertSame('Example Seller S.r.l.', $newDocumentDTO?->getSellerParty()?->getNames()[0]);
        $this->assertSame('Example Buyer S.p.A.', $newDocumentDTO?->getBuyerParty()?->getNames()[0]);
        $this->assertSame('ABC1234', $newDocumentDTO?->getBuyerParty()?->getCommunications()[0]->getId());
        $this->assertSame('MP05', $newDocumentDTO?->getPaymentMeans()[0]->getTypeCode());
        $this->assertSame(2.5, $newDocumentDTO?->getPaymentTerms()[0]->getDiscountTerms()[0]->getDiscountAmount());
        $this->assertSame(5.0, $newDocumentDTO?->getPaymentTerms()[0]->getPenaltyTerms()[0]->getPenaltyAmount());
        $this->assertCount(2, $newDocumentDTO?->getPositions());
        $this->assertSame(100.123456, $newDocumentDTO?->getPositions()[0]->getNetPrice()?->getAmount());
    }
}
