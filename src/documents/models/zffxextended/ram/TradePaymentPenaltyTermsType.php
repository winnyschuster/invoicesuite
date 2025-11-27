<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\MeasureType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\PercentType;

class TradePaymentPenaltyTermsType
{
    use HandlesObjectFlags;

    /**
     * @var DateTimeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("BasisDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBasisDateTime", setter="setBasisDateTime")
     */
    private $basisDateTime;

    /**
     * @var MeasureType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\MeasureType")
     * @JMS\Expose
     * @JMS\SerializedName("BasisPeriodMeasure")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBasisPeriodMeasure", setter="setBasisPeriodMeasure")
     */
    private $basisPeriodMeasure;

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
     * @var PercentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\PercentType")
     * @JMS\Expose
     * @JMS\SerializedName("CalculationPercent")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getCalculationPercent", setter="setCalculationPercent")
     */
    private $calculationPercent;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("ActualPenaltyAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getActualPenaltyAmount", setter="setActualPenaltyAmount")
     */
    private $actualPenaltyAmount;

    /**
     * @return DateTimeType|null
     */
    public function getBasisDateTime(): ?DateTimeType
    {
        return $this->basisDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getBasisDateTimeWithCreate(): DateTimeType
    {
        $this->basisDateTime = is_null($this->basisDateTime) ? new DateTimeType() : $this->basisDateTime;

        return $this->basisDateTime;
    }

    /**
     * @param DateTimeType|null $basisDateTime
     * @return static
     */
    public function setBasisDateTime(?DateTimeType $basisDateTime = null): static
    {
        $this->basisDateTime = $basisDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBasisDateTime(): static
    {
        $this->basisDateTime = null;

        return $this;
    }

    /**
     * @return MeasureType|null
     */
    public function getBasisPeriodMeasure(): ?MeasureType
    {
        return $this->basisPeriodMeasure;
    }

    /**
     * @return MeasureType
     */
    public function getBasisPeriodMeasureWithCreate(): MeasureType
    {
        $this->basisPeriodMeasure = is_null($this->basisPeriodMeasure) ? new MeasureType() : $this->basisPeriodMeasure;

        return $this->basisPeriodMeasure;
    }

    /**
     * @param MeasureType|null $basisPeriodMeasure
     * @return static
     */
    public function setBasisPeriodMeasure(?MeasureType $basisPeriodMeasure = null): static
    {
        $this->basisPeriodMeasure = $basisPeriodMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBasisPeriodMeasure(): static
    {
        $this->basisPeriodMeasure = null;

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
    public function getActualPenaltyAmount(): ?AmountType
    {
        return $this->actualPenaltyAmount;
    }

    /**
     * @return AmountType
     */
    public function getActualPenaltyAmountWithCreate(): AmountType
    {
        $this->actualPenaltyAmount = is_null($this->actualPenaltyAmount) ? new AmountType() : $this->actualPenaltyAmount;

        return $this->actualPenaltyAmount;
    }

    /**
     * @param AmountType|null $actualPenaltyAmount
     * @return static
     */
    public function setActualPenaltyAmount(?AmountType $actualPenaltyAmount = null): static
    {
        $this->actualPenaltyAmount = $actualPenaltyAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetActualPenaltyAmount(): static
    {
        $this->actualPenaltyAmount = null;

        return $this;
    }
}
