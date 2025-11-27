<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class IndicatorType
{
    use HandlesObjectFlags;

    /**
     * @var bool|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("Indicator")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100", cdata=false)
     * @JMS\Accessor(getter="getIndicator", setter="setIndicator")
     */
    private $indicator;

    /**
     * @return bool|null
     */
    public function getIndicator(): ?bool
    {
        return $this->indicator;
    }

    /**
     * @param bool|null $indicator
     * @return static
     */
    public function setIndicator(?bool $indicator = null): static
    {
        $this->indicator = $indicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIndicator(): static
    {
        $this->indicator = null;

        return $this;
    }
}
