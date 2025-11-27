<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Amount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AwardingCriterionDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AwardingCriterionID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;

class AwardingCriterionResponseType
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
     * @var AwardingCriterionID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\AwardingCriterionID")
     * @JMS\Expose
     * @JMS\SerializedName("AwardingCriterionID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAwardingCriterionID", setter="setAwardingCriterionID")
     */
    private $awardingCriterionID;

    /**
     * @var array<AwardingCriterionDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\AwardingCriterionDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("AwardingCriterionDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AwardingCriterionDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getAwardingCriterionDescription", setter="setAwardingCriterionDescription")
     */
    private $awardingCriterionDescription;

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
     * @var Quantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @var Amount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Amount")
     * @JMS\Expose
     * @JMS\SerializedName("Amount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAmount", setter="setAmount")
     */
    private $amount;

    /**
     * @var array<SubordinateAwardingCriterionResponse>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SubordinateAwardingCriterionResponse>")
     * @JMS\Expose
     * @JMS\SerializedName("SubordinateAwardingCriterionResponse")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SubordinateAwardingCriterionResponse", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSubordinateAwardingCriterionResponse", setter="setSubordinateAwardingCriterionResponse")
     */
    private $subordinateAwardingCriterionResponse;

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
     * @return AwardingCriterionID|null
     */
    public function getAwardingCriterionID(): ?AwardingCriterionID
    {
        return $this->awardingCriterionID;
    }

    /**
     * @return AwardingCriterionID
     */
    public function getAwardingCriterionIDWithCreate(): AwardingCriterionID
    {
        $this->awardingCriterionID = is_null($this->awardingCriterionID) ? new AwardingCriterionID() : $this->awardingCriterionID;

        return $this->awardingCriterionID;
    }

    /**
     * @param AwardingCriterionID|null $awardingCriterionID
     * @return static
     */
    public function setAwardingCriterionID(?AwardingCriterionID $awardingCriterionID = null): static
    {
        $this->awardingCriterionID = $awardingCriterionID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAwardingCriterionID(): static
    {
        $this->awardingCriterionID = null;

        return $this;
    }

    /**
     * @return array<AwardingCriterionDescription>|null
     */
    public function getAwardingCriterionDescription(): ?array
    {
        return $this->awardingCriterionDescription;
    }

    /**
     * @param array<AwardingCriterionDescription>|null $awardingCriterionDescription
     * @return static
     */
    public function setAwardingCriterionDescription(?array $awardingCriterionDescription = null): static
    {
        $this->awardingCriterionDescription = $awardingCriterionDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAwardingCriterionDescription(): static
    {
        $this->awardingCriterionDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAwardingCriterionDescription(): static
    {
        $this->awardingCriterionDescription = [];

        return $this;
    }

    /**
     * @return AwardingCriterionDescription|null
     */
    public function firstAwardingCriterionDescription(): ?AwardingCriterionDescription
    {
        $awardingCriterionDescription = $this->awardingCriterionDescription ?? [];
        $awardingCriterionDescription = reset($awardingCriterionDescription);

        if ($awardingCriterionDescription === false) {
            return null;
        }

        return $awardingCriterionDescription;
    }

    /**
     * @return AwardingCriterionDescription|null
     */
    public function lastAwardingCriterionDescription(): ?AwardingCriterionDescription
    {
        $awardingCriterionDescription = $this->awardingCriterionDescription ?? [];
        $awardingCriterionDescription = end($awardingCriterionDescription);

        if ($awardingCriterionDescription === false) {
            return null;
        }

        return $awardingCriterionDescription;
    }

    /**
     * @param AwardingCriterionDescription $awardingCriterionDescription
     * @return static
     */
    public function addToAwardingCriterionDescription(
        AwardingCriterionDescription $awardingCriterionDescription,
    ): static {
        $this->awardingCriterionDescription[] = $awardingCriterionDescription;

        return $this;
    }

    /**
     * @return AwardingCriterionDescription
     */
    public function addToAwardingCriterionDescriptionWithCreate(): AwardingCriterionDescription
    {
        $this->addToawardingCriterionDescription($awardingCriterionDescription = new AwardingCriterionDescription());

        return $awardingCriterionDescription;
    }

    /**
     * @param AwardingCriterionDescription $awardingCriterionDescription
     * @return static
     */
    public function addOnceToAwardingCriterionDescription(
        AwardingCriterionDescription $awardingCriterionDescription,
    ): static {
        if (!is_array($this->awardingCriterionDescription)) {
            $this->awardingCriterionDescription = [];
        }

        $this->awardingCriterionDescription[0] = $awardingCriterionDescription;

        return $this;
    }

    /**
     * @return AwardingCriterionDescription
     */
    public function addOnceToAwardingCriterionDescriptionWithCreate(): AwardingCriterionDescription
    {
        if (!is_array($this->awardingCriterionDescription)) {
            $this->awardingCriterionDescription = [];
        }

        if ($this->awardingCriterionDescription === []) {
            $this->addOnceToawardingCriterionDescription(new AwardingCriterionDescription());
        }

        return $this->awardingCriterionDescription[0];
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
     * @return Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param Quantity|null $quantity
     * @return static
     */
    public function setQuantity(?Quantity $quantity = null): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetQuantity(): static
    {
        $this->quantity = null;

        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->amount;
    }

    /**
     * @return Amount
     */
    public function getAmountWithCreate(): Amount
    {
        $this->amount = is_null($this->amount) ? new Amount() : $this->amount;

        return $this->amount;
    }

    /**
     * @param Amount|null $amount
     * @return static
     */
    public function setAmount(?Amount $amount = null): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAmount(): static
    {
        $this->amount = null;

        return $this;
    }

    /**
     * @return array<SubordinateAwardingCriterionResponse>|null
     */
    public function getSubordinateAwardingCriterionResponse(): ?array
    {
        return $this->subordinateAwardingCriterionResponse;
    }

    /**
     * @param array<SubordinateAwardingCriterionResponse>|null $subordinateAwardingCriterionResponse
     * @return static
     */
    public function setSubordinateAwardingCriterionResponse(?array $subordinateAwardingCriterionResponse = null): static
    {
        $this->subordinateAwardingCriterionResponse = $subordinateAwardingCriterionResponse;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSubordinateAwardingCriterionResponse(): static
    {
        $this->subordinateAwardingCriterionResponse = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSubordinateAwardingCriterionResponse(): static
    {
        $this->subordinateAwardingCriterionResponse = [];

        return $this;
    }

    /**
     * @return SubordinateAwardingCriterionResponse|null
     */
    public function firstSubordinateAwardingCriterionResponse(): ?SubordinateAwardingCriterionResponse
    {
        $subordinateAwardingCriterionResponse = $this->subordinateAwardingCriterionResponse ?? [];
        $subordinateAwardingCriterionResponse = reset($subordinateAwardingCriterionResponse);

        if ($subordinateAwardingCriterionResponse === false) {
            return null;
        }

        return $subordinateAwardingCriterionResponse;
    }

    /**
     * @return SubordinateAwardingCriterionResponse|null
     */
    public function lastSubordinateAwardingCriterionResponse(): ?SubordinateAwardingCriterionResponse
    {
        $subordinateAwardingCriterionResponse = $this->subordinateAwardingCriterionResponse ?? [];
        $subordinateAwardingCriterionResponse = end($subordinateAwardingCriterionResponse);

        if ($subordinateAwardingCriterionResponse === false) {
            return null;
        }

        return $subordinateAwardingCriterionResponse;
    }

    /**
     * @param SubordinateAwardingCriterionResponse $subordinateAwardingCriterionResponse
     * @return static
     */
    public function addToSubordinateAwardingCriterionResponse(
        SubordinateAwardingCriterionResponse $subordinateAwardingCriterionResponse,
    ): static {
        $this->subordinateAwardingCriterionResponse[] = $subordinateAwardingCriterionResponse;

        return $this;
    }

    /**
     * @return SubordinateAwardingCriterionResponse
     */
    public function addToSubordinateAwardingCriterionResponseWithCreate(): SubordinateAwardingCriterionResponse
    {
        $this->addTosubordinateAwardingCriterionResponse($subordinateAwardingCriterionResponse = new SubordinateAwardingCriterionResponse());

        return $subordinateAwardingCriterionResponse;
    }

    /**
     * @param SubordinateAwardingCriterionResponse $subordinateAwardingCriterionResponse
     * @return static
     */
    public function addOnceToSubordinateAwardingCriterionResponse(
        SubordinateAwardingCriterionResponse $subordinateAwardingCriterionResponse,
    ): static {
        if (!is_array($this->subordinateAwardingCriterionResponse)) {
            $this->subordinateAwardingCriterionResponse = [];
        }

        $this->subordinateAwardingCriterionResponse[0] = $subordinateAwardingCriterionResponse;

        return $this;
    }

    /**
     * @return SubordinateAwardingCriterionResponse
     */
    public function addOnceToSubordinateAwardingCriterionResponseWithCreate(): SubordinateAwardingCriterionResponse
    {
        if (!is_array($this->subordinateAwardingCriterionResponse)) {
            $this->subordinateAwardingCriterionResponse = [];
        }

        if ($this->subordinateAwardingCriterionResponse === []) {
            $this->addOnceTosubordinateAwardingCriterionResponse(new SubordinateAwardingCriterionResponse());
        }

        return $this->subordinateAwardingCriterionResponse[0];
    }
}
