<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\models\ubl\cbc\ID;

class PickupType
{
    /**
     * @var \horstoeko\invoicesuite\models\ubl\cbc\ID
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ActualPickupDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualPickupDate", setter="setActualPickupDate")
     */
    private $actualPickupDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ActualPickupTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getActualPickupTime", setter="setActualPickupTime")
     */
    private $actualPickupTime;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("EarliestPickupDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEarliestPickupDate", setter="setEarliestPickupDate")
     */
    private $earliestPickupDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("EarliestPickupTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEarliestPickupTime", setter="setEarliestPickupTime")
     */
    private $earliestPickupTime;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("LatestPickupDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestPickupDate", setter="setLatestPickupDate")
     */
    private $latestPickupDate;

    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("LatestPickupTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLatestPickupTime", setter="setLatestPickupTime")
     */
    private $latestPickupTime;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PickupLocation
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PickupLocation")
     * @JMS\Expose
     * @JMS\SerializedName("PickupLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPickupLocation", setter="setPickupLocation")
     */
    private $pickupLocation;

    /**
     * @var \horstoeko\invoicesuite\models\ubl\cac\PickupParty
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\models\ubl\cac\PickupParty")
     * @JMS\Expose
     * @JMS\SerializedName("PickupParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPickupParty", setter="setPickupParty")
     */
    private $pickupParty;

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cbc\ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cbc\ID $iD
     * @return self
     */
    public function setID(ID $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getActualPickupDate(): ?\DateTime
    {
        return $this->actualPickupDate;
    }

    /**
     * @param \DateTime $actualPickupDate
     * @return self
     */
    public function setActualPickupDate(\DateTime $actualPickupDate): self
    {
        $this->actualPickupDate = $actualPickupDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getActualPickupTime(): ?\DateTime
    {
        return $this->actualPickupTime;
    }

    /**
     * @param \DateTime $actualPickupTime
     * @return self
     */
    public function setActualPickupTime(\DateTime $actualPickupTime): self
    {
        $this->actualPickupTime = $actualPickupTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEarliestPickupDate(): ?\DateTime
    {
        return $this->earliestPickupDate;
    }

    /**
     * @param \DateTime $earliestPickupDate
     * @return self
     */
    public function setEarliestPickupDate(\DateTime $earliestPickupDate): self
    {
        $this->earliestPickupDate = $earliestPickupDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEarliestPickupTime(): ?\DateTime
    {
        return $this->earliestPickupTime;
    }

    /**
     * @param \DateTime $earliestPickupTime
     * @return self
     */
    public function setEarliestPickupTime(\DateTime $earliestPickupTime): self
    {
        $this->earliestPickupTime = $earliestPickupTime;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLatestPickupDate(): ?\DateTime
    {
        return $this->latestPickupDate;
    }

    /**
     * @param \DateTime $latestPickupDate
     * @return self
     */
    public function setLatestPickupDate(\DateTime $latestPickupDate): self
    {
        $this->latestPickupDate = $latestPickupDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLatestPickupTime(): ?\DateTime
    {
        return $this->latestPickupTime;
    }

    /**
     * @param \DateTime $latestPickupTime
     * @return self
     */
    public function setLatestPickupTime(\DateTime $latestPickupTime): self
    {
        $this->latestPickupTime = $latestPickupTime;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupLocation|null
     */
    public function getPickupLocation(): ?PickupLocation
    {
        return $this->pickupLocation;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupLocation
     */
    public function getPickupLocationWithCreate(): PickupLocation
    {
        $this->pickupLocation = is_null($this->pickupLocation) ? new PickupLocation() : $this->pickupLocation;

        return $this->pickupLocation;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PickupLocation $pickupLocation
     * @return self
     */
    public function setPickupLocation(PickupLocation $pickupLocation): self
    {
        $this->pickupLocation = $pickupLocation;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupParty|null
     */
    public function getPickupParty(): ?PickupParty
    {
        return $this->pickupParty;
    }

    /**
     * @return \horstoeko\invoicesuite\models\ubl\cac\PickupParty
     */
    public function getPickupPartyWithCreate(): PickupParty
    {
        $this->pickupParty = is_null($this->pickupParty) ? new PickupParty() : $this->pickupParty;

        return $this->pickupParty;
    }

    /**
     * @param \horstoeko\invoicesuite\models\ubl\cac\PickupParty $pickupParty
     * @return self
     */
    public function setPickupParty(PickupParty $pickupParty): self
    {
        $this->pickupParty = $pickupParty;

        return $this;
    }
}
