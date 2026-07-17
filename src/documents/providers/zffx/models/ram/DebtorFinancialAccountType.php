<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\IDType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class DebtorFinancialAccountType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     */
    #[JMS\Accessor(getter: 'getIBANID', setter: 'setIBANID')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('IBANID')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\udt\IDType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $iBANID;

    /**
     * @var null|TextType
     */
    #[JMS\Accessor(getter: 'getAccountName', setter: 'setAccountName')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('AccountName')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $accountName;

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
        $this->iBANID ??= new IDType();

        return $this->iBANID;
    }

    /**
     * @param  null|IDType $iBANID
     * @return static
     */
    public function setIBANID(
        ?IDType $iBANID = null
    ): static {
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
     * @return null|TextType
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
        $this->accountName ??= new TextType();

        return $this->accountName;
    }

    /**
     * @param  null|TextType $accountName
     * @return static
     */
    public function setAccountName(
        ?TextType $accountName = null
    ): static {
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
}
