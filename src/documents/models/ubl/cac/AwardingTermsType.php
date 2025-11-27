<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LowTendersDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PrizeDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TechnicalCommitteeDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\WeightingAlgorithmCode;

class AwardingTermsType
{
    use HandlesObjectFlags;

    /**
     * @var WeightingAlgorithmCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\WeightingAlgorithmCode")
     * @JMS\Expose
     * @JMS\SerializedName("WeightingAlgorithmCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWeightingAlgorithmCode", setter="setWeightingAlgorithmCode")
     */
    private $weightingAlgorithmCode;

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
     * @var array<TechnicalCommitteeDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\TechnicalCommitteeDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("TechnicalCommitteeDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TechnicalCommitteeDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getTechnicalCommitteeDescription", setter="setTechnicalCommitteeDescription")
     */
    private $technicalCommitteeDescription;

    /**
     * @var array<LowTendersDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\LowTendersDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("LowTendersDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="LowTendersDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getLowTendersDescription", setter="setLowTendersDescription")
     */
    private $lowTendersDescription;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("PrizeIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrizeIndicator", setter="setPrizeIndicator")
     */
    private $prizeIndicator;

    /**
     * @var array<PrizeDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\PrizeDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("PrizeDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PrizeDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPrizeDescription", setter="setPrizeDescription")
     */
    private $prizeDescription;

    /**
     * @var array<PaymentDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PaymentDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPaymentDescription", setter="setPaymentDescription")
     */
    private $paymentDescription;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("FollowupContractIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFollowupContractIndicator", setter="setFollowupContractIndicator")
     */
    private $followupContractIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("BindingOnBuyerIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBindingOnBuyerIndicator", setter="setBindingOnBuyerIndicator")
     */
    private $bindingOnBuyerIndicator;

    /**
     * @var array<AwardingCriterion>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AwardingCriterion>")
     * @JMS\Expose
     * @JMS\SerializedName("AwardingCriterion")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AwardingCriterion", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAwardingCriterion", setter="setAwardingCriterion")
     */
    private $awardingCriterion;

    /**
     * @var array<TechnicalCommitteePerson>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TechnicalCommitteePerson>")
     * @JMS\Expose
     * @JMS\SerializedName("TechnicalCommitteePerson")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TechnicalCommitteePerson", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTechnicalCommitteePerson", setter="setTechnicalCommitteePerson")
     */
    private $technicalCommitteePerson;

    /**
     * @return WeightingAlgorithmCode|null
     */
    public function getWeightingAlgorithmCode(): ?WeightingAlgorithmCode
    {
        return $this->weightingAlgorithmCode;
    }

    /**
     * @return WeightingAlgorithmCode
     */
    public function getWeightingAlgorithmCodeWithCreate(): WeightingAlgorithmCode
    {
        $this->weightingAlgorithmCode = is_null($this->weightingAlgorithmCode) ? new WeightingAlgorithmCode() : $this->weightingAlgorithmCode;

        return $this->weightingAlgorithmCode;
    }

