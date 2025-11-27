<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EstimatedAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;

class RequestForTenderLineType
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
     * @var UUID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UUID")
     * @JMS\Expose
     * @JMS\SerializedName("UUID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUUID", setter="setUUID")
     */
    private $uUID;

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
     * @var Quantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

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
     * @JMS\SerializedName("TaxIncludedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTaxIncludedIndicator", setter="setTaxIncludedIndicator")
     */
    private $taxIncludedIndicator;

    /**
     * @var MinimumAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MinimumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MinimumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMinimumAmount", setter="setMinimumAmount")
     */
    private $minimumAmount;

    /**
     * @var MaximumAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MaximumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MaximumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMaximumAmount", setter="setMaximumAmount")
     */
    private $maximumAmount;

    /**
     * @var EstimatedAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EstimatedAmount")
     * @JMS\Expose
     * @JMS\SerializedName("EstimatedAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEstimatedAmount", setter="setEstimatedAmount")
     */
    private $estimatedAmount;

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
     * @var array<DeliveryPeriod>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DeliveryPeriod>")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DeliveryPeriod", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDeliveryPeriod", setter="setDeliveryPeriod")
     */
    private $deliveryPeriod;

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
     * @var array<SubRequestForTenderLine>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubRequestForTenderLine>")
     * @JMS\Expose
     * @JMS\SerializedName("SubRequestForTenderLine")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubRequestForTenderLine", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubRequestForTenderLine", setter="setSubRequestForTenderLine")
     */
    private $subRequestForTenderLine;

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
     * @return UUID|null
     */
    public function getUUID(): ?UUID
    {
        return $this->uUID;
    }

    /**
     * @return UUID
     */
    public function getUUIDWithCreate(): UUID
    {
        $this->uUID = is_null($this->uUID) ? new UUID() : $this->uUID;

        return $this->uUID;
    }

    /**
     * @param UUID|null $uUID
     * @return static
     */
    public function setUUID(?UUID $uUID = null): static
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUUID(): static
    {
        $this->uUID = null;

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
     * @return Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param Quantity|null $quantity
     * @return static
     */
    public function setQuantity(?Quantity $quantity = null): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetQuantity(): static
    {
        $this->quantity = null;

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
    public function getTaxIncludedIndicator(): ?bool
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * @param bool|null $taxIncludedIndicator
     * @return static
     */
    public function setTaxIncludedIndicator(?bool $taxIncludedIndicator = null): static
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxIncludedIndicator(): static
    {
        $this->taxIncludedIndicator = null;

        return $this;
    }

    /**
     * @return MinimumAmount|null
     */
    public function getMinimumAmount(): ?MinimumAmount
    {
        return $this->minimumAmount;
    }

    /**
     * @return MinimumAmount
     */
    public function getMinimumAmountWithCreate(): MinimumAmount
    {
        $this->minimumAmount = is_null($this->minimumAmount) ? new MinimumAmount() : $this->minimumAmount;

        return $this->minimumAmount;
    }

    /**
     * @param MinimumAmount|null $minimumAmount
     * @return static
     */
    public function setMinimumAmount(?MinimumAmount $minimumAmount = null): static
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMinimumAmount(): static
    {
        $this->minimumAmount = null;

        return $this;
    }

    /**
     * @return MaximumAmount|null
     */
    public function getMaximumAmount(): ?MaximumAmount
    {
        return $this->maximumAmount;
    }

    /**
     * @return MaximumAmount
     */
    public function getMaximumAmountWithCreate(): MaximumAmount
    {
        $this->maximumAmount = is_null($this->maximumAmount) ? new MaximumAmount() : $this->maximumAmount;

        return $this->maximumAmount;
    }

    /**
     * @param MaximumAmount|null $maximumAmount
     * @return static
     */
    public function setMaximumAmount(?MaximumAmount $maximumAmount = null): static
    {
        $this->maximumAmount = $maximumAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMaximumAmount(): static
    {
        $this->maximumAmount = null;

        return $this;
    }

    /**
     * @return EstimatedAmount|null
     */
    public function getEstimatedAmount(): ?EstimatedAmount
    {
        return $this->estimatedAmount;
    }

    /**
     * @return EstimatedAmount
     */
    public function getEstimatedAmountWithCreate(): EstimatedAmount
    {
        $this->estimatedAmount = is_null($this->estimatedAmount) ? new EstimatedAmount() : $this->estimatedAmount;

        return $this->estimatedAmount;
    }

    /**
     * @param EstimatedAmount|null $estimatedAmount
     * @return static
     */
    public function setEstimatedAmount(?EstimatedAmount $estimatedAmount = null): static
    {
        $this->estimatedAmount = $estimatedAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEstimatedAmount(): static
    {
        $this->estimatedAmount = null;

        return $this;
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
     * @return array<DeliveryPeriod>|null
     */
    public function getDeliveryPeriod(): ?array
    {
        return $this->deliveryPeriod;
    }

    /**
     * @param array<DeliveryPeriod>|null $deliveryPeriod
     * @return static
     */
    public function setDeliveryPeriod(?array $deliveryPeriod = null): static
    {
        $this->deliveryPeriod = $deliveryPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeliveryPeriod(): static
    {
        $this->deliveryPeriod = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDeliveryPeriod(): static
    {
        $this->deliveryPeriod = [];

        return $this;
    }

    /**
     * @return DeliveryPeriod|null
     */
    public function firstDeliveryPeriod(): ?DeliveryPeriod
    {
        $deliveryPeriod = $this->deliveryPeriod ?? [];
        $deliveryPeriod = reset($deliveryPeriod);

        if ($deliveryPeriod === false) {
            return null;
        }

        return $deliveryPeriod;
    }

    /**
     * @return DeliveryPeriod|null
     */
    public function lastDeliveryPeriod(): ?DeliveryPeriod
    {
        $deliveryPeriod = $this->deliveryPeriod ?? [];
        $deliveryPeriod = end($deliveryPeriod);

        if ($deliveryPeriod === false) {
            return null;
        }

        return $deliveryPeriod;
    }

    /**
     * @param DeliveryPeriod $deliveryPeriod
     * @return static
     */
    public function addToDeliveryPeriod(DeliveryPeriod $deliveryPeriod): static
    {
        $this->deliveryPeriod[] = $deliveryPeriod;

        return $this;
    }

    /**
     * @return DeliveryPeriod
     */
    public function addToDeliveryPeriodWithCreate(): DeliveryPeriod
    {
        $this->addTodeliveryPeriod($deliveryPeriod = new DeliveryPeriod());

        return $deliveryPeriod;
    }

    /**
     * @param DeliveryPeriod $deliveryPeriod
     * @return static
     */
    public function addOnceToDeliveryPeriod(DeliveryPeriod $deliveryPeriod): static
    {
        if (!is_array($this->deliveryPeriod)) {
            $this->deliveryPeriod = [];
        }

        $this->deliveryPeriod[0] = $deliveryPeriod;

        return $this;
    }

    /**
     * @return DeliveryPeriod
     */
    public function addOnceToDeliveryPeriodWithCreate(): DeliveryPeriod
    {
        if (!is_array($this->deliveryPeriod)) {
            $this->deliveryPeriod = [];
        }

        if ($this->deliveryPeriod === []) {
            $this->addOnceTodeliveryPeriod(new DeliveryPeriod());
        }

        return $this->deliveryPeriod[0];
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
     * @return array<SubRequestForTenderLine>|null
     */
    public function getSubRequestForTenderLine(): ?array
    {
        return $this->subRequestForTenderLine;
    }

    /**
     * @param array<SubRequestForTenderLine>|null $subRequestForTenderLine
     * @return static
     */
    public function setSubRequestForTenderLine(?array $subRequestForTenderLine = null): static
    {
        $this->subRequestForTenderLine = $subRequestForTenderLine;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSubRequestForTenderLine(): static
    {
        $this->subRequestForTenderLine = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSubRequestForTenderLine(): static
    {
        $this->subRequestForTenderLine = [];

        return $this;
    }

    /**
     * @return SubRequestForTenderLine|null
     */
    public function firstSubRequestForTenderLine(): ?SubRequestForTenderLine
    {
        $subRequestForTenderLine = $this->subRequestForTenderLine ?? [];
        $subRequestForTenderLine = reset($subRequestForTenderLine);

        if ($subRequestForTenderLine === false) {
            return null;
        }

        return $subRequestForTenderLine;
    }

    /**
     * @return SubRequestForTenderLine|null
     */
    public function lastSubRequestForTenderLine(): ?SubRequestForTenderLine
    {
        $subRequestForTenderLine = $this->subRequestForTenderLine ?? [];
        $subRequestForTenderLine = end($subRequestForTenderLine);

        if ($subRequestForTenderLine === false) {
            return null;
        }

        return $subRequestForTenderLine;
    }

    /**
     * @param SubRequestForTenderLine $subRequestForTenderLine
     * @return static
     */
    public function addToSubRequestForTenderLine(SubRequestForTenderLine $subRequestForTenderLine): static
    {
        $this->subRequestForTenderLine[] = $subRequestForTenderLine;

        return $this;
    }

    /**
     * @return SubRequestForTenderLine
     */
    public function addToSubRequestForTenderLineWithCreate(): SubRequestForTenderLine
    {
        $this->addTosubRequestForTenderLine($subRequestForTenderLine = new SubRequestForTenderLine());

        return $subRequestForTenderLine;
    }

    /**
     * @param SubRequestForTenderLine $subRequestForTenderLine
     * @return static
     */
    public function addOnceToSubRequestForTenderLine(SubRequestForTenderLine $subRequestForTenderLine): static
    {
        if (!is_array($this->subRequestForTenderLine)) {
            $this->subRequestForTenderLine = [];
        }

        $this->subRequestForTenderLine[0] = $subRequestForTenderLine;

        return $this;
    }

    /**
     * @return SubRequestForTenderLine
     */
    public function addOnceToSubRequestForTenderLineWithCreate(): SubRequestForTenderLine
    {
        if (!is_array($this->subRequestForTenderLine)) {
            $this->subRequestForTenderLine = [];
        }

        if ($this->subRequestForTenderLine === []) {
            $this->addOnceTosubRequestForTenderLine(new SubRequestForTenderLine());
        }

        return $this->subRequestForTenderLine[0];
    }
}
