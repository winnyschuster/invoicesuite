<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ExpectedQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LimitationDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity;

class EconomicOperatorShortListType
{
    use HandlesObjectFlags;

    /**
     * @var array<LimitationDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\LimitationDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("LimitationDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="LimitationDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getLimitationDescription", setter="setLimitationDescription")
     */
    private $limitationDescription;

    /**
     * @var ExpectedQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ExpectedQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ExpectedQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExpectedQuantity", setter="setExpectedQuantity")
     */
    private $expectedQuantity;

    /**
     * @var MaximumQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumQuantity", setter="setMaximumQuantity")
     */
    private $maximumQuantity;

    /**
     * @var MinimumQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumQuantity", setter="setMinimumQuantity")
     */
    private $minimumQuantity;

    /**
     * @var array<PreSelectedParty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PreSelectedParty>")
     * @JMS\Expose
     * @JMS\SerializedName("PreSelectedParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PreSelectedParty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPreSelectedParty", setter="setPreSelectedParty")
     */
    private $preSelectedParty;

    /**
     * @return array<LimitationDescription>|null
     */
    public function getLimitationDescription(): ?array
    {
        return $this->limitationDescription;
    }

    /**
     * @param array<LimitationDescription>|null $limitationDescription
     * @return static
     */
    public function setLimitationDescription(?array $limitationDescription = null): static
    {
        $this->limitationDescription = $limitationDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLimitationDescription(): static
    {
        $this->limitationDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearLimitationDescription(): static
    {
        $this->limitationDescription = [];

        return $this;
    }

    /**
     * @return LimitationDescription|null
     */
    public function firstLimitationDescription(): ?LimitationDescription
    {
        $limitationDescription = $this->limitationDescription ?? [];
        $limitationDescription = reset($limitationDescription);

        if ($limitationDescription === false) {
            return null;
        }

        return $limitationDescription;
    }

    /**
     * @return LimitationDescription|null
     */
    public function lastLimitationDescription(): ?LimitationDescription
    {
        $limitationDescription = $this->limitationDescription ?? [];
        $limitationDescription = end($limitationDescription);

        if ($limitationDescription === false) {
            return null;
        }

        return $limitationDescription;
    }

    /**
     * @param LimitationDescription $limitationDescription
     * @return static
     */
    public function addToLimitationDescription(LimitationDescription $limitationDescription): static
    {
        $this->limitationDescription[] = $limitationDescription;

        return $this;
    }

    /**
     * @return LimitationDescription
     */
    public function addToLimitationDescriptionWithCreate(): LimitationDescription
    {
        $this->addTolimitationDescription($limitationDescription = new LimitationDescription());

        return $limitationDescription;
    }

    /**
     * @param LimitationDescription $limitationDescription
     * @return static
     */
    public function addOnceToLimitationDescription(LimitationDescription $limitationDescription): static
    {
        if (!is_array($this->limitationDescription)) {
            $this->limitationDescription = [];
        }

        $this->limitationDescription[0] = $limitationDescription;

        return $this;
    }

    /**
     * @return LimitationDescription
     */
    public function addOnceToLimitationDescriptionWithCreate(): LimitationDescription
    {
        if (!is_array($this->limitationDescription)) {
            $this->limitationDescription = [];
        }

        if ($this->limitationDescription === []) {
            $this->addOnceTolimitationDescription(new LimitationDescription());
        }

        return $this->limitationDescription[0];
    }

    /**
     * @return ExpectedQuantity|null
     */
    public function getExpectedQuantity(): ?ExpectedQuantity
    {
        return $this->expectedQuantity;
    }

    /**
     * @return ExpectedQuantity
     */
    public function getExpectedQuantityWithCreate(): ExpectedQuantity
    {
        $this->expectedQuantity = is_null($this->expectedQuantity) ? new ExpectedQuantity() : $this->expectedQuantity;

        return $this->expectedQuantity;
    }

    /**
     * @param ExpectedQuantity|null $expectedQuantity
     * @return static
     */
    public function setExpectedQuantity(?ExpectedQuantity $expectedQuantity = null): static
    {
        $this->expectedQuantity = $expectedQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExpectedQuantity(): static
    {
        $this->expectedQuantity = null;

        return $this;
    }

    /**
     * @return MaximumQuantity|null
     */
    public function getMaximumQuantity(): ?MaximumQuantity
    {
        return $this->maximumQuantity;
    }

    /**
     * @return MaximumQuantity
     */
    public function getMaximumQuantityWithCreate(): MaximumQuantity
    {
        $this->maximumQuantity = is_null($this->maximumQuantity) ? new MaximumQuantity() : $this->maximumQuantity;

        return $this->maximumQuantity;
    }

    /**
     * @param MaximumQuantity|null $maximumQuantity
     * @return static
     */
    public function setMaximumQuantity(?MaximumQuantity $maximumQuantity = null): static
    {
        $this->maximumQuantity = $maximumQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMaximumQuantity(): static
    {
        $this->maximumQuantity = null;

        return $this;
    }

    /**
     * @return MinimumQuantity|null
     */
    public function getMinimumQuantity(): ?MinimumQuantity
    {
        return $this->minimumQuantity;
    }

    /**
     * @return MinimumQuantity
     */
    public function getMinimumQuantityWithCreate(): MinimumQuantity
    {
        $this->minimumQuantity = is_null($this->minimumQuantity) ? new MinimumQuantity() : $this->minimumQuantity;

        return $this->minimumQuantity;
    }

    /**
     * @param MinimumQuantity|null $minimumQuantity
     * @return static
     */
    public function setMinimumQuantity(?MinimumQuantity $minimumQuantity = null): static
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMinimumQuantity(): static
    {
        $this->minimumQuantity = null;

        return $this;
    }

    /**
     * @return array<PreSelectedParty>|null
     */
    public function getPreSelectedParty(): ?array
    {
        return $this->preSelectedParty;
    }

    /**
     * @param array<PreSelectedParty>|null $preSelectedParty
     * @return static
     */
    public function setPreSelectedParty(?array $preSelectedParty = null): static
    {
        $this->preSelectedParty = $preSelectedParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPreSelectedParty(): static
    {
        $this->preSelectedParty = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPreSelectedParty(): static
    {
        $this->preSelectedParty = [];

        return $this;
    }

    /**
     * @return PreSelectedParty|null
     */
    public function firstPreSelectedParty(): ?PreSelectedParty
    {
        $preSelectedParty = $this->preSelectedParty ?? [];
        $preSelectedParty = reset($preSelectedParty);

        if ($preSelectedParty === false) {
            return null;
        }

        return $preSelectedParty;
    }

    /**
     * @return PreSelectedParty|null
     */
    public function lastPreSelectedParty(): ?PreSelectedParty
    {
        $preSelectedParty = $this->preSelectedParty ?? [];
        $preSelectedParty = end($preSelectedParty);

        if ($preSelectedParty === false) {
            return null;
        }

        return $preSelectedParty;
    }

    /**
     * @param PreSelectedParty $preSelectedParty
     * @return static
     */
    public function addToPreSelectedParty(PreSelectedParty $preSelectedParty): static
    {
        $this->preSelectedParty[] = $preSelectedParty;

        return $this;
    }

    /**
     * @return PreSelectedParty
     */
    public function addToPreSelectedPartyWithCreate(): PreSelectedParty
    {
        $this->addTopreSelectedParty($preSelectedParty = new PreSelectedParty());

        return $preSelectedParty;
    }

    /**
     * @param PreSelectedParty $preSelectedParty
     * @return static
     */
    public function addOnceToPreSelectedParty(PreSelectedParty $preSelectedParty): static
    {
        if (!is_array($this->preSelectedParty)) {
            $this->preSelectedParty = [];
        }

        $this->preSelectedParty[0] = $preSelectedParty;

        return $this;
    }

    /**
     * @return PreSelectedParty
     */
    public function addOnceToPreSelectedPartyWithCreate(): PreSelectedParty
    {
        if (!is_array($this->preSelectedParty)) {
            $this->preSelectedParty = [];
        }

        if ($this->preSelectedParty === []) {
            $this->addOnceTopreSelectedParty(new PreSelectedParty());
        }

        return $this->preSelectedParty[0];
    }
}
