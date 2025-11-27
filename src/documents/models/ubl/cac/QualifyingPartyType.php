<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BusinessClassificationEvidenceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BusinessIdentityEvidenceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EmployeeQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OperatingYearsQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ParticipationPercent;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PersonalSituation;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TendererRoleCode;

class QualifyingPartyType
{
    use HandlesObjectFlags;

    /**
     * @var ParticipationPercent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ParticipationPercent")
     * @JMS\Expose
     * @JMS\SerializedName("ParticipationPercent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParticipationPercent", setter="setParticipationPercent")
     */
    private $participationPercent;

    /**
     * @var array<PersonalSituation>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\PersonalSituation>")
     * @JMS\Expose
     * @JMS\SerializedName("PersonalSituation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PersonalSituation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getPersonalSituation", setter="setPersonalSituation")
     */
    private $personalSituation;

    /**
     * @var OperatingYearsQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OperatingYearsQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("OperatingYearsQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOperatingYearsQuantity", setter="setOperatingYearsQuantity")
     */
    private $operatingYearsQuantity;

    /**
     * @var EmployeeQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EmployeeQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("EmployeeQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEmployeeQuantity", setter="setEmployeeQuantity")
     */
    private $employeeQuantity;

    /**
     * @var BusinessClassificationEvidenceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BusinessClassificationEvidenceID")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessClassificationEvidenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBusinessClassificationEvidenceID", setter="setBusinessClassificationEvidenceID")
     */
    private $businessClassificationEvidenceID;

    /**
     * @var BusinessIdentityEvidenceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BusinessIdentityEvidenceID")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessIdentityEvidenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBusinessIdentityEvidenceID", setter="setBusinessIdentityEvidenceID")
     */
    private $businessIdentityEvidenceID;

    /**
     * @var TendererRoleCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TendererRoleCode")
     * @JMS\Expose
     * @JMS\SerializedName("TendererRoleCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTendererRoleCode", setter="setTendererRoleCode")
     */
    private $tendererRoleCode;

    /**
     * @var BusinessClassificationScheme|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\BusinessClassificationScheme")
     * @JMS\Expose
     * @JMS\SerializedName("BusinessClassificationScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBusinessClassificationScheme", setter="setBusinessClassificationScheme")
     */
    private $businessClassificationScheme;

    /**
     * @var array<TechnicalCapability>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TechnicalCapability>")
     * @JMS\Expose
     * @JMS\SerializedName("TechnicalCapability")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TechnicalCapability", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTechnicalCapability", setter="setTechnicalCapability")
     */
    private $technicalCapability;

    /**
     * @var array<FinancialCapability>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\FinancialCapability>")
     * @JMS\Expose
     * @JMS\SerializedName("FinancialCapability")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FinancialCapability", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getFinancialCapability", setter="setFinancialCapability")
     */
    private $financialCapability;

    /**
     * @var array<CompletedTask>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\CompletedTask>")
     * @JMS\Expose
     * @JMS\SerializedName("CompletedTask")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CompletedTask", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCompletedTask", setter="setCompletedTask")
     */
    private $completedTask;

    /**
     * @var array<Declaration>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Declaration>")
     * @JMS\Expose
     * @JMS\SerializedName("Declaration")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Declaration", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDeclaration", setter="setDeclaration")
     */
    private $declaration;

    /**
     * @var Party|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Party")
     * @JMS\Expose
     * @JMS\SerializedName("Party")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParty", setter="setParty")
     */
    private $party;

    /**
     * @var EconomicOperatorRole|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EconomicOperatorRole")
     * @JMS\Expose
     * @JMS\SerializedName("EconomicOperatorRole")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEconomicOperatorRole", setter="setEconomicOperatorRole")
     */
    private $economicOperatorRole;

    /**
     * @return ParticipationPercent|null
     */
    public function getParticipationPercent(): ?ParticipationPercent
    {
        return $this->participationPercent;
    }

    /**
     * @return ParticipationPercent
     */
    public function getParticipationPercentWithCreate(): ParticipationPercent
    {
        $this->participationPercent = is_null($this->participationPercent) ? new ParticipationPercent() : $this->participationPercent;

        return $this->participationPercent;
    }

