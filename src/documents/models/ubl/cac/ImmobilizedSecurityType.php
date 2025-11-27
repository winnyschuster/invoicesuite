<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FaceValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ImmobilizationCertificateID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MarketValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SecurityID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SharesNumberQuantity;

class ImmobilizedSecurityType
{
    use HandlesObjectFlags;

    /**
     * @var ImmobilizationCertificateID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ImmobilizationCertificateID")
     * @JMS\Expose
     * @JMS\SerializedName("ImmobilizationCertificateID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getImmobilizationCertificateID", setter="setImmobilizationCertificateID")
     */
    private $immobilizationCertificateID;

    /**
     * @var SecurityID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SecurityID")
     * @JMS\Expose
     * @JMS\SerializedName("SecurityID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSecurityID", setter="setSecurityID")
     */
    private $securityID;

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
     * @var FaceValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FaceValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("FaceValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFaceValueAmount", setter="setFaceValueAmount")
     */
    private $faceValueAmount;

    /**
     * @var MarketValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MarketValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("MarketValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMarketValueAmount", setter="setMarketValueAmount")
     */
    private $marketValueAmount;

    /**
     * @var SharesNumberQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SharesNumberQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("SharesNumberQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSharesNumberQuantity", setter="setSharesNumberQuantity")
     */
    private $sharesNumberQuantity;

    /**
     * @var IssuerParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\IssuerParty")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIssuerParty", setter="setIssuerParty")
     */
    private $issuerParty;

    /**
     * @return ImmobilizationCertificateID|null
     */
    public function getImmobilizationCertificateID(): ?ImmobilizationCertificateID
    {
        return $this->immobilizationCertificateID;
    }

    /**
     * @return ImmobilizationCertificateID
     */
    public function getImmobilizationCertificateIDWithCreate(): ImmobilizationCertificateID
    {
        $this->immobilizationCertificateID = is_null($this->immobilizationCertificateID) ? new ImmobilizationCertificateID() : $this->immobilizationCertificateID;

        return $this->immobilizationCertificateID;
    }

    /**
     * @param ImmobilizationCertificateID|null $immobilizationCertificateID
     * @return static
     */
    public function setImmobilizationCertificateID(
        ?ImmobilizationCertificateID $immobilizationCertificateID = null,
    ): static {
        $this->immobilizationCertificateID = $immobilizationCertificateID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetImmobilizationCertificateID(): static
    {
        $this->immobilizationCertificateID = null;

        return $this;
    }

    /**
     * @return SecurityID|null
     */
    public function getSecurityID(): ?SecurityID
    {
        return $this->securityID;
    }

    /**
     * @return SecurityID
     */
    public function getSecurityIDWithCreate(): SecurityID
    {
        $this->securityID = is_null($this->securityID) ? new SecurityID() : $this->securityID;

        return $this->securityID;
    }

    /**
     * @param SecurityID|null $securityID
     * @return static
     */
    public function setSecurityID(?SecurityID $securityID = null): static
    {
        $this->securityID = $securityID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSecurityID(): static
    {
        $this->securityID = null;

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
     * @return FaceValueAmount|null
     */
    public function getFaceValueAmount(): ?FaceValueAmount
    {
        return $this->faceValueAmount;
    }

    /**
     * @return FaceValueAmount
     */
    public function getFaceValueAmountWithCreate(): FaceValueAmount
    {
        $this->faceValueAmount = is_null($this->faceValueAmount) ? new FaceValueAmount() : $this->faceValueAmount;

        return $this->faceValueAmount;
    }

    /**
     * @param FaceValueAmount|null $faceValueAmount
     * @return static
     */
    public function setFaceValueAmount(?FaceValueAmount $faceValueAmount = null): static
    {
        $this->faceValueAmount = $faceValueAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFaceValueAmount(): static
    {
        $this->faceValueAmount = null;

        return $this;
    }

    /**
     * @return MarketValueAmount|null
     */
    public function getMarketValueAmount(): ?MarketValueAmount
    {
        return $this->marketValueAmount;
    }

    /**
     * @return MarketValueAmount
     */
    public function getMarketValueAmountWithCreate(): MarketValueAmount
    {
        $this->marketValueAmount = is_null($this->marketValueAmount) ? new MarketValueAmount() : $this->marketValueAmount;

        return $this->marketValueAmount;
    }

    /**
     * @param MarketValueAmount|null $marketValueAmount
     * @return static
     */
    public function setMarketValueAmount(?MarketValueAmount $marketValueAmount = null): static
    {
        $this->marketValueAmount = $marketValueAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMarketValueAmount(): static
    {
        $this->marketValueAmount = null;

        return $this;
    }

    /**
     * @return SharesNumberQuantity|null
     */
    public function getSharesNumberQuantity(): ?SharesNumberQuantity
    {
        return $this->sharesNumberQuantity;
    }

    /**
     * @return SharesNumberQuantity
     */
    public function getSharesNumberQuantityWithCreate(): SharesNumberQuantity
    {
        $this->sharesNumberQuantity = is_null($this->sharesNumberQuantity) ? new SharesNumberQuantity() : $this->sharesNumberQuantity;

        return $this->sharesNumberQuantity;
    }

    /**
     * @param SharesNumberQuantity|null $sharesNumberQuantity
     * @return static
     */
    public function setSharesNumberQuantity(?SharesNumberQuantity $sharesNumberQuantity = null): static
    {
        $this->sharesNumberQuantity = $sharesNumberQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSharesNumberQuantity(): static
    {
        $this->sharesNumberQuantity = null;

        return $this;
    }

    /**
     * @return IssuerParty|null
     */
    public function getIssuerParty(): ?IssuerParty
    {
        return $this->issuerParty;
    }

    /**
     * @return IssuerParty
     */
    public function getIssuerPartyWithCreate(): IssuerParty
    {
        $this->issuerParty = is_null($this->issuerParty) ? new IssuerParty() : $this->issuerParty;

        return $this->issuerParty;
    }

    /**
     * @param IssuerParty|null $issuerParty
     * @return static
     */
    public function setIssuerParty(?IssuerParty $issuerParty = null): static
    {
        $this->issuerParty = $issuerParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIssuerParty(): static
    {
        $this->issuerParty = null;

        return $this;
    }
}
