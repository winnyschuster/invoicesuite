<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

class TextType
{
    use HandlesObjectFlags;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlValue(cdata=false)
     * @JMS\Accessor(getter="getValue", setter="setValue")
     */
    private $value;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("languageID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getLanguageID", setter="setLanguageID")
     */
    private $languageID;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("languageLocaleID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getLanguageLocaleID", setter="setLanguageLocaleID")
     */
    private $languageLocaleID;

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
    public function getLanguageID(): ?string
    {
        return $this->languageID;
    }

    /**
     * @param string|null $languageID
     * @return static
     */
    public function setLanguageID(?string $languageID = null): static
    {
        $this->languageID = InvoiceSuiteStringUtils::asNullWhenEmpty($languageID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLanguageID(): static
    {
        $this->languageID = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageLocaleID(): ?string
    {
        return $this->languageLocaleID;
    }

    /**
     * @param string|null $languageLocaleID
     * @return static
     */
    public function setLanguageLocaleID(?string $languageLocaleID = null): static
    {
        $this->languageLocaleID = InvoiceSuiteStringUtils::asNullWhenEmpty($languageLocaleID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLanguageLocaleID(): static
    {
        $this->languageLocaleID = null;

        return $this;
    }
}
