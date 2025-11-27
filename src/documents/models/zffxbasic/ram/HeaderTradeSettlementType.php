<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasic\qdt\CurrencyCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\TextType;

class HeaderTradeSettlementType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("CreditorReferenceID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCreditorReferenceID", setter="setCreditorReferenceID")
     */
    private $creditorReferenceID;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentReference")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPaymentReference", setter="setPaymentReference")
     */
    private $paymentReference;

    /**
     * @var CurrencyCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\qdt\CurrencyCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TaxCurrencyCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTaxCurrencyCode", setter="setTaxCurrencyCode")
     */
    private $taxCurrencyCode;

    /**
     * @var CurrencyCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\qdt\CurrencyCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("InvoiceCurrencyCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getInvoiceCurrencyCode", setter="setInvoiceCurrencyCode")
     */
    private $invoiceCurrencyCode;

    /**
     * @var TradePartyType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeeTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeeTradeParty", setter="setPayeeTradeParty")
     */
    private $payeeTradeParty;

    /**
     * @var array<TradeSettlementPaymentMeansType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradeSettlementPaymentMeansType>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradeSettlementPaymentMeans")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecifiedTradeSettlementPaymentMeans", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getSpecifiedTradeSettlementPaymentMeans", setter="setSpecifiedTradeSettlementPaymentMeans")
     */
    private $specifiedTradeSettlementPaymentMeans;

    /**
     * @var array<TradeTaxType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradeTaxType>")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTradeTax")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="ApplicableTradeTax", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getApplicableTradeTax", setter="setApplicableTradeTax")
     */
    private $applicableTradeTax;

    /**
     * @var SpecifiedPeriodType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\SpecifiedPeriodType")
     * @JMS\Expose
     * @JMS\SerializedName("BillingSpecifiedPeriod")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBillingSpecifiedPeriod", setter="setBillingSpecifiedPeriod")
     */
    private $billingSpecifiedPeriod;

    /**
     * @var array<TradeAllowanceChargeType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradeAllowanceChargeType>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradeAllowanceCharge")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecifiedTradeAllowanceCharge", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getSpecifiedTradeAllowanceCharge", setter="setSpecifiedTradeAllowanceCharge")
     */
    private $specifiedTradeAllowanceCharge;

    /**
     * @var TradePaymentTermsType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradePaymentTermsType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradePaymentTerms")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedTradePaymentTerms", setter="setSpecifiedTradePaymentTerms")
     */
    private $specifiedTradePaymentTerms;

    /**
     * @var TradeSettlementHeaderMonetarySummationType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradeSettlementHeaderMonetarySummationType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradeSettlementHeaderMonetarySummation")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedTradeSettlementHeaderMonetarySummation", setter="setSpecifiedTradeSettlementHeaderMonetarySummation")
     */
    private $specifiedTradeSettlementHeaderMonetarySummation;

    /**
     * @var array<ReferencedDocumentType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxbasic\ram\ReferencedDocumentType>")
     * @JMS\Expose
     * @JMS\SerializedName("InvoiceReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="InvoiceReferencedDocument", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getInvoiceReferencedDocument", setter="setInvoiceReferencedDocument")
     */
    private $invoiceReferencedDocument;

    /**
     * @var TradeAccountingAccountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradeAccountingAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("ReceivableSpecifiedTradeAccountingAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getReceivableSpecifiedTradeAccountingAccount", setter="setReceivableSpecifiedTradeAccountingAccount")
     */
    private $receivableSpecifiedTradeAccountingAccount;

    /**
     * @return IDType|null
     */
    public function getCreditorReferenceID(): ?IDType
    {
        return $this->creditorReferenceID;
    }

    /**
     * @return IDType
     */
    public function getCreditorReferenceIDWithCreate(): IDType
    {
        $this->creditorReferenceID = is_null($this->creditorReferenceID) ? new IDType() : $this->creditorReferenceID;

        return $this->creditorReferenceID;
    }

    /**
     * @param IDType|null $creditorReferenceID
     * @return static
     */
    public function setCreditorReferenceID(?IDType $creditorReferenceID = null): static
    {
        $this->creditorReferenceID = $creditorReferenceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCreditorReferenceID(): static
    {
        $this->creditorReferenceID = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getPaymentReference(): ?TextType
    {
        return $this->paymentReference;
    }

    /**
     * @return TextType
     */
    public function getPaymentReferenceWithCreate(): TextType
    {
        $this->paymentReference = is_null($this->paymentReference) ? new TextType() : $this->paymentReference;

        return $this->paymentReference;
    }

    /**
     * @param TextType|null $paymentReference
     * @return static
     */
    public function setPaymentReference(?TextType $paymentReference = null): static
    {
        $this->paymentReference = $paymentReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPaymentReference(): static
    {
        $this->paymentReference = null;

        return $this;
    }

    /**
     * @return CurrencyCodeType|null
     */
    public function getTaxCurrencyCode(): ?CurrencyCodeType
    {
        return $this->taxCurrencyCode;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getTaxCurrencyCodeWithCreate(): CurrencyCodeType
    {
        $this->taxCurrencyCode = is_null($this->taxCurrencyCode) ? new CurrencyCodeType() : $this->taxCurrencyCode;

        return $this->taxCurrencyCode;
    }

    /**
     * @param CurrencyCodeType|null $taxCurrencyCode
     * @return static
     */
    public function setTaxCurrencyCode(?CurrencyCodeType $taxCurrencyCode = null): static
    {
        $this->taxCurrencyCode = $taxCurrencyCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxCurrencyCode(): static
    {
        $this->taxCurrencyCode = null;

        return $this;
    }

    /**
     * @return CurrencyCodeType|null
     */
    public function getInvoiceCurrencyCode(): ?CurrencyCodeType
    {
        return $this->invoiceCurrencyCode;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getInvoiceCurrencyCodeWithCreate(): CurrencyCodeType
    {
        $this->invoiceCurrencyCode = is_null($this->invoiceCurrencyCode) ? new CurrencyCodeType() : $this->invoiceCurrencyCode;

        return $this->invoiceCurrencyCode;
    }

    /**
     * @param CurrencyCodeType|null $invoiceCurrencyCode
     * @return static
     */
    public function setInvoiceCurrencyCode(?CurrencyCodeType $invoiceCurrencyCode = null): static
    {
        $this->invoiceCurrencyCode = $invoiceCurrencyCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInvoiceCurrencyCode(): static
    {
        $this->invoiceCurrencyCode = null;

        return $this;
    }

    /**
     * @return TradePartyType|null
     */
    public function getPayeeTradeParty(): ?TradePartyType
    {
        return $this->payeeTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getPayeeTradePartyWithCreate(): TradePartyType
    {
        $this->payeeTradeParty = is_null($this->payeeTradeParty) ? new TradePartyType() : $this->payeeTradeParty;

        return $this->payeeTradeParty;
    }

    /**
     * @param TradePartyType|null $payeeTradeParty
     * @return static
     */
    public function setPayeeTradeParty(?TradePartyType $payeeTradeParty = null): static
    {
        $this->payeeTradeParty = $payeeTradeParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayeeTradeParty(): static
    {
        $this->payeeTradeParty = null;

        return $this;
    }

    /**
     * @return array<TradeSettlementPaymentMeansType>|null
     */
    public function getSpecifiedTradeSettlementPaymentMeans(): ?array
    {
        return $this->specifiedTradeSettlementPaymentMeans;
    }

    /**
     * @param array<TradeSettlementPaymentMeansType>|null $specifiedTradeSettlementPaymentMeans
     * @return static
     */
    public function setSpecifiedTradeSettlementPaymentMeans(?array $specifiedTradeSettlementPaymentMeans = null): static
    {
        $this->specifiedTradeSettlementPaymentMeans = $specifiedTradeSettlementPaymentMeans;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedTradeSettlementPaymentMeans(): static
    {
        $this->specifiedTradeSettlementPaymentMeans = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSpecifiedTradeSettlementPaymentMeans(): static
    {
        $this->specifiedTradeSettlementPaymentMeans = [];

        return $this;
    }

    /**
     * @param TradeSettlementPaymentMeansType $specifiedTradeSettlementPaymentMeans
     * @return static
     */
    public function addToSpecifiedTradeSettlementPaymentMeans(
        TradeSettlementPaymentMeansType $specifiedTradeSettlementPaymentMeans,
    ): static {
        $this->specifiedTradeSettlementPaymentMeans[] = $specifiedTradeSettlementPaymentMeans;

        return $this;
    }

    /**
     * @return TradeSettlementPaymentMeansType
     */
    public function addToSpecifiedTradeSettlementPaymentMeansWithCreate(): TradeSettlementPaymentMeansType
    {
        $this->addTospecifiedTradeSettlementPaymentMeans($specifiedTradeSettlementPaymentMeans = new TradeSettlementPaymentMeansType());

        return $specifiedTradeSettlementPaymentMeans;
    }

    /**
     * @param TradeSettlementPaymentMeansType $specifiedTradeSettlementPaymentMeans
     * @return static
     */
    public function addOnceToSpecifiedTradeSettlementPaymentMeans(
        TradeSettlementPaymentMeansType $specifiedTradeSettlementPaymentMeans,
    ): static {
        if (!is_array($this->specifiedTradeSettlementPaymentMeans)) {
            $this->specifiedTradeSettlementPaymentMeans = [];
        }

        $this->specifiedTradeSettlementPaymentMeans[0] = $specifiedTradeSettlementPaymentMeans;

        return $this;
    }

    /**
     * @return TradeSettlementPaymentMeansType
     */
    public function addOnceToSpecifiedTradeSettlementPaymentMeansWithCreate(): TradeSettlementPaymentMeansType
    {
        if (!is_array($this->specifiedTradeSettlementPaymentMeans)) {
            $this->specifiedTradeSettlementPaymentMeans = [];
        }

        if ($this->specifiedTradeSettlementPaymentMeans === []) {
            $this->addOnceTospecifiedTradeSettlementPaymentMeans(new TradeSettlementPaymentMeansType());
        }

        return $this->specifiedTradeSettlementPaymentMeans[0];
    }

    /**
     * @return array<TradeTaxType>|null
     */
    public function getApplicableTradeTax(): ?array
    {
        return $this->applicableTradeTax;
    }

    /**
     * @param array<TradeTaxType>|null $applicableTradeTax
     * @return static
     */
    public function setApplicableTradeTax(?array $applicableTradeTax = null): static
    {
        $this->applicableTradeTax = $applicableTradeTax;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableTradeTax(): static
    {
        $this->applicableTradeTax = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearApplicableTradeTax(): static
    {
        $this->applicableTradeTax = [];

        return $this;
    }

    /**
     * @param TradeTaxType $applicableTradeTax
     * @return static
     */
    public function addToApplicableTradeTax(TradeTaxType $applicableTradeTax): static
    {
        $this->applicableTradeTax[] = $applicableTradeTax;

        return $this;
    }

    /**
     * @return TradeTaxType
     */
    public function addToApplicableTradeTaxWithCreate(): TradeTaxType
    {
        $this->addToapplicableTradeTax($applicableTradeTax = new TradeTaxType());

        return $applicableTradeTax;
    }

    /**
     * @param TradeTaxType $applicableTradeTax
     * @return static
     */
    public function addOnceToApplicableTradeTax(TradeTaxType $applicableTradeTax): static
    {
        if (!is_array($this->applicableTradeTax)) {
            $this->applicableTradeTax = [];
        }

        $this->applicableTradeTax[0] = $applicableTradeTax;

        return $this;
    }

    /**
     * @return TradeTaxType
     */
    public function addOnceToApplicableTradeTaxWithCreate(): TradeTaxType
    {
        if (!is_array($this->applicableTradeTax)) {
            $this->applicableTradeTax = [];
        }

        if ($this->applicableTradeTax === []) {
            $this->addOnceToapplicableTradeTax(new TradeTaxType());
        }

        return $this->applicableTradeTax[0];
    }

    /**
     * @return SpecifiedPeriodType|null
     */
    public function getBillingSpecifiedPeriod(): ?SpecifiedPeriodType
    {
        return $this->billingSpecifiedPeriod;
    }

    /**
     * @return SpecifiedPeriodType
     */
    public function getBillingSpecifiedPeriodWithCreate(): SpecifiedPeriodType
    {
        $this->billingSpecifiedPeriod = is_null($this->billingSpecifiedPeriod) ? new SpecifiedPeriodType() : $this->billingSpecifiedPeriod;

        return $this->billingSpecifiedPeriod;
    }

    /**
     * @param SpecifiedPeriodType|null $billingSpecifiedPeriod
     * @return static
     */
    public function setBillingSpecifiedPeriod(?SpecifiedPeriodType $billingSpecifiedPeriod = null): static
    {
        $this->billingSpecifiedPeriod = $billingSpecifiedPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBillingSpecifiedPeriod(): static
    {
        $this->billingSpecifiedPeriod = null;

        return $this;
    }

    /**
     * @return array<TradeAllowanceChargeType>|null
     */
    public function getSpecifiedTradeAllowanceCharge(): ?array
    {
        return $this->specifiedTradeAllowanceCharge;
    }

    /**
     * @param array<TradeAllowanceChargeType>|null $specifiedTradeAllowanceCharge
     * @return static
     */
    public function setSpecifiedTradeAllowanceCharge(?array $specifiedTradeAllowanceCharge = null): static
    {
        $this->specifiedTradeAllowanceCharge = $specifiedTradeAllowanceCharge;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedTradeAllowanceCharge(): static
    {
        $this->specifiedTradeAllowanceCharge = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSpecifiedTradeAllowanceCharge(): static
    {
        $this->specifiedTradeAllowanceCharge = [];

        return $this;
    }

    /**
     * @param TradeAllowanceChargeType $specifiedTradeAllowanceCharge
     * @return static
     */
    public function addToSpecifiedTradeAllowanceCharge(TradeAllowanceChargeType $specifiedTradeAllowanceCharge): static
    {
        $this->specifiedTradeAllowanceCharge[] = $specifiedTradeAllowanceCharge;

        return $this;
    }

    /**
     * @return TradeAllowanceChargeType
     */
    public function addToSpecifiedTradeAllowanceChargeWithCreate(): TradeAllowanceChargeType
    {
        $this->addTospecifiedTradeAllowanceCharge($specifiedTradeAllowanceCharge = new TradeAllowanceChargeType());

        return $specifiedTradeAllowanceCharge;
    }

    /**
     * @param TradeAllowanceChargeType $specifiedTradeAllowanceCharge
     * @return static
     */
    public function addOnceToSpecifiedTradeAllowanceCharge(
        TradeAllowanceChargeType $specifiedTradeAllowanceCharge,
    ): static {
        if (!is_array($this->specifiedTradeAllowanceCharge)) {
            $this->specifiedTradeAllowanceCharge = [];
        }

        $this->specifiedTradeAllowanceCharge[0] = $specifiedTradeAllowanceCharge;

        return $this;
    }

    /**
     * @return TradeAllowanceChargeType
     */
    public function addOnceToSpecifiedTradeAllowanceChargeWithCreate(): TradeAllowanceChargeType
    {
        if (!is_array($this->specifiedTradeAllowanceCharge)) {
            $this->specifiedTradeAllowanceCharge = [];
        }

        if ($this->specifiedTradeAllowanceCharge === []) {
            $this->addOnceTospecifiedTradeAllowanceCharge(new TradeAllowanceChargeType());
        }

        return $this->specifiedTradeAllowanceCharge[0];
    }

    /**
     * @return TradePaymentTermsType|null
     */
    public function getSpecifiedTradePaymentTerms(): ?TradePaymentTermsType
    {
        return $this->specifiedTradePaymentTerms;
    }

    /**
     * @return TradePaymentTermsType
     */
    public function getSpecifiedTradePaymentTermsWithCreate(): TradePaymentTermsType
    {
        $this->specifiedTradePaymentTerms = is_null($this->specifiedTradePaymentTerms) ? new TradePaymentTermsType() : $this->specifiedTradePaymentTerms;

        return $this->specifiedTradePaymentTerms;
    }

    /**
     * @param TradePaymentTermsType|null $specifiedTradePaymentTerms
     * @return static
     */
    public function setSpecifiedTradePaymentTerms(?TradePaymentTermsType $specifiedTradePaymentTerms = null): static
    {
        $this->specifiedTradePaymentTerms = $specifiedTradePaymentTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedTradePaymentTerms(): static
    {
        $this->specifiedTradePaymentTerms = null;

        return $this;
    }

    /**
     * @return TradeSettlementHeaderMonetarySummationType|null
     */
    public function getSpecifiedTradeSettlementHeaderMonetarySummation(): ?TradeSettlementHeaderMonetarySummationType
    {
        return $this->specifiedTradeSettlementHeaderMonetarySummation;
    }

    /**
     * @return TradeSettlementHeaderMonetarySummationType
     */
    public function getSpecifiedTradeSettlementHeaderMonetarySummationWithCreate(): TradeSettlementHeaderMonetarySummationType
    {
        $this->specifiedTradeSettlementHeaderMonetarySummation = is_null($this->specifiedTradeSettlementHeaderMonetarySummation) ? new TradeSettlementHeaderMonetarySummationType() : $this->specifiedTradeSettlementHeaderMonetarySummation;

        return $this->specifiedTradeSettlementHeaderMonetarySummation;
    }

    /**
     * @param TradeSettlementHeaderMonetarySummationType|null $specifiedTradeSettlementHeaderMonetarySummation
     * @return static
     */
    public function setSpecifiedTradeSettlementHeaderMonetarySummation(
        ?TradeSettlementHeaderMonetarySummationType $specifiedTradeSettlementHeaderMonetarySummation = null,
    ): static {
        $this->specifiedTradeSettlementHeaderMonetarySummation = $specifiedTradeSettlementHeaderMonetarySummation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedTradeSettlementHeaderMonetarySummation(): static
    {
        $this->specifiedTradeSettlementHeaderMonetarySummation = null;

        return $this;
    }

    /**
     * @return array<ReferencedDocumentType>|null
     */
    public function getInvoiceReferencedDocument(): ?array
    {
        return $this->invoiceReferencedDocument;
    }

    /**
     * @param array<ReferencedDocumentType>|null $invoiceReferencedDocument
     * @return static
     */
    public function setInvoiceReferencedDocument(?array $invoiceReferencedDocument = null): static
    {
        $this->invoiceReferencedDocument = $invoiceReferencedDocument;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInvoiceReferencedDocument(): static
    {
        $this->invoiceReferencedDocument = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearInvoiceReferencedDocument(): static
    {
        $this->invoiceReferencedDocument = [];

        return $this;
    }

    /**
     * @param ReferencedDocumentType $invoiceReferencedDocument
     * @return static
     */
    public function addToInvoiceReferencedDocument(ReferencedDocumentType $invoiceReferencedDocument): static
    {
        $this->invoiceReferencedDocument[] = $invoiceReferencedDocument;

        return $this;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function addToInvoiceReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->addToinvoiceReferencedDocument($invoiceReferencedDocument = new ReferencedDocumentType());

        return $invoiceReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType $invoiceReferencedDocument
     * @return static
     */
    public function addOnceToInvoiceReferencedDocument(ReferencedDocumentType $invoiceReferencedDocument): static
    {
        if (!is_array($this->invoiceReferencedDocument)) {
            $this->invoiceReferencedDocument = [];
        }

        $this->invoiceReferencedDocument[0] = $invoiceReferencedDocument;

        return $this;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function addOnceToInvoiceReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        if (!is_array($this->invoiceReferencedDocument)) {
            $this->invoiceReferencedDocument = [];
        }

        if ($this->invoiceReferencedDocument === []) {
            $this->addOnceToinvoiceReferencedDocument(new ReferencedDocumentType());
        }

        return $this->invoiceReferencedDocument[0];
    }

    /**
     * @return TradeAccountingAccountType|null
     */
    public function getReceivableSpecifiedTradeAccountingAccount(): ?TradeAccountingAccountType
    {
        return $this->receivableSpecifiedTradeAccountingAccount;
    }

    /**
     * @return TradeAccountingAccountType
     */
    public function getReceivableSpecifiedTradeAccountingAccountWithCreate(): TradeAccountingAccountType
    {
        $this->receivableSpecifiedTradeAccountingAccount = is_null($this->receivableSpecifiedTradeAccountingAccount) ? new TradeAccountingAccountType() : $this->receivableSpecifiedTradeAccountingAccount;

        return $this->receivableSpecifiedTradeAccountingAccount;
    }

    /**
     * @param TradeAccountingAccountType|null $receivableSpecifiedTradeAccountingAccount
     * @return static
     */
    public function setReceivableSpecifiedTradeAccountingAccount(
        ?TradeAccountingAccountType $receivableSpecifiedTradeAccountingAccount = null,
    ): static {
        $this->receivableSpecifiedTradeAccountingAccount = $receivableSpecifiedTradeAccountingAccount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReceivableSpecifiedTradeAccountingAccount(): static
    {
        $this->receivableSpecifiedTradeAccountingAccount = null;

        return $this;
    }
}
