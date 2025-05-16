<?php

namespace horstoeko\invoicesuite\models\zffx\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\zffx\udt\DateType\DateStringAType;

class DateType
{
    use HandlesObjectFlags;
    use HandlesOptional;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\udt\DateType\DateStringAType
     * @JMS\Groups({"zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\udt\DateType\DateStringAType")
     * @JMS\Expose
     * @JMS\SerializedName("DateString")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100", cdata=false)
     * @JMS\Accessor(getter="getDateString", setter="setDateString")
     */
    private $dateString;

    /**
     * @return \horstoeko\invoicesuite\models\zffx\udt\DateType\DateStringAType|null
     */
    public function getDateString(): ?DateStringAType
    {
        return $this->dateString;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\udt\DateType\DateStringAType
     */
    public function getDateStringWithCreate(): DateStringAType
    {
        $this->dateString = is_null($this->dateString) ? new DateStringAType() : $this->dateString;

        return $this->dateString;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\udt\DateType\DateStringAType $dateString
     * @return self
     */
    public function setDateString(DateStringAType $dateString): self
    {
        $this->dateString = $dateString;

        return $this;
    }
}