    /**
     * @param WeightingAlgorithmCode|null $weightingAlgorithmCode
     * @return static
     */
    public function setWeightingAlgorithmCode(?WeightingAlgorithmCode $weightingAlgorithmCode = null): static
    {
        $this->weightingAlgorithmCode = $weightingAlgorithmCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetWeightingAlgorithmCode(): static
    {
        $this->weightingAlgorithmCode = null;

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
     * @return array<TechnicalCommitteeDescription>|null
     */
    public function getTechnicalCommitteeDescription(): ?array
    {
        return $this->technicalCommitteeDescription;
    }

    /**
     * @param array<TechnicalCommitteeDescription>|null $technicalCommitteeDescription
     * @return static
     */
    public function setTechnicalCommitteeDescription(?array $technicalCommitteeDescription = null): static
    {
        $this->technicalCommitteeDescription = $technicalCommitteeDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTechnicalCommitteeDescription(): static
    {
        $this->technicalCommitteeDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTechnicalCommitteeDescription(): static
    {
        $this->technicalCommitteeDescription = [];

        return $this;
    }

    /**
     * @return TechnicalCommitteeDescription|null
     */
    public function firstTechnicalCommitteeDescription(): ?TechnicalCommitteeDescription
    {
        $technicalCommitteeDescription = $this->technicalCommitteeDescription ?? [];
        $technicalCommitteeDescription = reset($technicalCommitteeDescription);

        if ($technicalCommitteeDescription === false) {
            return null;
        }

        return $technicalCommitteeDescription;
    }

    /**
     * @return TechnicalCommitteeDescription|null
     */
    public function lastTechnicalCommitteeDescription(): ?TechnicalCommitteeDescription
    {
        $technicalCommitteeDescription = $this->technicalCommitteeDescription ?? [];
        $technicalCommitteeDescription = end($technicalCommitteeDescription);

        if ($technicalCommitteeDescription === false) {
            return null;
        }

        return $technicalCommitteeDescription;
    }

    /**
     * @param TechnicalCommitteeDescription $technicalCommitteeDescription
     * @return static
     */
    public function addToTechnicalCommitteeDescription(
        TechnicalCommitteeDescription $technicalCommitteeDescription,
    ): static {
        $this->technicalCommitteeDescription[] = $technicalCommitteeDescription;

        return $this;
    }

    /**
     * @return TechnicalCommitteeDescription
     */
    public function addToTechnicalCommitteeDescriptionWithCreate(): TechnicalCommitteeDescription
    {
        $this->addTotechnicalCommitteeDescription($technicalCommitteeDescription = new TechnicalCommitteeDescription());

        return $technicalCommitteeDescription;
    }

    /**
     * @param TechnicalCommitteeDescription $technicalCommitteeDescription
     * @return static
     */
    public function addOnceToTechnicalCommitteeDescription(
        TechnicalCommitteeDescription $technicalCommitteeDescription,
    ): static {
        if (!is_array($this->technicalCommitteeDescription)) {
            $this->technicalCommitteeDescription = [];
        }

        $this->technicalCommitteeDescription[0] = $technicalCommitteeDescription;

        return $this;
    }

    /**
     * @return TechnicalCommitteeDescription
     */
    public function addOnceToTechnicalCommitteeDescriptionWithCreate(): TechnicalCommitteeDescription
    {
        if (!is_array($this->technicalCommitteeDescription)) {
            $this->technicalCommitteeDescription = [];
        }

        if ($this->technicalCommitteeDescription === []) {
            $this->addOnceTotechnicalCommitteeDescription(new TechnicalCommitteeDescription());
        }

        return $this->technicalCommitteeDescription[0];
    }

    /**
     * @return array<LowTendersDescription>|null
     */
    public function getLowTendersDescription(): ?array
    {
        return $this->lowTendersDescription;
    }

    /**
     * @param array<LowTendersDescription>|null $lowTendersDescription
     * @return static
     */
    public function setLowTendersDescription(?array $lowTendersDescription = null): static
    {
        $this->lowTendersDescription = $lowTendersDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLowTendersDescription(): static
    {
        $this->lowTendersDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearLowTendersDescription(): static
    {
        $this->lowTendersDescription = [];

        return $this;
    }

    /**
     * @return LowTendersDescription|null
     */
    public function firstLowTendersDescription(): ?LowTendersDescription
    {
        $lowTendersDescription = $this->lowTendersDescription ?? [];
        $lowTendersDescription = reset($lowTendersDescription);

        if ($lowTendersDescription === false) {
            return null;
        }

        return $lowTendersDescription;
    }

    /**
     * @return LowTendersDescription|null
     */
    public function lastLowTendersDescription(): ?LowTendersDescription
    {
        $lowTendersDescription = $this->lowTendersDescription ?? [];
        $lowTendersDescription = end($lowTendersDescription);

        if ($lowTendersDescription === false) {
            return null;
        }

        return $lowTendersDescription;
    }

    /**
     * @param LowTendersDescription $lowTendersDescription
     * @return static
     */
    public function addToLowTendersDescription(LowTendersDescription $lowTendersDescription): static
    {
        $this->lowTendersDescription[] = $lowTendersDescription;

        return $this;
    }

    /**
     * @return LowTendersDescription
     */
    public function addToLowTendersDescriptionWithCreate(): LowTendersDescription
    {
        $this->addTolowTendersDescription($lowTendersDescription = new LowTendersDescription());

        return $lowTendersDescription;
    }

    /**
     * @param LowTendersDescription $lowTendersDescription
     * @return static
     */
    public function addOnceToLowTendersDescription(LowTendersDescription $lowTendersDescription): static
    {
        if (!is_array($this->lowTendersDescription)) {
            $this->lowTendersDescription = [];
        }

        $this->lowTendersDescription[0] = $lowTendersDescription;

        return $this;
    }

    /**
     * @return LowTendersDescription
     */
    public function addOnceToLowTendersDescriptionWithCreate(): LowTendersDescription
    {
        if (!is_array($this->lowTendersDescription)) {
            $this->lowTendersDescription = [];
        }

        if ($this->lowTendersDescription === []) {
            $this->addOnceTolowTendersDescription(new LowTendersDescription());
        }

        return $this->lowTendersDescription[0];
    }

    /**
     * @return bool|null
     */
    public function getPrizeIndicator(): ?bool
    {
        return $this->prizeIndicator;
    }

    /**
     * @param bool|null $prizeIndicator
     * @return static
     */
    public function setPrizeIndicator(?bool $prizeIndicator = null): static
    {
        $this->prizeIndicator = $prizeIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPrizeIndicator(): static
    {
        $this->prizeIndicator = null;

        return $this;
    }

    /**
     * @return array<PrizeDescription>|null
     */
    public function getPrizeDescription(): ?array
    {
        return $this->prizeDescription;
    }

    /**
     * @param array<PrizeDescription>|null $prizeDescription
     * @return static
     */
    public function setPrizeDescription(?array $prizeDescription = null): static
    {
        $this->prizeDescription = $prizeDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPrizeDescription(): static
    {
        $this->prizeDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPrizeDescription(): static
    {
        $this->prizeDescription = [];

        return $this;
    }

    /**
     * @return PrizeDescription|null
     */
    public function firstPrizeDescription(): ?PrizeDescription
    {
        $prizeDescription = $this->prizeDescription ?? [];
        $prizeDescription = reset($prizeDescription);

        if ($prizeDescription === false) {
            return null;
        }

        return $prizeDescription;
    }

    /**
     * @return PrizeDescription|null
     */
    public function lastPrizeDescription(): ?PrizeDescription
    {
        $prizeDescription = $this->prizeDescription ?? [];
        $prizeDescription = end($prizeDescription);

        if ($prizeDescription === false) {
            return null;
        }

        return $prizeDescription;
    }

    /**
     * @param PrizeDescription $prizeDescription
     * @return static
     */
    public function addToPrizeDescription(PrizeDescription $prizeDescription): static
    {
        $this->prizeDescription[] = $prizeDescription;

        return $this;
    }

    /**
     * @return PrizeDescription
     */
    public function addToPrizeDescriptionWithCreate(): PrizeDescription
    {
        $this->addToprizeDescription($prizeDescription = new PrizeDescription());

        return $prizeDescription;
    }

    /**
     * @param PrizeDescription $prizeDescription
     * @return static
     */
    public function addOnceToPrizeDescription(PrizeDescription $prizeDescription): static
    {
        if (!is_array($this->prizeDescription)) {
            $this->prizeDescription = [];
        }

        $this->prizeDescription[0] = $prizeDescription;

        return $this;
    }

    /**
     * @return PrizeDescription
     */
    public function addOnceToPrizeDescriptionWithCreate(): PrizeDescription
    {
        if (!is_array($this->prizeDescription)) {
            $this->prizeDescription = [];
        }

        if ($this->prizeDescription === []) {
            $this->addOnceToprizeDescription(new PrizeDescription());
        }

        return $this->prizeDescription[0];
    }

    /**
     * @return array<PaymentDescription>|null
     */
    public function getPaymentDescription(): ?array
    {
        return $this->paymentDescription;
    }

    /**
     * @param array<PaymentDescription>|null $paymentDescription
     * @return static
     */
    public function setPaymentDescription(?array $paymentDescription = null): static
    {
        $this->paymentDescription = $paymentDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPaymentDescription(): static
    {
        $this->paymentDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPaymentDescription(): static
    {
        $this->paymentDescription = [];

        return $this;
    }

    /**
     * @return PaymentDescription|null
     */
    public function firstPaymentDescription(): ?PaymentDescription
    {
        $paymentDescription = $this->paymentDescription ?? [];
        $paymentDescription = reset($paymentDescription);

        if ($paymentDescription === false) {
            return null;
        }

        return $paymentDescription;
    }

    /**
     * @return PaymentDescription|null
     */
    public function lastPaymentDescription(): ?PaymentDescription
    {
        $paymentDescription = $this->paymentDescription ?? [];
        $paymentDescription = end($paymentDescription);

        if ($paymentDescription === false) {
            return null;
        }

        return $paymentDescription;
    }

    /**
     * @param PaymentDescription $paymentDescription
     * @return static
     */
    public function addToPaymentDescription(PaymentDescription $paymentDescription): static
    {
        $this->paymentDescription[] = $paymentDescription;

        return $this;
    }

    /**
     * @return PaymentDescription
     */
    public function addToPaymentDescriptionWithCreate(): PaymentDescription
    {
        $this->addTopaymentDescription($paymentDescription = new PaymentDescription());

        return $paymentDescription;
    }

    /**
     * @param PaymentDescription $paymentDescription
     * @return static
     */
    public function addOnceToPaymentDescription(PaymentDescription $paymentDescription): static
    {
        if (!is_array($this->paymentDescription)) {
            $this->paymentDescription = [];
        }

        $this->paymentDescription[0] = $paymentDescription;

        return $this;
    }

    /**
     * @return PaymentDescription
     */
    public function addOnceToPaymentDescriptionWithCreate(): PaymentDescription
    {
        if (!is_array($this->paymentDescription)) {
            $this->paymentDescription = [];
        }

        if ($this->paymentDescription === []) {
            $this->addOnceTopaymentDescription(new PaymentDescription());
        }

        return $this->paymentDescription[0];
    }

    /**
     * @return bool|null
     */
    public function getFollowupContractIndicator(): ?bool
    {
        return $this->followupContractIndicator;
    }

    /**
     * @param bool|null $followupContractIndicator
     * @return static
     */
    public function setFollowupContractIndicator(?bool $followupContractIndicator = null): static
    {
        $this->followupContractIndicator = $followupContractIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFollowupContractIndicator(): static
    {
        $this->followupContractIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getBindingOnBuyerIndicator(): ?bool
    {
        return $this->bindingOnBuyerIndicator;
    }

    /**
     * @param bool|null $bindingOnBuyerIndicator
     * @return static
     */
    public function setBindingOnBuyerIndicator(?bool $bindingOnBuyerIndicator = null): static
    {
        $this->bindingOnBuyerIndicator = $bindingOnBuyerIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBindingOnBuyerIndicator(): static
    {
        $this->bindingOnBuyerIndicator = null;

        return $this;
    }

    /**
     * @return array<AwardingCriterion>|null
     */
    public function getAwardingCriterion(): ?array
    {
        return $this->awardingCriterion;
    }

    /**
     * @param array<AwardingCriterion>|null $awardingCriterion
     * @return static
     */
    public function setAwardingCriterion(?array $awardingCriterion = null): static
    {
        $this->awardingCriterion = $awardingCriterion;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAwardingCriterion(): static
    {
        $this->awardingCriterion = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAwardingCriterion(): static
    {
        $this->awardingCriterion = [];

        return $this;
    }

    /**
     * @return AwardingCriterion|null
     */
    public function firstAwardingCriterion(): ?AwardingCriterion
    {
        $awardingCriterion = $this->awardingCriterion ?? [];
        $awardingCriterion = reset($awardingCriterion);

        if ($awardingCriterion === false) {
            return null;
        }

        return $awardingCriterion;
    }

    /**
     * @return AwardingCriterion|null
     */
    public function lastAwardingCriterion(): ?AwardingCriterion
    {
        $awardingCriterion = $this->awardingCriterion ?? [];
        $awardingCriterion = end($awardingCriterion);

        if ($awardingCriterion === false) {
            return null;
        }

        return $awardingCriterion;
    }

    /**
     * @param AwardingCriterion $awardingCriterion
     * @return static
     */
    public function addToAwardingCriterion(AwardingCriterion $awardingCriterion): static
    {
        $this->awardingCriterion[] = $awardingCriterion;

        return $this;
    }

    /**
     * @return AwardingCriterion
     */
    public function addToAwardingCriterionWithCreate(): AwardingCriterion
    {
        $this->addToawardingCriterion($awardingCriterion = new AwardingCriterion());

        return $awardingCriterion;
    }

    /**
     * @param AwardingCriterion $awardingCriterion
     * @return static
     */
    public function addOnceToAwardingCriterion(AwardingCriterion $awardingCriterion): static
    {
        if (!is_array($this->awardingCriterion)) {
            $this->awardingCriterion = [];
        }

        $this->awardingCriterion[0] = $awardingCriterion;

        return $this;
    }

    /**
     * @return AwardingCriterion
     */
    public function addOnceToAwardingCriterionWithCreate(): AwardingCriterion
    {
        if (!is_array($this->awardingCriterion)) {
            $this->awardingCriterion = [];
        }

        if ($this->awardingCriterion === []) {
            $this->addOnceToawardingCriterion(new AwardingCriterion());
        }

        return $this->awardingCriterion[0];
    }

    /**
     * @return array<TechnicalCommitteePerson>|null
     */
    public function getTechnicalCommitteePerson(): ?array
    {
        return $this->technicalCommitteePerson;
    }

    /**
     * @param array<TechnicalCommitteePerson>|null $technicalCommitteePerson
     * @return static
     */
    public function setTechnicalCommitteePerson(?array $technicalCommitteePerson = null): static
    {
        $this->technicalCommitteePerson = $technicalCommitteePerson;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTechnicalCommitteePerson(): static
    {
        $this->technicalCommitteePerson = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTechnicalCommitteePerson(): static
    {
        $this->technicalCommitteePerson = [];

        return $this;
    }

    /**
     * @return TechnicalCommitteePerson|null
     */
    public function firstTechnicalCommitteePerson(): ?TechnicalCommitteePerson
    {
        $technicalCommitteePerson = $this->technicalCommitteePerson ?? [];
        $technicalCommitteePerson = reset($technicalCommitteePerson);

        if ($technicalCommitteePerson === false) {
            return null;
        }

        return $technicalCommitteePerson;
    }

    /**
     * @return TechnicalCommitteePerson|null
     */
    public function lastTechnicalCommitteePerson(): ?TechnicalCommitteePerson
    {
        $technicalCommitteePerson = $this->technicalCommitteePerson ?? [];
        $technicalCommitteePerson = end($technicalCommitteePerson);

        if ($technicalCommitteePerson === false) {
            return null;
        }

        return $technicalCommitteePerson;
    }

    /**
     * @param TechnicalCommitteePerson $technicalCommitteePerson
     * @return static
     */
    public function addToTechnicalCommitteePerson(TechnicalCommitteePerson $technicalCommitteePerson): static
    {
        $this->technicalCommitteePerson[] = $technicalCommitteePerson;

        return $this;
    }

    /**
     * @return TechnicalCommitteePerson
     */
    public function addToTechnicalCommitteePersonWithCreate(): TechnicalCommitteePerson
    {
        $this->addTotechnicalCommitteePerson($technicalCommitteePerson = new TechnicalCommitteePerson());

        return $technicalCommitteePerson;
    }

    /**
     * @param TechnicalCommitteePerson $technicalCommitteePerson
     * @return static
     */
    public function addOnceToTechnicalCommitteePerson(TechnicalCommitteePerson $technicalCommitteePerson): static
    {
        if (!is_array($this->technicalCommitteePerson)) {
            $this->technicalCommitteePerson = [];
        }

        $this->technicalCommitteePerson[0] = $technicalCommitteePerson;

        return $this;
    }

    /**
     * @return TechnicalCommitteePerson
     */
    public function addOnceToTechnicalCommitteePersonWithCreate(): TechnicalCommitteePerson
    {
        if (!is_array($this->technicalCommitteePerson)) {
            $this->technicalCommitteePerson = [];
        }

        if ($this->technicalCommitteePerson === []) {
            $this->addOnceTotechnicalCommitteePerson(new TechnicalCommitteePerson());
        }

        return $this->technicalCommitteePerson[0];
    }
}
