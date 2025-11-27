<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LeadTimeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TradingRestrictions;

class ItemLocationQuantityType
{
    use HandlesObjectFlags;

    /**
     * @var LeadTimeMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LeadTimeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LeadTimeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLeadTimeMeasure", setter="setLeadTimeMeasure")
     */
    private $leadTimeMeasure;

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
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("HazardousRiskIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHazardousRiskIndicator", setter="setHazardousRiskIndicator")
     */
    private $hazardousRiskIndicator;

    /**
     * @var array<TradingRestrictions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\TradingRestrictions>")
     * @JMS\Expose
     * @JMS\SerializedName("TradingRestrictions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TradingRestrictions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getTradingRestrictions", setter="setTradingRestrictions")
     */
    private $tradingRestrictions;

    /**
     * @var array<ApplicableTerritoryAddress>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ApplicableTerritoryAddress>")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTerritoryAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ApplicableTerritoryAddress", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getApplicableTerritoryAddress", setter="setApplicableTerritoryAddress")
     */
    private $applicableTerritoryAddress;

    /**
     * @var Price|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Price")
     * @JMS\Expose
     * @JMS\SerializedName("Price")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrice", setter="setPrice")
     */
    private $price;

    /**
     * @var array<DeliveryUnit>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DeliveryUnit>")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryUnit")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DeliveryUnit", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDeliveryUnit", setter="setDeliveryUnit")
     */
    private $deliveryUnit;

    /**
     * @var array<ApplicableTaxCategory>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ApplicableTaxCategory>")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTaxCategory")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ApplicableTaxCategory", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getApplicableTaxCategory", setter="setApplicableTaxCategory")
     */
    private $applicableTaxCategory;

    /**
     * @var Package|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Package")
     * @JMS\Expose
     * @JMS\SerializedName("Package")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackage", setter="setPackage")
     */
    private $package;

    /**
     * @var array<AllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAllowanceCharge", setter="setAllowanceCharge")
     */
    private $allowanceCharge;

    /**
     * @var DependentPriceReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DependentPriceReference")
     * @JMS\Expose
     * @JMS\SerializedName("DependentPriceReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDependentPriceReference", setter="setDependentPriceReference")
     */
    private $dependentPriceReference;

    /**
     * @return LeadTimeMeasure|null
     */
    public function getLeadTimeMeasure(): ?LeadTimeMeasure
    {
        return $this->leadTimeMeasure;
    }

    /**
     * @return LeadTimeMeasure
     */
    public function getLeadTimeMeasureWithCreate(): LeadTimeMeasure
    {
        $this->leadTimeMeasure = is_null($this->leadTimeMeasure) ? new LeadTimeMeasure() : $this->leadTimeMeasure;

        return $this->leadTimeMeasure;
    }

