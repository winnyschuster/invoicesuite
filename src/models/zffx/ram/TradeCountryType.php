<?php

namespace horstoeko\invoicesuite\models\zffx\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\zffx\qdt\CountryIDType;

class TradeCountryType
{
    use HandlesObjectFlags;
    use HandlesOptional;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\qdt\CountryIDType
     * @JMS\Groups({"zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\qdt\CountryIDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @return \horstoeko\invoicesuite\models\zffx\qdt\CountryIDType|null
     */
    public function getID(): ?CountryIDType
    {
        return $this->iD;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\qdt\CountryIDType
     */
    public function getIDWithCreate(): CountryIDType
    {
        $this->iD = is_null($this->iD) ? new CountryIDType() : $this->iD;

        return $this->iD;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\qdt\CountryIDType $iD
     * @return self
     */
    public function setID(CountryIDType $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
