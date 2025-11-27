<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;
use horstoeko\invoicesuite\documents\models\ubl\cct\BinaryObjectType;

class GraphicType extends BinaryObjectType
{
    use HandlesObjectFlags;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("mimeCode")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getMimeCode", setter="setMimeCode")
     */
    private $mimeCode;

    /**
     * @return string|null
     */
    public function getMimeCode(): ?string
    {
        return $this->mimeCode;
    }

    /**
     * @param string|null $mimeCode
     * @return static
     */
    public function setMimeCode(?string $mimeCode = null): static
    {
        $this->mimeCode = InvoiceSuiteStringUtils::asNullWhenEmpty($mimeCode);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMimeCode(): static
    {
        $this->mimeCode = null;

        return $this;
    }
}
