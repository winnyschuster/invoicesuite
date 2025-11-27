<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LineNumberNumeric;

class EventLineItemType
{
    use HandlesObjectFlags;

    /**
     * @var LineNumberNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LineNumberNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("LineNumberNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineNumberNumeric", setter="setLineNumberNumeric")
     */
    private $lineNumberNumeric;

    /**
     * @var ParticipatingLocationsLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ParticipatingLocationsLocation")
     * @JMS\Expose
     * @JMS\SerializedName("ParticipatingLocationsLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParticipatingLocationsLocation", setter="setParticipatingLocationsLocation")
     */
    private $participatingLocationsLocation;

    /**
     * @var array<RetailPlannedImpact>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\RetailPlannedImpact>")
     * @JMS\Expose
     * @JMS\SerializedName("RetailPlannedImpact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RetailPlannedImpact", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRetailPlannedImpact", setter="setRetailPlannedImpact")
     */
    private $retailPlannedImpact;

    /**
     * @var SupplyItem|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SupplyItem")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSupplyItem", setter="setSupplyItem")
     */
    private $supplyItem;

    /**
     * @return LineNumberNumeric|null
     */
    public function getLineNumberNumeric(): ?LineNumberNumeric
    {
        return $this->lineNumberNumeric;
    }

    /**
     * @return LineNumberNumeric
     */
    public function getLineNumberNumericWithCreate(): LineNumberNumeric
    {
        $this->lineNumberNumeric = is_null($this->lineNumberNumeric) ? new LineNumberNumeric() : $this->lineNumberNumeric;

        return $this->lineNumberNumeric;
    }

    /**
     * @param LineNumberNumeric|null $lineNumberNumeric
     * @return static
     */
    public function setLineNumberNumeric(?LineNumberNumeric $lineNumberNumeric = null): static
    {
        $this->lineNumberNumeric = $lineNumberNumeric;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineNumberNumeric(): static
    {
        $this->lineNumberNumeric = null;

        return $this;
    }

    /**
     * @return ParticipatingLocationsLocation|null
     */
    public function getParticipatingLocationsLocation(): ?ParticipatingLocationsLocation
    {
        return $this->participatingLocationsLocation;
    }

    /**
     * @return ParticipatingLocationsLocation
     */
    public function getParticipatingLocationsLocationWithCreate(): ParticipatingLocationsLocation
    {
        $this->participatingLocationsLocation = is_null($this->participatingLocationsLocation) ? new ParticipatingLocationsLocation() : $this->participatingLocationsLocation;

        return $this->participatingLocationsLocation;
    }

    /**
     * @param ParticipatingLocationsLocation|null $participatingLocationsLocation
     * @return static
     */
    public function setParticipatingLocationsLocation(
        ?ParticipatingLocationsLocation $participatingLocationsLocation = null,
    ): static {
        $this->participatingLocationsLocation = $participatingLocationsLocation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetParticipatingLocationsLocation(): static
    {
        $this->participatingLocationsLocation = null;

        return $this;
    }

    /**
     * @return array<RetailPlannedImpact>|null
     */
    public function getRetailPlannedImpact(): ?array
    {
        return $this->retailPlannedImpact;
    }

    /**
     * @param array<RetailPlannedImpact>|null $retailPlannedImpact
     * @return static
     */
    public function setRetailPlannedImpact(?array $retailPlannedImpact = null): static
    {
        $this->retailPlannedImpact = $retailPlannedImpact;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRetailPlannedImpact(): static
    {
        $this->retailPlannedImpact = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearRetailPlannedImpact(): static
    {
        $this->retailPlannedImpact = [];

        return $this;
    }

    /**
     * @return RetailPlannedImpact|null
     */
    public function firstRetailPlannedImpact(): ?RetailPlannedImpact
    {
        $retailPlannedImpact = $this->retailPlannedImpact ?? [];
        $retailPlannedImpact = reset($retailPlannedImpact);

        if ($retailPlannedImpact === false) {
            return null;
        }

        return $retailPlannedImpact;
    }

    /**
     * @return RetailPlannedImpact|null
     */
    public function lastRetailPlannedImpact(): ?RetailPlannedImpact
    {
        $retailPlannedImpact = $this->retailPlannedImpact ?? [];
        $retailPlannedImpact = end($retailPlannedImpact);

        if ($retailPlannedImpact === false) {
            return null;
        }

        return $retailPlannedImpact;
    }

    /**
     * @param RetailPlannedImpact $retailPlannedImpact
     * @return static
     */
    public function addToRetailPlannedImpact(RetailPlannedImpact $retailPlannedImpact): static
    {
        $this->retailPlannedImpact[] = $retailPlannedImpact;

        return $this;
    }

    /**
     * @return RetailPlannedImpact
     */
    public function addToRetailPlannedImpactWithCreate(): RetailPlannedImpact
    {
        $this->addToretailPlannedImpact($retailPlannedImpact = new RetailPlannedImpact());

        return $retailPlannedImpact;
    }

    /**
     * @param RetailPlannedImpact $retailPlannedImpact
     * @return static
     */
    public function addOnceToRetailPlannedImpact(RetailPlannedImpact $retailPlannedImpact): static
    {
        if (!is_array($this->retailPlannedImpact)) {
            $this->retailPlannedImpact = [];
        }

        $this->retailPlannedImpact[0] = $retailPlannedImpact;

        return $this;
    }

    /**
     * @return RetailPlannedImpact
     */
    public function addOnceToRetailPlannedImpactWithCreate(): RetailPlannedImpact
    {
        if (!is_array($this->retailPlannedImpact)) {
            $this->retailPlannedImpact = [];
        }

        if ($this->retailPlannedImpact === []) {
            $this->addOnceToretailPlannedImpact(new RetailPlannedImpact());
        }

        return $this->retailPlannedImpact[0];
    }

    /**
     * @return SupplyItem|null
     */
    public function getSupplyItem(): ?SupplyItem
    {
        return $this->supplyItem;
    }

    /**
     * @return SupplyItem
     */
    public function getSupplyItemWithCreate(): SupplyItem
    {
        $this->supplyItem = is_null($this->supplyItem) ? new SupplyItem() : $this->supplyItem;

        return $this->supplyItem;
    }

    /**
     * @param SupplyItem|null $supplyItem
     * @return static
     */
    public function setSupplyItem(?SupplyItem $supplyItem = null): static
    {
        $this->supplyItem = $supplyItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSupplyItem(): static
    {
        $this->supplyItem = null;

        return $this;
    }
}
