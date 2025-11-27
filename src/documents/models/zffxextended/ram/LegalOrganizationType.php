<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType;

class LegalOrganizationType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("TradingBusinessName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTradingBusinessName", setter="setTradingBusinessName")
     */
    private $tradingBusinessName;

    /**
     * @var TradeAddressType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\ram\TradeAddressType")
     * @JMS\Expose
     * @JMS\SerializedName("PostalTradeAddress")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPostalTradeAddress", setter="setPostalTradeAddress")
     */
    private $postalTradeAddress;

    /**
     * @return IDType|null
     */
    public function getID(): ?IDType
    {
        return $this->iD;
    }

    /**
     * @return IDType
     */
    public function getIDWithCreate(): IDType
    {
        $this->iD = is_null($this->iD) ? new IDType() : $this->iD;

        return $this->iD;
    }

    /**
     * @param IDType|null $iD
     * @return static
     */
    public function setID(?IDType $iD = null): static
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetID(): static
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getTradingBusinessName(): ?TextType
    {
        return $this->tradingBusinessName;
    }

    /**
     * @return TextType
     */
    public function getTradingBusinessNameWithCreate(): TextType
    {
        $this->tradingBusinessName = is_null($this->tradingBusinessName) ? new TextType() : $this->tradingBusinessName;

        return $this->tradingBusinessName;
    }

    /**
     * @param TextType|null $tradingBusinessName
     * @return static
     */
    public function setTradingBusinessName(?TextType $tradingBusinessName = null): static
    {
        $this->tradingBusinessName = $tradingBusinessName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTradingBusinessName(): static
    {
        $this->tradingBusinessName = null;

        return $this;
    }

    /**
     * @return TradeAddressType|null
     */
    public function getPostalTradeAddress(): ?TradeAddressType
    {
        return $this->postalTradeAddress;
    }

    /**
     * @return TradeAddressType
     */
    public function getPostalTradeAddressWithCreate(): TradeAddressType
    {
        $this->postalTradeAddress = is_null($this->postalTradeAddress) ? new TradeAddressType() : $this->postalTradeAddress;

        return $this->postalTradeAddress;
    }

    /**
     * @param TradeAddressType|null $postalTradeAddress
     * @return static
     */
    public function setPostalTradeAddress(?TradeAddressType $postalTradeAddress = null): static
    {
        $this->postalTradeAddress = $postalTradeAddress;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPostalTradeAddress(): static
    {
        $this->postalTradeAddress = null;

        return $this;
    }
}
