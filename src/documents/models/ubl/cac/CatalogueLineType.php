<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ActionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ContentUnitQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ContractSubdivision;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LifeCycleStatusCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumOrderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumOrderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OrderQuantityIncrementNumeric;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OrderableUnit;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PackLevelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\WarrantyInformation;

class CatalogueLineType
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
     * @var ActionCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ActionCode")
     * @JMS\Expose
     * @JMS\SerializedName("ActionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActionCode", setter="setActionCode")
     */
    private $actionCode;

    /**
     * @var LifeCycleStatusCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LifeCycleStatusCode")
     * @JMS\Expose
     * @JMS\SerializedName("LifeCycleStatusCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLifeCycleStatusCode", setter="setLifeCycleStatusCode")
     */
    private $lifeCycleStatusCode;

    /**
     * @var ContractSubdivision|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ContractSubdivision")
     * @JMS\Expose
     * @JMS\SerializedName("ContractSubdivision")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractSubdivision", setter="setContractSubdivision")
     */
    private $contractSubdivision;

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
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("OrderableIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrderableIndicator", setter="setOrderableIndicator")
     */
    private $orderableIndicator;

    /**
     * @var OrderableUnit|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OrderableUnit")
     * @JMS\Expose
     * @JMS\SerializedName("OrderableUnit")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrderableUnit", setter="setOrderableUnit")
     */
    private $orderableUnit;

    /**
     * @var ContentUnitQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ContentUnitQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ContentUnitQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContentUnitQuantity", setter="setContentUnitQuantity")
     */
    private $contentUnitQuantity;

    /**
     * @var OrderQuantityIncrementNumeric|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OrderQuantityIncrementNumeric")
     * @JMS\Expose
     * @JMS\SerializedName("OrderQuantityIncrementNumeric")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOrderQuantityIncrementNumeric", setter="setOrderQuantityIncrementNumeric")
     */
    private $orderQuantityIncrementNumeric;

    /**
     * @var MinimumOrderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumOrderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumOrderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumOrderQuantity", setter="setMinimumOrderQuantity")
     */
    private $minimumOrderQuantity;

    /**
     * @var MaximumOrderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumOrderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumOrderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumOrderQuantity", setter="setMaximumOrderQuantity")
     */
    private $maximumOrderQuantity;

    /**
     * @var array<WarrantyInformation>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\WarrantyInformation>")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyInformation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="WarrantyInformation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getWarrantyInformation", setter="setWarrantyInformation")
     */
    private $warrantyInformation;

    /**
     * @var PackLevelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PackLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("PackLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPackLevelCode", setter="setPackLevelCode")
     */
    private $packLevelCode;

    /**
     * @var ContractorCustomerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ContractorCustomerParty")
     * @JMS\Expose
     * @JMS\SerializedName("ContractorCustomerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractorCustomerParty", setter="setContractorCustomerParty")
     */
    private $contractorCustomerParty;

    /**
     * @var SellerSupplierParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SellerSupplierParty")
     * @JMS\Expose
     * @JMS\SerializedName("SellerSupplierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSellerSupplierParty", setter="setSellerSupplierParty")
     */
    private $sellerSupplierParty;

    /**
     * @var WarrantyParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\WarrantyParty")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWarrantyParty", setter="setWarrantyParty")
     */
    private $warrantyParty;

    /**
     * @var WarrantyValidityPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\WarrantyValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("WarrantyValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWarrantyValidityPeriod", setter="setWarrantyValidityPeriod")
     */
    private $warrantyValidityPeriod;

    /**
     * @var LineValidityPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\LineValidityPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("LineValidityPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLineValidityPeriod", setter="setLineValidityPeriod")
     */
    private $lineValidityPeriod;

    /**
     * @var array<ItemComparison>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ItemComparison>")
     * @JMS\Expose
     * @JMS\SerializedName("ItemComparison")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ItemComparison", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getItemComparison", setter="setItemComparison")
     */
    private $itemComparison;

    /**
     * @var array<ComponentRelatedItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ComponentRelatedItem>")
     * @JMS\Expose
     * @JMS\SerializedName("ComponentRelatedItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ComponentRelatedItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getComponentRelatedItem", setter="setComponentRelatedItem")
     */
    private $componentRelatedItem;

    /**
     * @var array<AccessoryRelatedItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AccessoryRelatedItem>")
     * @JMS\Expose
     * @JMS\SerializedName("AccessoryRelatedItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AccessoryRelatedItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAccessoryRelatedItem", setter="setAccessoryRelatedItem")
     */
    private $accessoryRelatedItem;

    /**
     * @var array<RequiredRelatedItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\RequiredRelatedItem>")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredRelatedItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RequiredRelatedItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRequiredRelatedItem", setter="setRequiredRelatedItem")
     */
    private $requiredRelatedItem;

    /**
     * @var array<ReplacementRelatedItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ReplacementRelatedItem>")
     * @JMS\Expose
     * @JMS\SerializedName("ReplacementRelatedItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ReplacementRelatedItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getReplacementRelatedItem", setter="setReplacementRelatedItem")
     */
    private $replacementRelatedItem;

    /**
     * @var array<ComplementaryRelatedItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ComplementaryRelatedItem>")
     * @JMS\Expose
     * @JMS\SerializedName("ComplementaryRelatedItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ComplementaryRelatedItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getComplementaryRelatedItem", setter="setComplementaryRelatedItem")
     */
    private $complementaryRelatedItem;

    /**
     * @var array<ReplacedRelatedItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ReplacedRelatedItem>")
     * @JMS\Expose
     * @JMS\SerializedName("ReplacedRelatedItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ReplacedRelatedItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getReplacedRelatedItem", setter="setReplacedRelatedItem")
     */
    private $replacedRelatedItem;

    /**
     * @var array<RequiredItemLocationQuantity>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\RequiredItemLocationQuantity>")
     * @JMS\Expose
     * @JMS\SerializedName("RequiredItemLocationQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="RequiredItemLocationQuantity", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getRequiredItemLocationQuantity", setter="setRequiredItemLocationQuantity")
     */
    private $requiredItemLocationQuantity;

    /**
     * @var array<DocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var Item|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Item")
     * @JMS\Expose
     * @JMS\SerializedName("Item")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getItem", setter="setItem")
     */
    private $item;

    /**
     * @var array<KeywordItemProperty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\KeywordItemProperty>")
     * @JMS\Expose
     * @JMS\SerializedName("KeywordItemProperty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="KeywordItemProperty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getKeywordItemProperty", setter="setKeywordItemProperty")
     */
    private $keywordItemProperty;

    /**
     * @var CallForTendersLineReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CallForTendersLineReference")
     * @JMS\Expose
     * @JMS\SerializedName("CallForTendersLineReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallForTendersLineReference", setter="setCallForTendersLineReference")
     */
    private $callForTendersLineReference;

    /**
     * @var CallForTendersDocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CallForTendersDocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("CallForTendersDocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCallForTendersDocumentReference", setter="setCallForTendersDocumentReference")
     */
    private $callForTendersDocumentReference;

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
     * @return ActionCode|null
     */
    public function getActionCode(): ?ActionCode
    {
        return $this->actionCode;
    }

    /**
     * @return ActionCode
     */
    public function getActionCodeWithCreate(): ActionCode
    {
        $this->actionCode = is_null($this->actionCode) ? new ActionCode() : $this->actionCode;

        return $this->actionCode;
    }

    /**
     * @param ActionCode|null $actionCode
     * @return static
     */
    public function setActionCode(?ActionCode $actionCode = null): static
    {
        $this->actionCode = $actionCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetActionCode(): static
    {
        $this->actionCode = null;

        return $this;
    }

    /**
     * @return LifeCycleStatusCode|null
     */
    public function getLifeCycleStatusCode(): ?LifeCycleStatusCode
    {
        return $this->lifeCycleStatusCode;
    }

    /**
     * @return LifeCycleStatusCode
     */
    public function getLifeCycleStatusCodeWithCreate(): LifeCycleStatusCode
    {
        $this->lifeCycleStatusCode = is_null($this->lifeCycleStatusCode) ? new LifeCycleStatusCode() : $this->lifeCycleStatusCode;

        return $this->lifeCycleStatusCode;
    }

    /**
     * @param LifeCycleStatusCode|null $lifeCycleStatusCode
     * @return static
     */
    public function setLifeCycleStatusCode(?LifeCycleStatusCode $lifeCycleStatusCode = null): static
    {
        $this->lifeCycleStatusCode = $lifeCycleStatusCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLifeCycleStatusCode(): static
    {
        $this->lifeCycleStatusCode = null;

        return $this;
    }

    /**
     * @return ContractSubdivision|null
     */
    public function getContractSubdivision(): ?ContractSubdivision
    {
        return $this->contractSubdivision;
    }

    /**
     * @return ContractSubdivision
     */
    public function getContractSubdivisionWithCreate(): ContractSubdivision
    {
        $this->contractSubdivision = is_null($this->contractSubdivision) ? new ContractSubdivision() : $this->contractSubdivision;

        return $this->contractSubdivision;
    }

    /**
     * @param ContractSubdivision|null $contractSubdivision
     * @return static
     */
    public function setContractSubdivision(?ContractSubdivision $contractSubdivision = null): static
    {
        $this->contractSubdivision = $contractSubdivision;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractSubdivision(): static
    {
        $this->contractSubdivision = null;

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
     * @return bool|null
     */
    public function getOrderableIndicator(): ?bool
    {
        return $this->orderableIndicator;
    }

    /**
     * @param bool|null $orderableIndicator
     * @return static
     */
    public function setOrderableIndicator(?bool $orderableIndicator = null): static
    {
        $this->orderableIndicator = $orderableIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOrderableIndicator(): static
    {
        $this->orderableIndicator = null;

        return $this;
    }

    /**
     * @return OrderableUnit|null
     */
    public function getOrderableUnit(): ?OrderableUnit
    {
        return $this->orderableUnit;
    }

    /**
     * @return OrderableUnit
     */
    public function getOrderableUnitWithCreate(): OrderableUnit
    {
        $this->orderableUnit = is_null($this->orderableUnit) ? new OrderableUnit() : $this->orderableUnit;

        return $this->orderableUnit;
    }

    /**
     * @param OrderableUnit|null $orderableUnit
     * @return static
     */
    public function setOrderableUnit(?OrderableUnit $orderableUnit = null): static
    {
        $this->orderableUnit = $orderableUnit;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOrderableUnit(): static
    {
        $this->orderableUnit = null;

        return $this;
    }

    /**
     * @return ContentUnitQuantity|null
     */
    public function getContentUnitQuantity(): ?ContentUnitQuantity
    {
        return $this->contentUnitQuantity;
    }

    /**
     * @return ContentUnitQuantity
     */
    public function getContentUnitQuantityWithCreate(): ContentUnitQuantity
    {
        $this->contentUnitQuantity = is_null($this->contentUnitQuantity) ? new ContentUnitQuantity() : $this->contentUnitQuantity;

        return $this->contentUnitQuantity;
    }

    /**
     * @param ContentUnitQuantity|null $contentUnitQuantity
     * @return static
     */
    public function setContentUnitQuantity(?ContentUnitQuantity $contentUnitQuantity = null): static
    {
        $this->contentUnitQuantity = $contentUnitQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContentUnitQuantity(): static
    {
        $this->contentUnitQuantity = null;

        return $this;
    }

    /**
     * @return OrderQuantityIncrementNumeric|null
     */
    public function getOrderQuantityIncrementNumeric(): ?OrderQuantityIncrementNumeric
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * @return OrderQuantityIncrementNumeric
     */
    public function getOrderQuantityIncrementNumericWithCreate(): OrderQuantityIncrementNumeric
    {
        $this->orderQuantityIncrementNumeric = is_null($this->orderQuantityIncrementNumeric) ? new OrderQuantityIncrementNumeric() : $this->orderQuantityIncrementNumeric;

        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * @param OrderQuantityIncrementNumeric|null $orderQuantityIncrementNumeric
     * @return static
     */
    public function setOrderQuantityIncrementNumeric(
        ?OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric = null,
    ): static {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOrderQuantityIncrementNumeric(): static
    {
        $this->orderQuantityIncrementNumeric = null;

        return $this;
    }

    /**
     * @return MinimumOrderQuantity|null
     */
    public function getMinimumOrderQuantity(): ?MinimumOrderQuantity
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * @return MinimumOrderQuantity
     */
    public function getMinimumOrderQuantityWithCreate(): MinimumOrderQuantity
    {
        $this->minimumOrderQuantity = is_null($this->minimumOrderQuantity) ? new MinimumOrderQuantity() : $this->minimumOrderQuantity;

        return $this->minimumOrderQuantity;
    }

    /**
     * @param MinimumOrderQuantity|null $minimumOrderQuantity
     * @return static
     */
    public function setMinimumOrderQuantity(?MinimumOrderQuantity $minimumOrderQuantity = null): static
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMinimumOrderQuantity(): static
    {
        $this->minimumOrderQuantity = null;

        return $this;
    }

    /**
     * @return MaximumOrderQuantity|null
     */
    public function getMaximumOrderQuantity(): ?MaximumOrderQuantity
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * @return MaximumOrderQuantity
     */
    public function getMaximumOrderQuantityWithCreate(): MaximumOrderQuantity
    {
        $this->maximumOrderQuantity = is_null($this->maximumOrderQuantity) ? new MaximumOrderQuantity() : $this->maximumOrderQuantity;

        return $this->maximumOrderQuantity;
    }

    /**
     * @param MaximumOrderQuantity|null $maximumOrderQuantity
     * @return static
     */
    public function setMaximumOrderQuantity(?MaximumOrderQuantity $maximumOrderQuantity = null): static
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMaximumOrderQuantity(): static
    {
        $this->maximumOrderQuantity = null;

        return $this;
    }

    /**
     * @return array<WarrantyInformation>|null
     */
    public function getWarrantyInformation(): ?array
    {
        return $this->warrantyInformation;
    }

    /**
     * @param array<WarrantyInformation>|null $warrantyInformation
     * @return static
     */
    public function setWarrantyInformation(?array $warrantyInformation = null): static
    {
        $this->warrantyInformation = $warrantyInformation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetWarrantyInformation(): static
    {
        $this->warrantyInformation = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearWarrantyInformation(): static
    {
        $this->warrantyInformation = [];

        return $this;
    }

    /**
     * @return WarrantyInformation|null
     */
    public function firstWarrantyInformation(): ?WarrantyInformation
    {
        $warrantyInformation = $this->warrantyInformation ?? [];
        $warrantyInformation = reset($warrantyInformation);

        if ($warrantyInformation === false) {
            return null;
        }

        return $warrantyInformation;
    }

    /**
     * @return WarrantyInformation|null
     */
    public function lastWarrantyInformation(): ?WarrantyInformation
    {
        $warrantyInformation = $this->warrantyInformation ?? [];
        $warrantyInformation = end($warrantyInformation);

        if ($warrantyInformation === false) {
            return null;
        }

        return $warrantyInformation;
    }

    /**
     * @param WarrantyInformation $warrantyInformation
     * @return static
     */
    public function addToWarrantyInformation(WarrantyInformation $warrantyInformation): static
    {
        $this->warrantyInformation[] = $warrantyInformation;

        return $this;
    }

    /**
     * @return WarrantyInformation
     */
    public function addToWarrantyInformationWithCreate(): WarrantyInformation
    {
        $this->addTowarrantyInformation($warrantyInformation = new WarrantyInformation());

        return $warrantyInformation;
    }

    /**
     * @param WarrantyInformation $warrantyInformation
     * @return static
     */
    public function addOnceToWarrantyInformation(WarrantyInformation $warrantyInformation): static
    {
        if (!is_array($this->warrantyInformation)) {
            $this->warrantyInformation = [];
        }

        $this->warrantyInformation[0] = $warrantyInformation;

        return $this;
    }

    /**
     * @return WarrantyInformation
     */
    public function addOnceToWarrantyInformationWithCreate(): WarrantyInformation
    {
        if (!is_array($this->warrantyInformation)) {
            $this->warrantyInformation = [];
        }

        if ($this->warrantyInformation === []) {
            $this->addOnceTowarrantyInformation(new WarrantyInformation());
        }

        return $this->warrantyInformation[0];
    }

    /**
     * @return PackLevelCode|null
     */
    public function getPackLevelCode(): ?PackLevelCode
    {
        return $this->packLevelCode;
    }

    /**
     * @return PackLevelCode
     */
    public function getPackLevelCodeWithCreate(): PackLevelCode
    {
        $this->packLevelCode = is_null($this->packLevelCode) ? new PackLevelCode() : $this->packLevelCode;

        return $this->packLevelCode;
    }

    /**
     * @param PackLevelCode|null $packLevelCode
     * @return static
     */
    public function setPackLevelCode(?PackLevelCode $packLevelCode = null): static
    {
        $this->packLevelCode = $packLevelCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPackLevelCode(): static
    {
        $this->packLevelCode = null;

        return $this;
    }

    /**
     * @return ContractorCustomerParty|null
     */
    public function getContractorCustomerParty(): ?ContractorCustomerParty
    {
        return $this->contractorCustomerParty;
    }

    /**
     * @return ContractorCustomerParty
     */
    public function getContractorCustomerPartyWithCreate(): ContractorCustomerParty
    {
        $this->contractorCustomerParty = is_null($this->contractorCustomerParty) ? new ContractorCustomerParty() : $this->contractorCustomerParty;

        return $this->contractorCustomerParty;
    }

    /**
     * @param ContractorCustomerParty|null $contractorCustomerParty
     * @return static
     */
    public function setContractorCustomerParty(?ContractorCustomerParty $contractorCustomerParty = null): static
    {
        $this->contractorCustomerParty = $contractorCustomerParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractorCustomerParty(): static
    {
        $this->contractorCustomerParty = null;

        return $this;
    }

    /**
     * @return SellerSupplierParty|null
     */
    public function getSellerSupplierParty(): ?SellerSupplierParty
    {
        return $this->sellerSupplierParty;
    }

    /**
     * @return SellerSupplierParty
     */
    public function getSellerSupplierPartyWithCreate(): SellerSupplierParty
    {
        $this->sellerSupplierParty = is_null($this->sellerSupplierParty) ? new SellerSupplierParty() : $this->sellerSupplierParty;

        return $this->sellerSupplierParty;
    }

    /**
     * @param SellerSupplierParty|null $sellerSupplierParty
     * @return static
     */
    public function setSellerSupplierParty(?SellerSupplierParty $sellerSupplierParty = null): static
    {
        $this->sellerSupplierParty = $sellerSupplierParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSellerSupplierParty(): static
    {
        $this->sellerSupplierParty = null;

        return $this;
    }

    /**
     * @return WarrantyParty|null
     */
    public function getWarrantyParty(): ?WarrantyParty
    {
        return $this->warrantyParty;
    }

    /**
     * @return WarrantyParty
     */
    public function getWarrantyPartyWithCreate(): WarrantyParty
    {
        $this->warrantyParty = is_null($this->warrantyParty) ? new WarrantyParty() : $this->warrantyParty;

        return $this->warrantyParty;
    }

    /**
     * @param WarrantyParty|null $warrantyParty
     * @return static
     */
    public function setWarrantyParty(?WarrantyParty $warrantyParty = null): static
    {
        $this->warrantyParty = $warrantyParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetWarrantyParty(): static
    {
        $this->warrantyParty = null;

        return $this;
    }

    /**
     * @return WarrantyValidityPeriod|null
     */
    public function getWarrantyValidityPeriod(): ?WarrantyValidityPeriod
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * @return WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriodWithCreate(): WarrantyValidityPeriod
    {
        $this->warrantyValidityPeriod = is_null($this->warrantyValidityPeriod) ? new WarrantyValidityPeriod() : $this->warrantyValidityPeriod;

        return $this->warrantyValidityPeriod;
    }

    /**
     * @param WarrantyValidityPeriod|null $warrantyValidityPeriod
     * @return static
     */
    public function setWarrantyValidityPeriod(?WarrantyValidityPeriod $warrantyValidityPeriod = null): static
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetWarrantyValidityPeriod(): static
    {
        $this->warrantyValidityPeriod = null;

        return $this;
    }

    /**
     * @return LineValidityPeriod|null
     */
    public function getLineValidityPeriod(): ?LineValidityPeriod
    {
        return $this->lineValidityPeriod;
    }

    /**
     * @return LineValidityPeriod
     */
    public function getLineValidityPeriodWithCreate(): LineValidityPeriod
    {
        $this->lineValidityPeriod = is_null($this->lineValidityPeriod) ? new LineValidityPeriod() : $this->lineValidityPeriod;

        return $this->lineValidityPeriod;
    }

    /**
     * @param LineValidityPeriod|null $lineValidityPeriod
     * @return static
     */
    public function setLineValidityPeriod(?LineValidityPeriod $lineValidityPeriod = null): static
    {
        $this->lineValidityPeriod = $lineValidityPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineValidityPeriod(): static
    {
        $this->lineValidityPeriod = null;

        return $this;
    }

    /**
     * @return array<ItemComparison>|null
     */
    public function getItemComparison(): ?array
    {
        return $this->itemComparison;
    }

    /**
     * @param array<ItemComparison>|null $itemComparison
     * @return static
     */
    public function setItemComparison(?array $itemComparison = null): static
    {
        $this->itemComparison = $itemComparison;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetItemComparison(): static
    {
        $this->itemComparison = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearItemComparison(): static
    {
        $this->itemComparison = [];

        return $this;
    }

    /**
     * @return ItemComparison|null
     */
    public function firstItemComparison(): ?ItemComparison
    {
        $itemComparison = $this->itemComparison ?? [];
        $itemComparison = reset($itemComparison);

        if ($itemComparison === false) {
            return null;
        }

        return $itemComparison;
    }

    /**
     * @return ItemComparison|null
     */
    public function lastItemComparison(): ?ItemComparison
    {
        $itemComparison = $this->itemComparison ?? [];
        $itemComparison = end($itemComparison);

        if ($itemComparison === false) {
            return null;
        }

        return $itemComparison;
    }

    /**
     * @param ItemComparison $itemComparison
     * @return static
     */
    public function addToItemComparison(ItemComparison $itemComparison): static
    {
        $this->itemComparison[] = $itemComparison;

        return $this;
    }

    /**
     * @return ItemComparison
     */
    public function addToItemComparisonWithCreate(): ItemComparison
    {
        $this->addToitemComparison($itemComparison = new ItemComparison());

        return $itemComparison;
    }

    /**
     * @param ItemComparison $itemComparison
     * @return static
     */
    public function addOnceToItemComparison(ItemComparison $itemComparison): static
    {
        if (!is_array($this->itemComparison)) {
            $this->itemComparison = [];
        }

        $this->itemComparison[0] = $itemComparison;

        return $this;
    }

    /**
     * @return ItemComparison
     */
    public function addOnceToItemComparisonWithCreate(): ItemComparison
    {
        if (!is_array($this->itemComparison)) {
            $this->itemComparison = [];
        }

        if ($this->itemComparison === []) {
            $this->addOnceToitemComparison(new ItemComparison());
        }

        return $this->itemComparison[0];
    }

    /**
     * @return array<ComponentRelatedItem>|null
     */
    public function getComponentRelatedItem(): ?array
    {
        return $this->componentRelatedItem;
    }

    /**
     * @param array<ComponentRelatedItem>|null $componentRelatedItem
     * @return static
     */
    public function setComponentRelatedItem(?array $componentRelatedItem = null): static
    {
        $this->componentRelatedItem = $componentRelatedItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetComponentRelatedItem(): static
    {
        $this->componentRelatedItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearComponentRelatedItem(): static
    {
        $this->componentRelatedItem = [];

        return $this;
    }

    /**
     * @return ComponentRelatedItem|null
     */
    public function firstComponentRelatedItem(): ?ComponentRelatedItem
    {
        $componentRelatedItem = $this->componentRelatedItem ?? [];
        $componentRelatedItem = reset($componentRelatedItem);

        if ($componentRelatedItem === false) {
            return null;
        }

        return $componentRelatedItem;
    }

    /**
     * @return ComponentRelatedItem|null
     */
    public function lastComponentRelatedItem(): ?ComponentRelatedItem
    {
        $componentRelatedItem = $this->componentRelatedItem ?? [];
        $componentRelatedItem = end($componentRelatedItem);

        if ($componentRelatedItem === false) {
            return null;
        }

        return $componentRelatedItem;
    }

    /**
     * @param ComponentRelatedItem $componentRelatedItem
     * @return static
     */
    public function addToComponentRelatedItem(ComponentRelatedItem $componentRelatedItem): static
    {
        $this->componentRelatedItem[] = $componentRelatedItem;

        return $this;
    }

    /**
     * @return ComponentRelatedItem
     */
    public function addToComponentRelatedItemWithCreate(): ComponentRelatedItem
    {
        $this->addTocomponentRelatedItem($componentRelatedItem = new ComponentRelatedItem());

        return $componentRelatedItem;
    }

    /**
     * @param ComponentRelatedItem $componentRelatedItem
     * @return static
     */
    public function addOnceToComponentRelatedItem(ComponentRelatedItem $componentRelatedItem): static
    {
        if (!is_array($this->componentRelatedItem)) {
            $this->componentRelatedItem = [];
        }

        $this->componentRelatedItem[0] = $componentRelatedItem;

        return $this;
    }

    /**
     * @return ComponentRelatedItem
     */
    public function addOnceToComponentRelatedItemWithCreate(): ComponentRelatedItem
    {
        if (!is_array($this->componentRelatedItem)) {
            $this->componentRelatedItem = [];
        }

        if ($this->componentRelatedItem === []) {
            $this->addOnceTocomponentRelatedItem(new ComponentRelatedItem());
        }

        return $this->componentRelatedItem[0];
    }

    /**
     * @return array<AccessoryRelatedItem>|null
     */
    public function getAccessoryRelatedItem(): ?array
    {
        return $this->accessoryRelatedItem;
    }

    /**
     * @param array<AccessoryRelatedItem>|null $accessoryRelatedItem
     * @return static
     */
    public function setAccessoryRelatedItem(?array $accessoryRelatedItem = null): static
    {
        $this->accessoryRelatedItem = $accessoryRelatedItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAccessoryRelatedItem(): static
    {
        $this->accessoryRelatedItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAccessoryRelatedItem(): static
    {
        $this->accessoryRelatedItem = [];

        return $this;
    }

    /**
     * @return AccessoryRelatedItem|null
     */
    public function firstAccessoryRelatedItem(): ?AccessoryRelatedItem
    {
        $accessoryRelatedItem = $this->accessoryRelatedItem ?? [];
        $accessoryRelatedItem = reset($accessoryRelatedItem);

        if ($accessoryRelatedItem === false) {
            return null;
        }

        return $accessoryRelatedItem;
    }

    /**
     * @return AccessoryRelatedItem|null
     */
    public function lastAccessoryRelatedItem(): ?AccessoryRelatedItem
    {
        $accessoryRelatedItem = $this->accessoryRelatedItem ?? [];
        $accessoryRelatedItem = end($accessoryRelatedItem);

        if ($accessoryRelatedItem === false) {
            return null;
        }

        return $accessoryRelatedItem;
    }

    /**
     * @param AccessoryRelatedItem $accessoryRelatedItem
     * @return static
     */
    public function addToAccessoryRelatedItem(AccessoryRelatedItem $accessoryRelatedItem): static
    {
        $this->accessoryRelatedItem[] = $accessoryRelatedItem;

        return $this;
    }

    /**
     * @return AccessoryRelatedItem
     */
    public function addToAccessoryRelatedItemWithCreate(): AccessoryRelatedItem
    {
        $this->addToaccessoryRelatedItem($accessoryRelatedItem = new AccessoryRelatedItem());

        return $accessoryRelatedItem;
    }

    /**
     * @param AccessoryRelatedItem $accessoryRelatedItem
     * @return static
     */
    public function addOnceToAccessoryRelatedItem(AccessoryRelatedItem $accessoryRelatedItem): static
    {
        if (!is_array($this->accessoryRelatedItem)) {
            $this->accessoryRelatedItem = [];
        }

        $this->accessoryRelatedItem[0] = $accessoryRelatedItem;

        return $this;
    }

    /**
     * @return AccessoryRelatedItem
     */
    public function addOnceToAccessoryRelatedItemWithCreate(): AccessoryRelatedItem
    {
        if (!is_array($this->accessoryRelatedItem)) {
            $this->accessoryRelatedItem = [];
        }

        if ($this->accessoryRelatedItem === []) {
            $this->addOnceToaccessoryRelatedItem(new AccessoryRelatedItem());
        }

        return $this->accessoryRelatedItem[0];
    }

    /**
     * @return array<RequiredRelatedItem>|null
     */
    public function getRequiredRelatedItem(): ?array
    {
        return $this->requiredRelatedItem;
    }

    /**
     * @param array<RequiredRelatedItem>|null $requiredRelatedItem
     * @return static
     */
    public function setRequiredRelatedItem(?array $requiredRelatedItem = null): static
    {
        $this->requiredRelatedItem = $requiredRelatedItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequiredRelatedItem(): static
    {
        $this->requiredRelatedItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearRequiredRelatedItem(): static
    {
        $this->requiredRelatedItem = [];

        return $this;
    }

    /**
     * @return RequiredRelatedItem|null
     */
    public function firstRequiredRelatedItem(): ?RequiredRelatedItem
    {
        $requiredRelatedItem = $this->requiredRelatedItem ?? [];
        $requiredRelatedItem = reset($requiredRelatedItem);

        if ($requiredRelatedItem === false) {
            return null;
        }

        return $requiredRelatedItem;
    }

    /**
     * @return RequiredRelatedItem|null
     */
    public function lastRequiredRelatedItem(): ?RequiredRelatedItem
    {
        $requiredRelatedItem = $this->requiredRelatedItem ?? [];
        $requiredRelatedItem = end($requiredRelatedItem);

        if ($requiredRelatedItem === false) {
            return null;
        }

        return $requiredRelatedItem;
    }

    /**
     * @param RequiredRelatedItem $requiredRelatedItem
     * @return static
     */
    public function addToRequiredRelatedItem(RequiredRelatedItem $requiredRelatedItem): static
    {
        $this->requiredRelatedItem[] = $requiredRelatedItem;

        return $this;
    }

    /**
     * @return RequiredRelatedItem
     */
    public function addToRequiredRelatedItemWithCreate(): RequiredRelatedItem
    {
        $this->addTorequiredRelatedItem($requiredRelatedItem = new RequiredRelatedItem());

        return $requiredRelatedItem;
    }

    /**
     * @param RequiredRelatedItem $requiredRelatedItem
     * @return static
     */
    public function addOnceToRequiredRelatedItem(RequiredRelatedItem $requiredRelatedItem): static
    {
        if (!is_array($this->requiredRelatedItem)) {
            $this->requiredRelatedItem = [];
        }

        $this->requiredRelatedItem[0] = $requiredRelatedItem;

        return $this;
    }

    /**
     * @return RequiredRelatedItem
     */
    public function addOnceToRequiredRelatedItemWithCreate(): RequiredRelatedItem
    {
        if (!is_array($this->requiredRelatedItem)) {
            $this->requiredRelatedItem = [];
        }

        if ($this->requiredRelatedItem === []) {
            $this->addOnceTorequiredRelatedItem(new RequiredRelatedItem());
        }

        return $this->requiredRelatedItem[0];
    }

    /**
     * @return array<ReplacementRelatedItem>|null
     */
    public function getReplacementRelatedItem(): ?array
    {
        return $this->replacementRelatedItem;
    }

    /**
     * @param array<ReplacementRelatedItem>|null $replacementRelatedItem
     * @return static
     */
    public function setReplacementRelatedItem(?array $replacementRelatedItem = null): static
    {
        $this->replacementRelatedItem = $replacementRelatedItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReplacementRelatedItem(): static
    {
        $this->replacementRelatedItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearReplacementRelatedItem(): static
    {
        $this->replacementRelatedItem = [];

        return $this;
    }

    /**
     * @return ReplacementRelatedItem|null
     */
    public function firstReplacementRelatedItem(): ?ReplacementRelatedItem
    {
        $replacementRelatedItem = $this->replacementRelatedItem ?? [];
        $replacementRelatedItem = reset($replacementRelatedItem);

        if ($replacementRelatedItem === false) {
            return null;
        }

        return $replacementRelatedItem;
    }

    /**
     * @return ReplacementRelatedItem|null
     */
    public function lastReplacementRelatedItem(): ?ReplacementRelatedItem
    {
        $replacementRelatedItem = $this->replacementRelatedItem ?? [];
        $replacementRelatedItem = end($replacementRelatedItem);

        if ($replacementRelatedItem === false) {
            return null;
        }

        return $replacementRelatedItem;
    }

    /**
     * @param ReplacementRelatedItem $replacementRelatedItem
     * @return static
     */
    public function addToReplacementRelatedItem(ReplacementRelatedItem $replacementRelatedItem): static
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;

        return $this;
    }

    /**
     * @return ReplacementRelatedItem
     */
    public function addToReplacementRelatedItemWithCreate(): ReplacementRelatedItem
    {
        $this->addToreplacementRelatedItem($replacementRelatedItem = new ReplacementRelatedItem());

        return $replacementRelatedItem;
    }

    /**
     * @param ReplacementRelatedItem $replacementRelatedItem
     * @return static
     */
    public function addOnceToReplacementRelatedItem(ReplacementRelatedItem $replacementRelatedItem): static
    {
        if (!is_array($this->replacementRelatedItem)) {
            $this->replacementRelatedItem = [];
        }

        $this->replacementRelatedItem[0] = $replacementRelatedItem;

        return $this;
    }

    /**
     * @return ReplacementRelatedItem
     */
    public function addOnceToReplacementRelatedItemWithCreate(): ReplacementRelatedItem
    {
        if (!is_array($this->replacementRelatedItem)) {
            $this->replacementRelatedItem = [];
        }

        if ($this->replacementRelatedItem === []) {
            $this->addOnceToreplacementRelatedItem(new ReplacementRelatedItem());
        }

        return $this->replacementRelatedItem[0];
    }

    /**
     * @return array<ComplementaryRelatedItem>|null
     */
    public function getComplementaryRelatedItem(): ?array
    {
        return $this->complementaryRelatedItem;
    }

    /**
     * @param array<ComplementaryRelatedItem>|null $complementaryRelatedItem
     * @return static
     */
    public function setComplementaryRelatedItem(?array $complementaryRelatedItem = null): static
    {
        $this->complementaryRelatedItem = $complementaryRelatedItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetComplementaryRelatedItem(): static
    {
        $this->complementaryRelatedItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearComplementaryRelatedItem(): static
    {
        $this->complementaryRelatedItem = [];

        return $this;
    }

    /**
     * @return ComplementaryRelatedItem|null
     */
    public function firstComplementaryRelatedItem(): ?ComplementaryRelatedItem
    {
        $complementaryRelatedItem = $this->complementaryRelatedItem ?? [];
        $complementaryRelatedItem = reset($complementaryRelatedItem);

        if ($complementaryRelatedItem === false) {
            return null;
        }

        return $complementaryRelatedItem;
    }

    /**
     * @return ComplementaryRelatedItem|null
     */
    public function lastComplementaryRelatedItem(): ?ComplementaryRelatedItem
    {
        $complementaryRelatedItem = $this->complementaryRelatedItem ?? [];
        $complementaryRelatedItem = end($complementaryRelatedItem);

        if ($complementaryRelatedItem === false) {
            return null;
        }

        return $complementaryRelatedItem;
    }

    /**
     * @param ComplementaryRelatedItem $complementaryRelatedItem
     * @return static
     */
    public function addToComplementaryRelatedItem(ComplementaryRelatedItem $complementaryRelatedItem): static
    {
        $this->complementaryRelatedItem[] = $complementaryRelatedItem;

        return $this;
    }

    /**
     * @return ComplementaryRelatedItem
     */
    public function addToComplementaryRelatedItemWithCreate(): ComplementaryRelatedItem
    {
        $this->addTocomplementaryRelatedItem($complementaryRelatedItem = new ComplementaryRelatedItem());

        return $complementaryRelatedItem;
    }

    /**
     * @param ComplementaryRelatedItem $complementaryRelatedItem
     * @return static
     */
    public function addOnceToComplementaryRelatedItem(ComplementaryRelatedItem $complementaryRelatedItem): static
    {
        if (!is_array($this->complementaryRelatedItem)) {
            $this->complementaryRelatedItem = [];
        }

        $this->complementaryRelatedItem[0] = $complementaryRelatedItem;

        return $this;
    }

    /**
     * @return ComplementaryRelatedItem
     */
    public function addOnceToComplementaryRelatedItemWithCreate(): ComplementaryRelatedItem
    {
        if (!is_array($this->complementaryRelatedItem)) {
            $this->complementaryRelatedItem = [];
        }

        if ($this->complementaryRelatedItem === []) {
            $this->addOnceTocomplementaryRelatedItem(new ComplementaryRelatedItem());
        }

        return $this->complementaryRelatedItem[0];
    }

    /**
     * @return array<ReplacedRelatedItem>|null
     */
    public function getReplacedRelatedItem(): ?array
    {
        return $this->replacedRelatedItem;
    }

    /**
     * @param array<ReplacedRelatedItem>|null $replacedRelatedItem
     * @return static
     */
    public function setReplacedRelatedItem(?array $replacedRelatedItem = null): static
    {
        $this->replacedRelatedItem = $replacedRelatedItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReplacedRelatedItem(): static
    {
        $this->replacedRelatedItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearReplacedRelatedItem(): static
    {
        $this->replacedRelatedItem = [];

        return $this;
    }

    /**
     * @return ReplacedRelatedItem|null
     */
    public function firstReplacedRelatedItem(): ?ReplacedRelatedItem
    {
        $replacedRelatedItem = $this->replacedRelatedItem ?? [];
        $replacedRelatedItem = reset($replacedRelatedItem);

        if ($replacedRelatedItem === false) {
            return null;
        }

        return $replacedRelatedItem;
    }

    /**
     * @return ReplacedRelatedItem|null
     */
    public function lastReplacedRelatedItem(): ?ReplacedRelatedItem
    {
        $replacedRelatedItem = $this->replacedRelatedItem ?? [];
        $replacedRelatedItem = end($replacedRelatedItem);

        if ($replacedRelatedItem === false) {
            return null;
        }

        return $replacedRelatedItem;
    }

    /**
     * @param ReplacedRelatedItem $replacedRelatedItem
     * @return static
     */
    public function addToReplacedRelatedItem(ReplacedRelatedItem $replacedRelatedItem): static
    {
        $this->replacedRelatedItem[] = $replacedRelatedItem;

        return $this;
    }

    /**
     * @return ReplacedRelatedItem
     */
    public function addToReplacedRelatedItemWithCreate(): ReplacedRelatedItem
    {
        $this->addToreplacedRelatedItem($replacedRelatedItem = new ReplacedRelatedItem());

        return $replacedRelatedItem;
    }

    /**
     * @param ReplacedRelatedItem $replacedRelatedItem
     * @return static
     */
    public function addOnceToReplacedRelatedItem(ReplacedRelatedItem $replacedRelatedItem): static
    {
        if (!is_array($this->replacedRelatedItem)) {
            $this->replacedRelatedItem = [];
        }

        $this->replacedRelatedItem[0] = $replacedRelatedItem;

        return $this;
    }

    /**
     * @return ReplacedRelatedItem
     */
    public function addOnceToReplacedRelatedItemWithCreate(): ReplacedRelatedItem
    {
        if (!is_array($this->replacedRelatedItem)) {
            $this->replacedRelatedItem = [];
        }

        if ($this->replacedRelatedItem === []) {
            $this->addOnceToreplacedRelatedItem(new ReplacedRelatedItem());
        }

        return $this->replacedRelatedItem[0];
    }

    /**
     * @return array<RequiredItemLocationQuantity>|null
     */
    public function getRequiredItemLocationQuantity(): ?array
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * @param array<RequiredItemLocationQuantity>|null $requiredItemLocationQuantity
     * @return static
     */
    public function setRequiredItemLocationQuantity(?array $requiredItemLocationQuantity = null): static
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequiredItemLocationQuantity(): static
    {
        $this->requiredItemLocationQuantity = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearRequiredItemLocationQuantity(): static
    {
        $this->requiredItemLocationQuantity = [];

        return $this;
    }

    /**
     * @return RequiredItemLocationQuantity|null
     */
    public function firstRequiredItemLocationQuantity(): ?RequiredItemLocationQuantity
    {
        $requiredItemLocationQuantity = $this->requiredItemLocationQuantity ?? [];
        $requiredItemLocationQuantity = reset($requiredItemLocationQuantity);

        if ($requiredItemLocationQuantity === false) {
            return null;
        }

        return $requiredItemLocationQuantity;
    }

    /**
     * @return RequiredItemLocationQuantity|null
     */
    public function lastRequiredItemLocationQuantity(): ?RequiredItemLocationQuantity
    {
        $requiredItemLocationQuantity = $this->requiredItemLocationQuantity ?? [];
        $requiredItemLocationQuantity = end($requiredItemLocationQuantity);

        if ($requiredItemLocationQuantity === false) {
            return null;
        }

        return $requiredItemLocationQuantity;
    }

    /**
     * @param RequiredItemLocationQuantity $requiredItemLocationQuantity
     * @return static
     */
    public function addToRequiredItemLocationQuantity(
        RequiredItemLocationQuantity $requiredItemLocationQuantity,
    ): static {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;

        return $this;
    }

    /**
     * @return RequiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantityWithCreate(): RequiredItemLocationQuantity
    {
        $this->addTorequiredItemLocationQuantity($requiredItemLocationQuantity = new RequiredItemLocationQuantity());

        return $requiredItemLocationQuantity;
    }

    /**
     * @param RequiredItemLocationQuantity $requiredItemLocationQuantity
     * @return static
     */
    public function addOnceToRequiredItemLocationQuantity(
        RequiredItemLocationQuantity $requiredItemLocationQuantity,
    ): static {
        if (!is_array($this->requiredItemLocationQuantity)) {
            $this->requiredItemLocationQuantity = [];
        }

        $this->requiredItemLocationQuantity[0] = $requiredItemLocationQuantity;

        return $this;
    }

    /**
     * @return RequiredItemLocationQuantity
     */
    public function addOnceToRequiredItemLocationQuantityWithCreate(): RequiredItemLocationQuantity
    {
        if (!is_array($this->requiredItemLocationQuantity)) {
            $this->requiredItemLocationQuantity = [];
        }

        if ($this->requiredItemLocationQuantity === []) {
            $this->addOnceTorequiredItemLocationQuantity(new RequiredItemLocationQuantity());
        }

        return $this->requiredItemLocationQuantity[0];
    }

    /**
     * @return array<DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<DocumentReference>|null $documentReference
     * @return static
     */
    public function setDocumentReference(?array $documentReference = null): static
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDocumentReference(): static
    {
        $this->documentReference = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDocumentReference(): static
    {
        $this->documentReference = [];

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function firstDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = reset($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @return DocumentReference|null
     */
    public function lastDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = end($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return static
     */
    public function addToDocumentReference(DocumentReference $documentReference): static
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return static
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): static
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return Item|null
     */
    public function getItem(): ?Item
    {
        return $this->item;
    }

    /**
     * @return Item
     */
    public function getItemWithCreate(): Item
    {
        $this->item = is_null($this->item) ? new Item() : $this->item;

        return $this->item;
    }

    /**
     * @param Item|null $item
     * @return static
     */
    public function setItem(?Item $item = null): static
    {
        $this->item = $item;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetItem(): static
    {
        $this->item = null;

        return $this;
    }

    /**
     * @return array<KeywordItemProperty>|null
     */
    public function getKeywordItemProperty(): ?array
    {
        return $this->keywordItemProperty;
    }

    /**
     * @param array<KeywordItemProperty>|null $keywordItemProperty
     * @return static
     */
    public function setKeywordItemProperty(?array $keywordItemProperty = null): static
    {
        $this->keywordItemProperty = $keywordItemProperty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetKeywordItemProperty(): static
    {
        $this->keywordItemProperty = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearKeywordItemProperty(): static
    {
        $this->keywordItemProperty = [];

        return $this;
    }

    /**
     * @return KeywordItemProperty|null
     */
    public function firstKeywordItemProperty(): ?KeywordItemProperty
    {
        $keywordItemProperty = $this->keywordItemProperty ?? [];
        $keywordItemProperty = reset($keywordItemProperty);

        if ($keywordItemProperty === false) {
            return null;
        }

        return $keywordItemProperty;
    }

    /**
     * @return KeywordItemProperty|null
     */
    public function lastKeywordItemProperty(): ?KeywordItemProperty
    {
        $keywordItemProperty = $this->keywordItemProperty ?? [];
        $keywordItemProperty = end($keywordItemProperty);

        if ($keywordItemProperty === false) {
            return null;
        }

        return $keywordItemProperty;
    }

    /**
     * @param KeywordItemProperty $keywordItemProperty
     * @return static
     */
    public function addToKeywordItemProperty(KeywordItemProperty $keywordItemProperty): static
    {
        $this->keywordItemProperty[] = $keywordItemProperty;

        return $this;
    }

    /**
     * @return KeywordItemProperty
     */
    public function addToKeywordItemPropertyWithCreate(): KeywordItemProperty
    {
        $this->addTokeywordItemProperty($keywordItemProperty = new KeywordItemProperty());

        return $keywordItemProperty;
    }

    /**
     * @param KeywordItemProperty $keywordItemProperty
     * @return static
     */
    public function addOnceToKeywordItemProperty(KeywordItemProperty $keywordItemProperty): static
    {
        if (!is_array($this->keywordItemProperty)) {
            $this->keywordItemProperty = [];
        }

        $this->keywordItemProperty[0] = $keywordItemProperty;

        return $this;
    }

    /**
     * @return KeywordItemProperty
     */
    public function addOnceToKeywordItemPropertyWithCreate(): KeywordItemProperty
    {
        if (!is_array($this->keywordItemProperty)) {
            $this->keywordItemProperty = [];
        }

        if ($this->keywordItemProperty === []) {
            $this->addOnceTokeywordItemProperty(new KeywordItemProperty());
        }

        return $this->keywordItemProperty[0];
    }

    /**
     * @return CallForTendersLineReference|null
     */
    public function getCallForTendersLineReference(): ?CallForTendersLineReference
    {
        return $this->callForTendersLineReference;
    }

    /**
     * @return CallForTendersLineReference
     */
    public function getCallForTendersLineReferenceWithCreate(): CallForTendersLineReference
    {
        $this->callForTendersLineReference = is_null($this->callForTendersLineReference) ? new CallForTendersLineReference() : $this->callForTendersLineReference;

        return $this->callForTendersLineReference;
    }

    /**
     * @param CallForTendersLineReference|null $callForTendersLineReference
     * @return static
     */
    public function setCallForTendersLineReference(
        ?CallForTendersLineReference $callForTendersLineReference = null,
    ): static {
        $this->callForTendersLineReference = $callForTendersLineReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCallForTendersLineReference(): static
    {
        $this->callForTendersLineReference = null;

        return $this;
    }

    /**
     * @return CallForTendersDocumentReference|null
     */
    public function getCallForTendersDocumentReference(): ?CallForTendersDocumentReference
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * @return CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReferenceWithCreate(): CallForTendersDocumentReference
    {
        $this->callForTendersDocumentReference = is_null($this->callForTendersDocumentReference) ? new CallForTendersDocumentReference() : $this->callForTendersDocumentReference;

        return $this->callForTendersDocumentReference;
    }

    /**
     * @param CallForTendersDocumentReference|null $callForTendersDocumentReference
     * @return static
     */
    public function setCallForTendersDocumentReference(
        ?CallForTendersDocumentReference $callForTendersDocumentReference = null,
    ): static {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCallForTendersDocumentReference(): static
    {
        $this->callForTendersDocumentReference = null;

        return $this;
    }
}
