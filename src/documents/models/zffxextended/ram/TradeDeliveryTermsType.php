<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\DeliveryTermsCodeType;
use JMS\Serializer\Annotation as JMS;

class TradeDeliveryTermsType
{
    use HandlesObjectFlags;

    /**
     * @var null|DeliveryTermsCodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\DeliveryTermsCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryTypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDeliveryTypeCode", setter="setDeliveryTypeCode")
     */
    private $deliveryTypeCode;

    /**
     * @return null|DeliveryTermsCodeType
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
     * @param  null|DeliveryTermsCodeType $deliveryTypeCode
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
