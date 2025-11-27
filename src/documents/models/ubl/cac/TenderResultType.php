<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AdvertisementAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HigherTenderAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LowerTenderAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReceivedElectronicTenderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReceivedForeignTenderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ReceivedTenderQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TenderResultCode;

class TenderResultType
{
    use HandlesObjectFlags;

    /**
     * @var TenderResultCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TenderResultCode")
     * @JMS\Expose
     * @JMS\SerializedName("TenderResultCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTenderResultCode", setter="setTenderResultCode")
     */
    private $tenderResultCode;

    /**
     * @var array<Description>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Description>")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Description", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var AdvertisementAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AdvertisementAmount")
     * @JMS\Expose
     * @JMS\SerializedName("AdvertisementAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAdvertisementAmount", setter="setAdvertisementAmount")
     */
    private $advertisementAmount;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("AwardDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAwardDate", setter="setAwardDate")
     */
    private $awardDate;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time")
     * @JMS\Expose
     * @JMS\SerializedName("AwardTime")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAwardTime", setter="setAwardTime")
     */
    private $awardTime;

    /**
     * @var ReceivedTenderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ReceivedTenderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ReceivedTenderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReceivedTenderQuantity", setter="setReceivedTenderQuantity")
     */
    private $receivedTenderQuantity;

    /**
     * @var LowerTenderAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LowerTenderAmount")
     * @JMS\Expose
     * @JMS\SerializedName("LowerTenderAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLowerTenderAmount", setter="setLowerTenderAmount")
     */
    private $lowerTenderAmount;

    /**
     * @var HigherTenderAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HigherTenderAmount")
     * @JMS\Expose
     * @JMS\SerializedName("HigherTenderAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHigherTenderAmount", setter="setHigherTenderAmount")
     */
    private $higherTenderAmount;

    /**
     * @var DateTimeInterface|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date")
     * @JMS\Expose
     * @JMS\SerializedName("StartDate")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getStartDate", setter="setStartDate")
     */
    private $startDate;

    /**
     * @var ReceivedElectronicTenderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ReceivedElectronicTenderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ReceivedElectronicTenderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReceivedElectronicTenderQuantity", setter="setReceivedElectronicTenderQuantity")
     */
    private $receivedElectronicTenderQuantity;

    /**
     * @var ReceivedForeignTenderQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ReceivedForeignTenderQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ReceivedForeignTenderQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getReceivedForeignTenderQuantity", setter="setReceivedForeignTenderQuantity")
     */
    private $receivedForeignTenderQuantity;

    /**
     * @var Contract|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Contract")
     * @JMS\Expose
     * @JMS\SerializedName("Contract")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContract", setter="setContract")
     */
    private $contract;

    /**
     * @var AwardedTenderedProject|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\AwardedTenderedProject")
     * @JMS\Expose
     * @JMS\SerializedName("AwardedTenderedProject")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAwardedTenderedProject", setter="setAwardedTenderedProject")
     */
    private $awardedTenderedProject;

    /**
     * @var ContractFormalizationPeriod|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ContractFormalizationPeriod")
     * @JMS\Expose
     * @JMS\SerializedName("ContractFormalizationPeriod")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractFormalizationPeriod", setter="setContractFormalizationPeriod")
     */
    private $contractFormalizationPeriod;

    /**
     * @var array<SubcontractTerms>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubcontractTerms>")
     * @JMS\Expose
     * @JMS\SerializedName("SubcontractTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubcontractTerms", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubcontractTerms", setter="setSubcontractTerms")
     */
    private $subcontractTerms;

    /**
     * @var array<WinningParty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\WinningParty>")
     * @JMS\Expose
     * @JMS\SerializedName("WinningParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="WinningParty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getWinningParty", setter="setWinningParty")
     */
    private $winningParty;

    /**
     * @return TenderResultCode|null
     */
    public function getTenderResultCode(): ?TenderResultCode
    {
        return $this->tenderResultCode;
    }

    /**
     * @return TenderResultCode
     */
    public function getTenderResultCodeWithCreate(): TenderResultCode
    {
        $this->tenderResultCode = is_null($this->tenderResultCode) ? new TenderResultCode() : $this->tenderResultCode;

        return $this->tenderResultCode;
    }