    /**
     * @param LeadTimeMeasure|null $leadTimeMeasure
     * @return static
     */
    public function setLeadTimeMeasure(?LeadTimeMeasure $leadTimeMeasure = null): static
    {
        $this->leadTimeMeasure = $leadTimeMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLeadTimeMeasure(): static
    {
        $this->leadTimeMeasure = null;

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
     * @return bool|null
     */
    public function getHazardousRiskIndicator(): ?bool
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * @param bool|null $hazardousRiskIndicator
     * @return static
     */
    public function setHazardousRiskIndicator(?bool $hazardousRiskIndicator = null): static
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHazardousRiskIndicator(): static
    {
        $this->hazardousRiskIndicator = null;

        return $this;
    }

    /**
     * @return array<TradingRestrictions>|null
     */
    public function getTradingRestrictions(): ?array
    {
        return $this->tradingRestrictions;
    }

    /**
     * @param array<TradingRestrictions>|null $tradingRestrictions
     * @return static
     */
    public function setTradingRestrictions(?array $tradingRestrictions = null): static
    {
        $this->tradingRestrictions = $tradingRestrictions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTradingRestrictions(): static
    {
        $this->tradingRestrictions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTradingRestrictions(): static
    {
        $this->tradingRestrictions = [];

        return $this;
    }

    /**
     * @return TradingRestrictions|null
     */
    public function firstTradingRestrictions(): ?TradingRestrictions
    {
        $tradingRestrictions = $this->tradingRestrictions ?? [];
        $tradingRestrictions = reset($tradingRestrictions);

        if ($tradingRestrictions === false) {
            return null;
        }

        return $tradingRestrictions;
    }

    /**
     * @return TradingRestrictions|null
     */
    public function lastTradingRestrictions(): ?TradingRestrictions
    {
        $tradingRestrictions = $this->tradingRestrictions ?? [];
        $tradingRestrictions = end($tradingRestrictions);

        if ($tradingRestrictions === false) {
            return null;
        }

        return $tradingRestrictions;
    }

    /**
     * @param TradingRestrictions $tradingRestrictions
     * @return static
     */
    public function addToTradingRestrictions(TradingRestrictions $tradingRestrictions): static
    {
        $this->tradingRestrictions[] = $tradingRestrictions;

        return $this;
    }

    /**
     * @return TradingRestrictions
     */
    public function addToTradingRestrictionsWithCreate(): TradingRestrictions
    {
        $this->addTotradingRestrictions($tradingRestrictions = new TradingRestrictions());

        return $tradingRestrictions;
    }

    /**
     * @param TradingRestrictions $tradingRestrictions
     * @return static
     */
    public function addOnceToTradingRestrictions(TradingRestrictions $tradingRestrictions): static
    {
        if (!is_array($this->tradingRestrictions)) {
            $this->tradingRestrictions = [];
        }

        $this->tradingRestrictions[0] = $tradingRestrictions;

        return $this;
    }

    /**
     * @return TradingRestrictions
     */
    public function addOnceToTradingRestrictionsWithCreate(): TradingRestrictions
    {
        if (!is_array($this->tradingRestrictions)) {
            $this->tradingRestrictions = [];
        }

        if ($this->tradingRestrictions === []) {
            $this->addOnceTotradingRestrictions(new TradingRestrictions());
        }

        return $this->tradingRestrictions[0];
    }

    /**
     * @return array<ApplicableTerritoryAddress>|null
     */
    public function getApplicableTerritoryAddress(): ?array
    {
        return $this->applicableTerritoryAddress;
    }

    /**
     * @param array<ApplicableTerritoryAddress>|null $applicableTerritoryAddress
     * @return static
     */
    public function setApplicableTerritoryAddress(?array $applicableTerritoryAddress = null): static
    {
        $this->applicableTerritoryAddress = $applicableTerritoryAddress;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableTerritoryAddress(): static
    {
        $this->applicableTerritoryAddress = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearApplicableTerritoryAddress(): static
    {
        $this->applicableTerritoryAddress = [];

        return $this;
    }

    /**
     * @return ApplicableTerritoryAddress|null
     */
    public function firstApplicableTerritoryAddress(): ?ApplicableTerritoryAddress
    {
        $applicableTerritoryAddress = $this->applicableTerritoryAddress ?? [];
        $applicableTerritoryAddress = reset($applicableTerritoryAddress);

        if ($applicableTerritoryAddress === false) {
            return null;
        }

        return $applicableTerritoryAddress;
    }

    /**
     * @return ApplicableTerritoryAddress|null
     */
    public function lastApplicableTerritoryAddress(): ?ApplicableTerritoryAddress
    {
        $applicableTerritoryAddress = $this->applicableTerritoryAddress ?? [];
        $applicableTerritoryAddress = end($applicableTerritoryAddress);

        if ($applicableTerritoryAddress === false) {
            return null;
        }

        return $applicableTerritoryAddress;
    }

    /**
     * @param ApplicableTerritoryAddress $applicableTerritoryAddress
     * @return static
     */
    public function addToApplicableTerritoryAddress(ApplicableTerritoryAddress $applicableTerritoryAddress): static
    {
        $this->applicableTerritoryAddress[] = $applicableTerritoryAddress;

        return $this;
    }

    /**
     * @return ApplicableTerritoryAddress
     */
    public function addToApplicableTerritoryAddressWithCreate(): ApplicableTerritoryAddress
    {
        $this->addToapplicableTerritoryAddress($applicableTerritoryAddress = new ApplicableTerritoryAddress());

        return $applicableTerritoryAddress;
    }

    /**
     * @param ApplicableTerritoryAddress $applicableTerritoryAddress
     * @return static
     */
    public function addOnceToApplicableTerritoryAddress(ApplicableTerritoryAddress $applicableTerritoryAddress): static
    {
        if (!is_array($this->applicableTerritoryAddress)) {
            $this->applicableTerritoryAddress = [];
        }

        $this->applicableTerritoryAddress[0] = $applicableTerritoryAddress;

        return $this;
    }

    /**
     * @return ApplicableTerritoryAddress
     */
    public function addOnceToApplicableTerritoryAddressWithCreate(): ApplicableTerritoryAddress
    {
        if (!is_array($this->applicableTerritoryAddress)) {
            $this->applicableTerritoryAddress = [];
        }

        if ($this->applicableTerritoryAddress === []) {
            $this->addOnceToapplicableTerritoryAddress(new ApplicableTerritoryAddress());
        }

        return $this->applicableTerritoryAddress[0];
    }

    /**
     * @return Price|null
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * @return Price
     */
    public function getPriceWithCreate(): Price
    {
        $this->price = is_null($this->price) ? new Price() : $this->price;

        return $this->price;
    }

    /**
     * @param Price|null $price
     * @return static
     */
    public function setPrice(?Price $price = null): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPrice(): static
    {
        $this->price = null;

        return $this;
    }

    /**
     * @return array<DeliveryUnit>|null
     */
    public function getDeliveryUnit(): ?array
    {
        return $this->deliveryUnit;
    }

    /**
     * @param array<DeliveryUnit>|null $deliveryUnit
     * @return static
     */
    public function setDeliveryUnit(?array $deliveryUnit = null): static
    {
        $this->deliveryUnit = $deliveryUnit;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeliveryUnit(): static
    {
        $this->deliveryUnit = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDeliveryUnit(): static
    {
        $this->deliveryUnit = [];

        return $this;
    }

    /**
     * @return DeliveryUnit|null
     */
    public function firstDeliveryUnit(): ?DeliveryUnit
    {
        $deliveryUnit = $this->deliveryUnit ?? [];
        $deliveryUnit = reset($deliveryUnit);

        if ($deliveryUnit === false) {
            return null;
        }

        return $deliveryUnit;
    }

    /**
     * @return DeliveryUnit|null
     */
    public function lastDeliveryUnit(): ?DeliveryUnit
    {
        $deliveryUnit = $this->deliveryUnit ?? [];
        $deliveryUnit = end($deliveryUnit);

        if ($deliveryUnit === false) {
            return null;
        }

        return $deliveryUnit;
    }

    /**
     * @param DeliveryUnit $deliveryUnit
     * @return static
     */
    public function addToDeliveryUnit(DeliveryUnit $deliveryUnit): static
    {
        $this->deliveryUnit[] = $deliveryUnit;

        return $this;
    }

    /**
     * @return DeliveryUnit
     */
    public function addToDeliveryUnitWithCreate(): DeliveryUnit
    {
        $this->addTodeliveryUnit($deliveryUnit = new DeliveryUnit());

        return $deliveryUnit;
    }

    /**
     * @param DeliveryUnit $deliveryUnit
     * @return static
     */
    public function addOnceToDeliveryUnit(DeliveryUnit $deliveryUnit): static
    {
        if (!is_array($this->deliveryUnit)) {
            $this->deliveryUnit = [];
        }

        $this->deliveryUnit[0] = $deliveryUnit;

        return $this;
    }

    /**
     * @return DeliveryUnit
     */
    public function addOnceToDeliveryUnitWithCreate(): DeliveryUnit
    {
        if (!is_array($this->deliveryUnit)) {
            $this->deliveryUnit = [];
        }

        if ($this->deliveryUnit === []) {
            $this->addOnceTodeliveryUnit(new DeliveryUnit());
        }

        return $this->deliveryUnit[0];
    }

    /**
     * @return array<ApplicableTaxCategory>|null
     */
    public function getApplicableTaxCategory(): ?array
    {
        return $this->applicableTaxCategory;
    }

    /**
     * @param array<ApplicableTaxCategory>|null $applicableTaxCategory
     * @return static
     */
    public function setApplicableTaxCategory(?array $applicableTaxCategory = null): static
    {
        $this->applicableTaxCategory = $applicableTaxCategory;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableTaxCategory(): static
    {
        $this->applicableTaxCategory = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearApplicableTaxCategory(): static
    {
        $this->applicableTaxCategory = [];

        return $this;
    }

    /**
     * @return ApplicableTaxCategory|null
     */
    public function firstApplicableTaxCategory(): ?ApplicableTaxCategory
    {
        $applicableTaxCategory = $this->applicableTaxCategory ?? [];
        $applicableTaxCategory = reset($applicableTaxCategory);

        if ($applicableTaxCategory === false) {
            return null;
        }

        return $applicableTaxCategory;
    }

    /**
     * @return ApplicableTaxCategory|null
     */
    public function lastApplicableTaxCategory(): ?ApplicableTaxCategory
    {
        $applicableTaxCategory = $this->applicableTaxCategory ?? [];
        $applicableTaxCategory = end($applicableTaxCategory);

        if ($applicableTaxCategory === false) {
            return null;
        }

        return $applicableTaxCategory;
    }

    /**
     * @param ApplicableTaxCategory $applicableTaxCategory
     * @return static
     */
    public function addToApplicableTaxCategory(ApplicableTaxCategory $applicableTaxCategory): static
    {
        $this->applicableTaxCategory[] = $applicableTaxCategory;

        return $this;
    }

    /**
     * @return ApplicableTaxCategory
     */
    public function addToApplicableTaxCategoryWithCreate(): ApplicableTaxCategory
    {
        $this->addToapplicableTaxCategory($applicableTaxCategory = new ApplicableTaxCategory());

        return $applicableTaxCategory;
    }

    /**
     * @param ApplicableTaxCategory $applicableTaxCategory
     * @return static
     */
    public function addOnceToApplicableTaxCategory(ApplicableTaxCategory $applicableTaxCategory): static
    {
        if (!is_array($this->applicableTaxCategory)) {
            $this->applicableTaxCategory = [];
        }

        $this->applicableTaxCategory[0] = $applicableTaxCategory;

        return $this;
    }

    /**
     * @return ApplicableTaxCategory
     */
    public function addOnceToApplicableTaxCategoryWithCreate(): ApplicableTaxCategory
    {
        if (!is_array($this->applicableTaxCategory)) {
            $this->applicableTaxCategory = [];
        }

        if ($this->applicableTaxCategory === []) {
            $this->addOnceToapplicableTaxCategory(new ApplicableTaxCategory());
        }

        return $this->applicableTaxCategory[0];
    }

    /**
     * @return Package|null
     */
    public function getPackage(): ?Package
    {
        return $this->package;
    }

    /**
     * @return Package
     */
    public function getPackageWithCreate(): Package
    {
        $this->package = is_null($this->package) ? new Package() : $this->package;

        return $this->package;
    }

    /**
     * @param Package|null $package
     * @return static
     */
    public function setPackage(?Package $package = null): static
    {
        $this->package = $package;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPackage(): static
    {
        $this->package = null;

        return $this;
    }

    /**
     * @return array<AllowanceCharge>|null
     */
    public function getAllowanceCharge(): ?array
    {
        return $this->allowanceCharge;
    }

    /**
     * @param array<AllowanceCharge>|null $allowanceCharge
     * @return static
     */
    public function setAllowanceCharge(?array $allowanceCharge = null): static
    {
        $this->allowanceCharge = $allowanceCharge;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAllowanceCharge(): static
    {
        $this->allowanceCharge = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAllowanceCharge(): static
    {
        $this->allowanceCharge = [];

        return $this;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function firstAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = reset($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function lastAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = end($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return static
     */
    public function addToAllowanceCharge(AllowanceCharge $allowanceCharge): static
    {
        $this->allowanceCharge[] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addToAllowanceChargeWithCreate(): AllowanceCharge
    {
        $this->addToallowanceCharge($allowanceCharge = new AllowanceCharge());

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return static
     */
    public function addOnceToAllowanceCharge(AllowanceCharge $allowanceCharge): static
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        $this->allowanceCharge[0] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addOnceToAllowanceChargeWithCreate(): AllowanceCharge
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        if ($this->allowanceCharge === []) {
            $this->addOnceToallowanceCharge(new AllowanceCharge());
        }

        return $this->allowanceCharge[0];
    }

    /**
     * @return DependentPriceReference|null
     */
    public function getDependentPriceReference(): ?DependentPriceReference
    {
        return $this->dependentPriceReference;
    }

    /**
     * @return DependentPriceReference
     */
    public function getDependentPriceReferenceWithCreate(): DependentPriceReference
    {
        $this->dependentPriceReference = is_null($this->dependentPriceReference) ? new DependentPriceReference() : $this->dependentPriceReference;

        return $this->dependentPriceReference;
    }

    /**
     * @param DependentPriceReference|null $dependentPriceReference
     * @return static
     */
    public function setDependentPriceReference(?DependentPriceReference $dependentPriceReference = null): static
    {
        $this->dependentPriceReference = $dependentPriceReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDependentPriceReference(): static
    {
        $this->dependentPriceReference = null;

        return $this;
    }
}
