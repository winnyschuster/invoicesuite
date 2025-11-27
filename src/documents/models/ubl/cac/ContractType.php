<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ContractType as ContractType1;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ContractTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\VersionID;

class ContractType
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
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueDate", setter="setIssueDate")
     */
    private $issueDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("IssueTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueTime", setter="setIssueTime")
     */
    private $issueTime;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("NominationDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNominationDate", setter="setNominationDate")
     */
    private $nominationDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("NominationTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNominationTime", setter="setNominationTime")
     */
    private $nominationTime;

    /**
     * @var ContractTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ContractTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ContractTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractTypeCode", setter="setContractTypeCode")
     */
    private $contractTypeCode;

    /**
     * @var \horstoeko\invoicesuite\documents\models\ubl\cbc\ContractType|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ContractType")
     * @JMS\Expose
     * @JMS\SerializedName("ContractType")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractType", setter="setContractType")
     */
    private $contractType;

    /**
     * @var array<Note>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var VersionID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\VersionID")
     * @JMS\Expose
     * @JMS\SerializedName("VersionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getVersionID", setter="setVersionID")
     */
    private $versionID;

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
     * @var ValidityPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValidityPeriod", setter="setValidityPeriod")
     */
    private $validityPeriod;

    /**
     * @var array<ContractDocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ContractDocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("ContractDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ContractDocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getContractDocumentReference", setter="setContractDocumentReference")
     */
    private $contractDocumentReference;

    /**
     * @var NominationPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\NominationPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("NominationPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNominationPeriod", setter="setNominationPeriod")
     */
    private $nominationPeriod;

    /**
     * @var ContractualDelivery|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ContractualDelivery")
     * @JMS\Expose
     * @JMS\SerializedName("ContractualDelivery")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractualDelivery", setter="setContractualDelivery")
     */
    private $contractualDelivery;

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
     * @return DateTimeInterface|null
     */
    public function getIssueDate(): ?DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @param DateTimeInterface|null $issueDate
     * @return static
     */
    public function setIssueDate(?DateTimeInterface $issueDate = null): static
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIssueDate(): static
    {
        $this->issueDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getIssueTime(): ?DateTimeInterface
    {
        return $this->issueTime;
    }

    /**
     * @param DateTimeInterface|null $issueTime
     * @return static
     */
    public function setIssueTime(?DateTimeInterface $issueTime = null): static
    {
        $this->issueTime = $issueTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIssueTime(): static
    {
        $this->issueTime = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getNominationDate(): ?DateTimeInterface
    {
        return $this->nominationDate;
    }

    /**
     * @param DateTimeInterface|null $nominationDate
     * @return static
     */
    public function setNominationDate(?DateTimeInterface $nominationDate = null): static
    {
        $this->nominationDate = $nominationDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNominationDate(): static
    {
        $this->nominationDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getNominationTime(): ?DateTimeInterface
    {
        return $this->nominationTime;
    }

    /**
     * @param DateTimeInterface|null $nominationTime
     * @return static
     */
    public function setNominationTime(?DateTimeInterface $nominationTime = null): static
    {
        $this->nominationTime = $nominationTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNominationTime(): static
    {
        $this->nominationTime = null;

        return $this;
    }

    /**
     * @return ContractTypeCode|null
     */
    public function getContractTypeCode(): ?ContractTypeCode
    {
        return $this->contractTypeCode;
    }

    /**
     * @return ContractTypeCode
     */
    public function getContractTypeCodeWithCreate(): ContractTypeCode
    {
        $this->contractTypeCode = is_null($this->contractTypeCode) ? new ContractTypeCode() : $this->contractTypeCode;

        return $this->contractTypeCode;
    }

    /**
     * @param ContractTypeCode|null $contractTypeCode
     * @return static
     */
    public function setContractTypeCode(?ContractTypeCode $contractTypeCode = null): static
    {
        $this->contractTypeCode = $contractTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractTypeCode(): static
    {
        $this->contractTypeCode = null;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cbc\ContractType|null
     */
    public function getContractType(): ?ContractType1
    {
        return $this->contractType;
    }

    /**
     * @return \horstoeko\invoicesuite\documents\models\ubl\cbc\ContractType
     */
    public function getContractTypeWithCreate(): ContractType1
    {
        $this->contractType = is_null($this->contractType) ? new ContractType() : $this->contractType;

        return $this->contractType;
    }

    /**
     * @param \horstoeko\invoicesuite\documents\models\ubl\cbc\ContractType|null $contractType
     * @return static
     */
    public function setContractType(?ContractType1 $contractType = null): static
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractType(): static
    {
        $this->contractType = null;

        return $this;
    }

    /**
     * @return array<Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<Note>|null $note
     * @return static
     */
    public function setNote(?array $note = null): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNote(): static
    {
        $this->note = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearNote(): static
    {
        $this->note = [];

        return $this;
    }

    /**
     * @return Note|null
     */
    public function firstNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = reset($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @return Note|null
     */
    public function lastNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = end($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @param Note $note
     * @return static
     */
    public function addToNote(Note $note): static
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param Note $note
     * @return static
     */
    public function addOnceToNote(Note $note): static
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return VersionID|null
     */
    public function getVersionID(): ?VersionID
    {
        return $this->versionID;
    }

    /**
     * @return VersionID
     */
    public function getVersionIDWithCreate(): VersionID
    {
        $this->versionID = is_null($this->versionID) ? new VersionID() : $this->versionID;

        return $this->versionID;
    }

    /**
     * @param VersionID|null $versionID
     * @return static
     */
    public function setVersionID(?VersionID $versionID = null): static
    {
        $this->versionID = $versionID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetVersionID(): static
    {
        $this->versionID = null;

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
     * @return ValidityPeriod|null
     */
    public function getValidityPeriod(): ?ValidityPeriod
    {
        return $this->validityPeriod;
    }

    /**
     * @return ValidityPeriod
     */
    public function getValidityPeriodWithCreate(): ValidityPeriod
    {
        $this->validityPeriod = is_null($this->validityPeriod) ? new ValidityPeriod() : $this->validityPeriod;

        return $this->validityPeriod;
    }

    /**
     * @param ValidityPeriod|null $validityPeriod
     * @return static
     */
    public function setValidityPeriod(?ValidityPeriod $validityPeriod = null): static
    {
        $this->validityPeriod = $validityPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValidityPeriod(): static
    {
        $this->validityPeriod = null;

        return $this;
    }

    /**
     * @return array<ContractDocumentReference>|null
     */
    public function getContractDocumentReference(): ?array
    {
        return $this->contractDocumentReference;
    }

    /**
     * @param array<ContractDocumentReference>|null $contractDocumentReference
     * @return static
     */
    public function setContractDocumentReference(?array $contractDocumentReference = null): static
    {
        $this->contractDocumentReference = $contractDocumentReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractDocumentReference(): static
    {
        $this->contractDocumentReference = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearContractDocumentReference(): static
    {
        $this->contractDocumentReference = [];

        return $this;
    }

    /**
     * @return ContractDocumentReference|null
     */
    public function firstContractDocumentReference(): ?ContractDocumentReference
    {
        $contractDocumentReference = $this->contractDocumentReference ?? [];
        $contractDocumentReference = reset($contractDocumentReference);

        if ($contractDocumentReference === false) {
            return null;
        }

        return $contractDocumentReference;
    }

    /**
     * @return ContractDocumentReference|null
     */
    public function lastContractDocumentReference(): ?ContractDocumentReference
    {
        $contractDocumentReference = $this->contractDocumentReference ?? [];
        $contractDocumentReference = end($contractDocumentReference);

        if ($contractDocumentReference === false) {
            return null;
        }

        return $contractDocumentReference;
    }

    /**
     * @param ContractDocumentReference $contractDocumentReference
     * @return static
     */
    public function addToContractDocumentReference(ContractDocumentReference $contractDocumentReference): static
    {
        $this->contractDocumentReference[] = $contractDocumentReference;

        return $this;
    }

    /**
     * @return ContractDocumentReference
     */
    public function addToContractDocumentReferenceWithCreate(): ContractDocumentReference
    {
        $this->addTocontractDocumentReference($contractDocumentReference = new ContractDocumentReference());

        return $contractDocumentReference;
    }

    /**
     * @param ContractDocumentReference $contractDocumentReference
     * @return static
     */
    public function addOnceToContractDocumentReference(ContractDocumentReference $contractDocumentReference): static
    {
        if (!is_array($this->contractDocumentReference)) {
            $this->contractDocumentReference = [];
        }

        $this->contractDocumentReference[0] = $contractDocumentReference;

        return $this;
    }

    /**
     * @return ContractDocumentReference
     */
    public function addOnceToContractDocumentReferenceWithCreate(): ContractDocumentReference
    {
        if (!is_array($this->contractDocumentReference)) {
            $this->contractDocumentReference = [];
        }

        if ($this->contractDocumentReference === []) {
            $this->addOnceTocontractDocumentReference(new ContractDocumentReference());
        }

        return $this->contractDocumentReference[0];
    }

    /**
     * @return NominationPeriod|null
     */
    public function getNominationPeriod(): ?NominationPeriod
    {
        return $this->nominationPeriod;
    }

    /**
     * @return NominationPeriod
     */
    public function getNominationPeriodWithCreate(): NominationPeriod
    {
        $this->nominationPeriod = is_null($this->nominationPeriod) ? new NominationPeriod() : $this->nominationPeriod;

        return $this->nominationPeriod;
    }

    /**
     * @param NominationPeriod|null $nominationPeriod
     * @return static
     */
    public function setNominationPeriod(?NominationPeriod $nominationPeriod = null): static
    {
        $this->nominationPeriod = $nominationPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNominationPeriod(): static
    {
        $this->nominationPeriod = null;

        return $this;
    }

    /**
     * @return ContractualDelivery|null
     */
    public function getContractualDelivery(): ?ContractualDelivery
    {
        return $this->contractualDelivery;
    }

    /**
     * @return ContractualDelivery
     */
    public function getContractualDeliveryWithCreate(): ContractualDelivery
    {
        $this->contractualDelivery = is_null($this->contractualDelivery) ? new ContractualDelivery() : $this->contractualDelivery;

        return $this->contractualDelivery;
    }

    /**
     * @param ContractualDelivery|null $contractualDelivery
     * @return static
     */
    public function setContractualDelivery(?ContractualDelivery $contractualDelivery = null): static
    {
        $this->contractualDelivery = $contractualDelivery;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractualDelivery(): static
    {
        $this->contractualDelivery = null;

        return $this;
    }
}
