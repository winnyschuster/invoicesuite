<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasic\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class SupplyChainTradeTransactionType
{
    use HandlesObjectFlags;

    /**
     * @var array<SupplyChainTradeLineItemType>|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\zffxbasic\ram\SupplyChainTradeLineItemType>")
     * @JMS\Expose
     * @JMS\SerializedName("IncludedSupplyChainTradeLineItem")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\XmlList(inline=true, entry="IncludedSupplyChainTradeLineItem", namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\Accessor(getter="getIncludedSupplyChainTradeLineItem", setter="setIncludedSupplyChainTradeLineItem")
     */
    private $includedSupplyChainTradeLineItem;

    /**
     * @var HeaderTradeAgreementType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\HeaderTradeAgreementType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableHeaderTradeAgreement")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableHeaderTradeAgreement", setter="setApplicableHeaderTradeAgreement")
     */
    private $applicableHeaderTradeAgreement;

    /**
     * @var HeaderTradeDeliveryType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\HeaderTradeDeliveryType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableHeaderTradeDelivery")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableHeaderTradeDelivery", setter="setApplicableHeaderTradeDelivery")
     */
    private $applicableHeaderTradeDelivery;

    /**
     * @var HeaderTradeSettlementType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasic\ram\HeaderTradeSettlementType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableHeaderTradeSettlement")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableHeaderTradeSettlement", setter="setApplicableHeaderTradeSettlement")
     */
    private $applicableHeaderTradeSettlement;

    /**
     * @return array<SupplyChainTradeLineItemType>|null
     */
    public function getIncludedSupplyChainTradeLineItem(): ?array
    {
        return $this->includedSupplyChainTradeLineItem;
    }

    /**
     * @param array<SupplyChainTradeLineItemType>|null $includedSupplyChainTradeLineItem
     * @return static
     */
    public function setIncludedSupplyChainTradeLineItem(?array $includedSupplyChainTradeLineItem = null): static
    {
        $this->includedSupplyChainTradeLineItem = $includedSupplyChainTradeLineItem;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIncludedSupplyChainTradeLineItem(): static
    {
        $this->includedSupplyChainTradeLineItem = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearIncludedSupplyChainTradeLineItem(): static
    {
        $this->includedSupplyChainTradeLineItem = [];

        return $this;
    }

    /**
     * @param SupplyChainTradeLineItemType $includedSupplyChainTradeLineItem
     * @return static
     */
    public function addToIncludedSupplyChainTradeLineItem(
        SupplyChainTradeLineItemType $includedSupplyChainTradeLineItem,
    ): static {
        $this->includedSupplyChainTradeLineItem[] = $includedSupplyChainTradeLineItem;

        return $this;
    }

    /**
     * @return SupplyChainTradeLineItemType
     */
    public function addToIncludedSupplyChainTradeLineItemWithCreate(): SupplyChainTradeLineItemType
    {
        $this->addToincludedSupplyChainTradeLineItem($includedSupplyChainTradeLineItem = new SupplyChainTradeLineItemType());

        return $includedSupplyChainTradeLineItem;
    }

    /**
     * @param SupplyChainTradeLineItemType $includedSupplyChainTradeLineItem
     * @return static
     */
    public function addOnceToIncludedSupplyChainTradeLineItem(
        SupplyChainTradeLineItemType $includedSupplyChainTradeLineItem,
    ): static {
        if (!is_array($this->includedSupplyChainTradeLineItem)) {
            $this->includedSupplyChainTradeLineItem = [];
        }

        $this->includedSupplyChainTradeLineItem[0] = $includedSupplyChainTradeLineItem;

        return $this;
    }

    /**
     * @return SupplyChainTradeLineItemType
     */
    public function addOnceToIncludedSupplyChainTradeLineItemWithCreate(): SupplyChainTradeLineItemType
    {
        if (!is_array($this->includedSupplyChainTradeLineItem)) {
            $this->includedSupplyChainTradeLineItem = [];
        }

        if ($this->includedSupplyChainTradeLineItem === []) {
            $this->addOnceToincludedSupplyChainTradeLineItem(new SupplyChainTradeLineItemType());
        }

        return $this->includedSupplyChainTradeLineItem[0];
    }

    /**
     * @return HeaderTradeAgreementType|null
     */
    public function getApplicableHeaderTradeAgreement(): ?HeaderTradeAgreementType
    {
        return $this->applicableHeaderTradeAgreement;
    }

    /**
     * @return HeaderTradeAgreementType
     */
    public function getApplicableHeaderTradeAgreementWithCreate(): HeaderTradeAgreementType
    {
        $this->applicableHeaderTradeAgreement = is_null($this->applicableHeaderTradeAgreement) ? new HeaderTradeAgreementType() : $this->applicableHeaderTradeAgreement;

        return $this->applicableHeaderTradeAgreement;
    }

    /**
     * @param HeaderTradeAgreementType|null $applicableHeaderTradeAgreement
     * @return static
     */
    public function setApplicableHeaderTradeAgreement(
        ?HeaderTradeAgreementType $applicableHeaderTradeAgreement = null,
    ): static {
        $this->applicableHeaderTradeAgreement = $applicableHeaderTradeAgreement;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableHeaderTradeAgreement(): static
    {
        $this->applicableHeaderTradeAgreement = null;

        return $this;
    }

    /**
     * @return HeaderTradeDeliveryType|null
     */
    public function getApplicableHeaderTradeDelivery(): ?HeaderTradeDeliveryType
    {
        return $this->applicableHeaderTradeDelivery;
    }

    /**
     * @return HeaderTradeDeliveryType
     */
    public function getApplicableHeaderTradeDeliveryWithCreate(): HeaderTradeDeliveryType
    {
        $this->applicableHeaderTradeDelivery = is_null($this->applicableHeaderTradeDelivery) ? new HeaderTradeDeliveryType() : $this->applicableHeaderTradeDelivery;

        return $this->applicableHeaderTradeDelivery;
    }

    /**
     * @param HeaderTradeDeliveryType|null $applicableHeaderTradeDelivery
     * @return static
     */
    public function setApplicableHeaderTradeDelivery(
        ?HeaderTradeDeliveryType $applicableHeaderTradeDelivery = null,
    ): static {
        $this->applicableHeaderTradeDelivery = $applicableHeaderTradeDelivery;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableHeaderTradeDelivery(): static
    {
        $this->applicableHeaderTradeDelivery = null;

        return $this;
    }

    /**
     * @return HeaderTradeSettlementType|null
     */
    public function getApplicableHeaderTradeSettlement(): ?HeaderTradeSettlementType
    {
        return $this->applicableHeaderTradeSettlement;
    }

    /**
     * @return HeaderTradeSettlementType
     */
    public function getApplicableHeaderTradeSettlementWithCreate(): HeaderTradeSettlementType
    {
        $this->applicableHeaderTradeSettlement = is_null($this->applicableHeaderTradeSettlement) ? new HeaderTradeSettlementType() : $this->applicableHeaderTradeSettlement;

        return $this->applicableHeaderTradeSettlement;
    }

    /**
     * @param HeaderTradeSettlementType|null $applicableHeaderTradeSettlement
     * @return static
     */
    public function setApplicableHeaderTradeSettlement(
        ?HeaderTradeSettlementType $applicableHeaderTradeSettlement = null,
    ): static {
        $this->applicableHeaderTradeSettlement = $applicableHeaderTradeSettlement;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableHeaderTradeSettlement(): static
    {
        $this->applicableHeaderTradeSettlement = null;

        return $this;
    }

    /**
     * @return SupplyChainTradeLineItemType|null
     */
    public function getLatestIncludedSupplyChainTradeLineItem(): ?SupplyChainTradeLineItemType
    {
        $supplyChainTradeLineItems = $this->getIncludedSupplyChainTradeLineItem() ?? [];
        $supplyChainTradeLineItem = end($supplyChainTradeLineItems);

        if ($supplyChainTradeLineItem === false) {
            return null;
        }

        return $supplyChainTradeLineItem;
    }

    /**
     * @return SupplyChainTradeLineItemType
     */
    public function getLatestIncludedSupplyChainTradeLineItemWithCreate(): SupplyChainTradeLineItemType
    {
        if (is_null($supplyChainTradeLineItem = $this->getLatestIncludedSupplyChainTradeLineItem())) {
            $supplyChainTradeLineItem = $this->addToIncludedSupplyChainTradeLineItemWithCreate();
        }

        return $supplyChainTradeLineItem;
    }

    /**
     * @return boolean
     */
    public function hasLatestIncludedSupplyChainTradeLineItem(): bool
    {
        $supplyChainTradeLineItems = $this->getIncludedSupplyChainTradeLineItem() ?? [];

        return $supplyChainTradeLineItems !== [];
    }

    /**
     * @return boolean
     */
    public function hasNotLatestIncludedSupplyChainTradeLineItem(): bool
    {
        $supplyChainTradeLineItems = $this->getIncludedSupplyChainTradeLineItem() ?? [];

        return $supplyChainTradeLineItems === [];
    }
}
