<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EnvironmentalEmissionTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ValueMeasure;

class EnvironmentalEmissionType
{
    use HandlesObjectFlags;

    /**
     * @var EnvironmentalEmissionTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EnvironmentalEmissionTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("EnvironmentalEmissionTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEnvironmentalEmissionTypeCode", setter="setEnvironmentalEmissionTypeCode")
     */
    private $environmentalEmissionTypeCode;

    /**
     * @var ValueMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ValueMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("ValueMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getValueMeasure", setter="setValueMeasure")
     */
    private $valueMeasure;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var array<EmissionCalculationMethod>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\EmissionCalculationMethod>")
     * @JMS\Expose
     * @JMS\SerializedName("EmissionCalculationMethod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="EmissionCalculationMethod", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getEmissionCalculationMethod", setter="setEmissionCalculationMethod")
     */
    private $emissionCalculationMethod;

    /**
     * @return EnvironmentalEmissionTypeCode|null
     */
    public function getEnvironmentalEmissionTypeCode(): ?EnvironmentalEmissionTypeCode
    {
        return $this->environmentalEmissionTypeCode;
    }

    /**
     * @return EnvironmentalEmissionTypeCode
     */
    public function getEnvironmentalEmissionTypeCodeWithCreate(): EnvironmentalEmissionTypeCode
    {
        $this->environmentalEmissionTypeCode = is_null($this->environmentalEmissionTypeCode) ? new EnvironmentalEmissionTypeCode() : $this->environmentalEmissionTypeCode;

        return $this->environmentalEmissionTypeCode;
    }

    /**
     * @param EnvironmentalEmissionTypeCode|null $environmentalEmissionTypeCode
     * @return static
     */
    public function setEnvironmentalEmissionTypeCode(
        ?EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode = null,
    ): static {
        $this->environmentalEmissionTypeCode = $environmentalEmissionTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEnvironmentalEmissionTypeCode(): static
    {
        $this->environmentalEmissionTypeCode = null;

        return $this;
    }

    /**
     * @return ValueMeasure|null
     */
    public function getValueMeasure(): ?ValueMeasure
    {
        return $this->valueMeasure;
    }

    /**
     * @return ValueMeasure
     */
    public function getValueMeasureWithCreate(): ValueMeasure
    {
        $this->valueMeasure = is_null($this->valueMeasure) ? new ValueMeasure() : $this->valueMeasure;

        return $this->valueMeasure;
    }

    /**
     * @param ValueMeasure|null $valueMeasure
     * @return static
     */
    public function setValueMeasure(?ValueMeasure $valueMeasure = null): static
    {
        $this->valueMeasure = $valueMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValueMeasure(): static
    {
        $this->valueMeasure = null;

        return $this;
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return static
     */
    public function setDescription(?array $description = null): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDescription(): static
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDescription(): static
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addToDescription(Description $description): static
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addOnceToDescription(Description $description): static
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return array<EmissionCalculationMethod>|null
     */
    public function getEmissionCalculationMethod(): ?array
    {
        return $this->emissionCalculationMethod;
    }

    /**
     * @param array<EmissionCalculationMethod>|null $emissionCalculationMethod
     * @return static
     */
    public function setEmissionCalculationMethod(?array $emissionCalculationMethod = null): static
    {
        $this->emissionCalculationMethod = $emissionCalculationMethod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEmissionCalculationMethod(): static
    {
        $this->emissionCalculationMethod = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearEmissionCalculationMethod(): static
    {
        $this->emissionCalculationMethod = [];

        return $this;
    }

    /**
     * @return EmissionCalculationMethod|null
     */
    public function firstEmissionCalculationMethod(): ?EmissionCalculationMethod
    {
        $emissionCalculationMethod = $this->emissionCalculationMethod ?? [];
        $emissionCalculationMethod = reset($emissionCalculationMethod);

        if ($emissionCalculationMethod === false) {
            return null;
        }

        return $emissionCalculationMethod;
    }

    /**
     * @return EmissionCalculationMethod|null
     */
    public function lastEmissionCalculationMethod(): ?EmissionCalculationMethod
    {
        $emissionCalculationMethod = $this->emissionCalculationMethod ?? [];
        $emissionCalculationMethod = end($emissionCalculationMethod);

        if ($emissionCalculationMethod === false) {
            return null;
        }

        return $emissionCalculationMethod;
    }

    /**
     * @param EmissionCalculationMethod $emissionCalculationMethod
     * @return static
     */
    public function addToEmissionCalculationMethod(EmissionCalculationMethod $emissionCalculationMethod): static
    {
        $this->emissionCalculationMethod[] = $emissionCalculationMethod;

        return $this;
    }

    /**
     * @return EmissionCalculationMethod
     */
    public function addToEmissionCalculationMethodWithCreate(): EmissionCalculationMethod
    {
        $this->addToemissionCalculationMethod($emissionCalculationMethod = new EmissionCalculationMethod());

        return $emissionCalculationMethod;
    }

    /**
     * @param EmissionCalculationMethod $emissionCalculationMethod
     * @return static
     */
    public function addOnceToEmissionCalculationMethod(EmissionCalculationMethod $emissionCalculationMethod): static
    {
        if (!is_array($this->emissionCalculationMethod)) {
            $this->emissionCalculationMethod = [];
        }

        $this->emissionCalculationMethod[0] = $emissionCalculationMethod;

        return $this;
    }

    /**
     * @return EmissionCalculationMethod
     */
    public function addOnceToEmissionCalculationMethodWithCreate(): EmissionCalculationMethod
    {
        if (!is_array($this->emissionCalculationMethod)) {
            $this->emissionCalculationMethod = [];
        }

        if ($this->emissionCalculationMethod === []) {
            $this->addOnceToemissionCalculationMethod(new EmissionCalculationMethod());
        }

        return $this->emissionCalculationMethod[0];
    }
}
