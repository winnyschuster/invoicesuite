<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalForm;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalFormCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EmployeeQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OperatingYearsQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PersonalSituation;

class TendererQualificationRequestType
{
    use HandlesObjectFlags;

    /**
     * @var CompanyLegalFormCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalFormCode")
     * @JMS\Expose
     * @JMS\SerializedName("CompanyLegalFormCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCompanyLegalFormCode", setter="setCompanyLegalFormCode")
     */
    private $companyLegalFormCode;

    /**
     * @var CompanyLegalForm|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CompanyLegalForm")
     * @JMS\Expose
     * @JMS\SerializedName("CompanyLegalForm")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCompanyLegalForm", setter="setCompanyLegalForm")
     */
    private $companyLegalForm;

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
     * @var array<RequiredBusinessClassificationScheme>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\RequiredBusinessClassificationScheme>")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredBusinessClassificationScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RequiredBusinessClassificationScheme", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRequiredBusinessClassificationScheme", setter="setRequiredBusinessClassificationScheme")
     */
    private $requiredBusinessClassificationScheme;

    /**
     * @var array<TechnicalEvaluationCriterion>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TechnicalEvaluationCriterion>")
     * @JMS\Expose
     * @JMS\SerializedName("TechnicalEvaluationCriterion")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TechnicalEvaluationCriterion", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTechnicalEvaluationCriterion", setter="setTechnicalEvaluationCriterion")
     */
    private $technicalEvaluationCriterion;

    /**
     * @var array<FinancialEvaluationCriterion>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\FinancialEvaluationCriterion>")
     * @JMS\Expose
     * @JMS\SerializedName("FinancialEvaluationCriterion")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FinancialEvaluationCriterion", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getFinancialEvaluationCriterion", setter="setFinancialEvaluationCriterion")
     */
    private $financialEvaluationCriterion;

    /**
     * @var array<SpecificTendererRequirement>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SpecificTendererRequirement>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecificTendererRequirement")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecificTendererRequirement", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSpecificTendererRequirement", setter="setSpecificTendererRequirement")
     */
    private $specificTendererRequirement;

    /**
     * @var array<EconomicOperatorRole>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\EconomicOperatorRole>")
     * @JMS\Expose
     * @JMS\SerializedName("EconomicOperatorRole")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="EconomicOperatorRole", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getEconomicOperatorRole", setter="setEconomicOperatorRole")
     */
    private $economicOperatorRole;

    /**
     * @return CompanyLegalFormCode|null
     */
    public function getCompanyLegalFormCode(): ?CompanyLegalFormCode
    {
        return $this->companyLegalFormCode;
    }

    /**
     * @return CompanyLegalFormCode
     */
    public function getCompanyLegalFormCodeWithCreate(): CompanyLegalFormCode
    {
        $this->companyLegalFormCode = is_null($this->companyLegalFormCode) ? new CompanyLegalFormCode() : $this->companyLegalFormCode;

        return $this->companyLegalFormCode;
    }

