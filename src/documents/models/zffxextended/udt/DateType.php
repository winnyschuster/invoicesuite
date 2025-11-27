<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxextended\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxextended\udt\DateType\DateStringAType;

class DateType
{
    use HandlesObjectFlags;

    /**
     * @var DateStringAType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxextended\udt\DateType\DateStringAType")
     * @JMS\Expose
     * @JMS\SerializedName("DateString")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100", cdata=false)
     * @JMS\Accessor(getter="getDateString", setter="setDateString")
     */
    private $dateString;

    /**
     * @return DateStringAType|null
     */
    public function getDateString(): ?DateStringAType
    {
        return $this->dateString;
    }

    /**
     * @return DateStringAType
     */
    public function getDateStringWithCreate(): DateStringAType
    {
        $this->dateString = is_null($this->dateString) ? new DateStringAType() : $this->dateString;

        return $this->dateString;
    }

    /**
     * @param DateStringAType|null $dateString
     * @return static
     */
    public function setDateString(?DateStringAType $dateString = null): static
    {
        $this->dateString = $dateString;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDateString(): static
    {
        $this->dateString = null;

        return $this;
    }
}
