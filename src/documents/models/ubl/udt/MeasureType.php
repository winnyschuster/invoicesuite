<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use horstoeko\invoicesuite\documents\models\ubl\cct\MeasureType as MeasureTypeBase;

class MeasureType extends MeasureTypeBase
{
    use HandlesObjectFlags;

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
}
