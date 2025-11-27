<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForecastTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PerformanceMetricTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SupplyChainActivityTypeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TimeFrequencyCode;

class ItemInformationRequestLineType
{
    use HandlesObjectFlags;

    /**
     * @var TimeFrequencyCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TimeFrequencyCode")
     * @JMS\Expose
     * @JMS\SerializedName("TimeFrequencyCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTimeFrequencyCode", setter="setTimeFrequencyCode")
     */
    private $timeFrequencyCode;

    /**
     * @var SupplyChainActivityTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SupplyChainActivityTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyChainActivityTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSupplyChainActivityTypeCode", setter="setSupplyChainActivityTypeCode")
     */
    private $supplyChainActivityTypeCode;

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
     * @var PerformanceMetricTypeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PerformanceMetricTypeCode")
     * @JMS\Expose
     * @JMS\SerializedName("PerformanceMetricTypeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPerformanceMetricTypeCode", setter="setPerformanceMetricTypeCode")
     */
    private $performanceMetricTypeCode;

    /**
     * @var array<Period>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Period>")
     * @JMS\Expose
     * @JMS\SerializedName("Period")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Period", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPeriod", setter="setPeriod")
     */
    private $period;

    /**
     * @var array<SalesItem>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SalesItem>")
     * @JMS\Expose
     * @JMS\SerializedName("SalesItem")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SalesItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSalesItem", setter="setSalesItem")
     */
    private $salesItem;

    /**
     * @return TimeFrequencyCode|null
     */
    public function getTimeFrequencyCode(): ?TimeFrequencyCode
    {
        return $this->timeFrequencyCode;
    }

    /**
     * @return TimeFrequencyCode
     */
    public function getTimeFrequencyCodeWithCreate(): TimeFrequencyCode
    {
        $this->timeFrequencyCode = is_null($this->timeFrequencyCode) ? new TimeFrequencyCode() : $this->timeFrequencyCode;

        return $this->timeFrequencyCode;
    }

