<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Information;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Reference;

class TradingTermsType
{
    use HandlesObjectFlags;

    /**
     * @var array<Information>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Information>")
     * @JMS\Expose
     * @JMS\SerializedName("Information")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Information", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getInformation", setter="setInformation")
     */
    private $information;

    /**
     * @var Reference|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Reference")
     * @JMS\Expose
     * @JMS\SerializedName("Reference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReference", setter="setReference")
     */
    private $reference;

    /**
     * @var ApplicableAddress|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ApplicableAddress")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getApplicableAddress", setter="setApplicableAddress")
     */
    private $applicableAddress;

    /**
     * @return array<Information>|null
     */
    public function getInformation(): ?array
    {
        return $this->information;
    }

    /**
     * @param array<Information>|null $information
     * @return static
     */
    public function setInformation(?array $information = null): static
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInformation(): static
    {
        $this->information = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearInformation(): static
    {
        $this->information = [];

        return $this;
    }

    /**
     * @return Information|null
     */
    public function firstInformation(): ?Information
    {
        $information = $this->information ?? [];
        $information = reset($information);

        if ($information === false) {
            return null;
        }

        return $information;
    }

    /**
     * @return Information|null
     */
    public function lastInformation(): ?Information
    {
        $information = $this->information ?? [];
        $information = end($information);

        if ($information === false) {
            return null;
        }

        return $information;
    }

    /**
     * @param Information $information
     * @return static
     */
    public function addToInformation(Information $information): static
    {
        $this->information[] = $information;

        return $this;
    }

    /**
     * @return Information
     */
    public function addToInformationWithCreate(): Information
    {
        $this->addToinformation($information = new Information());

        return $information;
    }

    /**
     * @param Information $information
     * @return static
     */
    public function addOnceToInformation(Information $information): static
    {
        if (!is_array($this->information)) {
            $this->information = [];
        }

        $this->information[0] = $information;

        return $this;
    }

    /**
     * @return Information
     */
    public function addOnceToInformationWithCreate(): Information
    {
        if (!is_array($this->information)) {
            $this->information = [];
        }

        if ($this->information === []) {
            $this->addOnceToinformation(new Information());
        }

        return $this->information[0];
    }

    /**
     * @return Reference|null
     */
    public function getReference(): ?Reference
    {
        return $this->reference;
    }

    /**
     * @return Reference
     */
    public function getReferenceWithCreate(): Reference
    {
        $this->reference = is_null($this->reference) ? new Reference() : $this->reference;

        return $this->reference;
    }

    /**
     * @param Reference|null $reference
     * @return static
     */
    public function setReference(?Reference $reference = null): static
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReference(): static
    {
        $this->reference = null;

        return $this;
    }

    /**
     * @return ApplicableAddress|null
     */
    public function getApplicableAddress(): ?ApplicableAddress
    {
        return $this->applicableAddress;
    }

    /**
     * @return ApplicableAddress
     */
    public function getApplicableAddressWithCreate(): ApplicableAddress
    {
        $this->applicableAddress = is_null($this->applicableAddress) ? new ApplicableAddress() : $this->applicableAddress;

        return $this->applicableAddress;
    }

    /**
     * @param ApplicableAddress|null $applicableAddress
     * @return static
     */
    public function setApplicableAddress(?ApplicableAddress $applicableAddress = null): static
    {
        $this->applicableAddress = $applicableAddress;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableAddress(): static
    {
        $this->applicableAddress = null;

        return $this;
    }
}
