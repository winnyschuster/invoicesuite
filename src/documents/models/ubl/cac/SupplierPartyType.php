<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AdditionalAccountID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CustomerAssignedAccountID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DataSendingCapability;

class SupplierPartyType
{
    use HandlesObjectFlags;

    /**
     * @var CustomerAssignedAccountID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CustomerAssignedAccountID")
     * @JMS\Expose
     * @JMS\SerializedName("CustomerAssignedAccountID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCustomerAssignedAccountID", setter="setCustomerAssignedAccountID")
     */
    private $customerAssignedAccountID;

    /**
     * @var array<AdditionalAccountID>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\AdditionalAccountID>")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalAccountID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AdditionalAccountID", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getAdditionalAccountID", setter="setAdditionalAccountID")
     */
    private $additionalAccountID;

    /**
     * @var DataSendingCapability|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DataSendingCapability")
     * @JMS\Expose
     * @JMS\SerializedName("DataSendingCapability")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDataSendingCapability", setter="setDataSendingCapability")
     */
    private $dataSendingCapability;

    /**
     * @var Party|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Party")
     * @JMS\Expose
     * @JMS\SerializedName("Party")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getParty", setter="setParty")
     */
    private $party;

    /**
     * @var DespatchContact|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DespatchContact")
     * @JMS\Expose
     * @JMS\SerializedName("DespatchContact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDespatchContact", setter="setDespatchContact")
     */
    private $despatchContact;

    /**
     * @var AccountingContact|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\AccountingContact")
     * @JMS\Expose
     * @JMS\SerializedName("AccountingContact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAccountingContact", setter="setAccountingContact")
     */
    private $accountingContact;

    /**
     * @var SellerContact|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SellerContact")
     * @JMS\Expose
     * @JMS\SerializedName("SellerContact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSellerContact", setter="setSellerContact")
     */
    private $sellerContact;

    /**
     * @return CustomerAssignedAccountID|null
     */
    public function getCustomerAssignedAccountID(): ?CustomerAssignedAccountID
    {
        return $this->customerAssignedAccountID;
    }

    /**
     * @return CustomerAssignedAccountID
     */
    public function getCustomerAssignedAccountIDWithCreate(): CustomerAssignedAccountID
    {
        $this->customerAssignedAccountID = is_null($this->customerAssignedAccountID) ? new CustomerAssignedAccountID() : $this->customerAssignedAccountID;

        return $this->customerAssignedAccountID;
    }

