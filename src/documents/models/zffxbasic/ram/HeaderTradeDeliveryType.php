<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

class HeaderTradeDeliveryType
{
    use HandlesObjectFlags;

    /**
     * @var null|TradePartyType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\TradePartyType")
     * @JMS\Expose
     * @JMS\SerializedName("ShipToTradeParty")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getShipToTradeParty", setter="setShipToTradeParty")
     */
    private $shipToTradeParty;

    /**
     * @var null|SupplyChainEventType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\SupplyChainEventType")
     * @JMS\Expose
     * @JMS\SerializedName("ActualDeliverySupplyChainEvent")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getActualDeliverySupplyChainEvent", setter="setActualDeliverySupplyChainEvent")
     */
    private $actualDeliverySupplyChainEvent;

    /**
     * @var null|ReferencedDocumentType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\ReferencedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("DespatchAdviceReferencedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDespatchAdviceReferencedDocument", setter="setDespatchAdviceReferencedDocument")
     */
    private $despatchAdviceReferencedDocument;

    /**
     * @return null|TradePartyType
     */
    public function getShipToTradeParty(): ?TradePartyType
    {
        return $this->shipToTradeParty;
    }

    /**
     * @return TradePartyType
     */
    public function getShipToTradePartyWithCreate(): TradePartyType
    {
        $this->shipToTradeParty = is_null($this->shipToTradeParty) ? new TradePartyType() : $this->shipToTradeParty;

        return $this->shipToTradeParty;
    }

    /**
     * @param  null|TradePartyType $shipToTradeParty
     * @return static
     */
    public function setShipToTradeParty(?TradePartyType $shipToTradeParty = null): static
    {
        $this->shipToTradeParty = $shipToTradeParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetShipToTradeParty(): static
    {
        $this->shipToTradeParty = null;

        return $this;
    }

    /**
     * @return null|SupplyChainEventType
     */
    public function getActualDeliverySupplyChainEvent(): ?SupplyChainEventType
    {
        return $this->actualDeliverySupplyChainEvent;
    }

    /**
     * @return SupplyChainEventType
     */
    public function getActualDeliverySupplyChainEventWithCreate(): SupplyChainEventType
    {
        $this->actualDeliverySupplyChainEvent = is_null($this->actualDeliverySupplyChainEvent) ? new SupplyChainEventType() : $this->actualDeliverySupplyChainEvent;

        return $this->actualDeliverySupplyChainEvent;
    }

    /**
     * @param  null|SupplyChainEventType $actualDeliverySupplyChainEvent
     * @return static
     */
    public function setActualDeliverySupplyChainEvent(
        ?SupplyChainEventType $actualDeliverySupplyChainEvent = null,
    ): static {
        $this->actualDeliverySupplyChainEvent = $actualDeliverySupplyChainEvent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetActualDeliverySupplyChainEvent(): static
    {
        $this->actualDeliverySupplyChainEvent = null;

        return $this;
    }

    /**
     * @return null|ReferencedDocumentType
     */
    public function getDespatchAdviceReferencedDocument(): ?ReferencedDocumentType
    {
        return $this->despatchAdviceReferencedDocument;
    }

    /**
     * @return ReferencedDocumentType
     */
    public function getDespatchAdviceReferencedDocumentWithCreate(): ReferencedDocumentType
    {
        $this->despatchAdviceReferencedDocument = is_null($this->despatchAdviceReferencedDocument) ? new ReferencedDocumentType() : $this->despatchAdviceReferencedDocument;

        return $this->despatchAdviceReferencedDocument;
    }

    /**
     * @param  null|ReferencedDocumentType $despatchAdviceReferencedDocument
     * @return static
     */
    public function setDespatchAdviceReferencedDocument(
        ?ReferencedDocumentType $despatchAdviceReferencedDocument = null,
    ): static {
        $this->despatchAdviceReferencedDocument = $despatchAdviceReferencedDocument;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDespatchAdviceReferencedDocument(): static
    {
        $this->despatchAdviceReferencedDocument = null;

        return $this;
    }
}
