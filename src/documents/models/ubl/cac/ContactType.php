<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ElectronicMail;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Telefax;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Telephone;

class ContactType
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
     * @var Name|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Name")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @var Telephone|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Telephone")
     * @JMS\Expose
     * @JMS\SerializedName("Telephone")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelephone", setter="setTelephone")
     */
    private $telephone;

    /**
     * @var Telefax|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Telefax")
     * @JMS\Expose
     * @JMS\SerializedName("Telefax")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTelefax", setter="setTelefax")
     */
    private $telefax;

    /**
     * @var ElectronicMail|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ElectronicMail")
     * @JMS\Expose
     * @JMS\SerializedName("ElectronicMail")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getElectronicMail", setter="setElectronicMail")
     */
    private $electronicMail;

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
     * @var array<OtherCommunication>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\OtherCommunication>")
     * @JMS\Expose
     * @JMS\SerializedName("OtherCommunication")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OtherCommunication", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOtherCommunication", setter="setOtherCommunication")
     */
    private $otherCommunication;

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
     * @return Name|null
     */
    public function getName(): ?Name
    {
        return $this->name;
    }

    /**
     * @return Name
     */
    public function getNameWithCreate(): Name
    {
        $this->name = is_null($this->name) ? new Name() : $this->name;

        return $this->name;
    }

    /**
     * @param Name|null $name
     * @return static
     */
    public function setName(?Name $name = null): static
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
     * @return Telephone|null
     */
    public function getTelephone(): ?Telephone
    {
        return $this->telephone;
    }

    /**
     * @return Telephone
     */
    public function getTelephoneWithCreate(): Telephone
    {
        $this->telephone = is_null($this->telephone) ? new Telephone() : $this->telephone;

        return $this->telephone;
    }

    /**
     * @param Telephone|null $telephone
     * @return static
     */
    public function setTelephone(?Telephone $telephone = null): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTelephone(): static
    {
        $this->telephone = null;

        return $this;
    }

    /**
     * @return Telefax|null
     */
    public function getTelefax(): ?Telefax
    {
        return $this->telefax;
    }

    /**
     * @return Telefax
     */
    public function getTelefaxWithCreate(): Telefax
    {
        $this->telefax = is_null($this->telefax) ? new Telefax() : $this->telefax;

        return $this->telefax;
    }

    /**
     * @param Telefax|null $telefax
     * @return static
     */
    public function setTelefax(?Telefax $telefax = null): static
    {
        $this->telefax = $telefax;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTelefax(): static
    {
        $this->telefax = null;

        return $this;
    }

    /**
     * @return ElectronicMail|null
     */
    public function getElectronicMail(): ?ElectronicMail
    {
        return $this->electronicMail;
    }

    /**
     * @return ElectronicMail
     */
    public function getElectronicMailWithCreate(): ElectronicMail
    {
        $this->electronicMail = is_null($this->electronicMail) ? new ElectronicMail() : $this->electronicMail;

        return $this->electronicMail;
    }

    /**
     * @param ElectronicMail|null $electronicMail
     * @return static
     */
    public function setElectronicMail(?ElectronicMail $electronicMail = null): static
    {
        $this->electronicMail = $electronicMail;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetElectronicMail(): static
    {
        $this->electronicMail = null;

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
     * @return array<OtherCommunication>|null
     */
    public function getOtherCommunication(): ?array
    {
        return $this->otherCommunication;
    }

    /**
     * @param array<OtherCommunication>|null $otherCommunication
     * @return static
     */
    public function setOtherCommunication(?array $otherCommunication = null): static
    {
        $this->otherCommunication = $otherCommunication;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOtherCommunication(): static
    {
        $this->otherCommunication = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearOtherCommunication(): static
    {
        $this->otherCommunication = [];

        return $this;
    }

    /**
     * @return OtherCommunication|null
     */
    public function firstOtherCommunication(): ?OtherCommunication
    {
        $otherCommunication = $this->otherCommunication ?? [];
        $otherCommunication = reset($otherCommunication);

        if ($otherCommunication === false) {
            return null;
        }

        return $otherCommunication;
    }

    /**
     * @return OtherCommunication|null
     */
    public function lastOtherCommunication(): ?OtherCommunication
    {
        $otherCommunication = $this->otherCommunication ?? [];
        $otherCommunication = end($otherCommunication);

        if ($otherCommunication === false) {
            return null;
        }

        return $otherCommunication;
    }

    /**
     * @param OtherCommunication $otherCommunication
     * @return static
     */
    public function addToOtherCommunication(OtherCommunication $otherCommunication): static
    {
        $this->otherCommunication[] = $otherCommunication;

        return $this;
    }

    /**
     * @return OtherCommunication
     */
    public function addToOtherCommunicationWithCreate(): OtherCommunication
    {
        $this->addTootherCommunication($otherCommunication = new OtherCommunication());

        return $otherCommunication;
    }

    /**
     * @param OtherCommunication $otherCommunication
     * @return static
     */
    public function addOnceToOtherCommunication(OtherCommunication $otherCommunication): static
    {
        if (!is_array($this->otherCommunication)) {
            $this->otherCommunication = [];
        }

        $this->otherCommunication[0] = $otherCommunication;

        return $this;
    }

    /**
     * @return OtherCommunication
     */
    public function addOnceToOtherCommunicationWithCreate(): OtherCommunication
    {
        if (!is_array($this->otherCommunication)) {
            $this->otherCommunication = [];
        }

        if ($this->otherCommunication === []) {
            $this->addOnceTootherCommunication(new OtherCommunication());
        }

        return $this->otherCommunication[0];
    }
}
