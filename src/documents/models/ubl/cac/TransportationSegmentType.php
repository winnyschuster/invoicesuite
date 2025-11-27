<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TransportExecutionPlanReferenceID;

class TransportationSegmentType
{
    use HandlesObjectFlags;

    /**
     * @var SequenceNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("SequenceNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSequenceNumeric", setter="setSequenceNumeric")
     */
    private $sequenceNumeric;

    /**
     * @var TransportExecutionPlanReferenceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TransportExecutionPlanReferenceID")
     * @JMS\Expose
     * @JMS\SerializedName("TransportExecutionPlanReferenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTransportExecutionPlanReferenceID", setter="setTransportExecutionPlanReferenceID")
     */
    private $transportExecutionPlanReferenceID;

    /**
     * @var TransportationService|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TransportationService")
     * @JMS\Expose
     * @JMS\SerializedName("TransportationService")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTransportationService", setter="setTransportationService")
     */
    private $transportationService;

    /**
     * @var TransportServiceProviderParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TransportServiceProviderParty")
     * @JMS\Expose
     * @JMS\SerializedName("TransportServiceProviderParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTransportServiceProviderParty", setter="setTransportServiceProviderParty")
     */
    private $transportServiceProviderParty;

    /**
     * @var ReferencedConsignment|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ReferencedConsignment")
     * @JMS\Expose
     * @JMS\SerializedName("ReferencedConsignment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReferencedConsignment", setter="setReferencedConsignment")
     */
    private $referencedConsignment;

    /**
     * @var array<ShipmentStage>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ShipmentStage>")
     * @JMS\Expose
     * @JMS\SerializedName("ShipmentStage")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ShipmentStage", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getShipmentStage", setter="setShipmentStage")
     */
    private $shipmentStage;

    /**
     * @return SequenceNumeric|null
     */
    public function getSequenceNumeric(): ?SequenceNumeric
    {
        return $this->sequenceNumeric;
    }

    /**
     * @return SequenceNumeric
     */
    public function getSequenceNumericWithCreate(): SequenceNumeric
    {
        $this->sequenceNumeric = is_null($this->sequenceNumeric) ? new SequenceNumeric() : $this->sequenceNumeric;

        return $this->sequenceNumeric;
    }

