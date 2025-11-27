<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cct;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

class IdentifierType
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
     * @JMS\SerializedName("schemeID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeID", setter="setSchemeID")
     */
    private $schemeID;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeName")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeName", setter="setSchemeName")
     */
    private $schemeName;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeAgencyID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeAgencyID", setter="setSchemeAgencyID")
     */
    private $schemeAgencyID;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeAgencyName")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeAgencyName", setter="setSchemeAgencyName")
     */
    private $schemeAgencyName;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeVersionID")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeVersionID", setter="setSchemeVersionID")
     */
    private $schemeVersionID;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeDataURI")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeDataURI", setter="setSchemeDataURI")
     */
    private $schemeDataURI;

    /**
     * @var string|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("string")
     * @JMS\Expose
     * @JMS\SerializedName("schemeURI")
     * @JMS\XmlAttribute
     * @JMS\Accessor(getter="getSchemeURI", setter="setSchemeURI")
     */
    private $schemeURI;

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
    public function getSchemeID(): ?string
    {
        return $this->schemeID;
    }

    /**
     * @param string|null $schemeID
     * @return static
     */
    public function setSchemeID(?string $schemeID = null): static
    {
        $this->schemeID = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeID(): static
    {
        $this->schemeID = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeName(): ?string
    {
        return $this->schemeName;
    }

    /**
     * @param string|null $schemeName
     * @return static
     */
    public function setSchemeName(?string $schemeName = null): static
    {
        $this->schemeName = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeName);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeName(): static
    {
        $this->schemeName = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeAgencyID(): ?string
    {
        return $this->schemeAgencyID;
    }

    /**
     * @param string|null $schemeAgencyID
     * @return static
     */
    public function setSchemeAgencyID(?string $schemeAgencyID = null): static
    {
        $this->schemeAgencyID = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeAgencyID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeAgencyID(): static
    {
        $this->schemeAgencyID = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeAgencyName(): ?string
    {
        return $this->schemeAgencyName;
    }

    /**
     * @param string|null $schemeAgencyName
     * @return static
     */
    public function setSchemeAgencyName(?string $schemeAgencyName = null): static
    {
        $this->schemeAgencyName = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeAgencyName);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeAgencyName(): static
    {
        $this->schemeAgencyName = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeVersionID(): ?string
    {
        return $this->schemeVersionID;
    }

    /**
     * @param string|null $schemeVersionID
     * @return static
     */
    public function setSchemeVersionID(?string $schemeVersionID = null): static
    {
        $this->schemeVersionID = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeVersionID);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeVersionID(): static
    {
        $this->schemeVersionID = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeDataURI(): ?string
    {
        return $this->schemeDataURI;
    }

    /**
     * @param string|null $schemeDataURI
     * @return static
     */
    public function setSchemeDataURI(?string $schemeDataURI = null): static
    {
        $this->schemeDataURI = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeDataURI);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeDataURI(): static
    {
        $this->schemeDataURI = null;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeURI(): ?string
    {
        return $this->schemeURI;
    }

    /**
     * @param string|null $schemeURI
     * @return static
     */
    public function setSchemeURI(?string $schemeURI = null): static
    {
        $this->schemeURI = InvoiceSuiteStringUtils::asNullWhenEmpty($schemeURI);

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSchemeURI(): static
    {
        $this->schemeURI = null;

        return $this;
    }
}
