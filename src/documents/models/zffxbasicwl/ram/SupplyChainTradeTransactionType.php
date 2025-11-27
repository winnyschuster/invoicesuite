<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;

class SupplyChainTradeTransactionType
{
    use HandlesObjectFlags;

    /**
     * @var HeaderTradeAgreementType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeAgreementType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableHeaderTradeAgreement")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableHeaderTradeAgreement", setter="setApplicableHeaderTradeAgreement")
     */
    private $applicableHeaderTradeAgreement;

    /**
     * @var HeaderTradeDeliveryType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeDeliveryType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableHeaderTradeDelivery")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableHeaderTradeDelivery", setter="setApplicableHeaderTradeDelivery")
     */
    private $applicableHeaderTradeDelivery;

    /**
     * @var HeaderTradeSettlementType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\HeaderTradeSettlementType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableHeaderTradeSettlement")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableHeaderTradeSettlement", setter="setApplicableHeaderTradeSettlement")
     */
    private $applicableHeaderTradeSettlement;

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
}
