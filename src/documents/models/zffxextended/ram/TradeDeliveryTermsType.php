<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\DeliveryTermsCodeType;

class TradeDeliveryTermsType
{
    use HandlesObjectFlags;

    /**
     * @var DeliveryTermsCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\DeliveryTermsCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryTypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDeliveryTypeCode", setter="setDeliveryTypeCode")
     */
    private $deliveryTypeCode;

    /**
     * @return DeliveryTermsCodeType|null
     */
    public function getDeliveryTypeCode(): ?DeliveryTermsCodeType
    {
        return $this->deliveryTypeCode;
    }

    /**
     * @return DeliveryTermsCodeType
     */
    public function getDeliveryTypeCodeWithCreate(): DeliveryTermsCodeType
    {
        $this->deliveryTypeCode = is_null($this->deliveryTypeCode) ? new DeliveryTermsCodeType() : $this->deliveryTypeCode;

        return $this->deliveryTypeCode;
    }

    /**
     * @param DeliveryTermsCodeType|null $deliveryTypeCode
     * @return static
     */
    public function setDeliveryTypeCode(?DeliveryTermsCodeType $deliveryTypeCode = null): static
    {
        $this->deliveryTypeCode = $deliveryTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeliveryTypeCode(): static
    {
        $this->deliveryTypeCode = null;

        return $this;
    }
}