    /**
     * @param TenderResultCode|null $tenderResultCode
     * @return static
     */
    public function setTenderResultCode(?TenderResultCode $tenderResultCode = null): static
    {
        $this->tenderResultCode = $tenderResultCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTenderResultCode(): static
    {
        $this->tenderResultCode = null;

        return $this;
    }

    /**
     * @return array<Description>|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * @param array<Description>|null $description
     * @return static
     */
    public function setDescription(?array $description = null): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDescription(): static
    {
        $this->description = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDescription(): static
    {
        $this->description = [];

        return $this;
    }

    /**
     * @return Description|null
     */
    public function firstDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = reset($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @return Description|null
     */
    public function lastDescription(): ?Description
    {
        $description = $this->description ?? [];
        $description = end($description);

        if ($description === false) {
            return null;
        }

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addToDescription(Description $description): static
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addToDescriptionWithCreate(): Description
    {
        $this->addTodescription($description = new Description());

        return $description;
    }

    /**
     * @param Description $description
     * @return static
     */
    public function addOnceToDescription(Description $description): static
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        $this->description[0] = $description;

        return $this;
    }

    /**
     * @return Description
     */
    public function addOnceToDescriptionWithCreate(): Description
    {
        if (!is_array($this->description)) {
            $this->description = [];
        }

        if ($this->description === []) {
            $this->addOnceTodescription(new Description());
        }

        return $this->description[0];
    }

    /**
     * @return AdvertisementAmount|null
     */
    public function getAdvertisementAmount(): ?AdvertisementAmount
    {
        return $this->advertisementAmount;
    }

    /**
     * @return AdvertisementAmount
     */
    public function getAdvertisementAmountWithCreate(): AdvertisementAmount
    {
        $this->advertisementAmount = is_null($this->advertisementAmount) ? new AdvertisementAmount() : $this->advertisementAmount;

        return $this->advertisementAmount;
    }

    /**
     * @param AdvertisementAmount|null $advertisementAmount
     * @return static
     */
    public function setAdvertisementAmount(?AdvertisementAmount $advertisementAmount = null): static
    {
        $this->advertisementAmount = $advertisementAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAdvertisementAmount(): static
    {
        $this->advertisementAmount = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getAwardDate(): ?DateTimeInterface
    {
        return $this->awardDate;
    }

    /**
     * @param DateTimeInterface|null $awardDate
     * @return static
     */
    public function setAwardDate(?DateTimeInterface $awardDate = null): static
    {
        $this->awardDate = $awardDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAwardDate(): static
    {
        $this->awardDate = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getAwardTime(): ?DateTimeInterface
    {
        return $this->awardTime;
    }

    /**
     * @param DateTimeInterface|null $awardTime
     * @return static
     */
    public function setAwardTime(?DateTimeInterface $awardTime = null): static
    {
        $this->awardTime = $awardTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAwardTime(): static
    {
        $this->awardTime = null;

        return $this;
    }

    /**
     * @return ReceivedTenderQuantity|null
     */
    public function getReceivedTenderQuantity(): ?ReceivedTenderQuantity
    {
        return $this->receivedTenderQuantity;
    }

    /**
     * @return ReceivedTenderQuantity
     */
    public function getReceivedTenderQuantityWithCreate(): ReceivedTenderQuantity
    {
        $this->receivedTenderQuantity = is_null($this->receivedTenderQuantity) ? new ReceivedTenderQuantity() : $this->receivedTenderQuantity;

        return $this->receivedTenderQuantity;
    }

    /**
     * @param ReceivedTenderQuantity|null $receivedTenderQuantity
     * @return static
     */
    public function setReceivedTenderQuantity(?ReceivedTenderQuantity $receivedTenderQuantity = null): static
    {
        $this->receivedTenderQuantity = $receivedTenderQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReceivedTenderQuantity(): static
    {
        $this->receivedTenderQuantity = null;

        return $this;
    }

    /**
     * @return LowerTenderAmount|null
     */
    public function getLowerTenderAmount(): ?LowerTenderAmount
    {
        return $this->lowerTenderAmount;
    }

    /**
     * @return LowerTenderAmount
     */
    public function getLowerTenderAmountWithCreate(): LowerTenderAmount
    {
        $this->lowerTenderAmount = is_null($this->lowerTenderAmount) ? new LowerTenderAmount() : $this->lowerTenderAmount;

        return $this->lowerTenderAmount;
    }

    /**
     * @param LowerTenderAmount|null $lowerTenderAmount
     * @return static
     */
    public function setLowerTenderAmount(?LowerTenderAmount $lowerTenderAmount = null): static
    {
        $this->lowerTenderAmount = $lowerTenderAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLowerTenderAmount(): static
    {
        $this->lowerTenderAmount = null;

        return $this;
    }

    /**
     * @return HigherTenderAmount|null
     */
    public function getHigherTenderAmount(): ?HigherTenderAmount
    {
        return $this->higherTenderAmount;
    }

    /**
     * @return HigherTenderAmount
     */
    public function getHigherTenderAmountWithCreate(): HigherTenderAmount
    {
        $this->higherTenderAmount = is_null($this->higherTenderAmount) ? new HigherTenderAmount() : $this->higherTenderAmount;

        return $this->higherTenderAmount;
    }

    /**
     * @param HigherTenderAmount|null $higherTenderAmount
     * @return static
     */
    public function setHigherTenderAmount(?HigherTenderAmount $higherTenderAmount = null): static
    {
        $this->higherTenderAmount = $higherTenderAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHigherTenderAmount(): static
    {
        $this->higherTenderAmount = null;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface|null $startDate
     * @return static
     */
    public function setStartDate(?DateTimeInterface $startDate = null): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetStartDate(): static
    {
        $this->startDate = null;

        return $this;
    }

    /**
     * @return ReceivedElectronicTenderQuantity|null
     */
    public function getReceivedElectronicTenderQuantity(): ?ReceivedElectronicTenderQuantity
    {
        return $this->receivedElectronicTenderQuantity;
    }

    /**
     * @return ReceivedElectronicTenderQuantity
     */
    public function getReceivedElectronicTenderQuantityWithCreate(): ReceivedElectronicTenderQuantity
    {
        $this->receivedElectronicTenderQuantity = is_null($this->receivedElectronicTenderQuantity) ? new ReceivedElectronicTenderQuantity() : $this->receivedElectronicTenderQuantity;

        return $this->receivedElectronicTenderQuantity;
    }

    /**
     * @param ReceivedElectronicTenderQuantity|null $receivedElectronicTenderQuantity
     * @return static
     */
    public function setReceivedElectronicTenderQuantity(
        ?ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity = null,
    ): static {
        $this->receivedElectronicTenderQuantity = $receivedElectronicTenderQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReceivedElectronicTenderQuantity(): static
    {
        $this->receivedElectronicTenderQuantity = null;

        return $this;
    }

    /**
     * @return ReceivedForeignTenderQuantity|null
     */
    public function getReceivedForeignTenderQuantity(): ?ReceivedForeignTenderQuantity
    {
        return $this->receivedForeignTenderQuantity;
    }

    /**
     * @return ReceivedForeignTenderQuantity
     */
    public function getReceivedForeignTenderQuantityWithCreate(): ReceivedForeignTenderQuantity
    {
        $this->receivedForeignTenderQuantity = is_null($this->receivedForeignTenderQuantity) ? new ReceivedForeignTenderQuantity() : $this->receivedForeignTenderQuantity;

        return $this->receivedForeignTenderQuantity;
    }

    /**
     * @param ReceivedForeignTenderQuantity|null $receivedForeignTenderQuantity
     * @return static
     */
    public function setReceivedForeignTenderQuantity(
        ?ReceivedForeignTenderQuantity $receivedForeignTenderQuantity = null,
    ): static {
        $this->receivedForeignTenderQuantity = $receivedForeignTenderQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetReceivedForeignTenderQuantity(): static
    {
        $this->receivedForeignTenderQuantity = null;

        return $this;
    }

    /**
     * @return Contract|null
     */
    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    /**
     * @return Contract
     */
    public function getContractWithCreate(): Contract
    {
        $this->contract = is_null($this->contract) ? new Contract() : $this->contract;

        return $this->contract;
    }

    /**
     * @param Contract|null $contract
     * @return static
     */
    public function setContract(?Contract $contract = null): static
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContract(): static
    {
        $this->contract = null;

        return $this;
    }

    /**
     * @return AwardedTenderedProject|null
     */
    public function getAwardedTenderedProject(): ?AwardedTenderedProject
    {
        return $this->awardedTenderedProject;
    }

    /**
     * @return AwardedTenderedProject
     */
    public function getAwardedTenderedProjectWithCreate(): AwardedTenderedProject
    {
        $this->awardedTenderedProject = is_null($this->awardedTenderedProject) ? new AwardedTenderedProject() : $this->awardedTenderedProject;

        return $this->awardedTenderedProject;
    }

    /**
     * @param AwardedTenderedProject|null $awardedTenderedProject
     * @return static
     */
    public function setAwardedTenderedProject(?AwardedTenderedProject $awardedTenderedProject = null): static
    {
        $this->awardedTenderedProject = $awardedTenderedProject;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAwardedTenderedProject(): static
    {
        $this->awardedTenderedProject = null;

        return $this;
    }

    /**
     * @return ContractFormalizationPeriod|null
     */
    public function getContractFormalizationPeriod(): ?ContractFormalizationPeriod
    {
        return $this->contractFormalizationPeriod;
    }

    /**
     * @return ContractFormalizationPeriod
     */
    public function getContractFormalizationPeriodWithCreate(): ContractFormalizationPeriod
    {
        $this->contractFormalizationPeriod = is_null($this->contractFormalizationPeriod) ? new ContractFormalizationPeriod() : $this->contractFormalizationPeriod;

        return $this->contractFormalizationPeriod;
    }

    /**
     * @param ContractFormalizationPeriod|null $contractFormalizationPeriod
     * @return static
     */
    public function setContractFormalizationPeriod(
        ?ContractFormalizationPeriod $contractFormalizationPeriod = null,
    ): static {
        $this->contractFormalizationPeriod = $contractFormalizationPeriod;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractFormalizationPeriod(): static
    {
        $this->contractFormalizationPeriod = null;

        return $this;
    }

    /**
     * @return array<SubcontractTerms>|null
     */
    public function getSubcontractTerms(): ?array
    {
        return $this->subcontractTerms;
    }

    /**
     * @param array<SubcontractTerms>|null $subcontractTerms
     * @return static
     */
    public function setSubcontractTerms(?array $subcontractTerms = null): static
    {
        $this->subcontractTerms = $subcontractTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSubcontractTerms(): static
    {
        $this->subcontractTerms = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSubcontractTerms(): static
    {
        $this->subcontractTerms = [];

        return $this;
    }

    /**
     * @return SubcontractTerms|null
     */
    public function firstSubcontractTerms(): ?SubcontractTerms
    {
        $subcontractTerms = $this->subcontractTerms ?? [];
        $subcontractTerms = reset($subcontractTerms);

        if ($subcontractTerms === false) {
            return null;
        }

        return $subcontractTerms;
    }

    /**
     * @return SubcontractTerms|null
     */
    public function lastSubcontractTerms(): ?SubcontractTerms
    {
        $subcontractTerms = $this->subcontractTerms ?? [];
        $subcontractTerms = end($subcontractTerms);

        if ($subcontractTerms === false) {
            return null;
        }

        return $subcontractTerms;
    }

    /**
     * @param SubcontractTerms $subcontractTerms
     * @return static
     */
    public function addToSubcontractTerms(SubcontractTerms $subcontractTerms): static
    {
        $this->subcontractTerms[] = $subcontractTerms;

        return $this;
    }

    /**
     * @return SubcontractTerms
     */
    public function addToSubcontractTermsWithCreate(): SubcontractTerms
    {
        $this->addTosubcontractTerms($subcontractTerms = new SubcontractTerms());

        return $subcontractTerms;
    }

    /**
     * @param SubcontractTerms $subcontractTerms
     * @return static
     */
    public function addOnceToSubcontractTerms(SubcontractTerms $subcontractTerms): static
    {
        if (!is_array($this->subcontractTerms)) {
            $this->subcontractTerms = [];
        }

        $this->subcontractTerms[0] = $subcontractTerms;

        return $this;
    }

    /**
     * @return SubcontractTerms
     */
    public function addOnceToSubcontractTermsWithCreate(): SubcontractTerms
    {
        if (!is_array($this->subcontractTerms)) {
            $this->subcontractTerms = [];
        }

        if ($this->subcontractTerms === []) {
            $this->addOnceTosubcontractTerms(new SubcontractTerms());
        }

        return $this->subcontractTerms[0];
    }

    /**
     * @return array<WinningParty>|null
     */
    public function getWinningParty(): ?array
    {
        return $this->winningParty;
    }

    /**
     * @param array<WinningParty>|null $winningParty
     * @return static
     */
    public function setWinningParty(?array $winningParty = null): static
    {
        $this->winningParty = $winningParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetWinningParty(): static
    {
        $this->winningParty = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearWinningParty(): static
    {
        $this->winningParty = [];

        return $this;
    }

    /**
     * @return WinningParty|null
     */
    public function firstWinningParty(): ?WinningParty
    {
        $winningParty = $this->winningParty ?? [];
        $winningParty = reset($winningParty);

        if ($winningParty === false) {
            return null;
        }

        return $winningParty;
    }

    /**
     * @return WinningParty|null
     */
    public function lastWinningParty(): ?WinningParty
    {
        $winningParty = $this->winningParty ?? [];
        $winningParty = end($winningParty);

        if ($winningParty === false) {
            return null;
        }

        return $winningParty;
    }

    /**
     * @param WinningParty $winningParty
     * @return static
     */
    public function addToWinningParty(WinningParty $winningParty): static
    {
        $this->winningParty[] = $winningParty;

        return $this;
    }

    /**
     * @return WinningParty
     */
    public function addToWinningPartyWithCreate(): WinningParty
    {
        $this->addTowinningParty($winningParty = new WinningParty());

        return $winningParty;
    }

    /**
     * @param WinningParty $winningParty
     * @return static
     */
    public function addOnceToWinningParty(WinningParty $winningParty): static
    {
        if (!is_array($this->winningParty)) {
            $this->winningParty = [];
        }

        $this->winningParty[0] = $winningParty;

        return $this;
    }

    /**
     * @return WinningParty
     */
    public function addOnceToWinningPartyWithCreate(): WinningParty
    {
        if (!is_array($this->winningParty)) {
            $this->winningParty = [];
        }

        if ($this->winningParty === []) {
            $this->addOnceTowinningParty(new WinningParty());
        }

        return $this->winningParty[0];
    }
}
