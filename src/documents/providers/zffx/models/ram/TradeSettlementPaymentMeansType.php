<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\providers\zffx\models\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\providers\zffx\models\qdt\PaymentMeansCodeType;
use horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class TradeSettlementPaymentMeansType
{
    use HandlesObjectFlags;

    /**
     * @var null|PaymentMeansCodeType
     */
    #[JMS\Accessor(getter: 'getTypeCode', setter: 'setTypeCode')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('TypeCode')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\qdt\PaymentMeansCodeType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $typeCode;

    /**
     * @var null|TextType
     */
    #[JMS\Accessor(getter: 'getInformation', setter: 'setInformation')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('Information')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\udt\TextType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $information;

    /**
     * @var null|TradeSettlementFinancialCardType
     */
    #[JMS\Accessor(getter: 'getApplicableTradeSettlementFinancialCard', setter: 'setApplicableTradeSettlementFinancialCard')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('ApplicableTradeSettlementFinancialCard')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\ram\TradeSettlementFinancialCardType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $applicableTradeSettlementFinancialCard;

    /**
     * @var null|DebtorFinancialAccountType
     */
    #[JMS\Accessor(getter: 'getPayerPartyDebtorFinancialAccount', setter: 'setPayerPartyDebtorFinancialAccount')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('PayerPartyDebtorFinancialAccount')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\ram\DebtorFinancialAccountType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $payerPartyDebtorFinancialAccount;

    /**
     * @var null|CreditorFinancialAccountType
     */
    #[JMS\Accessor(getter: 'getPayeePartyCreditorFinancialAccount', setter: 'setPayeePartyCreditorFinancialAccount')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('PayeePartyCreditorFinancialAccount')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\ram\CreditorFinancialAccountType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $payeePartyCreditorFinancialAccount;

    /**
     * @var null|DebtorFinancialInstitutionType
     */
    #[JMS\Accessor(getter: 'getPayerSpecifiedDebtorFinancialInstitution', setter: 'setPayerSpecifiedDebtorFinancialInstitution')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('PayerSpecifiedDebtorFinancialInstitution')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\ram\DebtorFinancialInstitutionType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $payerSpecifiedDebtorFinancialInstitution;

    /**
     * @var null|CreditorFinancialInstitutionType
     */
    #[JMS\Accessor(getter: 'getPayeeSpecifiedCreditorFinancialInstitution', setter: 'setPayeeSpecifiedCreditorFinancialInstitution')]
    #[JMS\Expose]
    #[JMS\Groups(['zffx'])]
    #[JMS\SerializedName('PayeeSpecifiedCreditorFinancialInstitution')]
    #[JMS\Type('horstoeko\invoicesuite\documents\providers\zffx\models\ram\CreditorFinancialInstitutionType')]
    #[JMS\XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    private $payeeSpecifiedCreditorFinancialInstitution;

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
        $this->typeCode ??= new PaymentMeansCodeType();

        return $this->typeCode;
    }

    /**
     * @param  null|PaymentMeansCodeType $typeCode
     * @return static
     */
    public function setTypeCode(
        ?PaymentMeansCodeType $typeCode = null
    ): static {
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
     * @return null|TextType
     */
    public function getInformation(): ?TextType
    {
        return $this->information;
    }

    /**
     * @return TextType
     */
    public function getInformationWithCreate(): TextType
    {
        $this->information ??= new TextType();

        return $this->information;
    }

    /**
     * @param  null|TextType $information
     * @return static
     */
    public function setInformation(
        ?TextType $information = null
    ): static {
        $this->information = $information;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInformation(): static
    {
        $this->information = null;

        return $this;
    }

    /**
     * @return null|TradeSettlementFinancialCardType
     */
    public function getApplicableTradeSettlementFinancialCard(): ?TradeSettlementFinancialCardType
    {
        return $this->applicableTradeSettlementFinancialCard;
    }

    /**
     * @return TradeSettlementFinancialCardType
     */
    public function getApplicableTradeSettlementFinancialCardWithCreate(): TradeSettlementFinancialCardType
    {
        $this->applicableTradeSettlementFinancialCard ??= new TradeSettlementFinancialCardType();

        return $this->applicableTradeSettlementFinancialCard;
    }

    /**
     * @param  null|TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard
     * @return static
     */
    public function setApplicableTradeSettlementFinancialCard(
        ?TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard = null,
    ): static {
        $this->applicableTradeSettlementFinancialCard = $applicableTradeSettlementFinancialCard;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetApplicableTradeSettlementFinancialCard(): static
    {
        $this->applicableTradeSettlementFinancialCard = null;

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
        $this->payerPartyDebtorFinancialAccount ??= new DebtorFinancialAccountType();

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
        $this->payeePartyCreditorFinancialAccount ??= new CreditorFinancialAccountType();

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

    /**
     * @return null|DebtorFinancialInstitutionType
     */
    public function getPayerSpecifiedDebtorFinancialInstitution(): ?DebtorFinancialInstitutionType
    {
        return $this->payerSpecifiedDebtorFinancialInstitution;
    }

    /**
     * @return DebtorFinancialInstitutionType
     */
    public function getPayerSpecifiedDebtorFinancialInstitutionWithCreate(): DebtorFinancialInstitutionType
    {
        $this->payerSpecifiedDebtorFinancialInstitution ??= new DebtorFinancialInstitutionType();

        return $this->payerSpecifiedDebtorFinancialInstitution;
    }

    /**
     * @param  null|DebtorFinancialInstitutionType $payerSpecifiedDebtorFinancialInstitution
     * @return static
     */
    public function setPayerSpecifiedDebtorFinancialInstitution(
        ?DebtorFinancialInstitutionType $payerSpecifiedDebtorFinancialInstitution = null,
    ): static {
        $this->payerSpecifiedDebtorFinancialInstitution = $payerSpecifiedDebtorFinancialInstitution;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayerSpecifiedDebtorFinancialInstitution(): static
    {
        $this->payerSpecifiedDebtorFinancialInstitution = null;

        return $this;
    }

    /**
     * @return null|CreditorFinancialInstitutionType
     */
    public function getPayeeSpecifiedCreditorFinancialInstitution(): ?CreditorFinancialInstitutionType
    {
        return $this->payeeSpecifiedCreditorFinancialInstitution;
    }

    /**
     * @return CreditorFinancialInstitutionType
     */
    public function getPayeeSpecifiedCreditorFinancialInstitutionWithCreate(): CreditorFinancialInstitutionType
    {
        $this->payeeSpecifiedCreditorFinancialInstitution ??= new CreditorFinancialInstitutionType();

        return $this->payeeSpecifiedCreditorFinancialInstitution;
    }

    /**
     * @param  null|CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution
     * @return static
     */
    public function setPayeeSpecifiedCreditorFinancialInstitution(
        ?CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution = null,
    ): static {
        $this->payeeSpecifiedCreditorFinancialInstitution = $payeeSpecifiedCreditorFinancialInstitution;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayeeSpecifiedCreditorFinancialInstitution(): static
    {
        $this->payeeSpecifiedCreditorFinancialInstitution = null;

        return $this;
    }
}
