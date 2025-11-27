<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasic\udt\DateTimeType;
use JMS\Serializer\Annotation as JMS;

class SpecifiedPeriodType
{
    use HandlesObjectFlags;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("StartDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getStartDateTime", setter="setStartDateTime")
     */
    private $startDateTime;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("EndDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getEndDateTime", setter="setEndDateTime")
     */
    private $endDateTime;

    /**
     * @return null|DateTimeType
     */
    public function getStartDateTime(): ?DateTimeType
    {
        return $this->startDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getStartDateTimeWithCreate(): DateTimeType
    {
        $this->startDateTime = is_null($this->startDateTime) ? new DateTimeType() : $this->startDateTime;

        return $this->startDateTime;
    }

    /**
     * @param  null|DateTimeType $startDateTime
     * @return static
     */
    public function setStartDateTime(?DateTimeType $startDateTime = null): static
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetStartDateTime(): static
    {
        $this->startDateTime = null;

        return $this;
    }

    /**
     * @return null|DateTimeType
     */
    public function getEndDateTime(): ?DateTimeType
    {
        return $this->endDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getEndDateTimeWithCreate(): DateTimeType
    {
        $this->endDateTime = is_null($this->endDateTime) ? new DateTimeType() : $this->endDateTime;

        return $this->endDateTime;
    }

    /**
     * @param  null|DateTimeType $endDateTime
     * @return static
     */
    public function setEndDateTime(?DateTimeType $endDateTime = null): static
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEndDateTime(): static
    {
        $this->endDateTime = null;

        return $this;
    }
}
