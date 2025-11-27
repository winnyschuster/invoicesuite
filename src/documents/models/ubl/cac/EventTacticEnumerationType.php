<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumerIncentiveTacticTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DisplayTacticTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FeatureTacticTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TradeItemPackingLabelingTypeCode;

class EventTacticEnumerationType
{
    use HandlesObjectFlags;

    /**
     * @var ConsumerIncentiveTacticTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumerIncentiveTacticTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumerIncentiveTacticTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumerIncentiveTacticTypeCode", setter="setConsumerIncentiveTacticTypeCode")
     */
    private $consumerIncentiveTacticTypeCode;

    /**
     * @var DisplayTacticTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DisplayTacticTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("DisplayTacticTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDisplayTacticTypeCode", setter="setDisplayTacticTypeCode")
     */
    private $displayTacticTypeCode;

    /**
     * @var FeatureTacticTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FeatureTacticTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("FeatureTacticTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFeatureTacticTypeCode", setter="setFeatureTacticTypeCode")
     */
    private $featureTacticTypeCode;

    /**
     * @var TradeItemPackingLabelingTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TradeItemPackingLabelingTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("TradeItemPackingLabelingTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTradeItemPackingLabelingTypeCode", setter="setTradeItemPackingLabelingTypeCode")
     */
    private $tradeItemPackingLabelingTypeCode;

    /**
     * @return ConsumerIncentiveTacticTypeCode|null
     */
    public function getConsumerIncentiveTacticTypeCode(): ?ConsumerIncentiveTacticTypeCode
    {
        return $this->consumerIncentiveTacticTypeCode;
    }

    /**
     * @return ConsumerIncentiveTacticTypeCode
     */
    public function getConsumerIncentiveTacticTypeCodeWithCreate(): ConsumerIncentiveTacticTypeCode
    {
        $this->consumerIncentiveTacticTypeCode = is_null($this->consumerIncentiveTacticTypeCode) ? new ConsumerIncentiveTacticTypeCode() : $this->consumerIncentiveTacticTypeCode;

        return $this->consumerIncentiveTacticTypeCode;
    }

    /**
     * @param ConsumerIncentiveTacticTypeCode|null $consumerIncentiveTacticTypeCode
     * @return static
     */
    public function setConsumerIncentiveTacticTypeCode(
        ?ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode = null,
    ): static {
        $this->consumerIncentiveTacticTypeCode = $consumerIncentiveTacticTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsumerIncentiveTacticTypeCode(): static
    {
        $this->consumerIncentiveTacticTypeCode = null;

        return $this;
    }

    /**
     * @return DisplayTacticTypeCode|null
     */
    public function getDisplayTacticTypeCode(): ?DisplayTacticTypeCode
    {
        return $this->displayTacticTypeCode;
    }

    /**
     * @return DisplayTacticTypeCode
     */
    public function getDisplayTacticTypeCodeWithCreate(): DisplayTacticTypeCode
    {
        $this->displayTacticTypeCode = is_null($this->displayTacticTypeCode) ? new DisplayTacticTypeCode() : $this->displayTacticTypeCode;

        return $this->displayTacticTypeCode;
    }

    /**
     * @param DisplayTacticTypeCode|null $displayTacticTypeCode
     * @return static
     */
    public function setDisplayTacticTypeCode(?DisplayTacticTypeCode $displayTacticTypeCode = null): static
    {
        $this->displayTacticTypeCode = $displayTacticTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDisplayTacticTypeCode(): static
    {
        $this->displayTacticTypeCode = null;

        return $this;
    }

    /**
     * @return FeatureTacticTypeCode|null
     */
    public function getFeatureTacticTypeCode(): ?FeatureTacticTypeCode
    {
        return $this->featureTacticTypeCode;
    }

    /**
     * @return FeatureTacticTypeCode
     */
    public function getFeatureTacticTypeCodeWithCreate(): FeatureTacticTypeCode
    {
        $this->featureTacticTypeCode = is_null($this->featureTacticTypeCode) ? new FeatureTacticTypeCode() : $this->featureTacticTypeCode;

        return $this->featureTacticTypeCode;
    }

    /**
     * @param FeatureTacticTypeCode|null $featureTacticTypeCode
     * @return static
     */
    public function setFeatureTacticTypeCode(?FeatureTacticTypeCode $featureTacticTypeCode = null): static
    {
        $this->featureTacticTypeCode = $featureTacticTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFeatureTacticTypeCode(): static
    {
        $this->featureTacticTypeCode = null;

        return $this;
    }

    /**
     * @return TradeItemPackingLabelingTypeCode|null
     */
    public function getTradeItemPackingLabelingTypeCode(): ?TradeItemPackingLabelingTypeCode
    {
        return $this->tradeItemPackingLabelingTypeCode;
    }

    /**
     * @return TradeItemPackingLabelingTypeCode
     */
    public function getTradeItemPackingLabelingTypeCodeWithCreate(): TradeItemPackingLabelingTypeCode
    {
        $this->tradeItemPackingLabelingTypeCode = is_null($this->tradeItemPackingLabelingTypeCode) ? new TradeItemPackingLabelingTypeCode() : $this->tradeItemPackingLabelingTypeCode;

        return $this->tradeItemPackingLabelingTypeCode;
    }

    /**
     * @param TradeItemPackingLabelingTypeCode|null $tradeItemPackingLabelingTypeCode
     * @return static
     */
    public function setTradeItemPackingLabelingTypeCode(
        ?TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode = null,
    ): static {
        $this->tradeItemPackingLabelingTypeCode = $tradeItemPackingLabelingTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTradeItemPackingLabelingTypeCode(): static
    {
        $this->tradeItemPackingLabelingTypeCode = null;

        return $this;
    }
}
