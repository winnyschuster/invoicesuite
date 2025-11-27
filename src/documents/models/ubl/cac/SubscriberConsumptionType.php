<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SpecificationTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalMeteredQuantity;

class SubscriberConsumptionType
{
    use HandlesObjectFlags;

    /**
     * @var ConsumptionID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsumptionID")
     * @JMS\Expose
     * @JMS\SerializedName("ConsumptionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumptionID", setter="setConsumptionID")
     */
    private $consumptionID;

    /**
     * @var SpecificationTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SpecificationTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SpecificationTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSpecificationTypeCode", setter="setSpecificationTypeCode")
     */
    private $specificationTypeCode;

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
     * @var TotalMeteredQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalMeteredQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalMeteredQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalMeteredQuantity", setter="setTotalMeteredQuantity")
     */
    private $totalMeteredQuantity;

    /**
     * @var SubscriberParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SubscriberParty")
     * @JMS\Expose
     * @JMS\SerializedName("SubscriberParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubscriberParty", setter="setSubscriberParty")
     */
    private $subscriberParty;

    /**
     * @var UtilityConsumptionPoint|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\UtilityConsumptionPoint")
     * @JMS\Expose
     * @JMS\SerializedName("UtilityConsumptionPoint")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUtilityConsumptionPoint", setter="setUtilityConsumptionPoint")
     */
    private $utilityConsumptionPoint;

    /**
     * @var array<OnAccountPayment>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\OnAccountPayment>")
     * @JMS\Expose
     * @JMS\SerializedName("OnAccountPayment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OnAccountPayment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOnAccountPayment", setter="setOnAccountPayment")
     */
    private $onAccountPayment;

    /**
     * @var Consumption|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Consumption")
     * @JMS\Expose
     * @JMS\SerializedName("Consumption")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsumption", setter="setConsumption")
     */
    private $consumption;

    /**
     * @var array<SupplierConsumption>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SupplierConsumption>")
     * @JMS\Expose
     * @JMS\SerializedName("SupplierConsumption")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SupplierConsumption", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSupplierConsumption", setter="setSupplierConsumption")
     */
    private $supplierConsumption;

    /**
     * @return ConsumptionID|null
     */
    public function getConsumptionID(): ?ConsumptionID
    {
        return $this->consumptionID;
    }

    /**
     * @return ConsumptionID
     */
    public function getConsumptionIDWithCreate(): ConsumptionID
    {
        $this->consumptionID = is_null($this->consumptionID) ? new ConsumptionID() : $this->consumptionID;

        return $this->consumptionID;
    }

