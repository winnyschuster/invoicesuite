<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CandidateStatement;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EvidenceTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;

class EvidenceType
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
     * @var EvidenceTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EvidenceTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("EvidenceTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEvidenceTypeCode", setter="setEvidenceTypeCode")
     */
    private $evidenceTypeCode;

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
     * @var array<CandidateStatement>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\CandidateStatement>")
     * @JMS\Expose
     * @JMS\SerializedName("CandidateStatement")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CandidateStatement", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getCandidateStatement", setter="setCandidateStatement")
     */
    private $candidateStatement;

    /**
     * @var EvidenceIssuingParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EvidenceIssuingParty")
     * @JMS\Expose
     * @JMS\SerializedName("EvidenceIssuingParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEvidenceIssuingParty", setter="setEvidenceIssuingParty")
     */
    private $evidenceIssuingParty;

    /**
     * @var DocumentReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var Language|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Language")
     * @JMS\Expose
     * @JMS\SerializedName("Language")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLanguage", setter="setLanguage")
     */
    private $language;

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
     * @return EvidenceTypeCode|null
     */
    public function getEvidenceTypeCode(): ?EvidenceTypeCode
    {
        return $this->evidenceTypeCode;
    }

    /**
     * @return EvidenceTypeCode
     */
    public function getEvidenceTypeCodeWithCreate(): EvidenceTypeCode
    {
        $this->evidenceTypeCode = is_null($this->evidenceTypeCode) ? new EvidenceTypeCode() : $this->evidenceTypeCode;

        return $this->evidenceTypeCode;
    }

    /**
     * @param EvidenceTypeCode|null $evidenceTypeCode
     * @return static
     */
    public function setEvidenceTypeCode(?EvidenceTypeCode $evidenceTypeCode = null): static
    {
        $this->evidenceTypeCode = $evidenceTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEvidenceTypeCode(): static
    {
        $this->evidenceTypeCode = null;

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
     * @return array<CandidateStatement>|null
     */
    public function getCandidateStatement(): ?array
    {
        return $this->candidateStatement;
    }

    /**
     * @param array<CandidateStatement>|null $candidateStatement
     * @return static
     */
    public function setCandidateStatement(?array $candidateStatement = null): static
    {
        $this->candidateStatement = $candidateStatement;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCandidateStatement(): static
    {
        $this->candidateStatement = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearCandidateStatement(): static
    {
        $this->candidateStatement = [];

        return $this;
    }

    /**
     * @return CandidateStatement|null
     */
    public function firstCandidateStatement(): ?CandidateStatement
    {
        $candidateStatement = $this->candidateStatement ?? [];
        $candidateStatement = reset($candidateStatement);

        if ($candidateStatement === false) {
            return null;
        }

        return $candidateStatement;
    }

    /**
     * @return CandidateStatement|null
     */
    public function lastCandidateStatement(): ?CandidateStatement
    {
        $candidateStatement = $this->candidateStatement ?? [];
        $candidateStatement = end($candidateStatement);

        if ($candidateStatement === false) {
            return null;
        }

        return $candidateStatement;
    }

    /**
     * @param CandidateStatement $candidateStatement
     * @return static
     */
    public function addToCandidateStatement(CandidateStatement $candidateStatement): static
    {
        $this->candidateStatement[] = $candidateStatement;

        return $this;
    }

    /**
     * @return CandidateStatement
     */
    public function addToCandidateStatementWithCreate(): CandidateStatement
    {
        $this->addTocandidateStatement($candidateStatement = new CandidateStatement());

        return $candidateStatement;
    }

    /**
     * @param CandidateStatement $candidateStatement
     * @return static
     */
    public function addOnceToCandidateStatement(CandidateStatement $candidateStatement): static
    {
        if (!is_array($this->candidateStatement)) {
            $this->candidateStatement = [];
        }

        $this->candidateStatement[0] = $candidateStatement;

        return $this;
    }

    /**
     * @return CandidateStatement
     */
    public function addOnceToCandidateStatementWithCreate(): CandidateStatement
    {
        if (!is_array($this->candidateStatement)) {
            $this->candidateStatement = [];
        }

        if ($this->candidateStatement === []) {
            $this->addOnceTocandidateStatement(new CandidateStatement());
        }

        return $this->candidateStatement[0];
    }

    /**
     * @return EvidenceIssuingParty|null
     */
    public function getEvidenceIssuingParty(): ?EvidenceIssuingParty
    {
        return $this->evidenceIssuingParty;
    }

    /**
     * @return EvidenceIssuingParty
     */
    public function getEvidenceIssuingPartyWithCreate(): EvidenceIssuingParty
    {
        $this->evidenceIssuingParty = is_null($this->evidenceIssuingParty) ? new EvidenceIssuingParty() : $this->evidenceIssuingParty;

        return $this->evidenceIssuingParty;
    }

    /**
     * @param EvidenceIssuingParty|null $evidenceIssuingParty
     * @return static
     */
    public function setEvidenceIssuingParty(?EvidenceIssuingParty $evidenceIssuingParty = null): static
    {
        $this->evidenceIssuingParty = $evidenceIssuingParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEvidenceIssuingParty(): static
    {
        $this->evidenceIssuingParty = null;

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function getDocumentReference(): ?DocumentReference
    {
        return $this->documentReference;
    }

    /**
     * @return DocumentReference
     */
    public function getDocumentReferenceWithCreate(): DocumentReference
    {
        $this->documentReference = is_null($this->documentReference) ? new DocumentReference() : $this->documentReference;

        return $this->documentReference;
    }

    /**
     * @param DocumentReference|null $documentReference
     * @return static
     */
    public function setDocumentReference(?DocumentReference $documentReference = null): static
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
     * @return Language|null
     */
    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    /**
     * @return Language
     */
    public function getLanguageWithCreate(): Language
    {
        $this->language = is_null($this->language) ? new Language() : $this->language;

        return $this->language;
    }

    /**
     * @param Language|null $language
     * @return static
     */
    public function setLanguage(?Language $language = null): static
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLanguage(): static
    {
        $this->language = null;

        return $this;
    }
}
