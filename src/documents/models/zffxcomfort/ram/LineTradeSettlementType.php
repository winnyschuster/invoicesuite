<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class LineTradeSettlementType
{
    use HandlesObjectFlags;

    /**
     * @var TradeTaxType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\TradeTaxType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTradeTax")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableTradeTax", setter="setApplicableTradeTax")
     */
    private $applicableTradeTax;

    /**
     * @var SpecifiedPeriodType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\SpecifiedPeriodType")
     * @JMS\Expose
     * @JMS\SerializedName("BillingSpecifiedPeriod")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBillingSpecifiedPeriod", setter="setBillingSpecifiedPeriod")
     */
    private $billingSpecifiedPeriod;

    /**
     * @var array<TradeAllowanceChargeType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxcomfort\ram\TradeAllowanceChargeType>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradeAllowanceCharge")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecifiedTradeAllowanceCharge", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getSpecifiedTradeAllowanceCharge", setter="setSpecifiedTradeAllowanceCharge")
     */
    private $specifiedTradeAllowanceCharge;

    /**
     * @var TradeSettlementLineMonetarySummationType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\TradeSettlementLineMonetarySummationType")
     * @JMS\Expose
     * @JMS\SerializedName("SpecifiedTradeSettlementLineMonetarySummation")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSpecifiedTradeSettlementLineMonetarySummation", setter="setSpecifiedTradeSettlementLineMonetarySummation")
     */
    private $specifiedTradeSettlementLineMonetarySummation;

    /**
     * @var ReferencedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getAdditionalReferencedDocument", setter="setAdditionalReferencedDocument")
     */
    private $additionalReferencedDocument;

    /**
     * @var TradeAccountingAccountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\TradeAccountingAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("ReceivableSpecifiedTradeAccountingAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getReceivableSpecifiedTradeAccountingAccount", setter="setReceivableSpecifiedTradeAccountingAccount")
     */
    private $receivableSpecifiedTradeAccountingAccount;

    /**
     * @return TradeTaxType|null
     */
    public function getApplicableTradeTax(): ?TradeTaxType
    {
        return $this->applicableTradeTax;
    }

    /**
     * @return TradeTaxType
     */
    public function getApplicableTradeTaxWithCreate(): TradeTaxType
    {
        $this->applicableTradeTax = is_null($this->applicableTradeTax) ? new TradeTaxType() : $this->applicableTradeTax;

        return $this->applicableTradeTax;
    }

    /**
     * @param TradeTaxType|null $applicableTradeTax
     * @return static
     */
    public function setApplicableTradeTax(?TradeTaxType $applicableTradeTax = null): static
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
     * @return TradeSettlementLineMonetarySummationType|null
     */
    public function getSpecifiedTradeSettlementLineMonetarySummation(): ?TradeSettlementLineMonetarySummationType
    {
        return $this->specifiedTradeSettlementLineMonetarySummation;
    }

    /**
     * @return TradeSettlementLineMonetarySummationType
     */
    public function getSpecifiedTradeSettlementLineMonetarySummationWithCreate(): TradeSettlementLineMonetarySummationType
    {
        $this->specifiedTradeSettlementLineMonetarySummation = is_null($this->specifiedTradeSettlementLineMonetarySummation) ? new TradeSettlementLineMonetarySummationType() : $this->specifiedTradeSettlementLineMonetarySummation;

        return $this->specifiedTradeSettlementLineMonetarySummation;
    }

    /**
     * @param TradeSettlementLineMonetarySummationType|null $specifiedTradeSettlementLineMonetarySummation
     * @return static
     */
    public function setSpecifiedTradeSettlementLineMonetarySummation(
        ?TradeSettlementLineMonetarySummationType $specifiedTradeSettlementLineMonetarySummation = null,
    ): static {
        $this->specifiedTradeSettlementLineMonetarySummation = $specifiedTradeSettlementLineMonetarySummation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecifiedTradeSettlementLineMonetarySummation(): static
    {
        $this->specifiedTradeSettlementLineMonetarySummation = null;

        return $this;
    }

    /**
     * @return ReferencedDocumentType|null
     */
    public function getAdditionalReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->additionalReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getAdditionalReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->additionalReferencedDocument = is_null($this->additionalReferencedDocument) ? new ReferencedDocumentType() : $this->additionalReferencedDocument;

        return $this->additionalReferencedDocument;
    }

    /**
     * @param ReferencedDocumentType|null $additionalReferencedDocument
     * @return static
     */
    public function setAdditionalReferencedDocument(
        ?ReferencedDocumentType $additionalReferencedDocument = null,
    ): static {
        $this->additionalReferencedDocument = $additionalReferencedDocument;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAdditionalReferencedDocument(): static
    {
        $this->additionalReferencedDocument = null;

        return $this;
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