    /**
     * @param ParticipationPercent|null $participationPercent
     * @return static
     */
    public function setParticipationPercent(?ParticipationPercent $participationPercent = null): static
    {
        $this->participationPercent = $participationPercent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetParticipationPercent(): static
    {
        $this->participationPercent = null;

        return $this;
    }

    /**
     * @return array<PersonalSituation>|null
     */
    public function getPersonalSituation(): ?array
    {
        return $this->personalSituation;
    }

    /**
     * @param array<PersonalSituation>|null $personalSituation
     * @return static
     */
    public function setPersonalSituation(?array $personalSituation = null): static
    {
        $this->personalSituation = $personalSituation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPersonalSituation(): static
    {
        $this->personalSituation = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPersonalSituation(): static
    {
        $this->personalSituation = [];

        return $this;
    }

    /**
     * @return PersonalSituation|null
     */
    public function firstPersonalSituation(): ?PersonalSituation
    {
        $personalSituation = $this->personalSituation ?? [];
        $personalSituation = reset($personalSituation);

        if ($personalSituation === false) {
            return null;
        }

        return $personalSituation;
    }

    /**
     * @return PersonalSituation|null
     */
    public function lastPersonalSituation(): ?PersonalSituation
    {
        $personalSituation = $this->personalSituation ?? [];
        $personalSituation = end($personalSituation);

        if ($personalSituation === false) {
            return null;
        }

        return $personalSituation;
    }

    /**
     * @param PersonalSituation $personalSituation
     * @return static
     */
    public function addToPersonalSituation(PersonalSituation $personalSituation): static
    {
        $this->personalSituation[] = $personalSituation;

        return $this;
    }

    /**
     * @return PersonalSituation
     */
    public function addToPersonalSituationWithCreate(): PersonalSituation
    {
        $this->addTopersonalSituation($personalSituation = new PersonalSituation());

        return $personalSituation;
    }

    /**
     * @param PersonalSituation $personalSituation
     * @return static
     */
    public function addOnceToPersonalSituation(PersonalSituation $personalSituation): static
    {
        if (!is_array($this->personalSituation)) {
            $this->personalSituation = [];
        }

        $this->personalSituation[0] = $personalSituation;

        return $this;
    }

    /**
     * @return PersonalSituation
     */
    public function addOnceToPersonalSituationWithCreate(): PersonalSituation
    {
        if (!is_array($this->personalSituation)) {
            $this->personalSituation = [];
        }

        if ($this->personalSituation === []) {
            $this->addOnceTopersonalSituation(new PersonalSituation());
        }

        return $this->personalSituation[0];
    }

    /**
     * @return OperatingYearsQuantity|null
     */
    public function getOperatingYearsQuantity(): ?OperatingYearsQuantity
    {
        return $this->operatingYearsQuantity;
    }

    /**
     * @return OperatingYearsQuantity
     */
    public function getOperatingYearsQuantityWithCreate(): OperatingYearsQuantity
    {
        $this->operatingYearsQuantity = is_null($this->operatingYearsQuantity) ? new OperatingYearsQuantity() : $this->operatingYearsQuantity;

        return $this->operatingYearsQuantity;
    }

    /**
     * @param OperatingYearsQuantity|null $operatingYearsQuantity
     * @return static
     */
    public function setOperatingYearsQuantity(?OperatingYearsQuantity $operatingYearsQuantity = null): static
    {
        $this->operatingYearsQuantity = $operatingYearsQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOperatingYearsQuantity(): static
    {
        $this->operatingYearsQuantity = null;

        return $this;
    }

    /**
     * @return EmployeeQuantity|null
     */
    public function getEmployeeQuantity(): ?EmployeeQuantity
    {
        return $this->employeeQuantity;
    }

    /**
     * @return EmployeeQuantity
     */
    public function getEmployeeQuantityWithCreate(): EmployeeQuantity
    {
        $this->employeeQuantity = is_null($this->employeeQuantity) ? new EmployeeQuantity() : $this->employeeQuantity;

        return $this->employeeQuantity;
    }

    /**
     * @param EmployeeQuantity|null $employeeQuantity
     * @return static
     */
    public function setEmployeeQuantity(?EmployeeQuantity $employeeQuantity = null): static
    {
        $this->employeeQuantity = $employeeQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEmployeeQuantity(): static
    {
        $this->employeeQuantity = null;

        return $this;
    }

    /**
     * @return BusinessClassificationEvidenceID|null
     */
    public function getBusinessClassificationEvidenceID(): ?BusinessClassificationEvidenceID
    {
        return $this->businessClassificationEvidenceID;
    }

    /**
     * @return BusinessClassificationEvidenceID
     */
    public function getBusinessClassificationEvidenceIDWithCreate(): BusinessClassificationEvidenceID
    {
        $this->businessClassificationEvidenceID = is_null($this->businessClassificationEvidenceID) ? new BusinessClassificationEvidenceID() : $this->businessClassificationEvidenceID;

        return $this->businessClassificationEvidenceID;
    }

    /**
     * @param BusinessClassificationEvidenceID|null $businessClassificationEvidenceID
     * @return static
     */
    public function setBusinessClassificationEvidenceID(
        ?BusinessClassificationEvidenceID $businessClassificationEvidenceID = null,
    ): static {
        $this->businessClassificationEvidenceID = $businessClassificationEvidenceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBusinessClassificationEvidenceID(): static
    {
        $this->businessClassificationEvidenceID = null;

        return $this;
    }

    /**
     * @return BusinessIdentityEvidenceID|null
     */
    public function getBusinessIdentityEvidenceID(): ?BusinessIdentityEvidenceID
    {
        return $this->businessIdentityEvidenceID;
    }

    /**
     * @return BusinessIdentityEvidenceID
     */
    public function getBusinessIdentityEvidenceIDWithCreate(): BusinessIdentityEvidenceID
    {
        $this->businessIdentityEvidenceID = is_null($this->businessIdentityEvidenceID) ? new BusinessIdentityEvidenceID() : $this->businessIdentityEvidenceID;

        return $this->businessIdentityEvidenceID;
    }

    /**
     * @param BusinessIdentityEvidenceID|null $businessIdentityEvidenceID
     * @return static
     */
    public function setBusinessIdentityEvidenceID(
        ?BusinessIdentityEvidenceID $businessIdentityEvidenceID = null,
    ): static {
        $this->businessIdentityEvidenceID = $businessIdentityEvidenceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBusinessIdentityEvidenceID(): static
    {
        $this->businessIdentityEvidenceID = null;

        return $this;
    }

    /**
     * @return TendererRoleCode|null
     */
    public function getTendererRoleCode(): ?TendererRoleCode
    {
        return $this->tendererRoleCode;
    }

    /**
     * @return TendererRoleCode
     */
    public function getTendererRoleCodeWithCreate(): TendererRoleCode
    {
        $this->tendererRoleCode = is_null($this->tendererRoleCode) ? new TendererRoleCode() : $this->tendererRoleCode;

        return $this->tendererRoleCode;
    }

    /**
     * @param TendererRoleCode|null $tendererRoleCode
     * @return static
     */
    public function setTendererRoleCode(?TendererRoleCode $tendererRoleCode = null): static
    {
        $this->tendererRoleCode = $tendererRoleCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTendererRoleCode(): static
    {
        $this->tendererRoleCode = null;

        return $this;
    }

    /**
     * @return BusinessClassificationScheme|null
     */
    public function getBusinessClassificationScheme(): ?BusinessClassificationScheme
    {
        return $this->businessClassificationScheme;
    }

    /**
     * @return BusinessClassificationScheme
     */
    public function getBusinessClassificationSchemeWithCreate(): BusinessClassificationScheme
    {
        $this->businessClassificationScheme = is_null($this->businessClassificationScheme) ? new BusinessClassificationScheme() : $this->businessClassificationScheme;

        return $this->businessClassificationScheme;
    }

    /**
     * @param BusinessClassificationScheme|null $businessClassificationScheme
     * @return static
     */
    public function setBusinessClassificationScheme(
        ?BusinessClassificationScheme $businessClassificationScheme = null,
    ): static {
        $this->businessClassificationScheme = $businessClassificationScheme;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBusinessClassificationScheme(): static
    {
        $this->businessClassificationScheme = null;

        return $this;
    }

    /**
     * @return array<TechnicalCapability>|null
     */
    public function getTechnicalCapability(): ?array
    {
        return $this->technicalCapability;
    }

    /**
     * @param array<TechnicalCapability>|null $technicalCapability
     * @return static
     */
    public function setTechnicalCapability(?array $technicalCapability = null): static
    {
        $this->technicalCapability = $technicalCapability;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTechnicalCapability(): static
    {
        $this->technicalCapability = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTechnicalCapability(): static
    {
        $this->technicalCapability = [];

        return $this;
    }

    /**
     * @return TechnicalCapability|null
     */
    public function firstTechnicalCapability(): ?TechnicalCapability
    {
        $technicalCapability = $this->technicalCapability ?? [];
        $technicalCapability = reset($technicalCapability);

        if ($technicalCapability === false) {
            return null;
        }

        return $technicalCapability;
    }

    /**
     * @return TechnicalCapability|null
     */
    public function lastTechnicalCapability(): ?TechnicalCapability
    {
        $technicalCapability = $this->technicalCapability ?? [];
        $technicalCapability = end($technicalCapability);

        if ($technicalCapability === false) {
            return null;
        }

        return $technicalCapability;
    }

    /**
     * @param TechnicalCapability $technicalCapability
     * @return static
     */
    public function addToTechnicalCapability(TechnicalCapability $technicalCapability): static
    {
        $this->technicalCapability[] = $technicalCapability;

        return $this;
    }

    /**
     * @return TechnicalCapability
     */
    public function addToTechnicalCapabilityWithCreate(): TechnicalCapability
    {
        $this->addTotechnicalCapability($technicalCapability = new TechnicalCapability());

        return $technicalCapability;
    }

    /**
     * @param TechnicalCapability $technicalCapability
     * @return static
     */
    public function addOnceToTechnicalCapability(TechnicalCapability $technicalCapability): static
    {
        if (!is_array($this->technicalCapability)) {
            $this->technicalCapability = [];
        }

        $this->technicalCapability[0] = $technicalCapability;

        return $this;
    }

    /**
     * @return TechnicalCapability
     */
    public function addOnceToTechnicalCapabilityWithCreate(): TechnicalCapability
    {
        if (!is_array($this->technicalCapability)) {
            $this->technicalCapability = [];
        }

        if ($this->technicalCapability === []) {
            $this->addOnceTotechnicalCapability(new TechnicalCapability());
        }

        return $this->technicalCapability[0];
    }

    /**
     * @return array<FinancialCapability>|null
     */
    public function getFinancialCapability(): ?array
    {
        return $this->financialCapability;
    }

    /**
     * @param array<FinancialCapability>|null $financialCapability
     * @return static
     */
    public function setFinancialCapability(?array $financialCapability = null): static
    {
        $this->financialCapability = $financialCapability;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFinancialCapability(): static
    {
        $this->financialCapability = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearFinancialCapability(): static
    {
        $this->financialCapability = [];

        return $this;
    }

    /**
     * @return FinancialCapability|null
     */
    public function firstFinancialCapability(): ?FinancialCapability
    {
        $financialCapability = $this->financialCapability ?? [];
        $financialCapability = reset($financialCapability);

        if ($financialCapability === false) {
            return null;
        }

        return $financialCapability;
    }

    /**
     * @return FinancialCapability|null
     */
    public function lastFinancialCapability(): ?FinancialCapability
    {
        $financialCapability = $this->financialCapability ?? [];
        $financialCapability = end($financialCapability);

        if ($financialCapability === false) {
            return null;
        }

        return $financialCapability;
    }

    /**
     * @param FinancialCapability $financialCapability
     * @return static
     */
    public function addToFinancialCapability(FinancialCapability $financialCapability): static
    {
        $this->financialCapability[] = $financialCapability;

        return $this;
    }

    /**
     * @return FinancialCapability
     */
    public function addToFinancialCapabilityWithCreate(): FinancialCapability
    {
        $this->addTofinancialCapability($financialCapability = new FinancialCapability());

        return $financialCapability;
    }

    /**
     * @param FinancialCapability $financialCapability
     * @return static
     */
    public function addOnceToFinancialCapability(FinancialCapability $financialCapability): static
    {
        if (!is_array($this->financialCapability)) {
            $this->financialCapability = [];
        }

        $this->financialCapability[0] = $financialCapability;

        return $this;
    }

    /**
     * @return FinancialCapability
     */
    public function addOnceToFinancialCapabilityWithCreate(): FinancialCapability
    {
        if (!is_array($this->financialCapability)) {
            $this->financialCapability = [];
        }

        if ($this->financialCapability === []) {
            $this->addOnceTofinancialCapability(new FinancialCapability());
        }

        return $this->financialCapability[0];
    }

    /**
     * @return array<CompletedTask>|null
     */
    public function getCompletedTask(): ?array
    {
        return $this->completedTask;
    }

    /**
     * @param array<CompletedTask>|null $completedTask
     * @return static
     */
    public function setCompletedTask(?array $completedTask = null): static
    {
        $this->completedTask = $completedTask;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCompletedTask(): static
    {
        $this->completedTask = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearCompletedTask(): static
    {
        $this->completedTask = [];

        return $this;
    }

    /**
     * @return CompletedTask|null
     */
    public function firstCompletedTask(): ?CompletedTask
    {
        $completedTask = $this->completedTask ?? [];
        $completedTask = reset($completedTask);

        if ($completedTask === false) {
            return null;
        }

        return $completedTask;
    }

    /**
     * @return CompletedTask|null
     */
    public function lastCompletedTask(): ?CompletedTask
    {
        $completedTask = $this->completedTask ?? [];
        $completedTask = end($completedTask);

        if ($completedTask === false) {
            return null;
        }

        return $completedTask;
    }

    /**
     * @param CompletedTask $completedTask
     * @return static
     */
    public function addToCompletedTask(CompletedTask $completedTask): static
    {
        $this->completedTask[] = $completedTask;

        return $this;
    }

    /**
     * @return CompletedTask
     */
    public function addToCompletedTaskWithCreate(): CompletedTask
    {
        $this->addTocompletedTask($completedTask = new CompletedTask());

        return $completedTask;
    }

    /**
     * @param CompletedTask $completedTask
     * @return static
     */
    public function addOnceToCompletedTask(CompletedTask $completedTask): static
    {
        if (!is_array($this->completedTask)) {
            $this->completedTask = [];
        }

        $this->completedTask[0] = $completedTask;

        return $this;
    }

    /**
     * @return CompletedTask
     */
    public function addOnceToCompletedTaskWithCreate(): CompletedTask
    {
        if (!is_array($this->completedTask)) {
            $this->completedTask = [];
        }

        if ($this->completedTask === []) {
            $this->addOnceTocompletedTask(new CompletedTask());
        }

        return $this->completedTask[0];
    }

    /**
     * @return array<Declaration>|null
     */
    public function getDeclaration(): ?array
    {
        return $this->declaration;
    }

    /**
     * @param array<Declaration>|null $declaration
     * @return static
     */
    public function setDeclaration(?array $declaration = null): static
    {
        $this->declaration = $declaration;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeclaration(): static
    {
        $this->declaration = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDeclaration(): static
    {
        $this->declaration = [];

        return $this;
    }

    /**
     * @return Declaration|null
     */
    public function firstDeclaration(): ?Declaration
    {
        $declaration = $this->declaration ?? [];
        $declaration = reset($declaration);

        if ($declaration === false) {
            return null;
        }

        return $declaration;
    }

    /**
     * @return Declaration|null
     */
    public function lastDeclaration(): ?Declaration
    {
        $declaration = $this->declaration ?? [];
        $declaration = end($declaration);

        if ($declaration === false) {
            return null;
        }

        return $declaration;
    }

    /**
     * @param Declaration $declaration
     * @return static
     */
    public function addToDeclaration(Declaration $declaration): static
    {
        $this->declaration[] = $declaration;

        return $this;
    }

    /**
     * @return Declaration
     */
    public function addToDeclarationWithCreate(): Declaration
    {
        $this->addTodeclaration($declaration = new Declaration());

        return $declaration;
    }

    /**
     * @param Declaration $declaration
     * @return static
     */
    public function addOnceToDeclaration(Declaration $declaration): static
    {
        if (!is_array($this->declaration)) {
            $this->declaration = [];
        }

        $this->declaration[0] = $declaration;

        return $this;
    }

    /**
     * @return Declaration
     */
    public function addOnceToDeclarationWithCreate(): Declaration
    {
        if (!is_array($this->declaration)) {
            $this->declaration = [];
        }

        if ($this->declaration === []) {
            $this->addOnceTodeclaration(new Declaration());
        }

        return $this->declaration[0];
    }

    /**
     * @return Party|null
     */
    public function getParty(): ?Party
    {
        return $this->party;
    }

    /**
     * @return Party
     */
    public function getPartyWithCreate(): Party
    {
        $this->party = is_null($this->party) ? new Party() : $this->party;

        return $this->party;
    }

    /**
     * @param Party|null $party
     * @return static
     */
    public function setParty(?Party $party = null): static
    {
        $this->party = $party;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetParty(): static
    {
        $this->party = null;

        return $this;
    }

    /**
     * @return EconomicOperatorRole|null
     */
    public function getEconomicOperatorRole(): ?EconomicOperatorRole
    {
        return $this->economicOperatorRole;
    }

    /**
     * @return EconomicOperatorRole
     */
    public function getEconomicOperatorRoleWithCreate(): EconomicOperatorRole
    {
        $this->economicOperatorRole = is_null($this->economicOperatorRole) ? new EconomicOperatorRole() : $this->economicOperatorRole;

        return $this->economicOperatorRole;
    }

    /**
     * @param EconomicOperatorRole|null $economicOperatorRole
     * @return static
     */
    public function setEconomicOperatorRole(?EconomicOperatorRole $economicOperatorRole = null): static
    {
        $this->economicOperatorRole = $economicOperatorRole;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEconomicOperatorRole(): static
    {
        $this->economicOperatorRole = null;

        return $this;
    }
}
