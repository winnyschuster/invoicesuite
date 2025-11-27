<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeclarationTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;

class DeclarationType
{
    use HandlesObjectFlags;

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
     * @var DeclarationTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeclarationTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("DeclarationTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclarationTypeCode", setter="setDeclarationTypeCode")
     */
    private $declarationTypeCode;

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
     * @var array<EvidenceSupplied>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\EvidenceSupplied>")
     * @JMS\Expose
     * @JMS\SerializedName("EvidenceSupplied")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="EvidenceSupplied", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getEvidenceSupplied", setter="setEvidenceSupplied")
     */
    private $evidenceSupplied;

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
     * @return DeclarationTypeCode|null
     */
    public function getDeclarationTypeCode(): ?DeclarationTypeCode
    {
        return $this->declarationTypeCode;
    }

    /**
     * @return DeclarationTypeCode
     */
    public function getDeclarationTypeCodeWithCreate(): DeclarationTypeCode
    {
        $this->declarationTypeCode = is_null($this->declarationTypeCode) ? new DeclarationTypeCode() : $this->declarationTypeCode;

        return $this->declarationTypeCode;
    }

    /**
     * @param DeclarationTypeCode|null $declarationTypeCode
     * @return static
     */
    public function setDeclarationTypeCode(?DeclarationTypeCode $declarationTypeCode = null): static
    {
        $this->declarationTypeCode = $declarationTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeclarationTypeCode(): static
    {
        $this->declarationTypeCode = null;

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
     * @return array<EvidenceSupplied>|null
     */
    public function getEvidenceSupplied(): ?array
    {
        return $this->evidenceSupplied;
    }

    /**
     * @param array<EvidenceSupplied>|null $evidenceSupplied
     * @return static
     */
    public function setEvidenceSupplied(?array $evidenceSupplied = null): static
    {
        $this->evidenceSupplied = $evidenceSupplied;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEvidenceSupplied(): static
    {
        $this->evidenceSupplied = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearEvidenceSupplied(): static
    {
        $this->evidenceSupplied = [];

        return $this;
    }

    /**
     * @return EvidenceSupplied|null
     */
    public function firstEvidenceSupplied(): ?EvidenceSupplied
    {
        $evidenceSupplied = $this->evidenceSupplied ?? [];
        $evidenceSupplied = reset($evidenceSupplied);

        if ($evidenceSupplied === false) {
            return null;
        }

        return $evidenceSupplied;
    }

    /**
     * @return EvidenceSupplied|null
     */
    public function lastEvidenceSupplied(): ?EvidenceSupplied
    {
        $evidenceSupplied = $this->evidenceSupplied ?? [];
        $evidenceSupplied = end($evidenceSupplied);

        if ($evidenceSupplied === false) {
            return null;
        }

        return $evidenceSupplied;
    }

    /**
     * @param EvidenceSupplied $evidenceSupplied
     * @return static
     */
    public function addToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): static
    {
        $this->evidenceSupplied[] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return EvidenceSupplied
     */
    public function addToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        $this->addToevidenceSupplied($evidenceSupplied = new EvidenceSupplied());

        return $evidenceSupplied;
    }

    /**
     * @param EvidenceSupplied $evidenceSupplied
     * @return static
     */
    public function addOnceToEvidenceSupplied(EvidenceSupplied $evidenceSupplied): static
    {
        if (!is_array($this->evidenceSupplied)) {
            $this->evidenceSupplied = [];
        }

        $this->evidenceSupplied[0] = $evidenceSupplied;

        return $this;
    }

    /**
     * @return EvidenceSupplied
     */
    public function addOnceToEvidenceSuppliedWithCreate(): EvidenceSupplied
    {
        if (!is_array($this->evidenceSupplied)) {
            $this->evidenceSupplied = [];
        }

        if ($this->evidenceSupplied === []) {
            $this->addOnceToevidenceSupplied(new EvidenceSupplied());
        }

        return $this->evidenceSupplied[0];
    }
}
