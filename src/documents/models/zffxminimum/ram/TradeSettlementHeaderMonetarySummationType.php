<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxminimum\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\AmountType;

class TradeSettlementHeaderMonetarySummationType
{
    use HandlesObjectFlags;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("TaxBasisTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTaxBasisTotalAmount", setter="setTaxBasisTotalAmount")
     */
    private $taxBasisTotalAmount;

    /**
     * @var array<AmountType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxminimum\udt\AmountType>")
     * @JMS\Expose
     * @JMS\SerializedName("TaxTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="TaxTotalAmount", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getTaxTotalAmount", setter="setTaxTotalAmount")
     */
    private $taxTotalAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("GrandTotalAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getGrandTotalAmount", setter="setGrandTotalAmount")
     */
    private $grandTotalAmount;

    /**
     * @var AmountType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\udt\AmountType")
     * @JMS\Expose
     * @JMS\SerializedName("DuePayableAmount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDuePayableAmount", setter="setDuePayableAmount")
     */
    private $duePayableAmount;

    /**
     * @return AmountType|null
     */
    public function getTaxBasisTotalAmount(): ?AmountType
    {
        return $this->taxBasisTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getTaxBasisTotalAmountWithCreate(): AmountType
    {
        $this->taxBasisTotalAmount = is_null($this->taxBasisTotalAmount) ? new AmountType() : $this->taxBasisTotalAmount;

        return $this->taxBasisTotalAmount;
    }

    /**
     * @param AmountType|null $taxBasisTotalAmount
     * @return static
     */
    public function setTaxBasisTotalAmount(?AmountType $taxBasisTotalAmount = null): static
    {
        $this->taxBasisTotalAmount = $taxBasisTotalAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxBasisTotalAmount(): static
    {
        $this->taxBasisTotalAmount = null;

        return $this;
    }

    /**
     * @return array<AmountType>|null
     */
    public function getTaxTotalAmount(): ?array
    {
        return $this->taxTotalAmount;
    }

    /**
     * @param array<AmountType>|null $taxTotalAmount
     * @return static
     */
    public function setTaxTotalAmount(?array $taxTotalAmount = null): static
    {
        $this->taxTotalAmount = $taxTotalAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTaxTotalAmount(): static
    {
        $this->taxTotalAmount = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTaxTotalAmount(): static
    {
        $this->taxTotalAmount = [];

        return $this;
    }

    /**
     * @param AmountType $taxTotalAmount
     * @return static
     */
    public function addToTaxTotalAmount(AmountType $taxTotalAmount): static
    {
        $this->taxTotalAmount[] = $taxTotalAmount;

        return $this;
    }

    /**
     * @return AmountType
     */
    public function addToTaxTotalAmountWithCreate(): AmountType
    {
        $this->addTotaxTotalAmount($taxTotalAmount = new AmountType());

        return $taxTotalAmount;
    }

    /**
     * @param AmountType $taxTotalAmount
     * @return static
     */
    public function addOnceToTaxTotalAmount(AmountType $taxTotalAmount): static
    {
        if (!is_array($this->taxTotalAmount)) {
            $this->taxTotalAmount = [];
        }

        $this->taxTotalAmount[0] = $taxTotalAmount;

        return $this;
    }

    /**
     * @return AmountType
     */
    public function addOnceToTaxTotalAmountWithCreate(): AmountType
    {
        if (!is_array($this->taxTotalAmount)) {
            $this->taxTotalAmount = [];
        }

        if ($this->taxTotalAmount === []) {
            $this->addOnceTotaxTotalAmount(new AmountType());
        }

        return $this->taxTotalAmount[0];
    }

    /**
     * @return AmountType|null
     */
    public function getGrandTotalAmount(): ?AmountType
    {
        return $this->grandTotalAmount;
    }

    /**
     * @return AmountType
     */
    public function getGrandTotalAmountWithCreate(): AmountType
    {
        $this->grandTotalAmount = is_null($this->grandTotalAmount) ? new AmountType() : $this->grandTotalAmount;

        return $this->grandTotalAmount;
    }

    /**
     * @param AmountType|null $grandTotalAmount
     * @return static
     */
    public function setGrandTotalAmount(?AmountType $grandTotalAmount = null): static
    {
        $this->grandTotalAmount = $grandTotalAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGrandTotalAmount(): static
    {
        $this->grandTotalAmount = null;

        return $this;
    }

    /**
     * @return AmountType|null
     */
    public function getDuePayableAmount(): ?AmountType
    {
        return $this->duePayableAmount;
    }

    /**
     * @return AmountType
     */
    public function getDuePayableAmountWithCreate(): AmountType
    {
        $this->duePayableAmount = is_null($this->duePayableAmount) ? new AmountType() : $this->duePayableAmount;

        return $this->duePayableAmount;
    }

    /**
     * @param AmountType|null $duePayableAmount
     * @return static
     */
    public function setDuePayableAmount(?AmountType $duePayableAmount = null): static
    {
        $this->duePayableAmount = $duePayableAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDuePayableAmount(): static
    {
        $this->duePayableAmount = null;

        return $this;
    }
}
