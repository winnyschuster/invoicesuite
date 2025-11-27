<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\QuantityType;
use JMS\Serializer\Annotation as JMS;

class LineTradeDeliveryType
{
    use HandlesObjectFlags;

    /**
     * @var null|QuantityType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\QuantityType")
     * @JMS\Expose
     * @JMS\SerializedName("BilledQuantity")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBilledQuantity", setter="setBilledQuantity")
     */
    private $billedQuantity;

    /**
     * @return null|QuantityType
     */
    public function getBilledQuantity(): ?QuantityType
    {
        return $this->billedQuantity;
    }

    /**
     * @return QuantityType
     */
    public function getBilledQuantityWithCreate(): QuantityType
    {
        $this->billedQuantity = is_null($this->billedQuantity) ? new QuantityType() : $this->billedQuantity;

        return $this->billedQuantity;
    }

    /**
     * @param  null|QuantityType $billedQuantity
     * @return static
     */
    public function setBilledQuantity(?QuantityType $billedQuantity = null): static
    {
        $this->billedQuantity = $billedQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBilledQuantity(): static
    {
        $this->billedQuantity = null;

        return $this;
    }
}
