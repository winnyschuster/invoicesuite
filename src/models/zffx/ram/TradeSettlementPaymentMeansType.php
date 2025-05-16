<?php

namespace horstoeko\invoicesuite\models\zffx\ram;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\concerns\HandlesOptional;
use horstoeko\invoicesuite\models\zffx\qdt\PaymentMeansCodeType;
use horstoeko\invoicesuite\models\zffx\udt\TextType;

class TradeSettlementPaymentMeansType
{
    use HandlesObjectFlags;
    use HandlesOptional;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\qdt\PaymentMeansCodeType
     * @JMS\Groups({"zffxbasic", "zffxbasicwl", "zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\qdt\PaymentMeansCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\udt\TextType
     * @JMS\Groups({"zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Information")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getInformation", setter="setInformation")
     */
    private $information;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\ram\TradeSettlementFinancialCardType
     * @JMS\Groups({"zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\ram\TradeSettlementFinancialCardType")
     * @JMS\Expose
     * @JMS\SerializedName("ApplicableTradeSettlementFinancialCard")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getApplicableTradeSettlementFinancialCard", setter="setApplicableTradeSettlementFinancialCard")
     */
    private $applicableTradeSettlementFinancialCard;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\ram\DebtorFinancialAccountType
     * @JMS\Groups({"zffxbasic", "zffxbasicwl", "zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\ram\DebtorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayerPartyDebtorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayerPartyDebtorFinancialAccount", setter="setPayerPartyDebtorFinancialAccount")
     */
    private $payerPartyDebtorFinancialAccount;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialAccountType
     * @JMS\Groups({"zffxbasic", "zffxbasicwl", "zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeePartyCreditorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeePartyCreditorFinancialAccount", setter="setPayeePartyCreditorFinancialAccount")
     */
    private $payeePartyCreditorFinancialAccount;

    /**
     * @var \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialInstitutionType
     * @JMS\Groups({"zffxen16931", "zffxextended"})
     * @JMS\Type("horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialInstitutionType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeeSpecifiedCreditorFinancialInstitution")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeeSpecifiedCreditorFinancialInstitution", setter="setPayeeSpecifiedCreditorFinancialInstitution")
     */
    private $payeeSpecifiedCreditorFinancialInstitution;

    /**
     * @return \horstoeko\invoicesuite\models\zffx\qdt\PaymentMeansCodeType|null
     */
    public function getTypeCode(): ?PaymentMeansCodeType
    {
        return $this->typeCode;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\qdt\PaymentMeansCodeType
     */
    public function getTypeCodeWithCreate(): PaymentMeansCodeType
    {
        $this->typeCode = is_null($this->typeCode) ? new PaymentMeansCodeType() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\qdt\PaymentMeansCodeType $typeCode
     * @return self
     */
    public function setTypeCode(PaymentMeansCodeType $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\udt\TextType|null
     */
    public function getInformation(): ?TextType
    {
        return $this->information;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\udt\TextType
     */
    public function getInformationWithCreate(): TextType
    {
        $this->information = is_null($this->information) ? new TextType() : $this->information;

        return $this->information;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\udt\TextType $information
     * @return self
     */
    public function setInformation(TextType $information): self
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\TradeSettlementFinancialCardType|null
     */
    public function getApplicableTradeSettlementFinancialCard(): ?TradeSettlementFinancialCardType
    {
        return $this->applicableTradeSettlementFinancialCard;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\TradeSettlementFinancialCardType
     */
    public function getApplicableTradeSettlementFinancialCardWithCreate(): TradeSettlementFinancialCardType
    {
        $this->applicableTradeSettlementFinancialCard = is_null($this->applicableTradeSettlementFinancialCard) ? new TradeSettlementFinancialCardType() : $this->applicableTradeSettlementFinancialCard;

        return $this->applicableTradeSettlementFinancialCard;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\ram\TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard
     * @return self
     */
    public function setApplicableTradeSettlementFinancialCard(
        TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard,
    ): self {
        $this->applicableTradeSettlementFinancialCard = $applicableTradeSettlementFinancialCard;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\DebtorFinancialAccountType|null
     */
    public function getPayerPartyDebtorFinancialAccount(): ?DebtorFinancialAccountType
    {
        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\DebtorFinancialAccountType
     */
    public function getPayerPartyDebtorFinancialAccountWithCreate(): DebtorFinancialAccountType
    {
        $this->payerPartyDebtorFinancialAccount = is_null($this->payerPartyDebtorFinancialAccount) ? new DebtorFinancialAccountType() : $this->payerPartyDebtorFinancialAccount;

        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\ram\DebtorFinancialAccountType $payerPartyDebtorFinancialAccount
     * @return self
     */
    public function setPayerPartyDebtorFinancialAccount(
        DebtorFinancialAccountType $payerPartyDebtorFinancialAccount,
    ): self {
        $this->payerPartyDebtorFinancialAccount = $payerPartyDebtorFinancialAccount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialAccountType|null
     */
    public function getPayeePartyCreditorFinancialAccount(): ?CreditorFinancialAccountType
    {
        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialAccountType
     */
    public function getPayeePartyCreditorFinancialAccountWithCreate(): CreditorFinancialAccountType
    {
        $this->payeePartyCreditorFinancialAccount = is_null($this->payeePartyCreditorFinancialAccount) ? new CreditorFinancialAccountType() : $this->payeePartyCreditorFinancialAccount;

        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialAccountType $payeePartyCreditorFinancialAccount
     * @return self
     */
    public function setPayeePartyCreditorFinancialAccount(
        CreditorFinancialAccountType $payeePartyCreditorFinancialAccount,
    ): self {
        $this->payeePartyCreditorFinancialAccount = $payeePartyCreditorFinancialAccount;

        return $this;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialInstitutionType|null
     */
    public function getPayeeSpecifiedCreditorFinancialInstitution(): ?CreditorFinancialInstitutionType
    {
        return $this->payeeSpecifiedCreditorFinancialInstitution;
    }

    /**
     * @return \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialInstitutionType
     */
    public function getPayeeSpecifiedCreditorFinancialInstitutionWithCreate(): CreditorFinancialInstitutionType
    {
        $this->payeeSpecifiedCreditorFinancialInstitution = is_null($this->payeeSpecifiedCreditorFinancialInstitution) ? new CreditorFinancialInstitutionType() : $this->payeeSpecifiedCreditorFinancialInstitution;

        return $this->payeeSpecifiedCreditorFinancialInstitution;
    }

    /**
     * @param \horstoeko\invoicesuite\models\zffx\ram\CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution
     * @return self
     */
    public function setPayeeSpecifiedCreditorFinancialInstitution(
        CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution,
    ): self {
        $this->payeeSpecifiedCreditorFinancialInstitution = $payeeSpecifiedCreditorFinancialInstitution;

        return $this;
    }
}
