<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType;

class CreditorFinancialAccountType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IBANID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIBANID", setter="setIBANID")
     */
    private $iBANID;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("AccountName")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getAccountName", setter="setAccountName")
     */
    private $accountName;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ProprietaryID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getProprietaryID", setter="setProprietaryID")
     */
    private $proprietaryID;

    /**
     * @return IDType|null
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
     * @param IDType|null $iBANID
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
     * @return TextType|null
     */
    public function getAccountName(): ?TextType
    {
        return $this->accountName;
    }

    /**
     * @return TextType
     */
    public function getAccountNameWithCreate(): TextType
    {
        $this->accountName = is_null($this->accountName) ? new TextType() : $this->accountName;

        return $this->accountName;
    }

    /**
     * @param TextType|null $accountName
     * @return static
     */
    public function setAccountName(?TextType $accountName = null): static
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAccountName(): static
    {
        $this->accountName = null;

        return $this;
    }

    /**
     * @return IDType|null
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
     * @param IDType|null $proprietaryID
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
