<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ComparisonDataCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DataSourceCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastPurposeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode;

class ForecastExceptionType
{
    use HandlesObjectFlags;

    /**
     * @var ForecastPurposeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastPurposeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastPurposeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastPurposeCode", setter="setForecastPurposeCode")
     */
    private $forecastPurposeCode;

    /**
     * @var ForecastTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("ForecastTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getForecastTypeCode", setter="setForecastTypeCode")
     */
    private $forecastTypeCode;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueDate", setter="setIssueDate")
     */
    private $issueDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("IssueTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssueTime", setter="setIssueTime")
     */
    private $issueTime;

    /**
     * @var DataSourceCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DataSourceCode")
     * @JMS\Expose
     * @JMS\SerializedName("DataSourceCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDataSourceCode", setter="setDataSourceCode")
     */
    private $dataSourceCode;

    /**
     * @var ComparisonDataCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ComparisonDataCode")
     * @JMS\Expose
     * @JMS\SerializedName("ComparisonDataCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getComparisonDataCode", setter="setComparisonDataCode")
     */
    private $comparisonDataCode;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("ComparisonForecastIssueTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getComparisonForecastIssueTime", setter="setComparisonForecastIssueTime")
     */
    private $comparisonForecastIssueTime;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("ComparisonForecastIssueDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getComparisonForecastIssueDate", setter="setComparisonForecastIssueDate")
     */
    private $comparisonForecastIssueDate;

    /**
     * @return ForecastPurposeCode|null
     */
    public function getForecastPurposeCode(): ?ForecastPurposeCode
    {
        return $this->forecastPurposeCode;
    }

    /**
     * @return ForecastPurposeCode
     */
    public function getForecastPurposeCodeWithCreate(): ForecastPurposeCode
    {
        $this->forecastPurposeCode = is_null($this->forecastPurposeCode) ? new ForecastPurposeCode() : $this->forecastPurposeCode;

        return $this->forecastPurposeCode;
    }

    /**
     * @param ForecastPurposeCode|null $forecastPurposeCode
     * @return static
     */
    public function setForecastPurposeCode(?ForecastPurposeCode $forecastPurposeCode = null): static
    {
        $this->forecastPurposeCode = $forecastPurposeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetForecastPurposeCode(): static
    {
        $this->forecastPurposeCode = null;

        return $this;
    }

    /**
     * @return ForecastTypeCode|null
     */
    public function getForecastTypeCode(): ?ForecastTypeCode
    {
        return $this->forecastTypeCode;
    }

    /**
     * @return ForecastTypeCode
     */
    public function getForecastTypeCodeWithCreate(): ForecastTypeCode
    {
        $this->forecastTypeCode = is_null($this->forecastTypeCode) ? new ForecastTypeCode() : $this->forecastTypeCode;

        return $this->forecastTypeCode;
    }

    /**
     * @param ForecastTypeCode|null $forecastTypeCode
     * @return static
     */
    public function setForecastTypeCode(?ForecastTypeCode $forecastTypeCode = null): static
    {
        $this->forecastTypeCode = $forecastTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetForecastTypeCode(): static
    {
        $this->forecastTypeCode = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getIssueDate(): ?DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @param DateTimeInterface|null $issueDate
     * @return static
     */
    public function setIssueDate(?DateTimeInterface $issueDate = null): static
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIssueDate(): static
    {
        $this->issueDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getIssueTime(): ?DateTimeInterface
    {
        return $this->issueTime;
    }

    /**
     * @param DateTimeInterface|null $issueTime
     * @return static
     */
    public function setIssueTime(?DateTimeInterface $issueTime = null): static
    {
        $this->issueTime = $issueTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIssueTime(): static
    {
        $this->issueTime = null;

        return $this;
    }

    /**
     * @return DataSourceCode|null
     */
    public function getDataSourceCode(): ?DataSourceCode
    {
        return $this->dataSourceCode;
    }

    /**
     * @return DataSourceCode
     */
    public function getDataSourceCodeWithCreate(): DataSourceCode
    {
        $this->dataSourceCode = is_null($this->dataSourceCode) ? new DataSourceCode() : $this->dataSourceCode;

        return $this->dataSourceCode;
    }

    /**
     * @param DataSourceCode|null $dataSourceCode
     * @return static
     */
    public function setDataSourceCode(?DataSourceCode $dataSourceCode = null): static
    {
        $this->dataSourceCode = $dataSourceCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDataSourceCode(): static
    {
        $this->dataSourceCode = null;

        return $this;
    }

    /**
     * @return ComparisonDataCode|null
     */
    public function getComparisonDataCode(): ?ComparisonDataCode
    {
        return $this->comparisonDataCode;
    }

    /**
     * @return ComparisonDataCode
     */
    public function getComparisonDataCodeWithCreate(): ComparisonDataCode
    {
        $this->comparisonDataCode = is_null($this->comparisonDataCode) ? new ComparisonDataCode() : $this->comparisonDataCode;

        return $this->comparisonDataCode;
    }

    /**
     * @param ComparisonDataCode|null $comparisonDataCode
     * @return static
     */
    public function setComparisonDataCode(?ComparisonDataCode $comparisonDataCode = null): static
    {
        $this->comparisonDataCode = $comparisonDataCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetComparisonDataCode(): static
    {
        $this->comparisonDataCode = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getComparisonForecastIssueTime(): ?DateTimeInterface
    {
        return $this->comparisonForecastIssueTime;
    }

    /**
     * @param DateTimeInterface|null $comparisonForecastIssueTime
     * @return static
     */
    public function setComparisonForecastIssueTime(?DateTimeInterface $comparisonForecastIssueTime = null): static
    {
        $this->comparisonForecastIssueTime = $comparisonForecastIssueTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetComparisonForecastIssueTime(): static
    {
        $this->comparisonForecastIssueTime = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getComparisonForecastIssueDate(): ?DateTimeInterface
    {
        return $this->comparisonForecastIssueDate;
    }

    /**
     * @param DateTimeInterface|null $comparisonForecastIssueDate
     * @return static
     */
    public function setComparisonForecastIssueDate(?DateTimeInterface $comparisonForecastIssueDate = null): static
    {
        $this->comparisonForecastIssueDate = $comparisonForecastIssueDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetComparisonForecastIssueDate(): static
    {
        $this->comparisonForecastIssueDate = null;

        return $this;
    }
}
