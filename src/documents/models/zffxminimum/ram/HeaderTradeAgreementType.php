<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxminimum\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class HeaderTradeAgreementType
{
    use HandlesObjectFlags;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerReference")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerReference", setter="setBuyerReference")
     */
    private $buyerReference;

    /**
     * @var null|TradePartyType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("SellerTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getSellerTradeParty", setter="setSellerTradeParty")
     */
    private $sellerTradeParty;

    /**
     * @var null|TradePartyType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerTradeParty", setter="setBuyerTradeParty")
     */
    private $buyerTradeParty;

    /**
     * @var null|ReferencedDocumentType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerOrderReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getBuyerOrderReferencedDocument", setter="setBuyerOrderReferencedDocument")
     */
    private $buyerOrderReferencedDocument;

    /**
     * @return null|TextType
     */
    public function getBuyerReference(): ?TextType
    {
        return $this->buyerReference;
    }

    /**
     * @return TextType
     */
    public function getBuyerReferenceWithCreate(): TextType
    {
        $this->buyerReference = is_null($this->buyerReference) ? new TextType() : $this->buyerReference;

        return $this->buyerReference;
    }

    /**
     * @param  null|TextType $buyerReference
     * @return static
     */
    public function setBuyerReference(?TextType $buyerReference = null): static
    {
        $this->buyerReference = $buyerReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBuyerReference(): static
    {
        $this->buyerReference = null;

        return $this;
    }

    /**
     * @return null|TradePartyType
     */
    public function getSellerTradeParty(): ?TradePartyType
    {
        return $this->sellerTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getSellerTradePartyWithCreate(): TradePartyType
    {
        $this->sellerTradeParty = is_null($this->sellerTradeParty) ? new TradePartyType() : $this->sellerTradeParty;

        return $this->sellerTradeParty;
    }

    /**
     * @param  null|TradePartyType $sellerTradeParty
     * @return static
     */
    public function setSellerTradeParty(?TradePartyType $sellerTradeParty = null): static
    {
        $this->sellerTradeParty = $sellerTradeParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSellerTradeParty(): static
    {
        $this->sellerTradeParty = null;

        return $this;
    }

    /**
     * @return null|TradePartyType
     */
    public function getBuyerTradeParty(): ?TradePartyType
    {
        return $this->buyerTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getBuyerTradePartyWithCreate(): TradePartyType
    {
        $this->buyerTradeParty = is_null($this->buyerTradeParty) ? new TradePartyType() : $this->buyerTradeParty;

        return $this->buyerTradeParty;
    }

    /**
     * @param  null|TradePartyType $buyerTradeParty
     * @return static
     */
    public function setBuyerTradeParty(?TradePartyType $buyerTradeParty = null): static
    {
        $this->buyerTradeParty = $buyerTradeParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBuyerTradeParty(): static
    {
        $this->buyerTradeParty = null;

        return $this;
    }

    /**
     * @return null|ReferencedDocumentType
     */
    public function getBuyerOrderReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->buyerOrderReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getBuyerOrderReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->buyerOrderReferencedDocument = is_null($this->buyerOrderReferencedDocument) ? new ReferencedDocumentType() : $this->buyerOrderReferencedDocument;

        return $this->buyerOrderReferencedDocument;
    }

    /**
     * @param  null|ReferencedDocumentType $buyerOrderReferencedDocument
     * @return static
     */
    public function setBuyerOrderReferencedDocument(
        ?ReferencedDocumentType $buyerOrderReferencedDocument = null,
    ): static {
        $this->buyerOrderReferencedDocument = $buyerOrderReferencedDocument;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBuyerOrderReferencedDocument(): static
    {
        $this->buyerOrderReferencedDocument = null;

        return $this;
    }
}
