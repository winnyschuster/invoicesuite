<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType;
use JMS\Serializer\Annotation as JMS;

class CreditorFinancialAccountType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IBANID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIBANID", setter="setIBANID")
     */
    private $iBANID;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ProprietaryID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getProprietaryID", setter="setProprietaryID")
     */
    private $proprietaryID;

    /**
     * @return null|IDType
     */
    public function getIBANID(): ?IDType
    {
        return $this->iBANID;
    }

    /**
     * @return IDType
     */
    public function getIBANIDWithCreate(): IDType
    {
        $this->iBANID = is_null($this->iBANID) ? new IDType() : $this->iBANID;

        return $this->iBANID;
    }

    /**
     * @param  null|IDType $iBANID
     * @return static
     */
    public function setIBANID(?IDType $iBANID = null): static
    {
        $this->iBANID = $iBANID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIBANID(): static
    {
        $this->iBANID = null;

        return $this;
    }

    /**
     * @return null|IDType
     */
    public function getProprietaryID(): ?IDType
    {
        return $this->proprietaryID;
    }

    /**
     * @return IDType
     */
    public function getProprietaryIDWithCreate(): IDType
    {
        $this->proprietaryID = is_null($this->proprietaryID) ? new IDType() : $this->proprietaryID;

        return $this->proprietaryID;
    }

    /**
     * @param  null|IDType $proprietaryID
     * @return static
     */
    public function setProprietaryID(?IDType $proprietaryID = null): static
    {
        $this->proprietaryID = $proprietaryID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetProprietaryID(): static
    {
        $this->proprietaryID = null;

        return $this;
    }
}