    /**
     * @param CustomerAssignedAccountID|null $customerAssignedAccountID
     * @return static
     */
    public function setCustomerAssignedAccountID(?CustomerAssignedAccountID $customerAssignedAccountID = null): static
    {
        $this->customerAssignedAccountID = $customerAssignedAccountID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCustomerAssignedAccountID(): static
    {
        $this->customerAssignedAccountID = null;

        return $this;
    }

    /**
     * @return array<AdditionalAccountID>|null
     */
    public function getAdditionalAccountID(): ?array
    {
        return $this->additionalAccountID;
    }

    /**
     * @param array<AdditionalAccountID>|null $additionalAccountID
     * @return static
     */
    public function setAdditionalAccountID(?array $additionalAccountID = null): static
    {
        $this->additionalAccountID = $additionalAccountID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAdditionalAccountID(): static
    {
        $this->additionalAccountID = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAdditionalAccountID(): static
    {
        $this->additionalAccountID = [];

        return $this;
    }

    /**
     * @return AdditionalAccountID|null
     */
    public function firstAdditionalAccountID(): ?AdditionalAccountID
    {
        $additionalAccountID = $this->additionalAccountID ?? [];
        $additionalAccountID = reset($additionalAccountID);

        if ($additionalAccountID === false) {
            return null;
        }

        return $additionalAccountID;
    }

    /**
     * @return AdditionalAccountID|null
     */
    public function lastAdditionalAccountID(): ?AdditionalAccountID
    {
        $additionalAccountID = $this->additionalAccountID ?? [];
        $additionalAccountID = end($additionalAccountID);

        if ($additionalAccountID === false) {
            return null;
        }

        return $additionalAccountID;
    }

    /**
     * @param AdditionalAccountID $additionalAccountID
     * @return static
     */
    public function addToAdditionalAccountID(AdditionalAccountID $additionalAccountID): static
    {
        $this->additionalAccountID[] = $additionalAccountID;

        return $this;
    }

    /**
     * @return AdditionalAccountID
     */
    public function addToAdditionalAccountIDWithCreate(): AdditionalAccountID
    {
        $this->addToadditionalAccountID($additionalAccountID = new AdditionalAccountID());

        return $additionalAccountID;
    }

    /**
     * @param AdditionalAccountID $additionalAccountID
     * @return static
     */
    public function addOnceToAdditionalAccountID(AdditionalAccountID $additionalAccountID): static
    {
        if (!is_array($this->additionalAccountID)) {
            $this->additionalAccountID = [];
        }

        $this->additionalAccountID[0] = $additionalAccountID;

        return $this;
    }

    /**
     * @return AdditionalAccountID
     */
    public function addOnceToAdditionalAccountIDWithCreate(): AdditionalAccountID
    {
        if (!is_array($this->additionalAccountID)) {
            $this->additionalAccountID = [];
        }

        if ($this->additionalAccountID === []) {
            $this->addOnceToadditionalAccountID(new AdditionalAccountID());
        }

        return $this->additionalAccountID[0];
    }

    /**
     * @return DataSendingCapability|null
     */
    public function getDataSendingCapability(): ?DataSendingCapability
    {
        return $this->dataSendingCapability;
    }

    /**
     * @return DataSendingCapability
     */
    public function getDataSendingCapabilityWithCreate(): DataSendingCapability
    {
        $this->dataSendingCapability = is_null($this->dataSendingCapability) ? new DataSendingCapability() : $this->dataSendingCapability;

        return $this->dataSendingCapability;
    }

    /**
     * @param DataSendingCapability|null $dataSendingCapability
     * @return static
     */
    public function setDataSendingCapability(?DataSendingCapability $dataSendingCapability = null): static
    {
        $this->dataSendingCapability = $dataSendingCapability;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDataSendingCapability(): static
    {
        $this->dataSendingCapability = null;

        return $this;
    }

    /**
     * @return Party|null
     */
    public function getParty(): ?Party
    {
        return $this->party;
    }

    /**
     * @return Party
     */
    public function getPartyWithCreate(): Party
    {
        $this->party = is_null($this->party) ? new Party() : $this->party;

        return $this->party;
    }

    /**
     * @param Party|null $party
     * @return static
     */
    public function setParty(?Party $party = null): static
    {
        $this->party = $party;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetParty(): static
    {
        $this->party = null;

        return $this;
    }

    /**
     * @return DespatchContact|null
     */
    public function getDespatchContact(): ?DespatchContact
    {
        return $this->despatchContact;
    }

    /**
     * @return DespatchContact
     */
    public function getDespatchContactWithCreate(): DespatchContact
    {
        $this->despatchContact = is_null($this->despatchContact) ? new DespatchContact() : $this->despatchContact;

        return $this->despatchContact;
    }

    /**
     * @param DespatchContact|null $despatchContact
     * @return static
     */
    public function setDespatchContact(?DespatchContact $despatchContact = null): static
    {
        $this->despatchContact = $despatchContact;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDespatchContact(): static
    {
        $this->despatchContact = null;

        return $this;
    }

    /**
     * @return AccountingContact|null
     */
    public function getAccountingContact(): ?AccountingContact
    {
        return $this->accountingContact;
    }

    /**
     * @return AccountingContact
     */
    public function getAccountingContactWithCreate(): AccountingContact
    {
        $this->accountingContact = is_null($this->accountingContact) ? new AccountingContact() : $this->accountingContact;

        return $this->accountingContact;
    }

    /**
     * @param AccountingContact|null $accountingContact
     * @return static
     */
    public function setAccountingContact(?AccountingContact $accountingContact = null): static
    {
        $this->accountingContact = $accountingContact;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAccountingContact(): static
    {
        $this->accountingContact = null;

        return $this;
    }

    /**
     * @return SellerContact|null
     */
    public function getSellerContact(): ?SellerContact
    {
        return $this->sellerContact;
    }

    /**
     * @return SellerContact
     */
    public function getSellerContactWithCreate(): SellerContact
    {
        $this->sellerContact = is_null($this->sellerContact) ? new SellerContact() : $this->sellerContact;

        return $this->sellerContact;
    }

    /**
     * @param SellerContact|null $sellerContact
     * @return static
     */
    public function setSellerContact(?SellerContact $sellerContact = null): static
    {
        $this->sellerContact = $sellerContact;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSellerContact(): static
    {
        $this->sellerContact = null;

        return $this;
    }
}
