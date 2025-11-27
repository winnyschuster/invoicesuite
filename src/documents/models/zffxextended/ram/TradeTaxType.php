<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\TaxCategoryCodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\TaxTypeCodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\TimeReferenceCodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\DateType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\PercentType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class TradeTaxType
{
    use HandlesObjectFlags;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("CalculatedAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCalculatedAmount", setter="setCalculatedAmount")
     */
    private $calculatedAmount;

    /**
     * @var TaxTypeCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\TaxTypeCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("ExemptionReason")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getExemptionReason", setter="setExemptionReason")
     */
    private $exemptionReason;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("BasisAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBasisAmount", setter="setBasisAmount")
     */
    private $basisAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("LineTotalBasisAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineTotalBasisAmount", setter="setLineTotalBasisAmount")
     */
    private $lineTotalBasisAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceChargeBasisAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getAllowanceChargeBasisAmount", setter="setAllowanceChargeBasisAmount")
     */
    private $allowanceChargeBasisAmount;

    /**
     * @var TaxCategoryCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\TaxCategoryCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("CategoryCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCategoryCode", setter="setCategoryCode")
     */
    private $categoryCode;

    /**
     * @var CodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ExemptionReasonCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getExemptionReasonCode", setter="setExemptionReasonCode")
     */
    private $exemptionReasonCode;

    /**
     * @var DateType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateType")
     * @JMS\Expose
     * @JMS\SerializedName("TaxPointDate")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTaxPointDate", setter="setTaxPointDate")
     */
    private $taxPointDate;

    /**
     * @var TimeReferenceCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\TimeReferenceCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("DueDateTypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDueDateTypeCode", setter="setDueDateTypeCode")
     */
    private $dueDateTypeCode;

    /**
     * @var PercentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\PercentType")
     * @JMS\Expose
     * @JMS\SerializedName("RateApplicablePercent")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getRateApplicablePercent", setter="setRateApplicablePercent")
     */
    private $rateApplicablePercent;

    /**
     * @return AmountType|null
     */
    public function getCalculatedAmount(): ?AmountType
    {
        return $this->calculatedAmount;
    }

    /**
     * @return AmountType
     */
    public function getCalculatedAmountWithCreate(): AmountType
    {
        $this->calculatedAmount = is_null($this->calculatedAmount) ? new AmountType() : $this->calculatedAmount;

        return $this->calculatedAmount;
    }

    /**
     * @param AmountType|null $calculatedAmount
     * @return static
     */
    public function setCalculatedAmount(?AmountType $calculatedAmount = null): static
    {
        $this->calculatedAmount = $calculatedAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCalculatedAmount(): static
    {
        $this->calculatedAmount = null;

        return $this;
    }

    /**
     * @return TaxTypeCodeType|null
     */
    public function getTypeCode(): ?TaxTypeCodeType
    {
        return $this->typeCode;
    }

    /**
     * @return TaxTypeCodeType
     */
    public function getTypeCodeWithCreate(): TaxTypeCodeType
    {
        $this->typeCode = is_null($this->typeCode) ? new TaxTypeCodeType() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param TaxTypeCodeType|null $typeCode
     * @return static
     */
    public function setTypeCode(?TaxTypeCodeType $typeCode = null): static
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTypeCode(): static
    {
        $this->typeCode = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getExemptionReason(): ?TextType
    {
        return $this->exemptionReason;
    }

    /**
     * @return TextType
     */
    public function getExemptionReasonWithCreate(): TextType
    {
        $this->exemptionReason = is_null($this->exemptionReason) ? new TextType() : $this->exemptionReason;

        return $this->exemptionReason;
    }

    /**
     * @param TextType|null $exemptionReason
     * @return static
     */
    public function setExemptionReason(?TextType $exemptionReason = null): static
    {
        $this->exemptionReason = $exemptionReason;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExemptionReason(): static
    {
        $this->exemptionReason = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getBasisAmount(): ?AmountType
    {
        return $this->basisAmount;
    }

    /**
     * @return AmountType
     */
    public function getBasisAmountWithCreate(): AmountType
    {
        $this->basisAmount = is_null($this->basisAmount) ? new AmountType() : $this->basisAmount;

        return $this->basisAmount;
    }

    /**
     * @param AmountType|null $basisAmount
     * @return static
     */
    public function setBasisAmount(?AmountType $basisAmount = null): static
    {
        $this->basisAmount = $basisAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBasisAmount(): static
    {
        $this->basisAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getLineTotalBasisAmount(): ?AmountType
    {
        return $this->lineTotalBasisAmount;
    }

    /**
     * @return AmountType
     */
    public function getLineTotalBasisAmountWithCreate(): AmountType
    {
        $this->lineTotalBasisAmount = is_null($this->lineTotalBasisAmount) ? new AmountType() : $this->lineTotalBasisAmount;

        return $this->lineTotalBasisAmount;
    }

    /**
     * @param AmountType|null $lineTotalBasisAmount
     * @return static
     */
    public function setLineTotalBasisAmount(?AmountType $lineTotalBasisAmount = null): static
    {
        $this->lineTotalBasisAmount = $lineTotalBasisAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineTotalBasisAmount(): static
    {
        $this->lineTotalBasisAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getAllowanceChargeBasisAmount(): ?AmountType
    {
        return $this->allowanceChargeBasisAmount;
    }

    /**
     * @return AmountType
     */
    public function getAllowanceChargeBasisAmountWithCreate(): AmountType
    {
        $this->allowanceChargeBasisAmount = is_null($this->allowanceChargeBasisAmount) ? new AmountType() : $this->allowanceChargeBasisAmount;

        return $this->allowanceChargeBasisAmount;
    }

    /**
     * @param AmountType|null $allowanceChargeBasisAmount
     * @return static
     */
    public function setAllowanceChargeBasisAmount(?AmountType $allowanceChargeBasisAmount = null): static
    {
        $this->allowanceChargeBasisAmount = $allowanceChargeBasisAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAllowanceChargeBasisAmount(): static
    {
        $this->allowanceChargeBasisAmount = null;

        return $this;
    }

    /**
     * @return TaxCategoryCodeType|null
     */
    public function getCategoryCode(): ?TaxCategoryCodeType
    {
        return $this->categoryCode;
    }

    /**
     * @return TaxCategoryCodeType
     */
    public function getCategoryCodeWithCreate(): TaxCategoryCodeType
    {
        $this->categoryCode = is_null($this->categoryCode) ? new TaxCategoryCodeType() : $this->categoryCode;

        return $this->categoryCode;
    }

    /**
     * @param TaxCategoryCodeType|null $categoryCode
     * @return static
     */
    public function setCategoryCode(?TaxCategoryCodeType $categoryCode = null): static
    {
        $this->categoryCode = $categoryCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCategoryCode(): static
    {
        $this->categoryCode = null;

        return $this;
    }

    /**
     * @return CodeType|null
     */
    public function getExemptionReasonCode(): ?CodeType
    {
        return $this->exemptionReasonCode;
    }

    /**
     * @return CodeType
     */
    public function getExemptionReasonCodeWithCreate(): CodeType
    {
        $this->exemptionReasonCode = is_null($this->exemptionReasonCode) ? new CodeType() : $this->exemptionReasonCode;

        return $this->exemptionReasonCode;
    }

    /**
     * @param CodeType|null $exemptionReasonCode
     * @return static
     */
    public function setExemptionReasonCode(?CodeType $exemptionReasonCode = null): static
    {
        $this->exemptionReasonCode = $exemptionReasonCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExemptionReasonCode(): static
    {
        $this->exemptionReasonCode = null;

        return $this;
    }

    /**
     * @return DateType|null
     */
    public function getTaxPointDate(): ?DateType
    {
        return $this->taxPointDate;
    }

    /**
     * @return DateType
     */
    public function getTaxPointDateWithCreate(): DateType
    {
        $this->taxPointDate = is_null($this->taxPointDate) ? new DateType() : $this->taxPointDate;

        return $this->taxPointDate;
    }

    /**
     * @param DateType|null $taxPointDate
     * @return static
     */
    public function setTaxPointDate(?DateType $taxPointDate = null): static
    {
        $this->taxPointDate = $taxPointDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxPointDate(): static
    {
        $this->taxPointDate = null;

        return $this;
    }

    /**
     * @return TimeReferenceCodeType|null
     */
    public function getDueDateTypeCode(): ?TimeReferenceCodeType
    {
        return $this->dueDateTypeCode;
    }

    /**
     * @return TimeReferenceCodeType
     */
    public function getDueDateTypeCodeWithCreate(): TimeReferenceCodeType
    {
        $this->dueDateTypeCode = is_null($this->dueDateTypeCode) ? new TimeReferenceCodeType() : $this->dueDateTypeCode;

        return $this->dueDateTypeCode;
    }

    /**
     * @param TimeReferenceCodeType|null $dueDateTypeCode
     * @return static
     */
    public function setDueDateTypeCode(?TimeReferenceCodeType $dueDateTypeCode = null): static
    {
        $this->dueDateTypeCode = $dueDateTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDueDateTypeCode(): static
    {
        $this->dueDateTypeCode = null;

        return $this;
    }

    /**
     * @return PercentType|null
     */
    public function getRateApplicablePercent(): ?PercentType
    {
        return $this->rateApplicablePercent;
    }

    /**
     * @return PercentType
     */
    public function getRateApplicablePercentWithCreate(): PercentType
    {
        $this->rateApplicablePercent = is_null($this->rateApplicablePercent) ? new PercentType() : $this->rateApplicablePercent;

        return $this->rateApplicablePercent;
    }

    /**
     * @param PercentType|null $rateApplicablePercent
     * @return static
     */
    public function setRateApplicablePercent(?PercentType $rateApplicablePercent = null): static
    {
        $this->rateApplicablePercent = $rateApplicablePercent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRateApplicablePercent(): static
    {
        $this->rateApplicablePercent = null;

        return $this;
    }
}
