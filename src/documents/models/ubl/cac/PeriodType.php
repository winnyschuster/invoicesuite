<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DescriptionCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DurationMeasure;

class PeriodType
{
    use HandlesObjectFlags;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("StartDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getStartDate", setter="setStartDate")
     */
    private $startDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("StartTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getStartTime", setter="setStartTime")
     */
    private $startTime;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("EndDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEndDate", setter="setEndDate")
     */
    private $endDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("EndTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEndTime", setter="setEndTime")
     */
    private $endTime;

    /**
     * @var DurationMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DurationMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("DurationMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDurationMeasure", setter="setDurationMeasure")
     */
    private $durationMeasure;

    /**
     * @var array<DescriptionCode>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\DescriptionCode>")
     * @JMS\Expose
     * @JMS\SerializedName("DescriptionCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DescriptionCode", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescriptionCode", setter="setDescriptionCode")
     */
    private $descriptionCode;

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
     * @return DateTimeInterface|null
     */
    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface|null $startDate
     * @return static
     */
    public function setStartDate(?DateTimeInterface $startDate = null): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetStartDate(): static
    {
        $this->startDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getStartTime(): ?DateTimeInterface
    {
        return $this->startTime;
    }

    /**
     * @param DateTimeInterface|null $startTime
     * @return static
     */
    public function setStartTime(?DateTimeInterface $startTime = null): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetStartTime(): static
    {
        $this->startTime = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param DateTimeInterface|null $endDate
     * @return static
     */
    public function setEndDate(?DateTimeInterface $endDate = null): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEndDate(): static
    {
        $this->endDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEndTime(): ?DateTimeInterface
    {
        return $this->endTime;
    }

    /**
     * @param DateTimeInterface|null $endTime
     * @return static
     */
    public function setEndTime(?DateTimeInterface $endTime = null): static
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEndTime(): static
    {
        $this->endTime = null;

        return $this;
    }

    /**
     * @return DurationMeasure|null
     */
    public function getDurationMeasure(): ?DurationMeasure
    {
        return $this->durationMeasure;
    }

    /**
     * @return DurationMeasure
     */
    public function getDurationMeasureWithCreate(): DurationMeasure
    {
        $this->durationMeasure = is_null($this->durationMeasure) ? new DurationMeasure() : $this->durationMeasure;

        return $this->durationMeasure;
    }

    /**
     * @param DurationMeasure|null $durationMeasure
     * @return static
     */
    public function setDurationMeasure(?DurationMeasure $durationMeasure = null): static
    {
        $this->durationMeasure = $durationMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDurationMeasure(): static
    {
        $this->durationMeasure = null;

        return $this;
    }

    /**
     * @return array<DescriptionCode>|null
     */
    public function getDescriptionCode(): ?array
    {
        return $this->descriptionCode;
    }

    /**
     * @param array<DescriptionCode>|null $descriptionCode
     * @return static
     */
    public function setDescriptionCode(?array $descriptionCode = null): static
    {
        $this->descriptionCode = $descriptionCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDescriptionCode(): static
    {
        $this->descriptionCode = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDescriptionCode(): static
    {
        $this->descriptionCode = [];

        return $this;
    }

    /**
     * @return DescriptionCode|null
     */
    public function firstDescriptionCode(): ?DescriptionCode
    {
        $descriptionCode = $this->descriptionCode ?? [];
        $descriptionCode = reset($descriptionCode);

        if ($descriptionCode === false) {
            return null;
        }

        return $descriptionCode;
    }

    /**
     * @return DescriptionCode|null
     */
    public function lastDescriptionCode(): ?DescriptionCode
    {
        $descriptionCode = $this->descriptionCode ?? [];
        $descriptionCode = end($descriptionCode);

        if ($descriptionCode === false) {
            return null;
        }

        return $descriptionCode;
    }

    /**
     * @param DescriptionCode $descriptionCode
     * @return static
     */
    public function addToDescriptionCode(DescriptionCode $descriptionCode): static
    {
        $this->descriptionCode[] = $descriptionCode;

        return $this;
    }

    /**
     * @return DescriptionCode
     */
    public function addToDescriptionCodeWithCreate(): DescriptionCode
    {
        $this->addTodescriptionCode($descriptionCode = new DescriptionCode());

        return $descriptionCode;
    }

    /**
     * @param DescriptionCode $descriptionCode
     * @return static
     */
    public function addOnceToDescriptionCode(DescriptionCode $descriptionCode): static
    {
        if (!is_array($this->descriptionCode)) {
            $this->descriptionCode = [];
        }

        $this->descriptionCode[0] = $descriptionCode;

        return $this;
    }

    /**
     * @return DescriptionCode
     */
    public function addOnceToDescriptionCodeWithCreate(): DescriptionCode
    {
        if (!is_array($this->descriptionCode)) {
            $this->descriptionCode = [];
        }

        if ($this->descriptionCode === []) {
            $this->addOnceTodescriptionCode(new DescriptionCode());
        }

        return $this->descriptionCode[0];
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
}
