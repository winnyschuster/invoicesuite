<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Amount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumPercent;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumPercent;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Rate;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SubcontractingConditionsCode;

class SubcontractTermsType
{
    use HandlesObjectFlags;

    /**
     * @var Rate|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Rate")
     * @JMS\Expose
     * @JMS\SerializedName("Rate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRate", setter="setRate")
     */
    private $rate;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("UnknownPriceIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUnknownPriceIndicator", setter="setUnknownPriceIndicator")
     */
    private $unknownPriceIndicator;

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
     * @var Amount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Amount")
     * @JMS\Expose
     * @JMS\SerializedName("Amount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAmount", setter="setAmount")
     */
    private $amount;

    /**
     * @var SubcontractingConditionsCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SubcontractingConditionsCode")
     * @JMS\Expose
     * @JMS\SerializedName("SubcontractingConditionsCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubcontractingConditionsCode", setter="setSubcontractingConditionsCode")
     */
    private $subcontractingConditionsCode;

    /**
     * @var MaximumPercent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumPercent")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumPercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumPercent", setter="setMaximumPercent")
     */
    private $maximumPercent;

    /**
     * @var MinimumPercent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumPercent")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumPercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumPercent", setter="setMinimumPercent")
     */
    private $minimumPercent;

    /**
     * @return Rate|null
     */
    public function getRate(): ?Rate
    {
        return $this->rate;
    }

    /**
     * @return Rate
     */
    public function getRateWithCreate(): Rate
    {
        $this->rate = is_null($this->rate) ? new Rate() : $this->rate;

        return $this->rate;
    }

    /**
     * @param Rate|null $rate
     * @return static
     */
    public function setRate(?Rate $rate = null): static
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRate(): static
    {
        $this->rate = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUnknownPriceIndicator(): ?bool
    {
        return $this->unknownPriceIndicator;
    }

    /**
     * @param bool|null $unknownPriceIndicator
     * @return static
     */
    public function setUnknownPriceIndicator(?bool $unknownPriceIndicator = null): static
    {
        $this->unknownPriceIndicator = $unknownPriceIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUnknownPriceIndicator(): static
    {
        $this->unknownPriceIndicator = null;

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
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    /**
     * @return Amount
     */
    public function getAmountWithCreate(): Amount
    {
        $this->amount = is_null($this->amount) ? new Amount() : $this->amount;

        return $this->amount;
    }

    /**
     * @param Amount|null $amount
     * @return static
     */
    public function setAmount(?Amount $amount = null): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAmount(): static
    {
        $this->amount = null;

        return $this;
    }

    /**
     * @return SubcontractingConditionsCode|null
     */
    public function getSubcontractingConditionsCode(): ?SubcontractingConditionsCode
    {
        return $this->subcontractingConditionsCode;
    }

    /**
     * @return SubcontractingConditionsCode
     */
    public function getSubcontractingConditionsCodeWithCreate(): SubcontractingConditionsCode
    {
        $this->subcontractingConditionsCode = is_null($this->subcontractingConditionsCode) ? new SubcontractingConditionsCode() : $this->subcontractingConditionsCode;

        return $this->subcontractingConditionsCode;
    }

    /**
     * @param SubcontractingConditionsCode|null $subcontractingConditionsCode
     * @return static
     */
    public function setSubcontractingConditionsCode(
        ?SubcontractingConditionsCode $subcontractingConditionsCode = null,
    ): static {
        $this->subcontractingConditionsCode = $subcontractingConditionsCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSubcontractingConditionsCode(): static
    {
        $this->subcontractingConditionsCode = null;

        return $this;
    }

    /**
     * @return MaximumPercent|null
     */
    public function getMaximumPercent(): ?MaximumPercent
    {
        return $this->maximumPercent;
    }

    /**
     * @return MaximumPercent
     */
    public function getMaximumPercentWithCreate(): MaximumPercent
    {
        $this->maximumPercent = is_null($this->maximumPercent) ? new MaximumPercent() : $this->maximumPercent;

        return $this->maximumPercent;
    }

    /**
     * @param MaximumPercent|null $maximumPercent
     * @return static
     */
    public function setMaximumPercent(?MaximumPercent $maximumPercent = null): static
    {
        $this->maximumPercent = $maximumPercent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMaximumPercent(): static
    {
        $this->maximumPercent = null;

        return $this;
    }

    /**
     * @return MinimumPercent|null
     */
    public function getMinimumPercent(): ?MinimumPercent
    {
        return $this->minimumPercent;
    }

    /**
     * @return MinimumPercent
     */
    public function getMinimumPercentWithCreate(): MinimumPercent
    {
        $this->minimumPercent = is_null($this->minimumPercent) ? new MinimumPercent() : $this->minimumPercent;

        return $this->minimumPercent;
    }

    /**
     * @param MinimumPercent|null $minimumPercent
     * @return static
     */
    public function setMinimumPercent(?MinimumPercent $minimumPercent = null): static
    {
        $this->minimumPercent = $minimumPercent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMinimumPercent(): static
    {
        $this->minimumPercent = null;

        return $this;
    }
}
