<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AttributeID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Measure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumMeasure;

class ConditionType
{
    use HandlesObjectFlags;

    /**
     * @var AttributeID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AttributeID")
     * @JMS\Expose
     * @JMS\SerializedName("AttributeID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAttributeID", setter="setAttributeID")
     */
    private $attributeID;

    /**
     * @var Measure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Measure")
     * @JMS\Expose
     * @JMS\SerializedName("Measure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMeasure", setter="setMeasure")
     */
    private $measure;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var MinimumMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumMeasure", setter="setMinimumMeasure")
     */
    private $minimumMeasure;

    /**
     * @var MaximumMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumMeasure", setter="setMaximumMeasure")
     */
    private $maximumMeasure;

    /**
     * @return AttributeID|null
     */
    public function getAttributeID(): ?AttributeID
    {
        return $this->attributeID;
    }

    /**
     * @return AttributeID
     */
    public function getAttributeIDWithCreate(): AttributeID
    {
        $this->attributeID = is_null($this->attributeID) ? new AttributeID() : $this->attributeID;

        return $this->attributeID;
    }

    /**
     * @param AttributeID|null $attributeID
     * @return static
     */
    public function setAttributeID(?AttributeID $attributeID = null): static
    {
        $this->attributeID = $attributeID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAttributeID(): static
    {
        $this->attributeID = null;

        return $this;
    }

    /**
     * @return Measure|null
     */
    public function getMeasure(): ?Measure
    {
        return $this->measure;
    }

    /**
     * @return Measure
     */
    public function getMeasureWithCreate(): Measure
    {
        $this->measure = is_null($this->measure) ? new Measure() : $this->measure;

        return $this->measure;
    }

    /**
     * @param Measure|null $measure
     * @return static
     */
    public function setMeasure(?Measure $measure = null): static
    {
        $this->measure = $measure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMeasure(): static
    {
        $this->measure = null;

        return $this;
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return static
     */
    public function setDescription(?array $description = null): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDescription(): static
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDescription(): static
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addToDescription(Description $description): static
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addOnceToDescription(Description $description): static
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return MinimumMeasure|null
     */
    public function getMinimumMeasure(): ?MinimumMeasure
    {
        return $this->minimumMeasure;
    }

    /**
     * @return MinimumMeasure
     */
    public function getMinimumMeasureWithCreate(): MinimumMeasure
    {
        $this->minimumMeasure = is_null($this->minimumMeasure) ? new MinimumMeasure() : $this->minimumMeasure;

        return $this->minimumMeasure;
    }

    /**
     * @param MinimumMeasure|null $minimumMeasure
     * @return static
     */
    public function setMinimumMeasure(?MinimumMeasure $minimumMeasure = null): static
    {
        $this->minimumMeasure = $minimumMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMinimumMeasure(): static
    {
        $this->minimumMeasure = null;

        return $this;
    }

    /**
     * @return MaximumMeasure|null
     */
    public function getMaximumMeasure(): ?MaximumMeasure
    {
        return $this->maximumMeasure;
    }

    /**
     * @return MaximumMeasure
     */
    public function getMaximumMeasureWithCreate(): MaximumMeasure
    {
        $this->maximumMeasure = is_null($this->maximumMeasure) ? new MaximumMeasure() : $this->maximumMeasure;

        return $this->maximumMeasure;
    }

    /**
     * @param MaximumMeasure|null $maximumMeasure
     * @return static
     */
    public function setMaximumMeasure(?MaximumMeasure $maximumMeasure = null): static
    {
        $this->maximumMeasure = $maximumMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMaximumMeasure(): static
    {
        $this->maximumMeasure = null;

        return $this;
    }
}
