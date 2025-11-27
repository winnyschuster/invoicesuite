<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class LineTradeAgreementType
{
    use HandlesObjectFlags;

    /**
     * @var TradePriceType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradePriceType")
     * @JMS\Expose
     * @JMS\SerializedName("GrossPriceProductTradePrice")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGrossPriceProductTradePrice", setter="setGrossPriceProductTradePrice")
     */
    private $grossPriceProductTradePrice;

    /**
     * @var TradePriceType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradePriceType")
     * @JMS\Expose
     * @JMS\SerializedName("NetPriceProductTradePrice")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getNetPriceProductTradePrice", setter="setNetPriceProductTradePrice")
     */
    private $netPriceProductTradePrice;

    /**
     * @return TradePriceType|null
     */
    public function getGrossPriceProductTradePrice(): ?TradePriceType
    {
        return $this->grossPriceProductTradePrice;
    }

    /**
     * @return TradePriceType
     */
    public function getGrossPriceProductTradePriceWithCreate(): TradePriceType
    {
        $this->grossPriceProductTradePrice = is_null($this->grossPriceProductTradePrice) ? new TradePriceType() : $this->grossPriceProductTradePrice;

        return $this->grossPriceProductTradePrice;
    }

    /**
     * @param TradePriceType|null $grossPriceProductTradePrice
     * @return static
     */
    public function setGrossPriceProductTradePrice(?TradePriceType $grossPriceProductTradePrice = null): static
    {
        $this->grossPriceProductTradePrice = $grossPriceProductTradePrice;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGrossPriceProductTradePrice(): static
    {
        $this->grossPriceProductTradePrice = null;

        return $this;
    }

    /**
     * @return TradePriceType|null
     */
    public function getNetPriceProductTradePrice(): ?TradePriceType
    {
        return $this->netPriceProductTradePrice;
    }

    /**
     * @return TradePriceType
     */
    public function getNetPriceProductTradePriceWithCreate(): TradePriceType
    {
        $this->netPriceProductTradePrice = is_null($this->netPriceProductTradePrice) ? new TradePriceType() : $this->netPriceProductTradePrice;

        return $this->netPriceProductTradePrice;
    }

    /**
     * @param TradePriceType|null $netPriceProductTradePrice
     * @return static
     */
    public function setNetPriceProductTradePrice(?TradePriceType $netPriceProductTradePrice = null): static
    {
        $this->netPriceProductTradePrice = $netPriceProductTradePrice;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNetPriceProductTradePrice(): static
    {
        $this->netPriceProductTradePrice = null;

        return $this;
    }
}
