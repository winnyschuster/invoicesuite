<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BirthplaceName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FamilyName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FirstName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GenderCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\JobTitle;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MiddleName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NameSuffix;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NationalityID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OrganizationDepartment;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OtherName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Title;

class PersonType
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
     * @var FirstName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FirstName")
     * @JMS\Expose
     * @JMS\SerializedName("FirstName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFirstName", setter="setFirstName")
     */
    private $firstName;

    /**
     * @var FamilyName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FamilyName")
     * @JMS\Expose
     * @JMS\SerializedName("FamilyName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFamilyName", setter="setFamilyName")
     */
    private $familyName;

    /**
     * @var Title|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Title")
     * @JMS\Expose
     * @JMS\SerializedName("Title")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTitle", setter="setTitle")
     */
    private $title;

    /**
     * @var MiddleName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MiddleName")
     * @JMS\Expose
     * @JMS\SerializedName("MiddleName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMiddleName", setter="setMiddleName")
     */
    private $middleName;

    /**
     * @var OtherName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OtherName")
     * @JMS\Expose
     * @JMS\SerializedName("OtherName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOtherName", setter="setOtherName")
     */
    private $otherName;

    /**
     * @var NameSuffix|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NameSuffix")
     * @JMS\Expose
     * @JMS\SerializedName("NameSuffix")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNameSuffix", setter="setNameSuffix")
     */
    private $nameSuffix;

    /**
     * @var JobTitle|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\JobTitle")
     * @JMS\Expose
     * @JMS\SerializedName("JobTitle")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getJobTitle", setter="setJobTitle")
     */
    private $jobTitle;

    /**
     * @var NationalityID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NationalityID")
     * @JMS\Expose
     * @JMS\SerializedName("NationalityID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNationalityID", setter="setNationalityID")
     */
    private $nationalityID;

    /**
     * @var GenderCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GenderCode")
     * @JMS\Expose
     * @JMS\SerializedName("GenderCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGenderCode", setter="setGenderCode")
     */
    private $genderCode;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("BirthDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBirthDate", setter="setBirthDate")
     */
    private $birthDate;

    /**
     * @var BirthplaceName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BirthplaceName")
     * @JMS\Expose
     * @JMS\SerializedName("BirthplaceName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBirthplaceName", setter="setBirthplaceName")
     */
    private $birthplaceName;

    /**
     * @var OrganizationDepartment|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OrganizationDepartment")
     * @JMS\Expose
     * @JMS\SerializedName("OrganizationDepartment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrganizationDepartment", setter="setOrganizationDepartment")
     */
    private $organizationDepartment;

    /**
     * @var Contact|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Contact")
     * @JMS\Expose
     * @JMS\SerializedName("Contact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContact", setter="setContact")
     */
    private $contact;

    /**
     * @var FinancialAccount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FinancialAccount")
     * @JMS\Expose
     * @JMS\SerializedName("FinancialAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFinancialAccount", setter="setFinancialAccount")
     */
    private $financialAccount;

    /**
     * @var array<IdentityDocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\IdentityDocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("IdentityDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="IdentityDocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getIdentityDocumentReference", setter="setIdentityDocumentReference")
     */
    private $identityDocumentReference;

    /**
     * @var ResidenceAddress|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ResidenceAddress")
     * @JMS\Expose
     * @JMS\SerializedName("ResidenceAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getResidenceAddress", setter="setResidenceAddress")
     */
    private $residenceAddress;

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
     * @return FirstName|null
     */
    public function getFirstName(): ?FirstName
    {
        return $this->firstName;
    }

    /**
     * @return FirstName
     */
    public function getFirstNameWithCreate(): FirstName
    {
        $this->firstName = is_null($this->firstName) ? new FirstName() : $this->firstName;

        return $this->firstName;
    }

    /**
     * @param FirstName|null $firstName
     * @return static
     */
    public function setFirstName(?FirstName $firstName = null): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFirstName(): static
    {
        $this->firstName = null;

        return $this;
    }

    /**
     * @return FamilyName|null
     */
    public function getFamilyName(): ?FamilyName
    {
        return $this->familyName;
    }

    /**
     * @return FamilyName
     */
    public function getFamilyNameWithCreate(): FamilyName
    {
        $this->familyName = is_null($this->familyName) ? new FamilyName() : $this->familyName;

        return $this->familyName;
    }

    /**
     * @param FamilyName|null $familyName
     * @return static
     */
    public function setFamilyName(?FamilyName $familyName = null): static
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFamilyName(): static
    {
        $this->familyName = null;

        return $this;
    }

    /**
     * @return Title|null
     */
    public function getTitle(): ?Title
    {
        return $this->title;
    }

    /**
     * @return Title
     */
    public function getTitleWithCreate(): Title
    {
        $this->title = is_null($this->title) ? new Title() : $this->title;

        return $this->title;
    }

    /**
     * @param Title|null $title
     * @return static
     */
    public function setTitle(?Title $title = null): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTitle(): static
    {
        $this->title = null;

        return $this;
    }

    /**
     * @return MiddleName|null
     */
    public function getMiddleName(): ?MiddleName
    {
        return $this->middleName;
    }

    /**
     * @return MiddleName
     */
    public function getMiddleNameWithCreate(): MiddleName
    {
        $this->middleName = is_null($this->middleName) ? new MiddleName() : $this->middleName;

        return $this->middleName;
    }

    /**
     * @param MiddleName|null $middleName
     * @return static
     */
    public function setMiddleName(?MiddleName $middleName = null): static
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMiddleName(): static
    {
        $this->middleName = null;

        return $this;
    }

    /**
     * @return OtherName|null
     */
    public function getOtherName(): ?OtherName
    {
        return $this->otherName;
    }

    /**
     * @return OtherName
     */
    public function getOtherNameWithCreate(): OtherName
    {
        $this->otherName = is_null($this->otherName) ? new OtherName() : $this->otherName;

        return $this->otherName;
    }

    /**
     * @param OtherName|null $otherName
     * @return static
     */
    public function setOtherName(?OtherName $otherName = null): static
    {
        $this->otherName = $otherName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOtherName(): static
    {
        $this->otherName = null;

        return $this;
    }

    /**
     * @return NameSuffix|null
     */
    public function getNameSuffix(): ?NameSuffix
    {
        return $this->nameSuffix;
    }

    /**
     * @return NameSuffix
     */
    public function getNameSuffixWithCreate(): NameSuffix
    {
        $this->nameSuffix = is_null($this->nameSuffix) ? new NameSuffix() : $this->nameSuffix;

        return $this->nameSuffix;
    }

    /**
     * @param NameSuffix|null $nameSuffix
     * @return static
     */
    public function setNameSuffix(?NameSuffix $nameSuffix = null): static
    {
        $this->nameSuffix = $nameSuffix;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNameSuffix(): static
    {
        $this->nameSuffix = null;

        return $this;
    }

    /**
     * @return JobTitle|null
     */
    public function getJobTitle(): ?JobTitle
    {
        return $this->jobTitle;
    }

    /**
     * @return JobTitle
     */
    public function getJobTitleWithCreate(): JobTitle
    {
        $this->jobTitle = is_null($this->jobTitle) ? new JobTitle() : $this->jobTitle;

        return $this->jobTitle;
    }

    /**
     * @param JobTitle|null $jobTitle
     * @return static
     */
    public function setJobTitle(?JobTitle $jobTitle = null): static
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetJobTitle(): static
    {
        $this->jobTitle = null;

        return $this;
    }

    /**
     * @return NationalityID|null
     */
    public function getNationalityID(): ?NationalityID
    {
        return $this->nationalityID;
    }

    /**
     * @return NationalityID
     */
    public function getNationalityIDWithCreate(): NationalityID
    {
        $this->nationalityID = is_null($this->nationalityID) ? new NationalityID() : $this->nationalityID;

        return $this->nationalityID;
    }

    /**
     * @param NationalityID|null $nationalityID
     * @return static
     */
    public function setNationalityID(?NationalityID $nationalityID = null): static
    {
        $this->nationalityID = $nationalityID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNationalityID(): static
    {
        $this->nationalityID = null;

        return $this;
    }

    /**
     * @return GenderCode|null
     */
    public function getGenderCode(): ?GenderCode
    {
        return $this->genderCode;
    }

    /**
     * @return GenderCode
     */
    public function getGenderCodeWithCreate(): GenderCode
    {
        $this->genderCode = is_null($this->genderCode) ? new GenderCode() : $this->genderCode;

        return $this->genderCode;
    }

    /**
     * @param GenderCode|null $genderCode
     * @return static
     */
    public function setGenderCode(?GenderCode $genderCode = null): static
    {
        $this->genderCode = $genderCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGenderCode(): static
    {
        $this->genderCode = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getBirthDate(): ?DateTimeInterface
    {
        return $this->birthDate;
    }

    /**
     * @param DateTimeInterface|null $birthDate
     * @return static
     */
    public function setBirthDate(?DateTimeInterface $birthDate = null): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBirthDate(): static
    {
        $this->birthDate = null;

        return $this;
    }

    /**
     * @return BirthplaceName|null
     */
    public function getBirthplaceName(): ?BirthplaceName
    {
        return $this->birthplaceName;
    }

    /**
     * @return BirthplaceName
     */
    public function getBirthplaceNameWithCreate(): BirthplaceName
    {
        $this->birthplaceName = is_null($this->birthplaceName) ? new BirthplaceName() : $this->birthplaceName;

        return $this->birthplaceName;
    }

    /**
     * @param BirthplaceName|null $birthplaceName
     * @return static
     */
    public function setBirthplaceName(?BirthplaceName $birthplaceName = null): static
    {
        $this->birthplaceName = $birthplaceName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBirthplaceName(): static
    {
        $this->birthplaceName = null;

        return $this;
    }

    /**
     * @return OrganizationDepartment|null
     */
    public function getOrganizationDepartment(): ?OrganizationDepartment
    {
        return $this->organizationDepartment;
    }

    /**
     * @return OrganizationDepartment
     */
    public function getOrganizationDepartmentWithCreate(): OrganizationDepartment
    {
        $this->organizationDepartment = is_null($this->organizationDepartment) ? new OrganizationDepartment() : $this->organizationDepartment;

        return $this->organizationDepartment;
    }

    /**
     * @param OrganizationDepartment|null $organizationDepartment
     * @return static
     */
    public function setOrganizationDepartment(?OrganizationDepartment $organizationDepartment = null): static
    {
        $this->organizationDepartment = $organizationDepartment;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOrganizationDepartment(): static
    {
        $this->organizationDepartment = null;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @return Contact
     */
    public function getContactWithCreate(): Contact
    {
        $this->contact = is_null($this->contact) ? new Contact() : $this->contact;

        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     * @return static
     */
    public function setContact(?Contact $contact = null): static
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContact(): static
    {
        $this->contact = null;

        return $this;
    }

    /**
     * @return FinancialAccount|null
     */
    public function getFinancialAccount(): ?FinancialAccount
    {
        return $this->financialAccount;
    }

    /**
     * @return FinancialAccount
     */
    public function getFinancialAccountWithCreate(): FinancialAccount
    {
        $this->financialAccount = is_null($this->financialAccount) ? new FinancialAccount() : $this->financialAccount;

        return $this->financialAccount;
    }

    /**
     * @param FinancialAccount|null $financialAccount
     * @return static
     */
    public function setFinancialAccount(?FinancialAccount $financialAccount = null): static
    {
        $this->financialAccount = $financialAccount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFinancialAccount(): static
    {
        $this->financialAccount = null;

        return $this;
    }

    /**
     * @return array<IdentityDocumentReference>|null
     */
    public function getIdentityDocumentReference(): ?array
    {
        return $this->identityDocumentReference;
    }

    /**
     * @param array<IdentityDocumentReference>|null $identityDocumentReference
     * @return static
     */
    public function setIdentityDocumentReference(?array $identityDocumentReference = null): static
    {
        $this->identityDocumentReference = $identityDocumentReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIdentityDocumentReference(): static
    {
        $this->identityDocumentReference = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearIdentityDocumentReference(): static
    {
        $this->identityDocumentReference = [];

        return $this;
    }

    /**
     * @return IdentityDocumentReference|null
     */
    public function firstIdentityDocumentReference(): ?IdentityDocumentReference
    {
        $identityDocumentReference = $this->identityDocumentReference ?? [];
        $identityDocumentReference = reset($identityDocumentReference);

        if ($identityDocumentReference === false) {
            return null;
        }

        return $identityDocumentReference;
    }

    /**
     * @return IdentityDocumentReference|null
     */
    public function lastIdentityDocumentReference(): ?IdentityDocumentReference
    {
        $identityDocumentReference = $this->identityDocumentReference ?? [];
        $identityDocumentReference = end($identityDocumentReference);

        if ($identityDocumentReference === false) {
            return null;
        }

        return $identityDocumentReference;
    }

    /**
     * @param IdentityDocumentReference $identityDocumentReference
     * @return static
     */
    public function addToIdentityDocumentReference(IdentityDocumentReference $identityDocumentReference): static
    {
        $this->identityDocumentReference[] = $identityDocumentReference;

        return $this;
    }

    /**
     * @return IdentityDocumentReference
     */
    public function addToIdentityDocumentReferenceWithCreate(): IdentityDocumentReference
    {
        $this->addToidentityDocumentReference($identityDocumentReference = new IdentityDocumentReference());

        return $identityDocumentReference;
    }

    /**
     * @param IdentityDocumentReference $identityDocumentReference
     * @return static
     */
    public function addOnceToIdentityDocumentReference(IdentityDocumentReference $identityDocumentReference): static
    {
        if (!is_array($this->identityDocumentReference)) {
            $this->identityDocumentReference = [];
        }

        $this->identityDocumentReference[0] = $identityDocumentReference;

        return $this;
    }

    /**
     * @return IdentityDocumentReference
     */
    public function addOnceToIdentityDocumentReferenceWithCreate(): IdentityDocumentReference
    {
        if (!is_array($this->identityDocumentReference)) {
            $this->identityDocumentReference = [];
        }

        if ($this->identityDocumentReference === []) {
            $this->addOnceToidentityDocumentReference(new IdentityDocumentReference());
        }

        return $this->identityDocumentReference[0];
    }

    /**
     * @return ResidenceAddress|null
     */
    public function getResidenceAddress(): ?ResidenceAddress
    {
        return $this->residenceAddress;
    }

    /**
     * @return ResidenceAddress
     */
    public function getResidenceAddressWithCreate(): ResidenceAddress
    {
        $this->residenceAddress = is_null($this->residenceAddress) ? new ResidenceAddress() : $this->residenceAddress;

        return $this->residenceAddress;
    }

    /**
     * @param ResidenceAddress|null $residenceAddress
     * @return static
     */
    public function setResidenceAddress(?ResidenceAddress $residenceAddress = null): static
    {
        $this->residenceAddress = $residenceAddress;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetResidenceAddress(): static
    {
        $this->residenceAddress = null;

        return $this;
    }
}