    /**
     * @param CompanyLegalFormCode|null $companyLegalFormCode
     * @return static
     */
    public function setCompanyLegalFormCode(?CompanyLegalFormCode $companyLegalFormCode = null): static
    {
        $this->companyLegalFormCode = $companyLegalFormCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCompanyLegalFormCode(): static
    {
        $this->companyLegalFormCode = null;

        return $this;
    }

    /**
     * @return CompanyLegalForm|null
     */
    public function getCompanyLegalForm(): ?CompanyLegalForm
    {
        return $this->companyLegalForm;
    }

    /**
     * @return CompanyLegalForm
     */
    public function getCompanyLegalFormWithCreate(): CompanyLegalForm
    {
        $this->companyLegalForm = is_null($this->companyLegalForm) ? new CompanyLegalForm() : $this->companyLegalForm;

        return $this->companyLegalForm;
    }

    /**
     * @param CompanyLegalForm|null $companyLegalForm
     * @return static
     */
    public function setCompanyLegalForm(?CompanyLegalForm $companyLegalForm = null): static
    {
        $this->companyLegalForm = $companyLegalForm;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCompanyLegalForm(): static
    {
        $this->companyLegalForm = null;

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
     * @return array<RequiredBusinessClassificationScheme>|null
     */
    public function getRequiredBusinessClassificationScheme(): ?array
    {
        return $this->requiredBusinessClassificationScheme;
    }

    /**
     * @param array<RequiredBusinessClassificationScheme>|null $requiredBusinessClassificationScheme
     * @return static
     */
    public function setRequiredBusinessClassificationScheme(?array $requiredBusinessClassificationScheme = null): static
    {
        $this->requiredBusinessClassificationScheme = $requiredBusinessClassificationScheme;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequiredBusinessClassificationScheme(): static
    {
        $this->requiredBusinessClassificationScheme = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearRequiredBusinessClassificationScheme(): static
    {
        $this->requiredBusinessClassificationScheme = [];

        return $this;
    }

    /**
     * @return RequiredBusinessClassificationScheme|null
     */
    public function firstRequiredBusinessClassificationScheme(): ?RequiredBusinessClassificationScheme
    {
        $requiredBusinessClassificationScheme = $this->requiredBusinessClassificationScheme ?? [];
        $requiredBusinessClassificationScheme = reset($requiredBusinessClassificationScheme);

        if ($requiredBusinessClassificationScheme === false) {
            return null;
        }

        return $requiredBusinessClassificationScheme;
    }

    /**
     * @return RequiredBusinessClassificationScheme|null
     */
    public function lastRequiredBusinessClassificationScheme(): ?RequiredBusinessClassificationScheme
    {
        $requiredBusinessClassificationScheme = $this->requiredBusinessClassificationScheme ?? [];
        $requiredBusinessClassificationScheme = end($requiredBusinessClassificationScheme);

        if ($requiredBusinessClassificationScheme === false) {
            return null;
        }

        return $requiredBusinessClassificationScheme;
    }

    /**
     * @param RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme
     * @return static
     */
    public function addToRequiredBusinessClassificationScheme(
        RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme,
    ): static {
        $this->requiredBusinessClassificationScheme[] = $requiredBusinessClassificationScheme;

        return $this;
    }

    /**
     * @return RequiredBusinessClassificationScheme
     */
    public function addToRequiredBusinessClassificationSchemeWithCreate(): RequiredBusinessClassificationScheme
    {
        $this->addTorequiredBusinessClassificationScheme($requiredBusinessClassificationScheme = new RequiredBusinessClassificationScheme());

        return $requiredBusinessClassificationScheme;
    }

    /**
     * @param RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme
     * @return static
     */
    public function addOnceToRequiredBusinessClassificationScheme(
        RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme,
    ): static {
        if (!is_array($this->requiredBusinessClassificationScheme)) {
            $this->requiredBusinessClassificationScheme = [];
        }

        $this->requiredBusinessClassificationScheme[0] = $requiredBusinessClassificationScheme;

        return $this;
    }

    /**
     * @return RequiredBusinessClassificationScheme
     */
    public function addOnceToRequiredBusinessClassificationSchemeWithCreate(): RequiredBusinessClassificationScheme
    {
        if (!is_array($this->requiredBusinessClassificationScheme)) {
            $this->requiredBusinessClassificationScheme = [];
        }

        if ($this->requiredBusinessClassificationScheme === []) {
            $this->addOnceTorequiredBusinessClassificationScheme(new RequiredBusinessClassificationScheme());
        }

        return $this->requiredBusinessClassificationScheme[0];
    }

    /**
     * @return array<TechnicalEvaluationCriterion>|null
     */
    public function getTechnicalEvaluationCriterion(): ?array
    {
        return $this->technicalEvaluationCriterion;
    }

    /**
     * @param array<TechnicalEvaluationCriterion>|null $technicalEvaluationCriterion
     * @return static
     */
    public function setTechnicalEvaluationCriterion(?array $technicalEvaluationCriterion = null): static
    {
        $this->technicalEvaluationCriterion = $technicalEvaluationCriterion;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTechnicalEvaluationCriterion(): static
    {
        $this->technicalEvaluationCriterion = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTechnicalEvaluationCriterion(): static
    {
        $this->technicalEvaluationCriterion = [];

        return $this;
    }

    /**
     * @return TechnicalEvaluationCriterion|null
     */
    public function firstTechnicalEvaluationCriterion(): ?TechnicalEvaluationCriterion
    {
        $technicalEvaluationCriterion = $this->technicalEvaluationCriterion ?? [];
        $technicalEvaluationCriterion = reset($technicalEvaluationCriterion);

        if ($technicalEvaluationCriterion === false) {
            return null;
        }

        return $technicalEvaluationCriterion;
    }

    /**
     * @return TechnicalEvaluationCriterion|null
     */
    public function lastTechnicalEvaluationCriterion(): ?TechnicalEvaluationCriterion
    {
        $technicalEvaluationCriterion = $this->technicalEvaluationCriterion ?? [];
        $technicalEvaluationCriterion = end($technicalEvaluationCriterion);

        if ($technicalEvaluationCriterion === false) {
            return null;
        }

        return $technicalEvaluationCriterion;
    }

    /**
     * @param TechnicalEvaluationCriterion $technicalEvaluationCriterion
     * @return static
     */
    public function addToTechnicalEvaluationCriterion(
        TechnicalEvaluationCriterion $technicalEvaluationCriterion,
    ): static {
        $this->technicalEvaluationCriterion[] = $technicalEvaluationCriterion;

        return $this;
    }

    /**
     * @return TechnicalEvaluationCriterion
     */
    public function addToTechnicalEvaluationCriterionWithCreate(): TechnicalEvaluationCriterion
    {
        $this->addTotechnicalEvaluationCriterion($technicalEvaluationCriterion = new TechnicalEvaluationCriterion());

        return $technicalEvaluationCriterion;
    }

    /**
     * @param TechnicalEvaluationCriterion $technicalEvaluationCriterion
     * @return static
     */
    public function addOnceToTechnicalEvaluationCriterion(
        TechnicalEvaluationCriterion $technicalEvaluationCriterion,
    ): static {
        if (!is_array($this->technicalEvaluationCriterion)) {
            $this->technicalEvaluationCriterion = [];
        }

        $this->technicalEvaluationCriterion[0] = $technicalEvaluationCriterion;

        return $this;
    }

    /**
     * @return TechnicalEvaluationCriterion
     */
    public function addOnceToTechnicalEvaluationCriterionWithCreate(): TechnicalEvaluationCriterion
    {
        if (!is_array($this->technicalEvaluationCriterion)) {
            $this->technicalEvaluationCriterion = [];
        }

        if ($this->technicalEvaluationCriterion === []) {
            $this->addOnceTotechnicalEvaluationCriterion(new TechnicalEvaluationCriterion());
        }

        return $this->technicalEvaluationCriterion[0];
    }

    /**
     * @return array<FinancialEvaluationCriterion>|null
     */
    public function getFinancialEvaluationCriterion(): ?array
    {
        return $this->financialEvaluationCriterion;
    }

    /**
     * @param array<FinancialEvaluationCriterion>|null $financialEvaluationCriterion
     * @return static
     */
    public function setFinancialEvaluationCriterion(?array $financialEvaluationCriterion = null): static
    {
        $this->financialEvaluationCriterion = $financialEvaluationCriterion;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFinancialEvaluationCriterion(): static
    {
        $this->financialEvaluationCriterion = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearFinancialEvaluationCriterion(): static
    {
        $this->financialEvaluationCriterion = [];

        return $this;
    }

    /**
     * @return FinancialEvaluationCriterion|null
     */
    public function firstFinancialEvaluationCriterion(): ?FinancialEvaluationCriterion
    {
        $financialEvaluationCriterion = $this->financialEvaluationCriterion ?? [];
        $financialEvaluationCriterion = reset($financialEvaluationCriterion);

        if ($financialEvaluationCriterion === false) {
            return null;
        }

        return $financialEvaluationCriterion;
    }

    /**
     * @return FinancialEvaluationCriterion|null
     */
    public function lastFinancialEvaluationCriterion(): ?FinancialEvaluationCriterion
    {
        $financialEvaluationCriterion = $this->financialEvaluationCriterion ?? [];
        $financialEvaluationCriterion = end($financialEvaluationCriterion);

        if ($financialEvaluationCriterion === false) {
            return null;
        }

        return $financialEvaluationCriterion;
    }

    /**
     * @param FinancialEvaluationCriterion $financialEvaluationCriterion
     * @return static
     */
    public function addToFinancialEvaluationCriterion(
        FinancialEvaluationCriterion $financialEvaluationCriterion,
    ): static {
        $this->financialEvaluationCriterion[] = $financialEvaluationCriterion;

        return $this;
    }

    /**
     * @return FinancialEvaluationCriterion
     */
    public function addToFinancialEvaluationCriterionWithCreate(): FinancialEvaluationCriterion
    {
        $this->addTofinancialEvaluationCriterion($financialEvaluationCriterion = new FinancialEvaluationCriterion());

        return $financialEvaluationCriterion;
    }

    /**
     * @param FinancialEvaluationCriterion $financialEvaluationCriterion
     * @return static
     */
    public function addOnceToFinancialEvaluationCriterion(
        FinancialEvaluationCriterion $financialEvaluationCriterion,
    ): static {
        if (!is_array($this->financialEvaluationCriterion)) {
            $this->financialEvaluationCriterion = [];
        }

        $this->financialEvaluationCriterion[0] = $financialEvaluationCriterion;

        return $this;
    }

    /**
     * @return FinancialEvaluationCriterion
     */
    public function addOnceToFinancialEvaluationCriterionWithCreate(): FinancialEvaluationCriterion
    {
        if (!is_array($this->financialEvaluationCriterion)) {
            $this->financialEvaluationCriterion = [];
        }

        if ($this->financialEvaluationCriterion === []) {
            $this->addOnceTofinancialEvaluationCriterion(new FinancialEvaluationCriterion());
        }

        return $this->financialEvaluationCriterion[0];
    }

    /**
     * @return array<SpecificTendererRequirement>|null
     */
    public function getSpecificTendererRequirement(): ?array
    {
        return $this->specificTendererRequirement;
    }

    /**
     * @param array<SpecificTendererRequirement>|null $specificTendererRequirement
     * @return static
     */
    public function setSpecificTendererRequirement(?array $specificTendererRequirement = null): static
    {
        $this->specificTendererRequirement = $specificTendererRequirement;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecificTendererRequirement(): static
    {
        $this->specificTendererRequirement = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSpecificTendererRequirement(): static
    {
        $this->specificTendererRequirement = [];

        return $this;
    }

    /**
     * @return SpecificTendererRequirement|null
     */
    public function firstSpecificTendererRequirement(): ?SpecificTendererRequirement
    {
        $specificTendererRequirement = $this->specificTendererRequirement ?? [];
        $specificTendererRequirement = reset($specificTendererRequirement);

        if ($specificTendererRequirement === false) {
            return null;
        }

        return $specificTendererRequirement;
    }

    /**
     * @return SpecificTendererRequirement|null
     */
    public function lastSpecificTendererRequirement(): ?SpecificTendererRequirement
    {
        $specificTendererRequirement = $this->specificTendererRequirement ?? [];
        $specificTendererRequirement = end($specificTendererRequirement);

        if ($specificTendererRequirement === false) {
            return null;
        }

        return $specificTendererRequirement;
    }

    /**
     * @param SpecificTendererRequirement $specificTendererRequirement
     * @return static
     */
    public function addToSpecificTendererRequirement(SpecificTendererRequirement $specificTendererRequirement): static
    {
        $this->specificTendererRequirement[] = $specificTendererRequirement;

        return $this;
    }

    /**
     * @return SpecificTendererRequirement
     */
    public function addToSpecificTendererRequirementWithCreate(): SpecificTendererRequirement
    {
        $this->addTospecificTendererRequirement($specificTendererRequirement = new SpecificTendererRequirement());

        return $specificTendererRequirement;
    }

    /**
     * @param SpecificTendererRequirement $specificTendererRequirement
     * @return static
     */
    public function addOnceToSpecificTendererRequirement(
        SpecificTendererRequirement $specificTendererRequirement,
    ): static {
        if (!is_array($this->specificTendererRequirement)) {
            $this->specificTendererRequirement = [];
        }

        $this->specificTendererRequirement[0] = $specificTendererRequirement;

        return $this;
    }

    /**
     * @return SpecificTendererRequirement
     */
    public function addOnceToSpecificTendererRequirementWithCreate(): SpecificTendererRequirement
    {
        if (!is_array($this->specificTendererRequirement)) {
            $this->specificTendererRequirement = [];
        }

        if ($this->specificTendererRequirement === []) {
            $this->addOnceTospecificTendererRequirement(new SpecificTendererRequirement());
        }

        return $this->specificTendererRequirement[0];
    }

    /**
     * @return array<EconomicOperatorRole>|null
     */
    public function getEconomicOperatorRole(): ?array
    {
        return $this->economicOperatorRole;
    }

    /**
     * @param array<EconomicOperatorRole>|null $economicOperatorRole
     * @return static
     */
    public function setEconomicOperatorRole(?array $economicOperatorRole = null): static
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

    /**
     * @return static
     */
    public function clearEconomicOperatorRole(): static
    {
        $this->economicOperatorRole = [];

        return $this;
    }

    /**
     * @return EconomicOperatorRole|null
     */
    public function firstEconomicOperatorRole(): ?EconomicOperatorRole
    {
        $economicOperatorRole = $this->economicOperatorRole ?? [];
        $economicOperatorRole = reset($economicOperatorRole);

        if ($economicOperatorRole === false) {
            return null;
        }

        return $economicOperatorRole;
    }

    /**
     * @return EconomicOperatorRole|null
     */
    public function lastEconomicOperatorRole(): ?EconomicOperatorRole
    {
        $economicOperatorRole = $this->economicOperatorRole ?? [];
        $economicOperatorRole = end($economicOperatorRole);

        if ($economicOperatorRole === false) {
            return null;
        }

        return $economicOperatorRole;
    }

    /**
     * @param EconomicOperatorRole $economicOperatorRole
     * @return static
     */
    public function addToEconomicOperatorRole(EconomicOperatorRole $economicOperatorRole): static
    {
        $this->economicOperatorRole[] = $economicOperatorRole;

        return $this;
    }

    /**
     * @return EconomicOperatorRole
     */
    public function addToEconomicOperatorRoleWithCreate(): EconomicOperatorRole
    {
        $this->addToeconomicOperatorRole($economicOperatorRole = new EconomicOperatorRole());

        return $economicOperatorRole;
    }

    /**
     * @param EconomicOperatorRole $economicOperatorRole
     * @return static
     */
    public function addOnceToEconomicOperatorRole(EconomicOperatorRole $economicOperatorRole): static
    {
        if (!is_array($this->economicOperatorRole)) {
            $this->economicOperatorRole = [];
        }

        $this->economicOperatorRole[0] = $economicOperatorRole;

        return $this;
    }

    /**
     * @return EconomicOperatorRole
     */
    public function addOnceToEconomicOperatorRoleWithCreate(): EconomicOperatorRole
    {
        if (!is_array($this->economicOperatorRole)) {
            $this->economicOperatorRole = [];
        }

        if ($this->economicOperatorRole === []) {
            $this->addOnceToeconomicOperatorRole(new EconomicOperatorRole());
        }

        return $this->economicOperatorRole[0];
    }
}
