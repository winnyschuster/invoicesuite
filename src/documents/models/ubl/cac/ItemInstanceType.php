<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ProductTraceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\RegistrationID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SerialID;

class ItemInstanceType
{
    use HandlesObjectFlags;

    /**
     * @var ProductTraceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ProductTraceID")
     * @JMS\Expose
     * @JMS\SerializedName("ProductTraceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getProductTraceID", setter="setProductTraceID")
     */
    private $productTraceID;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ManufactureDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getManufactureDate", setter="setManufactureDate")
     */
    private $manufactureDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ManufactureTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getManufactureTime", setter="setManufactureTime")
     */
    private $manufactureTime;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("BestBeforeDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBestBeforeDate", setter="setBestBeforeDate")
     */
    private $bestBeforeDate;

    /**
     * @var RegistrationID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\RegistrationID")
     * @JMS\Expose
     * @JMS\SerializedName("RegistrationID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRegistrationID", setter="setRegistrationID")
     */
    private $registrationID;

    /**
     * @var SerialID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SerialID")
     * @JMS\Expose
     * @JMS\SerializedName("SerialID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSerialID", setter="setSerialID")
     */
    private $serialID;

    /**
     * @var array<AdditionalItemProperty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AdditionalItemProperty>")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalItemProperty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AdditionalItemProperty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAdditionalItemProperty", setter="setAdditionalItemProperty")
     */
    private $additionalItemProperty;

    /**
     * @var LotIdentification|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\LotIdentification")
     * @JMS\Expose
     * @JMS\SerializedName("LotIdentification")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLotIdentification", setter="setLotIdentification")
     */
    private $lotIdentification;

    /**
     * @return ProductTraceID|null
     */
    public function getProductTraceID(): ?ProductTraceID
    {
        return $this->productTraceID;
    }

    /**
     * @return ProductTraceID
     */
    public function getProductTraceIDWithCreate(): ProductTraceID
    {
        $this->productTraceID = is_null($this->productTraceID) ? new ProductTraceID() : $this->productTraceID;

        return $this->productTraceID;
    }

