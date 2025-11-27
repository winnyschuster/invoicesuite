<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BalanceAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CreditLineAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DebitLineAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Note;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentPurposeCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UUID;

class StatementLineType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var array<Note>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Note>")
     * @JMS\Expose
     * @JMS\SerializedName("Note")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Note", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getNote", setter="setNote")
     */
    private $note;

    /**
     * @var UUID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UUID")
     * @JMS\Expose
     * @JMS\SerializedName("UUID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUUID", setter="setUUID")
     */
    private $uUID;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("BalanceBroughtForwardIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBalanceBroughtForwardIndicator", setter="setBalanceBroughtForwardIndicator")
     */
    private $balanceBroughtForwardIndicator;

    /**
     * @var DebitLineAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DebitLineAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DebitLineAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDebitLineAmount", setter="setDebitLineAmount")
     */
    private $debitLineAmount;

    /**
     * @var CreditLineAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CreditLineAmount")
     * @JMS\Expose
     * @JMS\SerializedName("CreditLineAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCreditLineAmount", setter="setCreditLineAmount")
     */
    private $creditLineAmount;

    /**
     * @var BalanceAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BalanceAmount")
     * @JMS\Expose
     * @JMS\SerializedName("BalanceAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBalanceAmount", setter="setBalanceAmount")
     */
    private $balanceAmount;

    /**
     * @var PaymentPurposeCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PaymentPurposeCode")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentPurposeCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentPurposeCode", setter="setPaymentPurposeCode")
     */
    private $paymentPurposeCode;

    /**
     * @var PaymentMeans|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PaymentMeans")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentMeans")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentMeans", setter="setPaymentMeans")
     */
    private $paymentMeans;

    /**
     * @var array<PaymentTerms>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PaymentTerms>")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PaymentTerms", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPaymentTerms", setter="setPaymentTerms")
     */
    private $paymentTerms;

    /**
     * @var BuyerCustomerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\BuyerCustomerParty")
     * @JMS\Expose
     * @JMS\SerializedName("BuyerCustomerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBuyerCustomerParty", setter="setBuyerCustomerParty")
     */
    private $buyerCustomerParty;

    /**
     * @var SellerSupplierParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SellerSupplierParty")
     * @JMS\Expose
     * @JMS\SerializedName("SellerSupplierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSellerSupplierParty", setter="setSellerSupplierParty")
     */
    private $sellerSupplierParty;

    /**
     * @var OriginatorCustomerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginatorCustomerParty")
     * @JMS\Expose
     * @JMS\SerializedName("OriginatorCustomerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginatorCustomerParty", setter="setOriginatorCustomerParty")
     */
    private $originatorCustomerParty;

    /**
     * @var AccountingCustomerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\AccountingCustomerParty")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingCustomerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingCustomerParty", setter="setAccountingCustomerParty")
     */
    private $accountingCustomerParty;

    /**
     * @var AccountingSupplierParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\AccountingSupplierParty")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingSupplierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingSupplierParty", setter="setAccountingSupplierParty")
     */
    private $accountingSupplierParty;

    /**
     * @var PayeeParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PayeeParty")
     * @JMS\Expose
     * @JMS\SerializedName("PayeeParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPayeeParty", setter="setPayeeParty")
     */
    private $payeeParty;

    /**
     * @var array<InvoicePeriod>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\InvoicePeriod>")
     * @JMS\Expose
     * @JMS\SerializedName("InvoicePeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="InvoicePeriod", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getInvoicePeriod", setter="setInvoicePeriod")
     */
    private $invoicePeriod;

    /**
     * @var array<BillingReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\BillingReference>")
     * @JMS\Expose
     * @JMS\SerializedName("BillingReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="BillingReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getBillingReference", setter="setBillingReference")
     */
    private $billingReference;

    /**
     * @var array<DocumentReference>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\DocumentReference>")
     * @JMS\Expose
     * @JMS\SerializedName("DocumentReference")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getDocumentReference", setter="setDocumentReference")
     */
    private $documentReference;

    /**
     * @var ExchangeRate|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ExchangeRate")
     * @JMS\Expose
     * @JMS\SerializedName("ExchangeRate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExchangeRate", setter="setExchangeRate")
     */
    private $exchangeRate;

    /**
     * @var array<AllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("AllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAllowanceCharge", setter="setAllowanceCharge")
     */
    private $allowanceCharge;

    /**
     * @var array<CollectedPayment>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\CollectedPayment>")
     * @JMS\Expose
     * @JMS\SerializedName("CollectedPayment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CollectedPayment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCollectedPayment", setter="setCollectedPayment")
     */
    private $collectedPayment;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return static
     */
    public function setID(?ID $iD = null): static
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetID(): static
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return array<Note>|null
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * @param array<Note>|null $note
     * @return static
     */
    public function setNote(?array $note = null): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNote(): static
    {
        $this->note = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearNote(): static
    {
        $this->note = [];

        return $this;
    }

    /**
     * @return Note|null
     */
    public function firstNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = reset($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @return Note|null
     */
    public function lastNote(): ?Note
    {
        $note = $this->note ?? [];
        $note = end($note);

        if ($note === false) {
            return null;
        }

        return $note;
    }

    /**
     * @param Note $note
     * @return static
     */
    public function addToNote(Note $note): static
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addToNoteWithCreate(): Note
    {
        $this->addTonote($note = new Note());

        return $note;
    }

    /**
     * @param Note $note
     * @return static
     */
    public function addOnceToNote(Note $note): static
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        $this->note[0] = $note;

        return $this;
    }

    /**
     * @return Note
     */
    public function addOnceToNoteWithCreate(): Note
    {
        if (!is_array($this->note)) {
            $this->note = [];
        }

        if ($this->note === []) {
            $this->addOnceTonote(new Note());
        }

        return $this->note[0];
    }

    /**
     * @return UUID|null
     */
    public function getUUID(): ?UUID
    {
        return $this->uUID;
    }

    /**
     * @return UUID
     */
    public function getUUIDWithCreate(): UUID
    {
        $this->uUID = is_null($this->uUID) ? new UUID() : $this->uUID;

        return $this->uUID;
    }

    /**
     * @param UUID|null $uUID
     * @return static
     */
    public function setUUID(?UUID $uUID = null): static
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUUID(): static
    {
        $this->uUID = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getBalanceBroughtForwardIndicator(): ?bool
    {
        return $this->balanceBroughtForwardIndicator;
    }

    /**
     * @param bool|null $balanceBroughtForwardIndicator
     * @return static
     */
    public function setBalanceBroughtForwardIndicator(?bool $balanceBroughtForwardIndicator = null): static
    {
        $this->balanceBroughtForwardIndicator = $balanceBroughtForwardIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBalanceBroughtForwardIndicator(): static
    {
        $this->balanceBroughtForwardIndicator = null;

        return $this;
    }

    /**
     * @return DebitLineAmount|null
     */
    public function getDebitLineAmount(): ?DebitLineAmount
    {
        return $this->debitLineAmount;
    }

    /**
     * @return DebitLineAmount
     */
    public function getDebitLineAmountWithCreate(): DebitLineAmount
    {
        $this->debitLineAmount = is_null($this->debitLineAmount) ? new DebitLineAmount() : $this->debitLineAmount;

        return $this->debitLineAmount;
    }

    /**
     * @param DebitLineAmount|null $debitLineAmount
     * @return static
     */
    public function setDebitLineAmount(?DebitLineAmount $debitLineAmount = null): static
    {
        $this->debitLineAmount = $debitLineAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDebitLineAmount(): static
    {
        $this->debitLineAmount = null;

        return $this;
    }

    /**
     * @return CreditLineAmount|null
     */
    public function getCreditLineAmount(): ?CreditLineAmount
    {
        return $this->creditLineAmount;
    }

    /**
     * @return CreditLineAmount
     */
    public function getCreditLineAmountWithCreate(): CreditLineAmount
    {
        $this->creditLineAmount = is_null($this->creditLineAmount) ? new CreditLineAmount() : $this->creditLineAmount;

        return $this->creditLineAmount;
    }

    /**
     * @param CreditLineAmount|null $creditLineAmount
     * @return static
     */
    public function setCreditLineAmount(?CreditLineAmount $creditLineAmount = null): static
    {
        $this->creditLineAmount = $creditLineAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCreditLineAmount(): static
    {
        $this->creditLineAmount = null;

        return $this;
    }

    /**
     * @return BalanceAmount|null
     */
    public function getBalanceAmount(): ?BalanceAmount
    {
        return $this->balanceAmount;
    }

    /**
     * @return BalanceAmount
     */
    public function getBalanceAmountWithCreate(): BalanceAmount
    {
        $this->balanceAmount = is_null($this->balanceAmount) ? new BalanceAmount() : $this->balanceAmount;

        return $this->balanceAmount;
    }

    /**
     * @param BalanceAmount|null $balanceAmount
     * @return static
     */
    public function setBalanceAmount(?BalanceAmount $balanceAmount = null): static
    {
        $this->balanceAmount = $balanceAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBalanceAmount(): static
    {
        $this->balanceAmount = null;

        return $this;
    }

    /**
     * @return PaymentPurposeCode|null
     */
    public function getPaymentPurposeCode(): ?PaymentPurposeCode
    {
        return $this->paymentPurposeCode;
    }

    /**
     * @return PaymentPurposeCode
     */
    public function getPaymentPurposeCodeWithCreate(): PaymentPurposeCode
    {
        $this->paymentPurposeCode = is_null($this->paymentPurposeCode) ? new PaymentPurposeCode() : $this->paymentPurposeCode;

        return $this->paymentPurposeCode;
    }

    /**
     * @param PaymentPurposeCode|null $paymentPurposeCode
     * @return static
     */
    public function setPaymentPurposeCode(?PaymentPurposeCode $paymentPurposeCode = null): static
    {
        $this->paymentPurposeCode = $paymentPurposeCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPaymentPurposeCode(): static
    {
        $this->paymentPurposeCode = null;

        return $this;
    }

    /**
     * @return PaymentMeans|null
     */
    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    /**
     * @return PaymentMeans
     */
    public function getPaymentMeansWithCreate(): PaymentMeans
    {
        $this->paymentMeans = is_null($this->paymentMeans) ? new PaymentMeans() : $this->paymentMeans;

        return $this->paymentMeans;
    }

    /**
     * @param PaymentMeans|null $paymentMeans
     * @return static
     */
    public function setPaymentMeans(?PaymentMeans $paymentMeans = null): static
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPaymentMeans(): static
    {
        $this->paymentMeans = null;

        return $this;
    }

    /**
     * @return array<PaymentTerms>|null
     */
    public function getPaymentTerms(): ?array
    {
        return $this->paymentTerms;
    }

    /**
     * @param array<PaymentTerms>|null $paymentTerms
     * @return static
     */
    public function setPaymentTerms(?array $paymentTerms = null): static
    {
        $this->paymentTerms = $paymentTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPaymentTerms(): static
    {
        $this->paymentTerms = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPaymentTerms(): static
    {
        $this->paymentTerms = [];

        return $this;
    }

    /**
     * @return PaymentTerms|null
     */
    public function firstPaymentTerms(): ?PaymentTerms
    {
        $paymentTerms = $this->paymentTerms ?? [];
        $paymentTerms = reset($paymentTerms);

        if ($paymentTerms === false) {
            return null;
        }

        return $paymentTerms;
    }

    /**
     * @return PaymentTerms|null
     */
    public function lastPaymentTerms(): ?PaymentTerms
    {
        $paymentTerms = $this->paymentTerms ?? [];
        $paymentTerms = end($paymentTerms);

        if ($paymentTerms === false) {
            return null;
        }

        return $paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms
     * @return static
     */
    public function addToPaymentTerms(PaymentTerms $paymentTerms): static
    {
        $this->paymentTerms[] = $paymentTerms;

        return $this;
    }

    /**
     * @return PaymentTerms
     */
    public function addToPaymentTermsWithCreate(): PaymentTerms
    {
        $this->addTopaymentTerms($paymentTerms = new PaymentTerms());

        return $paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms
     * @return static
     */
    public function addOnceToPaymentTerms(PaymentTerms $paymentTerms): static
    {
        if (!is_array($this->paymentTerms)) {
            $this->paymentTerms = [];
        }

        $this->paymentTerms[0] = $paymentTerms;

        return $this;
    }

    /**
     * @return PaymentTerms
     */
    public function addOnceToPaymentTermsWithCreate(): PaymentTerms
    {
        if (!is_array($this->paymentTerms)) {
            $this->paymentTerms = [];
        }

        if ($this->paymentTerms === []) {
            $this->addOnceTopaymentTerms(new PaymentTerms());
        }

        return $this->paymentTerms[0];
    }

    /**
     * @return BuyerCustomerParty|null
     */
    public function getBuyerCustomerParty(): ?BuyerCustomerParty
    {
        return $this->buyerCustomerParty;
    }

    /**
     * @return BuyerCustomerParty
     */
    public function getBuyerCustomerPartyWithCreate(): BuyerCustomerParty
    {
        $this->buyerCustomerParty = is_null($this->buyerCustomerParty) ? new BuyerCustomerParty() : $this->buyerCustomerParty;

        return $this->buyerCustomerParty;
    }

    /**
     * @param BuyerCustomerParty|null $buyerCustomerParty
     * @return static
     */
    public function setBuyerCustomerParty(?BuyerCustomerParty $buyerCustomerParty = null): static
    {
        $this->buyerCustomerParty = $buyerCustomerParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBuyerCustomerParty(): static
    {
        $this->buyerCustomerParty = null;

        return $this;
    }

    /**
     * @return SellerSupplierParty|null
     */
    public function getSellerSupplierParty(): ?SellerSupplierParty
    {
        return $this->sellerSupplierParty;
    }

    /**
     * @return SellerSupplierParty
     */
    public function getSellerSupplierPartyWithCreate(): SellerSupplierParty
    {
        $this->sellerSupplierParty = is_null($this->sellerSupplierParty) ? new SellerSupplierParty() : $this->sellerSupplierParty;

        return $this->sellerSupplierParty;
    }

    /**
     * @param SellerSupplierParty|null $sellerSupplierParty
     * @return static
     */
    public function setSellerSupplierParty(?SellerSupplierParty $sellerSupplierParty = null): static
    {
        $this->sellerSupplierParty = $sellerSupplierParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSellerSupplierParty(): static
    {
        $this->sellerSupplierParty = null;

        return $this;
    }

    /**
     * @return OriginatorCustomerParty|null
     */
    public function getOriginatorCustomerParty(): ?OriginatorCustomerParty
    {
        return $this->originatorCustomerParty;
    }

    /**
     * @return OriginatorCustomerParty
     */
    public function getOriginatorCustomerPartyWithCreate(): OriginatorCustomerParty
    {
        $this->originatorCustomerParty = is_null($this->originatorCustomerParty) ? new OriginatorCustomerParty() : $this->originatorCustomerParty;

        return $this->originatorCustomerParty;
    }

    /**
     * @param OriginatorCustomerParty|null $originatorCustomerParty
     * @return static
     */
    public function setOriginatorCustomerParty(?OriginatorCustomerParty $originatorCustomerParty = null): static
    {
        $this->originatorCustomerParty = $originatorCustomerParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOriginatorCustomerParty(): static
    {
        $this->originatorCustomerParty = null;

        return $this;
    }

    /**
     * @return AccountingCustomerParty|null
     */
    public function getAccountingCustomerParty(): ?AccountingCustomerParty
    {
        return $this->accountingCustomerParty;
    }

    /**
     * @return AccountingCustomerParty
     */
    public function getAccountingCustomerPartyWithCreate(): AccountingCustomerParty
    {
        $this->accountingCustomerParty = is_null($this->accountingCustomerParty) ? new AccountingCustomerParty() : $this->accountingCustomerParty;

        return $this->accountingCustomerParty;
    }

    /**
     * @param AccountingCustomerParty|null $accountingCustomerParty
     * @return static
     */
    public function setAccountingCustomerParty(?AccountingCustomerParty $accountingCustomerParty = null): static
    {
        $this->accountingCustomerParty = $accountingCustomerParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAccountingCustomerParty(): static
    {
        $this->accountingCustomerParty = null;

        return $this;
    }

    /**
     * @return AccountingSupplierParty|null
     */
    public function getAccountingSupplierParty(): ?AccountingSupplierParty
    {
        return $this->accountingSupplierParty;
    }

    /**
     * @return AccountingSupplierParty
     */
    public function getAccountingSupplierPartyWithCreate(): AccountingSupplierParty
    {
        $this->accountingSupplierParty = is_null($this->accountingSupplierParty) ? new AccountingSupplierParty() : $this->accountingSupplierParty;

        return $this->accountingSupplierParty;
    }

    /**
     * @param AccountingSupplierParty|null $accountingSupplierParty
     * @return static
     */
    public function setAccountingSupplierParty(?AccountingSupplierParty $accountingSupplierParty = null): static
    {
        $this->accountingSupplierParty = $accountingSupplierParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAccountingSupplierParty(): static
    {
        $this->accountingSupplierParty = null;

        return $this;
    }

    /**
     * @return PayeeParty|null
     */
    public function getPayeeParty(): ?PayeeParty
    {
        return $this->payeeParty;
    }

    /**
     * @return PayeeParty
     */
    public function getPayeePartyWithCreate(): PayeeParty
    {
        $this->payeeParty = is_null($this->payeeParty) ? new PayeeParty() : $this->payeeParty;

        return $this->payeeParty;
    }

    /**
     * @param PayeeParty|null $payeeParty
     * @return static
     */
    public function setPayeeParty(?PayeeParty $payeeParty = null): static
    {
        $this->payeeParty = $payeeParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPayeeParty(): static
    {
        $this->payeeParty = null;

        return $this;
    }

    /**
     * @return array<InvoicePeriod>|null
     */
    public function getInvoicePeriod(): ?array
    {
        return $this->invoicePeriod;
    }

    /**
     * @param array<InvoicePeriod>|null $invoicePeriod
     * @return static
     */
    public function setInvoicePeriod(?array $invoicePeriod = null): static
    {
        $this->invoicePeriod = $invoicePeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInvoicePeriod(): static
    {
        $this->invoicePeriod = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearInvoicePeriod(): static
    {
        $this->invoicePeriod = [];

        return $this;
    }

    /**
     * @return InvoicePeriod|null
     */
    public function firstInvoicePeriod(): ?InvoicePeriod
    {
        $invoicePeriod = $this->invoicePeriod ?? [];
        $invoicePeriod = reset($invoicePeriod);

        if ($invoicePeriod === false) {
            return null;
        }

        return $invoicePeriod;
    }

    /**
     * @return InvoicePeriod|null
     */
    public function lastInvoicePeriod(): ?InvoicePeriod
    {
        $invoicePeriod = $this->invoicePeriod ?? [];
        $invoicePeriod = end($invoicePeriod);

        if ($invoicePeriod === false) {
            return null;
        }

        return $invoicePeriod;
    }

    /**
     * @param InvoicePeriod $invoicePeriod
     * @return static
     */
    public function addToInvoicePeriod(InvoicePeriod $invoicePeriod): static
    {
        $this->invoicePeriod[] = $invoicePeriod;

        return $this;
    }

    /**
     * @return InvoicePeriod
     */
    public function addToInvoicePeriodWithCreate(): InvoicePeriod
    {
        $this->addToinvoicePeriod($invoicePeriod = new InvoicePeriod());

        return $invoicePeriod;
    }

    /**
     * @param InvoicePeriod $invoicePeriod
     * @return static
     */
    public function addOnceToInvoicePeriod(InvoicePeriod $invoicePeriod): static
    {
        if (!is_array($this->invoicePeriod)) {
            $this->invoicePeriod = [];
        }

        $this->invoicePeriod[0] = $invoicePeriod;

        return $this;
    }

    /**
     * @return InvoicePeriod
     */
    public function addOnceToInvoicePeriodWithCreate(): InvoicePeriod
    {
        if (!is_array($this->invoicePeriod)) {
            $this->invoicePeriod = [];
        }

        if ($this->invoicePeriod === []) {
            $this->addOnceToinvoicePeriod(new InvoicePeriod());
        }

        return $this->invoicePeriod[0];
    }

    /**
     * @return array<BillingReference>|null
     */
    public function getBillingReference(): ?array
    {
        return $this->billingReference;
    }

    /**
     * @param array<BillingReference>|null $billingReference
     * @return static
     */
    public function setBillingReference(?array $billingReference = null): static
    {
        $this->billingReference = $billingReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBillingReference(): static
    {
        $this->billingReference = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearBillingReference(): static
    {
        $this->billingReference = [];

        return $this;
    }

    /**
     * @return BillingReference|null
     */
    public function firstBillingReference(): ?BillingReference
    {
        $billingReference = $this->billingReference ?? [];
        $billingReference = reset($billingReference);

        if ($billingReference === false) {
            return null;
        }

        return $billingReference;
    }

    /**
     * @return BillingReference|null
     */
    public function lastBillingReference(): ?BillingReference
    {
        $billingReference = $this->billingReference ?? [];
        $billingReference = end($billingReference);

        if ($billingReference === false) {
            return null;
        }

        return $billingReference;
    }

    /**
     * @param BillingReference $billingReference
     * @return static
     */
    public function addToBillingReference(BillingReference $billingReference): static
    {
        $this->billingReference[] = $billingReference;

        return $this;
    }

    /**
     * @return BillingReference
     */
    public function addToBillingReferenceWithCreate(): BillingReference
    {
        $this->addTobillingReference($billingReference = new BillingReference());

        return $billingReference;
    }

    /**
     * @param BillingReference $billingReference
     * @return static
     */
    public function addOnceToBillingReference(BillingReference $billingReference): static
    {
        if (!is_array($this->billingReference)) {
            $this->billingReference = [];
        }

        $this->billingReference[0] = $billingReference;

        return $this;
    }

    /**
     * @return BillingReference
     */
    public function addOnceToBillingReferenceWithCreate(): BillingReference
    {
        if (!is_array($this->billingReference)) {
            $this->billingReference = [];
        }

        if ($this->billingReference === []) {
            $this->addOnceTobillingReference(new BillingReference());
        }

        return $this->billingReference[0];
    }

    /**
     * @return array<DocumentReference>|null
     */
    public function getDocumentReference(): ?array
    {
        return $this->documentReference;
    }

    /**
     * @param array<DocumentReference>|null $documentReference
     * @return static
     */
    public function setDocumentReference(?array $documentReference = null): static
    {
        $this->documentReference = $documentReference;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDocumentReference(): static
    {
        $this->documentReference = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDocumentReference(): static
    {
        $this->documentReference = [];

        return $this;
    }

    /**
     * @return DocumentReference|null
     */
    public function firstDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = reset($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @return DocumentReference|null
     */
    public function lastDocumentReference(): ?DocumentReference
    {
        $documentReference = $this->documentReference ?? [];
        $documentReference = end($documentReference);

        if ($documentReference === false) {
            return null;
        }

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return static
     */
    public function addToDocumentReference(DocumentReference $documentReference): static
    {
        $this->documentReference[] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addToDocumentReferenceWithCreate(): DocumentReference
    {
        $this->addTodocumentReference($documentReference = new DocumentReference());

        return $documentReference;
    }

    /**
     * @param DocumentReference $documentReference
     * @return static
     */
    public function addOnceToDocumentReference(DocumentReference $documentReference): static
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        $this->documentReference[0] = $documentReference;

        return $this;
    }

    /**
     * @return DocumentReference
     */
    public function addOnceToDocumentReferenceWithCreate(): DocumentReference
    {
        if (!is_array($this->documentReference)) {
            $this->documentReference = [];
        }

        if ($this->documentReference === []) {
            $this->addOnceTodocumentReference(new DocumentReference());
        }

        return $this->documentReference[0];
    }

    /**
     * @return ExchangeRate|null
     */
    public function getExchangeRate(): ?ExchangeRate
    {
        return $this->exchangeRate;
    }

    /**
     * @return ExchangeRate
     */
    public function getExchangeRateWithCreate(): ExchangeRate
    {
        $this->exchangeRate = is_null($this->exchangeRate) ? new ExchangeRate() : $this->exchangeRate;

        return $this->exchangeRate;
    }

    /**
     * @param ExchangeRate|null $exchangeRate
     * @return static
     */
    public function setExchangeRate(?ExchangeRate $exchangeRate = null): static
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExchangeRate(): static
    {
        $this->exchangeRate = null;

        return $this;
    }

    /**
     * @return array<AllowanceCharge>|null
     */
    public function getAllowanceCharge(): ?array
    {
        return $this->allowanceCharge;
    }

    /**
     * @param array<AllowanceCharge>|null $allowanceCharge
     * @return static
     */
    public function setAllowanceCharge(?array $allowanceCharge = null): static
    {
        $this->allowanceCharge = $allowanceCharge;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAllowanceCharge(): static
    {
        $this->allowanceCharge = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAllowanceCharge(): static
    {
        $this->allowanceCharge = [];

        return $this;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function firstAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = reset($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function lastAllowanceCharge(): ?AllowanceCharge
    {
        $allowanceCharge = $this->allowanceCharge ?? [];
        $allowanceCharge = end($allowanceCharge);

        if ($allowanceCharge === false) {
            return null;
        }

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return static
     */
    public function addToAllowanceCharge(AllowanceCharge $allowanceCharge): static
    {
        $this->allowanceCharge[] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addToAllowanceChargeWithCreate(): AllowanceCharge
    {
        $this->addToallowanceCharge($allowanceCharge = new AllowanceCharge());

        return $allowanceCharge;
    }

    /**
     * @param AllowanceCharge $allowanceCharge
     * @return static
     */
    public function addOnceToAllowanceCharge(AllowanceCharge $allowanceCharge): static
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        $this->allowanceCharge[0] = $allowanceCharge;

        return $this;
    }

    /**
     * @return AllowanceCharge
     */
    public function addOnceToAllowanceChargeWithCreate(): AllowanceCharge
    {
        if (!is_array($this->allowanceCharge)) {
            $this->allowanceCharge = [];
        }

        if ($this->allowanceCharge === []) {
            $this->addOnceToallowanceCharge(new AllowanceCharge());
        }

        return $this->allowanceCharge[0];
    }

    /**
     * @return array<CollectedPayment>|null
     */
    public function getCollectedPayment(): ?array
    {
        return $this->collectedPayment;
    }

    /**
     * @param array<CollectedPayment>|null $collectedPayment
     * @return static
     */
    public function setCollectedPayment(?array $collectedPayment = null): static
    {
        $this->collectedPayment = $collectedPayment;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCollectedPayment(): static
    {
        $this->collectedPayment = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearCollectedPayment(): static
    {
        $this->collectedPayment = [];

        return $this;
    }

    /**
     * @return CollectedPayment|null
     */
    public function firstCollectedPayment(): ?CollectedPayment
    {
        $collectedPayment = $this->collectedPayment ?? [];
        $collectedPayment = reset($collectedPayment);

        if ($collectedPayment === false) {
            return null;
        }

        return $collectedPayment;
    }

    /**
     * @return CollectedPayment|null
     */
    public function lastCollectedPayment(): ?CollectedPayment
    {
        $collectedPayment = $this->collectedPayment ?? [];
        $collectedPayment = end($collectedPayment);

        if ($collectedPayment === false) {
            return null;
        }

        return $collectedPayment;
    }

    /**
     * @param CollectedPayment $collectedPayment
     * @return static
     */
    public function addToCollectedPayment(CollectedPayment $collectedPayment): static
    {
        $this->collectedPayment[] = $collectedPayment;

        return $this;
    }

    /**
     * @return CollectedPayment
     */
    public function addToCollectedPaymentWithCreate(): CollectedPayment
    {
        $this->addTocollectedPayment($collectedPayment = new CollectedPayment());

        return $collectedPayment;
    }

    /**
     * @param CollectedPayment $collectedPayment
     * @return static
     */
    public function addOnceToCollectedPayment(CollectedPayment $collectedPayment): static
    {
        if (!is_array($this->collectedPayment)) {
            $this->collectedPayment = [];
        }

        $this->collectedPayment[0] = $collectedPayment;

        return $this;
    }

    /**
     * @return CollectedPayment
     */
    public function addOnceToCollectedPaymentWithCreate(): CollectedPayment
    {
        if (!is_array($this->collectedPayment)) {
            $this->collectedPayment = [];
        }

        if ($this->collectedPayment === []) {
            $this->addOnceTocollectedPayment(new CollectedPayment());
        }

        return $this->collectedPayment[0];
    }
}
