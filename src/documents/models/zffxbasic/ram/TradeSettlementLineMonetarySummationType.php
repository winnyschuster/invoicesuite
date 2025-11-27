<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\AmountType;
use JMS\Serializer\Annotation as JMS;

class TradeSettlementLineMonetarySummationType
{
    use HandlesObjectFlags;

    /**
     * @var null|AmountType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("LineTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineTotalAmount", setter="setLineTotalAmount")
     */
    private $lineTotalAmount;

    /**
     * @return null|AmountType
     */
    public function getLineTotalAmount(): ?AmountType
    {
        return $this->lineTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getLineTotalAmountWithCreate(): AmountType
    {
        $this->lineTotalAmount = is_null($this->lineTotalAmount) ? new AmountType() : $this->lineTotalAmount;

        return $this->lineTotalAmount;
    }

    /**
     * @param  null|AmountType $lineTotalAmount
     * @return static
     */
    public function setLineTotalAmount(?AmountType $lineTotalAmount = null): static
    {
        $this->lineTotalAmount = $lineTotalAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineTotalAmount(): static
    {
        $this->lineTotalAmount = null;

        return $this;
    }
}
