<?php

namespace horstoeko\invoicesuite\models\ubl\udt;

use GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime;
use JMS\Serializer\Annotation as JMS;

class DateTimeType
{
    /**
     * @var \GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @return \GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime|null
     */
    public function getValue(): ?DateTime
    {
        return $this->value;
    }

    /**
     * @return \GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime
     */
    public function getValueWithCreate(): DateTime
    {
        $this->value = is_null($this->value) ? new DateTime() : $this->value;

        return $this->value;
    }

    /**
     * @param \GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime $value
     * @return self
     */
    public function setValue(DateTime $value): self
    {
        $this->value = $value;

        return $this;
    }
}
