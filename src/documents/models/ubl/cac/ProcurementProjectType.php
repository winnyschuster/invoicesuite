<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EstimatedOverallContractQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FeeDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ProcurementSubTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ProcurementTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\QualityControlCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RequiredFeeAmount;

class ProcurementProjectType
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
     * @var array<Name>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Name>")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Name", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

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
     * @var ProcurementTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ProcurementTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ProcurementTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getProcurementTypeCode", setter="setProcurementTypeCode")
     */
    private $procurementTypeCode;

    /**
     * @var ProcurementSubTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ProcurementSubTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ProcurementSubTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getProcurementSubTypeCode", setter="setProcurementSubTypeCode")
     */
    private $procurementSubTypeCode;

    /**
     * @var QualityControlCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\QualityControlCode")
     * @JMS\Expose
     * @JMS\SerializedName("QualityControlCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQualityControlCode", setter="setQualityControlCode")
     */
    private $qualityControlCode;

    /**
     * @var RequiredFeeAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RequiredFeeAmount")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredFeeAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequiredFeeAmount", setter="setRequiredFeeAmount")
     */
    private $requiredFeeAmount;

    /**
     * @var array<FeeDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\FeeDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("FeeDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FeeDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getFeeDescription", setter="setFeeDescription")
     */
    private $feeDescription;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedDeliveryDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedDeliveryDate", setter="setRequestedDeliveryDate")
     */
    private $requestedDeliveryDate;

    /**
     * @var EstimatedOverallContractQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EstimatedOverallContractQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedOverallContractQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedOverallContractQuantity", setter="setEstimatedOverallContractQuantity")
     */
    private $estimatedOverallContractQuantity;

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
     * @var RequestedTenderTotal|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RequestedTenderTotal")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedTenderTotal")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedTenderTotal", setter="setRequestedTenderTotal")
     */
    private $requestedTenderTotal;

    /**
     * @var MainCommodityClassification|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\MainCommodityClassification")
     * @JMS\Expose
     * @JMS\SerializedName("MainCommodityClassification")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMainCommodityClassification", setter="setMainCommodityClassification")
     */
    private $mainCommodityClassification;

    /**
     * @var array<AdditionalCommodityClassification>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AdditionalCommodityClassification>")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalCommodityClassification")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AdditionalCommodityClassification", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAdditionalCommodityClassification", setter="setAdditionalCommodityClassification")
     */
    private $additionalCommodityClassification;

    /**
     * @var array<RealizedLocation>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\RealizedLocation>")
     * @JMS\Expose
     * @JMS\SerializedName("RealizedLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RealizedLocation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRealizedLocation", setter="setRealizedLocation")
     */
    private $realizedLocation;

    /**
     * @var PlannedPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PlannedPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("PlannedPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlannedPeriod", setter="setPlannedPeriod")
     */
    private $plannedPeriod;

    /**
     * @var ContractExtension|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ContractExtension")
     * @JMS\Expose
     * @JMS\SerializedName("ContractExtension")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractExtension", setter="setContractExtension")
     */
    private $contractExtension;

    /**
     * @var array<RequestForTenderLine>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\RequestForTenderLine>")
     * @JMS\Expose
     * @JMS\SerializedName("RequestForTenderLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RequestForTenderLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRequestForTenderLine", setter="setRequestForTenderLine")
     */
    private $requestForTenderLine;

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
     * @return array<Name>|null
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * @param array<Name>|null $name
     * @return static
     */
    public function setName(?array $name = null): static
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
     * @return static
     */
    public function clearName(): static
    {
        $this->name = [];

        return $this;
    }

    /**
     * @return Name|null
     */
    public function firstName(): ?Name
    {
        $name = $this->name ?? [];
        $name = reset($name);

        if ($name === false) {
            return null;
        }

        return $name;
    }

    /**
     * @return Name|null
     */
    public function lastName(): ?Name
    {
        $name = $this->name ?? [];
        $name = end($name);

        if ($name === false) {
            return null;
        }

        return $name;
    }

    /**
     * @param Name $name
     * @return static
     */
    public function addToName(Name $name): static
    {
        $this->name[] = $name;

        return $this;
    }

    /**
     * @return Name
     */
    public function addToNameWithCreate(): Name
    {
        $this->addToname($name = new Name());

        return $name;
    }

    /**
     * @param Name $name
     * @return static
     */
    public function addOnceToName(Name $name): static
    {
        if (!is_array($this->name)) {
            $this->name = [];
        }

        $this->name[0] = $name;

        return $this;
    }

    /**
     * @return Name
     */
    public function addOnceToNameWithCreate(): Name
    {
        if (!is_array($this->name)) {
            $this->name = [];
        }

        if ($this->name === []) {
            $this->addOnceToname(new Name());
        }

        return $this->name[0];
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
     * @return ProcurementTypeCode|null
     */
    public function getProcurementTypeCode(): ?ProcurementTypeCode
    {
        return $this->procurementTypeCode;
    }

    /**
     * @return ProcurementTypeCode
     */
    public function getProcurementTypeCodeWithCreate(): ProcurementTypeCode
    {
        $this->procurementTypeCode = is_null($this->procurementTypeCode) ? new ProcurementTypeCode() : $this->procurementTypeCode;

        return $this->procurementTypeCode;
    }

    /**
     * @param ProcurementTypeCode|null $procurementTypeCode
     * @return static
     */
    public function setProcurementTypeCode(?ProcurementTypeCode $procurementTypeCode = null): static
    {
        $this->procurementTypeCode = $procurementTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetProcurementTypeCode(): static
    {
        $this->procurementTypeCode = null;

        return $this;
    }

    /**
     * @return ProcurementSubTypeCode|null
     */
    public function getProcurementSubTypeCode(): ?ProcurementSubTypeCode
    {
        return $this->procurementSubTypeCode;
    }

    /**
     * @return ProcurementSubTypeCode
     */
    public function getProcurementSubTypeCodeWithCreate(): ProcurementSubTypeCode
    {
        $this->procurementSubTypeCode = is_null($this->procurementSubTypeCode) ? new ProcurementSubTypeCode() : $this->procurementSubTypeCode;

        return $this->procurementSubTypeCode;
    }

    /**
     * @param ProcurementSubTypeCode|null $procurementSubTypeCode
     * @return static
     */
    public function setProcurementSubTypeCode(?ProcurementSubTypeCode $procurementSubTypeCode = null): static
    {
        $this->procurementSubTypeCode = $procurementSubTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetProcurementSubTypeCode(): static
    {
        $this->procurementSubTypeCode = null;

        return $this;
    }

    /**
     * @return QualityControlCode|null
     */
    public function getQualityControlCode(): ?QualityControlCode
    {
        return $this->qualityControlCode;
    }

    /**
     * @return QualityControlCode
     */
    public function getQualityControlCodeWithCreate(): QualityControlCode
    {
        $this->qualityControlCode = is_null($this->qualityControlCode) ? new QualityControlCode() : $this->qualityControlCode;

        return $this->qualityControlCode;
    }

    /**
     * @param QualityControlCode|null $qualityControlCode
     * @return static
     */
    public function setQualityControlCode(?QualityControlCode $qualityControlCode = null): static
    {
        $this->qualityControlCode = $qualityControlCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetQualityControlCode(): static
    {
        $this->qualityControlCode = null;

        return $this;
    }

    /**
     * @return RequiredFeeAmount|null
     */
    public function getRequiredFeeAmount(): ?RequiredFeeAmount
    {
        return $this->requiredFeeAmount;
    }

    /**
     * @return RequiredFeeAmount
     */
    public function getRequiredFeeAmountWithCreate(): RequiredFeeAmount
    {
        $this->requiredFeeAmount = is_null($this->requiredFeeAmount) ? new RequiredFeeAmount() : $this->requiredFeeAmount;

        return $this->requiredFeeAmount;
    }

    /**
     * @param RequiredFeeAmount|null $requiredFeeAmount
     * @return static
     */
    public function setRequiredFeeAmount(?RequiredFeeAmount $requiredFeeAmount = null): static
    {
        $this->requiredFeeAmount = $requiredFeeAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequiredFeeAmount(): static
    {
        $this->requiredFeeAmount = null;

        return $this;
    }

    /**
     * @return array<FeeDescription>|null
     */
    public function getFeeDescription(): ?array
    {
        return $this->feeDescription;
    }

    /**
     * @param array<FeeDescription>|null $feeDescription
     * @return static
     */
    public function setFeeDescription(?array $feeDescription = null): static
    {
        $this->feeDescription = $feeDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFeeDescription(): static
    {
        $this->feeDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearFeeDescription(): static
    {
        $this->feeDescription = [];

        return $this;
    }

    /**
     * @return FeeDescription|null
     */
    public function firstFeeDescription(): ?FeeDescription
    {
        $feeDescription = $this->feeDescription ?? [];
        $feeDescription = reset($feeDescription);

        if ($feeDescription === false) {
            return null;
        }

        return $feeDescription;
    }

    /**
     * @return FeeDescription|null
     */
    public function lastFeeDescription(): ?FeeDescription
    {
        $feeDescription = $this->feeDescription ?? [];
        $feeDescription = end($feeDescription);

        if ($feeDescription === false) {
            return null;
        }

        return $feeDescription;
    }

    /**
     * @param FeeDescription $feeDescription
     * @return static
     */
    public function addToFeeDescription(FeeDescription $feeDescription): static
    {
        $this->feeDescription[] = $feeDescription;

        return $this;
    }

    /**
     * @return FeeDescription
     */
    public function addToFeeDescriptionWithCreate(): FeeDescription
    {
        $this->addTofeeDescription($feeDescription = new FeeDescription());

        return $feeDescription;
    }

    /**
     * @param FeeDescription $feeDescription
     * @return static
     */
    public function addOnceToFeeDescription(FeeDescription $feeDescription): static
    {
        if (!is_array($this->feeDescription)) {
            $this->feeDescription = [];
        }

        $this->feeDescription[0] = $feeDescription;

        return $this;
    }

    /**
     * @return FeeDescription
     */
    public function addOnceToFeeDescriptionWithCreate(): FeeDescription
    {
        if (!is_array($this->feeDescription)) {
            $this->feeDescription = [];
        }

        if ($this->feeDescription === []) {
            $this->addOnceTofeeDescription(new FeeDescription());
        }

        return $this->feeDescription[0];
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getRequestedDeliveryDate(): ?DateTimeInterface
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * @param DateTimeInterface|null $requestedDeliveryDate
     * @return static
     */
    public function setRequestedDeliveryDate(?DateTimeInterface $requestedDeliveryDate = null): static
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequestedDeliveryDate(): static
    {
        $this->requestedDeliveryDate = null;

        return $this;
    }

    /**
     * @return EstimatedOverallContractQuantity|null
     */
    public function getEstimatedOverallContractQuantity(): ?EstimatedOverallContractQuantity
    {
        return $this->estimatedOverallContractQuantity;
    }

    /**
     * @return EstimatedOverallContractQuantity
     */
    public function getEstimatedOverallContractQuantityWithCreate(): EstimatedOverallContractQuantity
    {
        $this->estimatedOverallContractQuantity = is_null($this->estimatedOverallContractQuantity) ? new EstimatedOverallContractQuantity() : $this->estimatedOverallContractQuantity;

        return $this->estimatedOverallContractQuantity;
    }

    /**
     * @param EstimatedOverallContractQuantity|null $estimatedOverallContractQuantity
     * @return static
     */
    public function setEstimatedOverallContractQuantity(
        ?EstimatedOverallContractQuantity $estimatedOverallContractQuantity = null,
    ): static {
        $this->estimatedOverallContractQuantity = $estimatedOverallContractQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEstimatedOverallContractQuantity(): static
    {
        $this->estimatedOverallContractQuantity = null;

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
     * @return RequestedTenderTotal|null
     */
    public function getRequestedTenderTotal(): ?RequestedTenderTotal
    {
        return $this->requestedTenderTotal;
    }

    /**
     * @return RequestedTenderTotal
     */
    public function getRequestedTenderTotalWithCreate(): RequestedTenderTotal
    {
        $this->requestedTenderTotal = is_null($this->requestedTenderTotal) ? new RequestedTenderTotal() : $this->requestedTenderTotal;

        return $this->requestedTenderTotal;
    }

    /**
     * @param RequestedTenderTotal|null $requestedTenderTotal
     * @return static
     */
    public function setRequestedTenderTotal(?RequestedTenderTotal $requestedTenderTotal = null): static
    {
        $this->requestedTenderTotal = $requestedTenderTotal;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequestedTenderTotal(): static
    {
        $this->requestedTenderTotal = null;

        return $this;
    }

    /**
     * @return MainCommodityClassification|null
     */
    public function getMainCommodityClassification(): ?MainCommodityClassification
    {
        return $this->mainCommodityClassification;
    }

    /**
     * @return MainCommodityClassification
     */
    public function getMainCommodityClassificationWithCreate(): MainCommodityClassification
    {
        $this->mainCommodityClassification = is_null($this->mainCommodityClassification) ? new MainCommodityClassification() : $this->mainCommodityClassification;

        return $this->mainCommodityClassification;
    }

    /**
     * @param MainCommodityClassification|null $mainCommodityClassification
     * @return static
     */
    public function setMainCommodityClassification(
        ?MainCommodityClassification $mainCommodityClassification = null,
    ): static {
        $this->mainCommodityClassification = $mainCommodityClassification;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMainCommodityClassification(): static
    {
        $this->mainCommodityClassification = null;

        return $this;
    }

    /**
     * @return array<AdditionalCommodityClassification>|null
     */
    public function getAdditionalCommodityClassification(): ?array
    {
        return $this->additionalCommodityClassification;
    }

    /**
     * @param array<AdditionalCommodityClassification>|null $additionalCommodityClassification
     * @return static
     */
    public function setAdditionalCommodityClassification(?array $additionalCommodityClassification = null): static
    {
        $this->additionalCommodityClassification = $additionalCommodityClassification;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAdditionalCommodityClassification(): static
    {
        $this->additionalCommodityClassification = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAdditionalCommodityClassification(): static
    {
        $this->additionalCommodityClassification = [];

        return $this;
    }

    /**
     * @return AdditionalCommodityClassification|null
     */
    public function firstAdditionalCommodityClassification(): ?AdditionalCommodityClassification
    {
        $additionalCommodityClassification = $this->additionalCommodityClassification ?? [];
        $additionalCommodityClassification = reset($additionalCommodityClassification);

        if ($additionalCommodityClassification === false) {
            return null;
        }

        return $additionalCommodityClassification;
    }

    /**
     * @return AdditionalCommodityClassification|null
     */
    public function lastAdditionalCommodityClassification(): ?AdditionalCommodityClassification
    {
        $additionalCommodityClassification = $this->additionalCommodityClassification ?? [];
        $additionalCommodityClassification = end($additionalCommodityClassification);

        if ($additionalCommodityClassification === false) {
            return null;
        }

        return $additionalCommodityClassification;
    }

    /**
     * @param AdditionalCommodityClassification $additionalCommodityClassification
     * @return static
     */
    public function addToAdditionalCommodityClassification(
        AdditionalCommodityClassification $additionalCommodityClassification,
    ): static {
        $this->additionalCommodityClassification[] = $additionalCommodityClassification;

        return $this;
    }

    /**
     * @return AdditionalCommodityClassification
     */
    public function addToAdditionalCommodityClassificationWithCreate(): AdditionalCommodityClassification
    {
        $this->addToadditionalCommodityClassification($additionalCommodityClassification = new AdditionalCommodityClassification());

        return $additionalCommodityClassification;
    }

    /**
     * @param AdditionalCommodityClassification $additionalCommodityClassification
     * @return static
     */
    public function addOnceToAdditionalCommodityClassification(
        AdditionalCommodityClassification $additionalCommodityClassification,
    ): static {
        if (!is_array($this->additionalCommodityClassification)) {
            $this->additionalCommodityClassification = [];
        }

        $this->additionalCommodityClassification[0] = $additionalCommodityClassification;

        return $this;
    }

    /**
     * @return AdditionalCommodityClassification
     */
    public function addOnceToAdditionalCommodityClassificationWithCreate(): AdditionalCommodityClassification
    {
        if (!is_array($this->additionalCommodityClassification)) {
            $this->additionalCommodityClassification = [];
        }

        if ($this->additionalCommodityClassification === []) {
            $this->addOnceToadditionalCommodityClassification(new AdditionalCommodityClassification());
        }

        return $this->additionalCommodityClassification[0];
    }

    /**
     * @return array<RealizedLocation>|null
     */
    public function getRealizedLocation(): ?array
    {
        return $this->realizedLocation;
    }

    /**
     * @param array<RealizedLocation>|null $realizedLocation
     * @return static
     */
    public function setRealizedLocation(?array $realizedLocation = null): static
    {
        $this->realizedLocation = $realizedLocation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRealizedLocation(): static
    {
        $this->realizedLocation = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearRealizedLocation(): static
    {
        $this->realizedLocation = [];

        return $this;
    }

    /**
     * @return RealizedLocation|null
     */
    public function firstRealizedLocation(): ?RealizedLocation
    {
        $realizedLocation = $this->realizedLocation ?? [];
        $realizedLocation = reset($realizedLocation);

        if ($realizedLocation === false) {
            return null;
        }

        return $realizedLocation;
    }

    /**
     * @return RealizedLocation|null
     */
    public function lastRealizedLocation(): ?RealizedLocation
    {
        $realizedLocation = $this->realizedLocation ?? [];
        $realizedLocation = end($realizedLocation);

        if ($realizedLocation === false) {
            return null;
        }

        return $realizedLocation;
    }

    /**
     * @param RealizedLocation $realizedLocation
     * @return static
     */
    public function addToRealizedLocation(RealizedLocation $realizedLocation): static
    {
        $this->realizedLocation[] = $realizedLocation;

        return $this;
    }

    /**
     * @return RealizedLocation
     */
    public function addToRealizedLocationWithCreate(): RealizedLocation
    {
        $this->addTorealizedLocation($realizedLocation = new RealizedLocation());

        return $realizedLocation;
    }

    /**
     * @param RealizedLocation $realizedLocation
     * @return static
     */
    public function addOnceToRealizedLocation(RealizedLocation $realizedLocation): static
    {
        if (!is_array($this->realizedLocation)) {
            $this->realizedLocation = [];
        }

        $this->realizedLocation[0] = $realizedLocation;

        return $this;
    }

    /**
     * @return RealizedLocation
     */
    public function addOnceToRealizedLocationWithCreate(): RealizedLocation
    {
        if (!is_array($this->realizedLocation)) {
            $this->realizedLocation = [];
        }

        if ($this->realizedLocation === []) {
            $this->addOnceTorealizedLocation(new RealizedLocation());
        }

        return $this->realizedLocation[0];
    }

    /**
     * @return PlannedPeriod|null
     */
    public function getPlannedPeriod(): ?PlannedPeriod
    {
        return $this->plannedPeriod;
    }

    /**
     * @return PlannedPeriod
     */
    public function getPlannedPeriodWithCreate(): PlannedPeriod
    {
        $this->plannedPeriod = is_null($this->plannedPeriod) ? new PlannedPeriod() : $this->plannedPeriod;

        return $this->plannedPeriod;
    }

    /**
     * @param PlannedPeriod|null $plannedPeriod
     * @return static
     */
    public function setPlannedPeriod(?PlannedPeriod $plannedPeriod = null): static
    {
        $this->plannedPeriod = $plannedPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPlannedPeriod(): static
    {
        $this->plannedPeriod = null;

        return $this;
    }

    /**
     * @return ContractExtension|null
     */
    public function getContractExtension(): ?ContractExtension
    {
        return $this->contractExtension;
    }

    /**
     * @return ContractExtension
     */
    public function getContractExtensionWithCreate(): ContractExtension
    {
        $this->contractExtension = is_null($this->contractExtension) ? new ContractExtension() : $this->contractExtension;

        return $this->contractExtension;
    }

    /**
     * @param ContractExtension|null $contractExtension
     * @return static
     */
    public function setContractExtension(?ContractExtension $contractExtension = null): static
    {
        $this->contractExtension = $contractExtension;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractExtension(): static
    {
        $this->contractExtension = null;

        return $this;
    }

    /**
     * @return array<RequestForTenderLine>|null
     */
    public function getRequestForTenderLine(): ?array
    {
        return $this->requestForTenderLine;
    }

    /**
     * @param array<RequestForTenderLine>|null $requestForTenderLine
     * @return static
     */
    public function setRequestForTenderLine(?array $requestForTenderLine = null): static
    {
        $this->requestForTenderLine = $requestForTenderLine;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequestForTenderLine(): static
    {
        $this->requestForTenderLine = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearRequestForTenderLine(): static
    {
        $this->requestForTenderLine = [];

        return $this;
    }

    /**
     * @return RequestForTenderLine|null
     */
    public function firstRequestForTenderLine(): ?RequestForTenderLine
    {
        $requestForTenderLine = $this->requestForTenderLine ?? [];
        $requestForTenderLine = reset($requestForTenderLine);

        if ($requestForTenderLine === false) {
            return null;
        }

        return $requestForTenderLine;
    }

    /**
     * @return RequestForTenderLine|null
     */
    public function lastRequestForTenderLine(): ?RequestForTenderLine
    {
        $requestForTenderLine = $this->requestForTenderLine ?? [];
        $requestForTenderLine = end($requestForTenderLine);

        if ($requestForTenderLine === false) {
            return null;
        }

        return $requestForTenderLine;
    }

    /**
     * @param RequestForTenderLine $requestForTenderLine
     * @return static
     */
    public function addToRequestForTenderLine(RequestForTenderLine $requestForTenderLine): static
    {
        $this->requestForTenderLine[] = $requestForTenderLine;

        return $this;
    }

    /**
     * @return RequestForTenderLine
     */
    public function addToRequestForTenderLineWithCreate(): RequestForTenderLine
    {
        $this->addTorequestForTenderLine($requestForTenderLine = new RequestForTenderLine());

        return $requestForTenderLine;
    }

    /**
     * @param RequestForTenderLine $requestForTenderLine
     * @return static
     */
    public function addOnceToRequestForTenderLine(RequestForTenderLine $requestForTenderLine): static
    {
        if (!is_array($this->requestForTenderLine)) {
            $this->requestForTenderLine = [];
        }

        $this->requestForTenderLine[0] = $requestForTenderLine;

        return $this;
    }

    /**
     * @return RequestForTenderLine
     */
    public function addOnceToRequestForTenderLineWithCreate(): RequestForTenderLine
    {
        if (!is_array($this->requestForTenderLine)) {
            $this->requestForTenderLine = [];
        }

        if ($this->requestForTenderLine === []) {
            $this->addOnceTorequestForTenderLine(new RequestForTenderLine());
        }

        return $this->requestForTenderLine[0];
    }
}
