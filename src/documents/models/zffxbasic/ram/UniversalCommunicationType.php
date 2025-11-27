<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType;
use JMS\Serializer\Annotation as JMS;

class UniversalCommunicationType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("URIID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getURIID", setter="setURIID")
     */
    private $uRIID;

    /**
     * @return null|IDType
     */
    public function getURIID(): ?IDType
    {
        return $this->uRIID;
    }

    /**
     * @return IDType
     */
    public function getURIIDWithCreate(): IDType
    {
        $this->uRIID = is_null($this->uRIID) ? new IDType() : $this->uRIID;

        return $this->uRIID;
    }

    /**
     * @param  null|IDType $uRIID
     * @return static
     */
    public function setURIID(?IDType $uRIID = null): static
    {
        $this->uRIID = $uRIID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetURIID(): static
    {
        $this->uRIID = null;

        return $this;
    }
}