    /**
     * @param ConsumptionID|null $consumptionID
     * @return static
     */
    public function setConsumptionID(?ConsumptionID $consumptionID = null): static
    {
        $this->consumptionID = $consumptionID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsumptionID(): static
    {
        $this->consumptionID = null;

        return $this;
    }

    /**
     * @return SpecificationTypeCode|null
     */
    public function getSpecificationTypeCode(): ?SpecificationTypeCode
    {
        return $this->specificationTypeCode;
    }

    /**
     * @return SpecificationTypeCode
     */
    public function getSpecificationTypeCodeWithCreate(): SpecificationTypeCode
    {
        $this->specificationTypeCode = is_null($this->specificationTypeCode) ? new SpecificationTypeCode() : $this->specificationTypeCode;

        return $this->specificationTypeCode;
    }

    /**
     * @param SpecificationTypeCode|null $specificationTypeCode
     * @return static
     */
    public function setSpecificationTypeCode(?SpecificationTypeCode $specificationTypeCode = null): static
    {
        $this->specificationTypeCode = $specificationTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecificationTypeCode(): static
    {
        $this->specificationTypeCode = null;

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
     * @return TotalMeteredQuantity|null
     */
    public function getTotalMeteredQuantity(): ?TotalMeteredQuantity
    {
        return $this->totalMeteredQuantity;
    }

    /**
     * @return TotalMeteredQuantity
     */
    public function getTotalMeteredQuantityWithCreate(): TotalMeteredQuantity
    {
        $this->totalMeteredQuantity = is_null($this->totalMeteredQuantity) ? new TotalMeteredQuantity() : $this->totalMeteredQuantity;

        return $this->totalMeteredQuantity;
    }

    /**
     * @param TotalMeteredQuantity|null $totalMeteredQuantity
     * @return static
     */
    public function setTotalMeteredQuantity(?TotalMeteredQuantity $totalMeteredQuantity = null): static
    {
        $this->totalMeteredQuantity = $totalMeteredQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTotalMeteredQuantity(): static
    {
        $this->totalMeteredQuantity = null;

        return $this;
    }

    /**
     * @return SubscriberParty|null
     */
    public function getSubscriberParty(): ?SubscriberParty
    {
        return $this->subscriberParty;
    }

    /**
     * @return SubscriberParty
     */
    public function getSubscriberPartyWithCreate(): SubscriberParty
    {
        $this->subscriberParty = is_null($this->subscriberParty) ? new SubscriberParty() : $this->subscriberParty;

        return $this->subscriberParty;
    }

    /**
     * @param SubscriberParty|null $subscriberParty
     * @return static
     */
    public function setSubscriberParty(?SubscriberParty $subscriberParty = null): static
    {
        $this->subscriberParty = $subscriberParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSubscriberParty(): static
    {
        $this->subscriberParty = null;

        return $this;
    }

    /**
     * @return UtilityConsumptionPoint|null
     */
    public function getUtilityConsumptionPoint(): ?UtilityConsumptionPoint
    {
        return $this->utilityConsumptionPoint;
    }

    /**
     * @return UtilityConsumptionPoint
     */
    public function getUtilityConsumptionPointWithCreate(): UtilityConsumptionPoint
    {
        $this->utilityConsumptionPoint = is_null($this->utilityConsumptionPoint) ? new UtilityConsumptionPoint() : $this->utilityConsumptionPoint;

        return $this->utilityConsumptionPoint;
    }

    /**
     * @param UtilityConsumptionPoint|null $utilityConsumptionPoint
     * @return static
     */
    public function setUtilityConsumptionPoint(?UtilityConsumptionPoint $utilityConsumptionPoint = null): static
    {
        $this->utilityConsumptionPoint = $utilityConsumptionPoint;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUtilityConsumptionPoint(): static
    {
        $this->utilityConsumptionPoint = null;

        return $this;
    }

    /**
     * @return array<OnAccountPayment>|null
     */
    public function getOnAccountPayment(): ?array
    {
        return $this->onAccountPayment;
    }

    /**
     * @param array<OnAccountPayment>|null $onAccountPayment
     * @return static
     */
    public function setOnAccountPayment(?array $onAccountPayment = null): static
    {
        $this->onAccountPayment = $onAccountPayment;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOnAccountPayment(): static
    {
        $this->onAccountPayment = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearOnAccountPayment(): static
    {
        $this->onAccountPayment = [];

        return $this;
    }

    /**
     * @return OnAccountPayment|null
     */
    public function firstOnAccountPayment(): ?OnAccountPayment
    {
        $onAccountPayment = $this->onAccountPayment ?? [];
        $onAccountPayment = reset($onAccountPayment);

        if ($onAccountPayment === false) {
            return null;
        }

        return $onAccountPayment;
    }

    /**
     * @return OnAccountPayment|null
     */
    public function lastOnAccountPayment(): ?OnAccountPayment
    {
        $onAccountPayment = $this->onAccountPayment ?? [];
        $onAccountPayment = end($onAccountPayment);

        if ($onAccountPayment === false) {
            return null;
        }

        return $onAccountPayment;
    }

    /**
     * @param OnAccountPayment $onAccountPayment
     * @return static
     */
    public function addToOnAccountPayment(OnAccountPayment $onAccountPayment): static
    {
        $this->onAccountPayment[] = $onAccountPayment;

        return $this;
    }

    /**
     * @return OnAccountPayment
     */
    public function addToOnAccountPaymentWithCreate(): OnAccountPayment
    {
        $this->addToonAccountPayment($onAccountPayment = new OnAccountPayment());

        return $onAccountPayment;
    }

    /**
     * @param OnAccountPayment $onAccountPayment
     * @return static
     */
    public function addOnceToOnAccountPayment(OnAccountPayment $onAccountPayment): static
    {
        if (!is_array($this->onAccountPayment)) {
            $this->onAccountPayment = [];
        }

        $this->onAccountPayment[0] = $onAccountPayment;

        return $this;
    }

    /**
     * @return OnAccountPayment
     */
    public function addOnceToOnAccountPaymentWithCreate(): OnAccountPayment
    {
        if (!is_array($this->onAccountPayment)) {
            $this->onAccountPayment = [];
        }

        if ($this->onAccountPayment === []) {
            $this->addOnceToonAccountPayment(new OnAccountPayment());
        }

        return $this->onAccountPayment[0];
    }

    /**
     * @return Consumption|null
     */
    public function getConsumption(): ?Consumption
    {
        return $this->consumption;
    }

    /**
     * @return Consumption
     */
    public function getConsumptionWithCreate(): Consumption
    {
        $this->consumption = is_null($this->consumption) ? new Consumption() : $this->consumption;

        return $this->consumption;
    }

    /**
     * @param Consumption|null $consumption
     * @return static
     */
    public function setConsumption(?Consumption $consumption = null): static
    {
        $this->consumption = $consumption;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsumption(): static
    {
        $this->consumption = null;

        return $this;
    }

    /**
     * @return array<SupplierConsumption>|null
     */
    public function getSupplierConsumption(): ?array
    {
        return $this->supplierConsumption;
    }

    /**
     * @param array<SupplierConsumption>|null $supplierConsumption
     * @return static
     */
    public function setSupplierConsumption(?array $supplierConsumption = null): static
    {
        $this->supplierConsumption = $supplierConsumption;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSupplierConsumption(): static
    {
        $this->supplierConsumption = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSupplierConsumption(): static
    {
        $this->supplierConsumption = [];

        return $this;
    }

    /**
     * @return SupplierConsumption|null
     */
    public function firstSupplierConsumption(): ?SupplierConsumption
    {
        $supplierConsumption = $this->supplierConsumption ?? [];
        $supplierConsumption = reset($supplierConsumption);

        if ($supplierConsumption === false) {
            return null;
        }

        return $supplierConsumption;
    }

    /**
     * @return SupplierConsumption|null
     */
    public function lastSupplierConsumption(): ?SupplierConsumption
    {
        $supplierConsumption = $this->supplierConsumption ?? [];
        $supplierConsumption = end($supplierConsumption);

        if ($supplierConsumption === false) {
            return null;
        }

        return $supplierConsumption;
    }

    /**
     * @param SupplierConsumption $supplierConsumption
     * @return static
     */
    public function addToSupplierConsumption(SupplierConsumption $supplierConsumption): static
    {
        $this->supplierConsumption[] = $supplierConsumption;

        return $this;
    }

    /**
     * @return SupplierConsumption
     */
    public function addToSupplierConsumptionWithCreate(): SupplierConsumption
    {
        $this->addTosupplierConsumption($supplierConsumption = new SupplierConsumption());

        return $supplierConsumption;
    }

    /**
     * @param SupplierConsumption $supplierConsumption
     * @return static
     */
    public function addOnceToSupplierConsumption(SupplierConsumption $supplierConsumption): static
    {
        if (!is_array($this->supplierConsumption)) {
            $this->supplierConsumption = [];
        }

        $this->supplierConsumption[0] = $supplierConsumption;

        return $this;
    }

    /**
     * @return SupplierConsumption
     */
    public function addOnceToSupplierConsumptionWithCreate(): SupplierConsumption
    {
        if (!is_array($this->supplierConsumption)) {
            $this->supplierConsumption = [];
        }

        if ($this->supplierConsumption === []) {
            $this->addOnceTosupplierConsumption(new SupplierConsumption());
        }

        return $this->supplierConsumption[0];
    }
}
