<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

class QuantityType
{
    use HandlesObjectFlags;

    /**
     * @var float|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("float")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("unitCode")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUnitCode", setter="setUnitCode")
     */
    private $unitCode;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("unitCodeListID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUnitCodeListID", setter="setUnitCodeListID")
     */
    private $unitCodeListID;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("unitCodeListAgencyID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUnitCodeListAgencyID", setter="setUnitCodeListAgencyID")
     */
    private $unitCodeListAgencyID;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("unitCodeListAgencyName")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUnitCodeListAgencyName", setter="setUnitCodeListAgencyName")
     */
    private $unitCodeListAgencyName;

    /**
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     * @return static
     */
    public function setValue(?float $value = null): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValue(): static
    {
        $this->value = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitCode(): ?string
    {
        return $this->unitCode;
    }

    /**
     * @param string|null $unitCode
     * @return static
     */
    public function setUnitCode(?string $unitCode = null): static
    {
        $this->unitCode = InvoiceSuiteStringUtils::asNullWhenEmpty($unitCode);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUnitCode(): static
    {
        $this->unitCode = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitCodeListID(): ?string
    {
        return $this->unitCodeListID;
    }

    /**
     * @param string|null $unitCodeListID
     * @return static
     */
    public function setUnitCodeListID(?string $unitCodeListID = null): static
    {
        $this->unitCodeListID = InvoiceSuiteStringUtils::asNullWhenEmpty($unitCodeListID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUnitCodeListID(): static
    {
        $this->unitCodeListID = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitCodeListAgencyID(): ?string
    {
        return $this->unitCodeListAgencyID;
    }

    /**
     * @param string|null $unitCodeListAgencyID
     * @return static
     */
    public function setUnitCodeListAgencyID(?string $unitCodeListAgencyID = null): static
    {
        $this->unitCodeListAgencyID = InvoiceSuiteStringUtils::asNullWhenEmpty($unitCodeListAgencyID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUnitCodeListAgencyID(): static
    {
        $this->unitCodeListAgencyID = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitCodeListAgencyName(): ?string
    {
        return $this->unitCodeListAgencyName;
    }

    /**
     * @param string|null $unitCodeListAgencyName
     * @return static
     */
    public function setUnitCodeListAgencyName(?string $unitCodeListAgencyName = null): static
    {
        $this->unitCodeListAgencyName = InvoiceSuiteStringUtils::asNullWhenEmpty($unitCodeListAgencyName);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUnitCodeListAgencyName(): static
    {
        $this->unitCodeListAgencyName = null;

        return $this;
    }
}
