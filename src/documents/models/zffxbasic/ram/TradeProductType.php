<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\TextType;

class TradeProductType
{
    use HandlesObjectFlags;

    /**
     * @var IDType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("GlobalID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGlobalID", setter="setGlobalID")
     */
    private $globalID;

    /**
     * @var TextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Name")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getName", setter="setName")
     */
    private $name;

    /**
     * @return IDType|null
     */
    public function getGlobalID(): ?IDType
    {
        return $this->globalID;
    }

    /**
     * @return IDType
     */
    public function getGlobalIDWithCreate(): IDType
    {
        $this->globalID = is_null($this->globalID) ? new IDType() : $this->globalID;

        return $this->globalID;
    }

    /**
     * @param IDType|null $globalID
     * @return static
     */
    public function setGlobalID(?IDType $globalID = null): static
    {
        $this->globalID = $globalID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGlobalID(): static
    {
        $this->globalID = null;

        return $this;
    }

    /**
     * @return TextType|null
     */
    public function getName(): ?TextType
    {
        return $this->name;
    }

    /**
     * @return TextType
     */
    public function getNameWithCreate(): TextType
    {
        $this->name = is_null($this->name) ? new TextType() : $this->name;

        return $this->name;
    }

    /**
     * @param TextType|null $name
     * @return static
     */
    public function setName(?TextType $name = null): static
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
}
