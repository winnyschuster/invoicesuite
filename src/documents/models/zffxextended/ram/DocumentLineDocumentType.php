<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\qdt\LineStatusCodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType;

class DocumentLineDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("LineID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineID", setter="setLineID")
     */
    private $lineID;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ParentLineID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getParentLineID", setter="setParentLineID")
     */
    private $parentLineID;

    /**
     * @var LineStatusCodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\qdt\LineStatusCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("LineStatusCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineStatusCode", setter="setLineStatusCode")
     */
    private $lineStatusCode;

    /**
     * @var CodeType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\CodeType")
     * @JMS\Expose
     * @JMS\SerializedName("LineStatusReasonCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getLineStatusReasonCode", setter="setLineStatusReasonCode")
     */
    private $lineStatusReasonCode;

    /**
     * @var array<NoteType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxextended\ram\NoteType>")
     * @JMS\Expose
     * @JMS\SerializedName("IncludedNote")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="IncludedNote", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getIncludedNote", setter="setIncludedNote")
     */
    private $includedNote;

    /**
     * @return IDType|null
     */
    public function getLineID(): ?IDType
    {
        return $this->lineID;
    }

    /**
     * @return IDType
     */
    public function getLineIDWithCreate(): IDType
    {
        $this->lineID = is_null($this->lineID) ? new IDType() : $this->lineID;

        return $this->lineID;
    }

    /**
     * @param IDType|null $lineID
     * @return static
     */
    public function setLineID(?IDType $lineID = null): static
    {
        $this->lineID = $lineID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineID(): static
    {
        $this->lineID = null;

        return $this;
    }

    /**
     * @return IDType|null
     */
    public function getParentLineID(): ?IDType
    {
        return $this->parentLineID;
    }

    /**
     * @return IDType
     */
    public function getParentLineIDWithCreate(): IDType
    {
        $this->parentLineID = is_null($this->parentLineID) ? new IDType() : $this->parentLineID;

        return $this->parentLineID;
    }

    /**
     * @param IDType|null $parentLineID
     * @return static
     */
    public function setParentLineID(?IDType $parentLineID = null): static
    {
        $this->parentLineID = $parentLineID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetParentLineID(): static
    {
        $this->parentLineID = null;

        return $this;
    }

    /**
     * @return LineStatusCodeType|null
     */
    public function getLineStatusCode(): ?LineStatusCodeType
    {
        return $this->lineStatusCode;
    }

    /**
     * @return LineStatusCodeType
     */
    public function getLineStatusCodeWithCreate(): LineStatusCodeType
    {
        $this->lineStatusCode = is_null($this->lineStatusCode) ? new LineStatusCodeType() : $this->lineStatusCode;

        return $this->lineStatusCode;
    }

    /**
     * @param LineStatusCodeType|null $lineStatusCode
     * @return static
     */
    public function setLineStatusCode(?LineStatusCodeType $lineStatusCode = null): static
    {
        $this->lineStatusCode = $lineStatusCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineStatusCode(): static
    {
        $this->lineStatusCode = null;

        return $this;
    }

    /**
     * @return CodeType|null
     */
    public function getLineStatusReasonCode(): ?CodeType
    {
        return $this->lineStatusReasonCode;
    }

    /**
     * @return CodeType
     */
    public function getLineStatusReasonCodeWithCreate(): CodeType
    {
        $this->lineStatusReasonCode = is_null($this->lineStatusReasonCode) ? new CodeType() : $this->lineStatusReasonCode;

        return $this->lineStatusReasonCode;
    }

    /**
     * @param CodeType|null $lineStatusReasonCode
     * @return static
     */
    public function setLineStatusReasonCode(?CodeType $lineStatusReasonCode = null): static
    {
        $this->lineStatusReasonCode = $lineStatusReasonCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLineStatusReasonCode(): static
    {
        $this->lineStatusReasonCode = null;

        return $this;
    }

    /**
     * @return array<NoteType>|null
     */
    public function getIncludedNote(): ?array
    {
        return $this->includedNote;
    }

    /**
     * @param array<NoteType>|null $includedNote
     * @return static
     */
    public function setIncludedNote(?array $includedNote = null): static
    {
        $this->includedNote = $includedNote;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIncludedNote(): static
    {
        $this->includedNote = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearIncludedNote(): static
    {
        $this->includedNote = [];

        return $this;
    }

    /**
     * @param NoteType $includedNote
     * @return static
     */
    public function addToIncludedNote(NoteType $includedNote): static
    {
        $this->includedNote[] = $includedNote;

        return $this;
    }

    /**
     * @return NoteType
     */
    public function addToIncludedNoteWithCreate(): NoteType
    {
        $this->addToincludedNote($includedNote = new NoteType());

        return $includedNote;
    }

    /**
     * @param NoteType $includedNote
     * @return static
     */
    public function addOnceToIncludedNote(NoteType $includedNote): static
    {
        if (!is_array($this->includedNote)) {
            $this->includedNote = [];
        }

        $this->includedNote[0] = $includedNote;

        return $this;
    }

    /**
     * @return NoteType
     */
    public function addOnceToIncludedNoteWithCreate(): NoteType
    {
        if (!is_array($this->includedNote)) {
            $this->includedNote = [];
        }

        if ($this->includedNote === []) {
            $this->addOnceToincludedNote(new NoteType());
        }

        return $this->includedNote[0];
    }
}