    /**
     * @param ProductTraceID|null $productTraceID
     * @return static
     */
    public function setProductTraceID(?ProductTraceID $productTraceID = null): static
    {
        $this->productTraceID = $productTraceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetProductTraceID(): static
    {
        $this->productTraceID = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getManufactureDate(): ?DateTimeInterface
    {
        return $this->manufactureDate;
    }

    /**
     * @param DateTimeInterface|null $manufactureDate
     * @return static
     */
    public function setManufactureDate(?DateTimeInterface $manufactureDate = null): static
    {
        $this->manufactureDate = $manufactureDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetManufactureDate(): static
    {
        $this->manufactureDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getManufactureTime(): ?DateTimeInterface
    {
        return $this->manufactureTime;
    }

    /**
     * @param DateTimeInterface|null $manufactureTime
     * @return static
     */
    public function setManufactureTime(?DateTimeInterface $manufactureTime = null): static
    {
        $this->manufactureTime = $manufactureTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetManufactureTime(): static
    {
        $this->manufactureTime = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getBestBeforeDate(): ?DateTimeInterface
    {
        return $this->bestBeforeDate;
    }

    /**
     * @param DateTimeInterface|null $bestBeforeDate
     * @return static
     */
    public function setBestBeforeDate(?DateTimeInterface $bestBeforeDate = null): static
    {
        $this->bestBeforeDate = $bestBeforeDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBestBeforeDate(): static
    {
        $this->bestBeforeDate = null;

        return $this;
    }

    /**
     * @return RegistrationID|null
     */
    public function getRegistrationID(): ?RegistrationID
    {
        return $this->registrationID;
    }

    /**
     * @return RegistrationID
     */
    public function getRegistrationIDWithCreate(): RegistrationID
    {
        $this->registrationID = is_null($this->registrationID) ? new RegistrationID() : $this->registrationID;

        return $this->registrationID;
    }

    /**
     * @param RegistrationID|null $registrationID
     * @return static
     */
    public function setRegistrationID(?RegistrationID $registrationID = null): static
    {
        $this->registrationID = $registrationID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRegistrationID(): static
    {
        $this->registrationID = null;

        return $this;
    }

    /**
     * @return SerialID|null
     */
    public function getSerialID(): ?SerialID
    {
        return $this->serialID;
    }

    /**
     * @return SerialID
     */
    public function getSerialIDWithCreate(): SerialID
    {
        $this->serialID = is_null($this->serialID) ? new SerialID() : $this->serialID;

        return $this->serialID;
    }

    /**
     * @param SerialID|null $serialID
     * @return static
     */
    public function setSerialID(?SerialID $serialID = null): static
    {
        $this->serialID = $serialID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSerialID(): static
    {
        $this->serialID = null;

        return $this;
    }

    /**
     * @return array<AdditionalItemProperty>|null
     */
    public function getAdditionalItemProperty(): ?array
    {
        return $this->additionalItemProperty;
    }

    /**
     * @param array<AdditionalItemProperty>|null $additionalItemProperty
     * @return static
     */
    public function setAdditionalItemProperty(?array $additionalItemProperty = null): static
    {
        $this->additionalItemProperty = $additionalItemProperty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAdditionalItemProperty(): static
    {
        $this->additionalItemProperty = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAdditionalItemProperty(): static
    {
        $this->additionalItemProperty = [];

        return $this;
    }

    /**
     * @return AdditionalItemProperty|null
     */
    public function firstAdditionalItemProperty(): ?AdditionalItemProperty
    {
        $additionalItemProperty = $this->additionalItemProperty ?? [];
        $additionalItemProperty = reset($additionalItemProperty);

        if ($additionalItemProperty === false) {
            return null;
        }

        return $additionalItemProperty;
    }

    /**
     * @return AdditionalItemProperty|null
     */
    public function lastAdditionalItemProperty(): ?AdditionalItemProperty
    {
        $additionalItemProperty = $this->additionalItemProperty ?? [];
        $additionalItemProperty = end($additionalItemProperty);

        if ($additionalItemProperty === false) {
            return null;
        }

        return $additionalItemProperty;
    }

    /**
     * @param AdditionalItemProperty $additionalItemProperty
     * @return static
     */
    public function addToAdditionalItemProperty(AdditionalItemProperty $additionalItemProperty): static
    {
        $this->additionalItemProperty[] = $additionalItemProperty;

        return $this;
    }

    /**
     * @return AdditionalItemProperty
     */
    public function addToAdditionalItemPropertyWithCreate(): AdditionalItemProperty
    {
        $this->addToadditionalItemProperty($additionalItemProperty = new AdditionalItemProperty());

        return $additionalItemProperty;
    }

    /**
     * @param AdditionalItemProperty $additionalItemProperty
     * @return static
     */
    public function addOnceToAdditionalItemProperty(AdditionalItemProperty $additionalItemProperty): static
    {
        if (!is_array($this->additionalItemProperty)) {
            $this->additionalItemProperty = [];
        }

        $this->additionalItemProperty[0] = $additionalItemProperty;

        return $this;
    }

    /**
     * @return AdditionalItemProperty
     */
    public function addOnceToAdditionalItemPropertyWithCreate(): AdditionalItemProperty
    {
        if (!is_array($this->additionalItemProperty)) {
            $this->additionalItemProperty = [];
        }

        if ($this->additionalItemProperty === []) {
            $this->addOnceToadditionalItemProperty(new AdditionalItemProperty());
        }

        return $this->additionalItemProperty[0];
    }

    /**
     * @return LotIdentification|null
     */
    public function getLotIdentification(): ?LotIdentification
    {
        return $this->lotIdentification;
    }

    /**
     * @return LotIdentification
     */
    public function getLotIdentificationWithCreate(): LotIdentification
    {
        $this->lotIdentification = is_null($this->lotIdentification) ? new LotIdentification() : $this->lotIdentification;

        return $this->lotIdentification;
    }

    /**
     * @param LotIdentification|null $lotIdentification
     * @return static
     */
    public function setLotIdentification(?LotIdentification $lotIdentification = null): static
    {
        $this->lotIdentification = $lotIdentification;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLotIdentification(): static
    {
        $this->lotIdentification = null;

        return $this;
    }
}
