<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BaseUnitMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PerUnitAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Percent;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TaxExemptionReason;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TaxExemptionReasonCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TierRange;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TierRatePercent;

class TaxCategoryType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var Name|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Name")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var Percent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Percent")
     * @JMS\Expose
     * @JMS\SerializedName("Percent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPercent", setter="setPercent")
     */
    private $percent;

    /**
     * @var BaseUnitMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BaseUnitMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("BaseUnitMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBaseUnitMeasure", setter="setBaseUnitMeasure")
     */
    private $baseUnitMeasure;

    /**
     * @var PerUnitAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PerUnitAmount")
     * @JMS\Expose
     * @JMS\SerializedName("PerUnitAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPerUnitAmount", setter="setPerUnitAmount")
     */
    private $perUnitAmount;

    /**
     * @var TaxExemptionReasonCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TaxExemptionReasonCode")
     * @JMS\Expose
     * @JMS\SerializedName("TaxExemptionReasonCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxExemptionReasonCode", setter="setTaxExemptionReasonCode")
     */
    private $taxExemptionReasonCode;

    /**
     * @var array<TaxExemptionReason>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\TaxExemptionReason>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxExemptionReason")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxExemptionReason", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getTaxExemptionReason", setter="setTaxExemptionReason")
     */
    private $taxExemptionReason;

    /**
     * @var TierRange|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TierRange")
     * @JMS\Expose
     * @JMS\SerializedName("TierRange")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTierRange", setter="setTierRange")
     */
    private $tierRange;

    /**
     * @var TierRatePercent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TierRatePercent")
     * @JMS\Expose
     * @JMS\SerializedName("TierRatePercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTierRatePercent", setter="setTierRatePercent")
     */
    private $tierRatePercent;

    /**
     * @var TaxScheme|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TaxScheme")
     * @JMS\Expose
     * @JMS\SerializedName("TaxScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxScheme", setter="setTaxScheme")
     */
    private $taxScheme;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return static
     */
    public function setID(?ID $iD = null): static
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
     * @return Name|null
     */
    public function getName(): ?Name
    {
        return $this->name;
    }

    /**
     * @return Name
     */
    public function getNameWithCreate(): Name
    {
        $this->name = is_null($this->name) ? new Name() : $this->name;

        return $this->name;
    }

    /**
     * @param Name|null $name
     * @return static
     */
    public function setName(?Name $name = null): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetName(): static
    {
        $this->name = null;

        return $this;
    }

    /**
     * @return Percent|null
     */
    public function getPercent(): ?Percent
    {
        return $this->percent;
    }

    /**
     * @return Percent
     */
    public function getPercentWithCreate(): Percent
    {
        $this->percent = is_null($this->percent) ? new Percent() : $this->percent;

        return $this->percent;
    }

    /**
     * @param Percent|null $percent
     * @return static
     */
    public function setPercent(?Percent $percent = null): static
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPercent(): static
    {
        $this->percent = null;

        return $this;
    }

    /**
     * @return BaseUnitMeasure|null
     */
    public function getBaseUnitMeasure(): ?BaseUnitMeasure
    {
        return $this->baseUnitMeasure;
    }

    /**
     * @return BaseUnitMeasure
     */
    public function getBaseUnitMeasureWithCreate(): BaseUnitMeasure
    {
        $this->baseUnitMeasure = is_null($this->baseUnitMeasure) ? new BaseUnitMeasure() : $this->baseUnitMeasure;

        return $this->baseUnitMeasure;
    }

    /**
     * @param BaseUnitMeasure|null $baseUnitMeasure
     * @return static
     */
    public function setBaseUnitMeasure(?BaseUnitMeasure $baseUnitMeasure = null): static
    {
        $this->baseUnitMeasure = $baseUnitMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBaseUnitMeasure(): static
    {
        $this->baseUnitMeasure = null;

        return $this;
    }

    /**
     * @return PerUnitAmount|null
     */
    public function getPerUnitAmount(): ?PerUnitAmount
    {
        return $this->perUnitAmount;
    }

    /**
     * @return PerUnitAmount
     */
    public function getPerUnitAmountWithCreate(): PerUnitAmount
    {
        $this->perUnitAmount = is_null($this->perUnitAmount) ? new PerUnitAmount() : $this->perUnitAmount;

        return $this->perUnitAmount;
    }

    /**
     * @param PerUnitAmount|null $perUnitAmount
     * @return static
     */
    public function setPerUnitAmount(?PerUnitAmount $perUnitAmount = null): static
    {
        $this->perUnitAmount = $perUnitAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPerUnitAmount(): static
    {
        $this->perUnitAmount = null;

        return $this;
    }

    /**
     * @return TaxExemptionReasonCode|null
     */
    public function getTaxExemptionReasonCode(): ?TaxExemptionReasonCode
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * @return TaxExemptionReasonCode
     */
    public function getTaxExemptionReasonCodeWithCreate(): TaxExemptionReasonCode
    {
        $this->taxExemptionReasonCode = is_null($this->taxExemptionReasonCode) ? new TaxExemptionReasonCode() : $this->taxExemptionReasonCode;

        return $this->taxExemptionReasonCode;
    }

    /**
     * @param TaxExemptionReasonCode|null $taxExemptionReasonCode
     * @return static
     */
    public function setTaxExemptionReasonCode(?TaxExemptionReasonCode $taxExemptionReasonCode = null): static
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxExemptionReasonCode(): static
    {
        $this->taxExemptionReasonCode = null;

        return $this;
    }

    /**
     * @return array<TaxExemptionReason>|null
     */
    public function getTaxExemptionReason(): ?array
    {
        return $this->taxExemptionReason;
    }

    /**
     * @param array<TaxExemptionReason>|null $taxExemptionReason
     * @return static
     */
    public function setTaxExemptionReason(?array $taxExemptionReason = null): static
    {
        $this->taxExemptionReason = $taxExemptionReason;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxExemptionReason(): static
    {
        $this->taxExemptionReason = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTaxExemptionReason(): static
    {
        $this->taxExemptionReason = [];

        return $this;
    }

    /**
     * @return TaxExemptionReason|null
     */
    public function firstTaxExemptionReason(): ?TaxExemptionReason
    {
        $taxExemptionReason = $this->taxExemptionReason ?? [];
        $taxExemptionReason = reset($taxExemptionReason);

        if ($taxExemptionReason === false) {
            return null;
        }

        return $taxExemptionReason;
    }

    /**
     * @return TaxExemptionReason|null
     */
    public function lastTaxExemptionReason(): ?TaxExemptionReason
    {
        $taxExemptionReason = $this->taxExemptionReason ?? [];
        $taxExemptionReason = end($taxExemptionReason);

        if ($taxExemptionReason === false) {
            return null;
        }

        return $taxExemptionReason;
    }

    /**
     * @param TaxExemptionReason $taxExemptionReason
     * @return static
     */
    public function addToTaxExemptionReason(TaxExemptionReason $taxExemptionReason): static
    {
        $this->taxExemptionReason[] = $taxExemptionReason;

        return $this;
    }

    /**
     * @return TaxExemptionReason
     */
    public function addToTaxExemptionReasonWithCreate(): TaxExemptionReason
    {
        $this->addTotaxExemptionReason($taxExemptionReason = new TaxExemptionReason());

        return $taxExemptionReason;
    }

    /**
     * @param TaxExemptionReason $taxExemptionReason
     * @return static
     */
    public function addOnceToTaxExemptionReason(TaxExemptionReason $taxExemptionReason): static
    {
        if (!is_array($this->taxExemptionReason)) {
            $this->taxExemptionReason = [];
        }

        $this->taxExemptionReason[0] = $taxExemptionReason;

        return $this;
    }

    /**
     * @return TaxExemptionReason
     */
    public function addOnceToTaxExemptionReasonWithCreate(): TaxExemptionReason
    {
        if (!is_array($this->taxExemptionReason)) {
            $this->taxExemptionReason = [];
        }

        if ($this->taxExemptionReason === []) {
            $this->addOnceTotaxExemptionReason(new TaxExemptionReason());
        }

        return $this->taxExemptionReason[0];
    }

    /**
     * @return TierRange|null
     */
    public function getTierRange(): ?TierRange
    {
        return $this->tierRange;
    }

    /**
     * @return TierRange
     */
    public function getTierRangeWithCreate(): TierRange
    {
        $this->tierRange = is_null($this->tierRange) ? new TierRange() : $this->tierRange;

        return $this->tierRange;
    }

    /**
     * @param TierRange|null $tierRange
     * @return static
     */
    public function setTierRange(?TierRange $tierRange = null): static
    {
        $this->tierRange = $tierRange;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTierRange(): static
    {
        $this->tierRange = null;

        return $this;
    }

    /**
     * @return TierRatePercent|null
     */
    public function getTierRatePercent(): ?TierRatePercent
    {
        return $this->tierRatePercent;
    }

    /**
     * @return TierRatePercent
     */
    public function getTierRatePercentWithCreate(): TierRatePercent
    {
        $this->tierRatePercent = is_null($this->tierRatePercent) ? new TierRatePercent() : $this->tierRatePercent;

        return $this->tierRatePercent;
    }

    /**
     * @param TierRatePercent|null $tierRatePercent
     * @return static
     */
    public function setTierRatePercent(?TierRatePercent $tierRatePercent = null): static
    {
        $this->tierRatePercent = $tierRatePercent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTierRatePercent(): static
    {
        $this->tierRatePercent = null;

        return $this;
    }

    /**
     * @return TaxScheme|null
     */
    public function getTaxScheme(): ?TaxScheme
    {
        return $this->taxScheme;
    }

    /**
     * @return TaxScheme
     */
    public function getTaxSchemeWithCreate(): TaxScheme
    {
        $this->taxScheme = is_null($this->taxScheme) ? new TaxScheme() : $this->taxScheme;

        return $this->taxScheme;
    }

    /**
     * @param TaxScheme|null $taxScheme
     * @return static
     */
    public function setTaxScheme(?TaxScheme $taxScheme = null): static
    {
        $this->taxScheme = $taxScheme;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxScheme(): static
    {
        $this->taxScheme = null;

        return $this;
    }
}
