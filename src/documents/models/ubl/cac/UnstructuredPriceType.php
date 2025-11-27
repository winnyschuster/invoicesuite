<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PriceAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TimeAmount;

class UnstructuredPriceType
{
    use HandlesObjectFlags;

    /**
     * @var PriceAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PriceAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PriceAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPriceAmount", setter="setPriceAmount")
     */
    private $priceAmount;

    /**
     * @var TimeAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TimeAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TimeAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTimeAmount", setter="setTimeAmount")
     */
    private $timeAmount;

    /**
     * @return PriceAmount|null
     */
    public function getPriceAmount(): ?PriceAmount
    {
        return $this->priceAmount;
    }

    /**
     * @return PriceAmount
     */
    public function getPriceAmountWithCreate(): PriceAmount
    {
        $this->priceAmount = is_null($this->priceAmount) ? new PriceAmount() : $this->priceAmount;

        return $this->priceAmount;
    }

    /**
     * @param PriceAmount|null $priceAmount
     * @return static
     */
    public function setPriceAmount(?PriceAmount $priceAmount = null): static
    {
        $this->priceAmount = $priceAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPriceAmount(): static
    {
        $this->priceAmount = null;

        return $this;
    }

    /**
     * @return TimeAmount|null
     */
    public function getTimeAmount(): ?TimeAmount
    {
        return $this->timeAmount;
    }

    /**
     * @return TimeAmount
     */
    public function getTimeAmountWithCreate(): TimeAmount
    {
        $this->timeAmount = is_null($this->timeAmount) ? new TimeAmount() : $this->timeAmount;

        return $this->timeAmount;
    }

    /**
     * @param TimeAmount|null $timeAmount
     * @return static
     */
    public function setTimeAmount(?TimeAmount $timeAmount = null): static
    {
        $this->timeAmount = $timeAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTimeAmount(): static
    {
        $this->timeAmount = null;

        return $this;
    }
}
