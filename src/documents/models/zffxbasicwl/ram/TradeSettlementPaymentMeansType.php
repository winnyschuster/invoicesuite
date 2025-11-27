<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\PaymentMeansCodeType;
use JMS\Serializer\Annotation as JMS;

class TradeSettlementPaymentMeansType
{
    use HandlesObjectFlags;

    /**
     * @var null|PaymentMeansCodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\PaymentMeansCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var null|DebtorFinancialAccountType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\DebtorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayerPartyDebtorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayerPartyDebtorFinancialAccount", setter="setPayerPartyDebtorFinancialAccount")
     */
    private $payerPartyDebtorFinancialAccount;

    /**
     * @var null|CreditorFinancialAccountType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\ram\CreditorFinancialAccountType")
     * @JMS\Expose
     * @JMS\SerializedName("PayeePartyCreditorFinancialAccount")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getPayeePartyCreditorFinancialAccount", setter="setPayeePartyCreditorFinancialAccount")
     */
    private $payeePartyCreditorFinancialAccount;

    /**
     * @return null|PaymentMeansCodeType
     */
    public function getTypeCode(): ?PaymentMeansCodeType
    {
        return $this->typeCode;
    }

    /**
     * @return PaymentMeansCodeType
     */
    public function getTypeCodeWithCreate(): PaymentMeansCodeType
    {
        $this->typeCode = is_null($this->typeCode) ? new PaymentMeansCodeType() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param  null|PaymentMeansCodeType $typeCode
     * @return static
     */
    public function setTypeCode(?PaymentMeansCodeType $typeCode = null): static
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTypeCode(): static
    {
        $this->typeCode = null;

        return $this;
    }

    /**
     * @return null|DebtorFinancialAccountType
     */
    public function getPayerPartyDebtorFinancialAccount(): ?DebtorFinancialAccountType
    {
        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * @return DebtorFinancialAccountType
     */
    public function getPayerPartyDebtorFinancialAccountWithCreate(): DebtorFinancialAccountType
    {
        $this->payerPartyDebtorFinancialAccount = is_null($this->payerPartyDebtorFinancialAccount) ? new DebtorFinancialAccountType() : $this->payerPartyDebtorFinancialAccount;

        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * @param  null|DebtorFinancialAccountType $payerPartyDebtorFinancialAccount
     * @return static
     */
    public function setPayerPartyDebtorFinancialAccount(
        ?DebtorFinancialAccountType $payerPartyDebtorFinancialAccount = null,
    ): static {
        $this->payerPartyDebtorFinancialAccount = $payerPartyDebtorFinancialAccount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayerPartyDebtorFinancialAccount(): static
    {
        $this->payerPartyDebtorFinancialAccount = null;

        return $this;
    }

    /**
     * @return null|CreditorFinancialAccountType
     */
    public function getPayeePartyCreditorFinancialAccount(): ?CreditorFinancialAccountType
    {
        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * @return CreditorFinancialAccountType
     */
    public function getPayeePartyCreditorFinancialAccountWithCreate(): CreditorFinancialAccountType
    {
        $this->payeePartyCreditorFinancialAccount = is_null($this->payeePartyCreditorFinancialAccount) ? new CreditorFinancialAccountType() : $this->payeePartyCreditorFinancialAccount;

        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * @param  null|CreditorFinancialAccountType $payeePartyCreditorFinancialAccount
     * @return static
     */
    public function setPayeePartyCreditorFinancialAccount(
        ?CreditorFinancialAccountType $payeePartyCreditorFinancialAccount = null,
    ): static {
        $this->payeePartyCreditorFinancialAccount = $payeePartyCreditorFinancialAccount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayeePartyCreditorFinancialAccount(): static
    {
        $this->payeePartyCreditorFinancialAccount = null;

        return $this;
    }
}
