<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\AmountType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class FinancialAdjustmentType
{
    use HandlesObjectFlags;

    /**
     * @var null|TextType
     */
    #[JMS\Accessor(getter: 'getReason', setter: 'setReason')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('Reason')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $reason;

    /**
     * @var null|AmountType
     */
    #[JMS\Accessor(getter: 'getActualAmount', setter: 'setActualAmount')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('ActualAmount')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\udt\AmountType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $actualAmount;

    /**
     * @return null|TextType
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
        $this->reason ??= new TextType();

        return $this->reason;
    }

    /**
     * @param  null|TextType $reason
     * @return static
     */
    public function setReason(
        ?TextType $reason = null
    ): static {
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
     * @return null|AmountType
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
        $this->actualAmount ??= new AmountType();

        return $this->actualAmount;
    }

    /**
     * @param  null|AmountType $actualAmount
     * @return static
     */
    public function setActualAmount(
        ?AmountType $actualAmount = null
    ): static {
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
}
