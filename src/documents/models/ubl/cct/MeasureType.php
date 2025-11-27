<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

class MeasureType
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
     * @JMS\SerializedName("unitCodeListVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getUnitCodeListVersionID", setter="setUnitCodeListVersionID")
     */
    private $unitCodeListVersionID;

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
    public function getUnitCodeListVersionID(): ?string
    {
        return $this->unitCodeListVersionID;
    }

    /**
     * @param string|null $unitCodeListVersionID
     * @return static
     */
    public function setUnitCodeListVersionID(?string $unitCodeListVersionID = null): static
    {
        $this->unitCodeListVersionID = InvoiceSuiteStringUtils::asNullWhenEmpty($unitCodeListVersionID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUnitCodeListVersionID(): static
    {
        $this->unitCodeListVersionID = null;

        return $this;
    }
}
