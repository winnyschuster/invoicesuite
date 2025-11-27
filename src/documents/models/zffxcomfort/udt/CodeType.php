<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

class CodeType
{
    use HandlesObjectFlags;

    /**
     * @var string|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @var string|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListID", setter="setListID")
     */
    private $listID;

    /**
     * @var string|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("listVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getListVersionID", setter="setListVersionID")
     */
    private $listVersionID;

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     * @return static
     */
    public function setValue(?string $value = null): static
    {
        $this->value = InvoiceSuiteStringUtils::asNullWhenEmpty($value);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetValue(): static
    {
        $this->value = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListID(): ?string
    {
        return $this->listID;
    }

    /**
     * @param string|null $listID
     * @return static
     */
    public function setListID(?string $listID = null): static
    {
        $this->listID = InvoiceSuiteStringUtils::asNullWhenEmpty($listID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetListID(): static
    {
        $this->listID = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getListVersionID(): ?string
    {
        return $this->listVersionID;
    }

    /**
     * @param string|null $listVersionID
     * @return static
     */
    public function setListVersionID(?string $listVersionID = null): static
    {
        $this->listVersionID = InvoiceSuiteStringUtils::asNullWhenEmpty($listVersionID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetListVersionID(): static
    {
        $this->listVersionID = null;

        return $this;
    }
}
