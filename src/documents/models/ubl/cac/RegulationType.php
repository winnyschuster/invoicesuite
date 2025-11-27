<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LegalReference;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Name;
use horstoeko\invoicesuite\documents\models\ubl\cbc\OntologyURI;

class RegulationType
{
    use HandlesObjectFlags;

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
     * @var LegalReference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LegalReference")
     * @JMS\Expose
     * @JMS\SerializedName("LegalReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLegalReference", setter="setLegalReference")
     */
    private $legalReference;

    /**
     * @var OntologyURI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\OntologyURI")
     * @JMS\Expose
     * @JMS\SerializedName("OntologyURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOntologyURI", setter="setOntologyURI")
     */
    private $ontologyURI;

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
     * @return LegalReference|null
     */
    public function getLegalReference(): ?LegalReference
    {
        return $this->legalReference;
    }

    /**
     * @return LegalReference
     */
    public function getLegalReferenceWithCreate(): LegalReference
    {
        $this->legalReference = is_null($this->legalReference) ? new LegalReference() : $this->legalReference;

        return $this->legalReference;
    }

    /**
     * @param LegalReference|null $legalReference
     * @return static
     */
    public function setLegalReference(?LegalReference $legalReference = null): static
    {
        $this->legalReference = $legalReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLegalReference(): static
    {
        $this->legalReference = null;

        return $this;
    }

    /**
     * @return OntologyURI|null
     */
    public function getOntologyURI(): ?OntologyURI
    {
        return $this->ontologyURI;
    }

    /**
     * @return OntologyURI
     */
    public function getOntologyURIWithCreate(): OntologyURI
    {
        $this->ontologyURI = is_null($this->ontologyURI) ? new OntologyURI() : $this->ontologyURI;

        return $this->ontologyURI;
    }

    /**
     * @param OntologyURI|null $ontologyURI
     * @return static
     */
    public function setOntologyURI(?OntologyURI $ontologyURI = null): static
    {
        $this->ontologyURI = $ontologyURI;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOntologyURI(): static
    {
        $this->ontologyURI = null;

        return $this;
    }
}