    /**
     * @param SequenceNumeric|null $sequenceNumeric
     * @return static
     */
    public function setSequenceNumeric(?SequenceNumeric $sequenceNumeric = null): static
    {
        $this->sequenceNumeric = $sequenceNumeric;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSequenceNumeric(): static
    {
        $this->sequenceNumeric = null;

        return $this;
    }

    /**
     * @return TransportExecutionPlanReferenceID|null
     */
    public function getTransportExecutionPlanReferenceID(): ?TransportExecutionPlanReferenceID
    {
        return $this->transportExecutionPlanReferenceID;
    }

    /**
     * @return TransportExecutionPlanReferenceID
     */
    public function getTransportExecutionPlanReferenceIDWithCreate(): TransportExecutionPlanReferenceID
    {
        $this->transportExecutionPlanReferenceID = is_null($this->transportExecutionPlanReferenceID) ? new TransportExecutionPlanReferenceID() : $this->transportExecutionPlanReferenceID;

        return $this->transportExecutionPlanReferenceID;
    }

    /**
     * @param TransportExecutionPlanReferenceID|null $transportExecutionPlanReferenceID
     * @return static
     */
    public function setTransportExecutionPlanReferenceID(
        ?TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID = null,
    ): static {
        $this->transportExecutionPlanReferenceID = $transportExecutionPlanReferenceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransportExecutionPlanReferenceID(): static
    {
        $this->transportExecutionPlanReferenceID = null;

        return $this;
    }

    /**
     * @return TransportationService|null
     */
    public function getTransportationService(): ?TransportationService
    {
        return $this->transportationService;
    }

    /**
     * @return TransportationService
     */
    public function getTransportationServiceWithCreate(): TransportationService
    {
        $this->transportationService = is_null($this->transportationService) ? new TransportationService() : $this->transportationService;

        return $this->transportationService;
    }

    /**
     * @param TransportationService|null $transportationService
     * @return static
     */
    public function setTransportationService(?TransportationService $transportationService = null): static
    {
        $this->transportationService = $transportationService;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransportationService(): static
    {
        $this->transportationService = null;

        return $this;
    }

    /**
     * @return TransportServiceProviderParty|null
     */
    public function getTransportServiceProviderParty(): ?TransportServiceProviderParty
    {
        return $this->transportServiceProviderParty;
    }

    /**
     * @return TransportServiceProviderParty
     */
    public function getTransportServiceProviderPartyWithCreate(): TransportServiceProviderParty
    {
        $this->transportServiceProviderParty = is_null($this->transportServiceProviderParty) ? new TransportServiceProviderParty() : $this->transportServiceProviderParty;

        return $this->transportServiceProviderParty;
    }

    /**
     * @param TransportServiceProviderParty|null $transportServiceProviderParty
     * @return static
     */
    public function setTransportServiceProviderParty(
        ?TransportServiceProviderParty $transportServiceProviderParty = null,
    ): static {
        $this->transportServiceProviderParty = $transportServiceProviderParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransportServiceProviderParty(): static
    {
        $this->transportServiceProviderParty = null;

        return $this;
    }

    /**
     * @return ReferencedConsignment|null
     */
    public function getReferencedConsignment(): ?ReferencedConsignment
    {
        return $this->referencedConsignment;
    }

    /**
     * @return ReferencedConsignment
     */
    public function getReferencedConsignmentWithCreate(): ReferencedConsignment
    {
        $this->referencedConsignment = is_null($this->referencedConsignment) ? new ReferencedConsignment() : $this->referencedConsignment;

        return $this->referencedConsignment;
    }

    /**
     * @param ReferencedConsignment|null $referencedConsignment
     * @return static
     */
    public function setReferencedConsignment(?ReferencedConsignment $referencedConsignment = null): static
    {
        $this->referencedConsignment = $referencedConsignment;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReferencedConsignment(): static
    {
        $this->referencedConsignment = null;

        return $this;
    }

    /**
     * @return array<ShipmentStage>|null
     */
    public function getShipmentStage(): ?array
    {
        return $this->shipmentStage;
    }

    /**
     * @param array<ShipmentStage>|null $shipmentStage
     * @return static
     */
    public function setShipmentStage(?array $shipmentStage = null): static
    {
        $this->shipmentStage = $shipmentStage;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetShipmentStage(): static
    {
        $this->shipmentStage = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearShipmentStage(): static
    {
        $this->shipmentStage = [];

        return $this;
    }

    /**
     * @return ShipmentStage|null
     */
    public function firstShipmentStage(): ?ShipmentStage
    {
        $shipmentStage = $this->shipmentStage ?? [];
        $shipmentStage = reset($shipmentStage);

        if ($shipmentStage === false) {
            return null;
        }

        return $shipmentStage;
    }

    /**
     * @return ShipmentStage|null
     */
    public function lastShipmentStage(): ?ShipmentStage
    {
        $shipmentStage = $this->shipmentStage ?? [];
        $shipmentStage = end($shipmentStage);

        if ($shipmentStage === false) {
            return null;
        }

        return $shipmentStage;
    }

    /**
     * @param ShipmentStage $shipmentStage
     * @return static
     */
    public function addToShipmentStage(ShipmentStage $shipmentStage): static
    {
        $this->shipmentStage[] = $shipmentStage;

        return $this;
    }

    /**
     * @return ShipmentStage
     */
    public function addToShipmentStageWithCreate(): ShipmentStage
    {
        $this->addToshipmentStage($shipmentStage = new ShipmentStage());

        return $shipmentStage;
    }

    /**
     * @param ShipmentStage $shipmentStage
     * @return static
     */
    public function addOnceToShipmentStage(ShipmentStage $shipmentStage): static
    {
        if (!is_array($this->shipmentStage)) {
            $this->shipmentStage = [];
        }

        $this->shipmentStage[0] = $shipmentStage;

        return $this;
    }

    /**
     * @return ShipmentStage
     */
    public function addOnceToShipmentStageWithCreate(): ShipmentStage
    {
        if (!is_array($this->shipmentStage)) {
            $this->shipmentStage = [];
        }

        if ($this->shipmentStage === []) {
            $this->addOnceToshipmentStage(new ShipmentStage());
        }

        return $this->shipmentStage[0];
    }
}