    /**
     * @param TimeFrequencyCode|null $timeFrequencyCode
     * @return static
     */
    public function setTimeFrequencyCode(?TimeFrequencyCode $timeFrequencyCode = null): static
    {
        $this->timeFrequencyCode = $timeFrequencyCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTimeFrequencyCode(): static
    {
        $this->timeFrequencyCode = null;

        return $this;
    }

    /**
     * @return SupplyChainActivityTypeCode|null
     */
    public function getSupplyChainActivityTypeCode(): ?SupplyChainActivityTypeCode
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @return SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCodeWithCreate(): SupplyChainActivityTypeCode
    {
        $this->supplyChainActivityTypeCode = is_null($this->supplyChainActivityTypeCode) ? new SupplyChainActivityTypeCode() : $this->supplyChainActivityTypeCode;

        return $this->supplyChainActivityTypeCode;
    }

    /**
     * @param SupplyChainActivityTypeCode|null $supplyChainActivityTypeCode
     * @return static
     */
    public function setSupplyChainActivityTypeCode(
        ?SupplyChainActivityTypeCode $supplyChainActivityTypeCode = null,
    ): static {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSupplyChainActivityTypeCode(): static
    {
        $this->supplyChainActivityTypeCode = null;

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
     * @return PerformanceMetricTypeCode|null
     */
    public function getPerformanceMetricTypeCode(): ?PerformanceMetricTypeCode
    {
        return $this->performanceMetricTypeCode;
    }

    /**
     * @return PerformanceMetricTypeCode
     */
    public function getPerformanceMetricTypeCodeWithCreate(): PerformanceMetricTypeCode
    {
        $this->performanceMetricTypeCode = is_null($this->performanceMetricTypeCode) ? new PerformanceMetricTypeCode() : $this->performanceMetricTypeCode;

        return $this->performanceMetricTypeCode;
    }

    /**
     * @param PerformanceMetricTypeCode|null $performanceMetricTypeCode
     * @return static
     */
    public function setPerformanceMetricTypeCode(?PerformanceMetricTypeCode $performanceMetricTypeCode = null): static
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPerformanceMetricTypeCode(): static
    {
        $this->performanceMetricTypeCode = null;

        return $this;
    }

    /**
     * @return array<Period>|null
     */
    public function getPeriod(): ?array
    {
        return $this->period;
    }

    /**
     * @param array<Period>|null $period
     * @return static
     */
    public function setPeriod(?array $period = null): static
    {
        $this->period = $period;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPeriod(): static
    {
        $this->period = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPeriod(): static
    {
        $this->period = [];

        return $this;
    }

    /**
     * @return Period|null
     */
    public function firstPeriod(): ?Period
    {
        $period = $this->period ?? [];
        $period = reset($period);

        if ($period === false) {
            return null;
        }

        return $period;
    }

    /**
     * @return Period|null
     */
    public function lastPeriod(): ?Period
    {
        $period = $this->period ?? [];
        $period = end($period);

        if ($period === false) {
            return null;
        }

        return $period;
    }

    /**
     * @param Period $period
     * @return static
     */
    public function addToPeriod(Period $period): static
    {
        $this->period[] = $period;

        return $this;
    }

    /**
     * @return Period
     */
    public function addToPeriodWithCreate(): Period
    {
        $this->addToperiod($period = new Period());

        return $period;
    }

    /**
     * @param Period $period
     * @return static
     */
    public function addOnceToPeriod(Period $period): static
    {
        if (!is_array($this->period)) {
            $this->period = [];
        }

        $this->period[0] = $period;

        return $this;
    }

    /**
     * @return Period
     */
    public function addOnceToPeriodWithCreate(): Period
    {
        if (!is_array($this->period)) {
            $this->period = [];
        }

        if ($this->period === []) {
            $this->addOnceToperiod(new Period());
        }

        return $this->period[0];
    }

    /**
     * @return array<SalesItem>|null
     */
    public function getSalesItem(): ?array
    {
        return $this->salesItem;
    }

    /**
     * @param array<SalesItem>|null $salesItem
     * @return static
     */
    public function setSalesItem(?array $salesItem = null): static
    {
        $this->salesItem = $salesItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSalesItem(): static
    {
        $this->salesItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSalesItem(): static
    {
        $this->salesItem = [];

        return $this;
    }

    /**
     * @return SalesItem|null
     */
    public function firstSalesItem(): ?SalesItem
    {
        $salesItem = $this->salesItem ?? [];
        $salesItem = reset($salesItem);

        if ($salesItem === false) {
            return null;
        }

        return $salesItem;
    }

    /**
     * @return SalesItem|null
     */
    public function lastSalesItem(): ?SalesItem
    {
        $salesItem = $this->salesItem ?? [];
        $salesItem = end($salesItem);

        if ($salesItem === false) {
            return null;
        }

        return $salesItem;
    }

    /**
     * @param SalesItem $salesItem
     * @return static
     */
    public function addToSalesItem(SalesItem $salesItem): static
    {
        $this->salesItem[] = $salesItem;

        return $this;
    }

    /**
     * @return SalesItem
     */
    public function addToSalesItemWithCreate(): SalesItem
    {
        $this->addTosalesItem($salesItem = new SalesItem());

        return $salesItem;
    }

    /**
     * @param SalesItem $salesItem
     * @return static
     */
    public function addOnceToSalesItem(SalesItem $salesItem): static
    {
        if (!is_array($this->salesItem)) {
            $this->salesItem = [];
        }

        $this->salesItem[0] = $salesItem;

        return $this;
    }

    /**
     * @return SalesItem
     */
    public function addOnceToSalesItemWithCreate(): SalesItem
    {
        if (!is_array($this->salesItem)) {
            $this->salesItem = [];
        }

        if ($this->salesItem === []) {
            $this->addOnceTosalesItem(new SalesItem());
        }

        return $this->salesItem[0];
    }
}
