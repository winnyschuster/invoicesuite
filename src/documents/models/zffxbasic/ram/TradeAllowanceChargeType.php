<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasic\qdt\AllowanceChargeReasonCodeType;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\AmountType;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\IndicatorType;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\PercentType;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\TextType;

class TradeAllowanceChargeType
{
    use HandlesObjectFlags;

    /**
     * @var IndicatorType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\IndicatorType")
     * @JMS\Expose
     * @JMS\SerializedName("ChargeIndicator")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getChargeIndicator", setter="setChargeIndicator")
     */
    private $chargeIndicator;

    /**
     * @var PercentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\PercentType")
     * @JMS\Expose
     * @JMS\SerializedName("CalculationPercent")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCalculationPercent", setter="setCalculationPercent")
     */
    private $calculationPercent;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("BasisAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBasisAmount", setter="setBasisAmount")
     */
    private $basisAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("ActualAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getActualAmount", setter="setActualAmount")
     */
    private $actualAmount;

    /**
     * @var AllowanceChargeReasonCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\qdt\AllowanceChargeReasonCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("ReasonCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getReasonCode", setter="setReasonCode")
     */
    private $reasonCode;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Reason")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getReason", setter="setReason")
     */
    private $reason;

    /**
     * @var TradeTaxType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradeTaxType")
     * @JMS\Expose
     * @JMS\SerializedName("CategoryTradeTax")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCategoryTradeTax", setter="setCategoryTradeTax")
     */
    private $categoryTradeTax;

    /**
     * @return IndicatorType|null
     */
    public function getChargeIndicator(): ?IndicatorType
    {
        return $this->chargeIndicator;
    }

    /**
     * @return IndicatorType
     */
    public function getChargeIndicatorWithCreate(): IndicatorType
    {
        $this->chargeIndicator = is_null($this->chargeIndicator) ? new IndicatorType() : $this->chargeIndicator;

        return $this->chargeIndicator;
    }

    /**
     * @param IndicatorType|null $chargeIndicator
     * @return static
     */
    public function setChargeIndicator(?IndicatorType $chargeIndicator = null): static
    {
        $this->chargeIndicator = $chargeIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetChargeIndicator(): static
    {
        $this->chargeIndicator = null;

        return $this;
    }

    /**
     * @return PercentType|null
     */
    public function getCalculationPercent(): ?PercentType
    {
        return $this->calculationPercent;
    }

    /**
     * @return PercentType
     */
    public function getCalculationPercentWithCreate(): PercentType
    {
        $this->calculationPercent = is_null($this->calculationPercent) ? new PercentType() : $this->calculationPercent;

        return $this->calculationPercent;
    }

    /**
     * @param PercentType|null $calculationPercent
     * @return static
     */
    public function setCalculationPercent(?PercentType $calculationPercent = null): static
    {
        $this->calculationPercent = $calculationPercent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCalculationPercent(): static
    {
        $this->calculationPercent = null;

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
    public function getActualAmount(): ?AmountType
    {
        return $this->actualAmount;
    }

    /**
     * @return AmountType
     */
    public function getActualAmountWithCreate(): AmountType
    {
        $this->actualAmount = is_null($this->actualAmount) ? new AmountType() : $this->actualAmount;

        return $this->actualAmount;
    }

    /**
     * @param AmountType|null $actualAmount
     * @return static
     */
    public function setActualAmount(?AmountType $actualAmount = null): static
    {
        $this->actualAmount = $actualAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetActualAmount(): static
    {
        $this->actualAmount = null;

        return $this;
    }

    /**
     * @return AllowanceChargeReasonCodeType|null
     */
    public function getReasonCode(): ?AllowanceChargeReasonCodeType
    {
        return $this->reasonCode;
    }

    /**
     * @return AllowanceChargeReasonCodeType
     */
    public function getReasonCodeWithCreate(): AllowanceChargeReasonCodeType
    {
        $this->reasonCode = is_null($this->reasonCode) ? new AllowanceChargeReasonCodeType() : $this->reasonCode;

        return $this->reasonCode;
    }

    /**
     * @param AllowanceChargeReasonCodeType|null $reasonCode
     * @return static
     */
    public function setReasonCode(?AllowanceChargeReasonCodeType $reasonCode = null): static
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReasonCode(): static
    {
        $this->reasonCode = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getReason(): ?TextType
    {
        return $this->reason;
    }

    /**
     * @return TextType
     */
    public function getReasonWithCreate(): TextType
    {
        $this->reason = is_null($this->reason) ? new TextType() : $this->reason;

        return $this->reason;
    }

    /**
     * @param TextType|null $reason
     * @return static
     */
    public function setReason(?TextType $reason = null): static
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReason(): static
    {
        $this->reason = null;

        return $this;
    }

    /**
     * @return TradeTaxType|null
     */
    public function getCategoryTradeTax(): ?TradeTaxType
    {
        return $this->categoryTradeTax;
    }

    /**
     * @return TradeTaxType
     */
    public function getCategoryTradeTaxWithCreate(): TradeTaxType
    {
        $this->categoryTradeTax = is_null($this->categoryTradeTax) ? new TradeTaxType() : $this->categoryTradeTax;

        return $this->categoryTradeTax;
    }

    /**
     * @param TradeTaxType|null $categoryTradeTax
     * @return static
     */
    public function setCategoryTradeTax(?TradeTaxType $categoryTradeTax = null): static
    {
        $this->categoryTradeTax = $categoryTradeTax;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCategoryTradeTax(): static
    {
        $this->categoryTradeTax = null;

        return $this;
    }
}
