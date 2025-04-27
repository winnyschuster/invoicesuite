<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;

class DueDateType
{
    /**
     * @var \DateTime
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @return \DateTime|null
     */
    public function getValue(): ?\DateTime
    {
        return $this->value;
    }

    /**
     * @param \DateTime $value
     * @return self
     */
    public function setValue(\DateTime $value): self
    {
        $this->value = $value;

        return $this;
    }
}
