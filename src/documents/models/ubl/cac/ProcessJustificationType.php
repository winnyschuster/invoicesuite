<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Description;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousCancellationReasonCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ProcessReason;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ProcessReasonCode;

class ProcessJustificationType
{
    use HandlesObjectFlags;

    /**
     * @var PreviousCancellationReasonCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PreviousCancellationReasonCode")
     * @JMS\Expose
     * @JMS\SerializedName("PreviousCancellationReasonCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPreviousCancellationReasonCode", setter="setPreviousCancellationReasonCode")
     */
    private $previousCancellationReasonCode;

    /**
     * @var ProcessReasonCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ProcessReasonCode")
     * @JMS\Expose
     * @JMS\SerializedName("ProcessReasonCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getProcessReasonCode", setter="setProcessReasonCode")
     */
    private $processReasonCode;

    /**
     * @var array<ProcessReason>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\ProcessReason>")
     * @JMS\Expose
     * @JMS\SerializedName("ProcessReason")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ProcessReason", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getProcessReason", setter="setProcessReason")
     */
    private $processReason;

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
     * @return PreviousCancellationReasonCode|null
     */
    public function getPreviousCancellationReasonCode(): ?PreviousCancellationReasonCode
    {
        return $this->previousCancellationReasonCode;
    }

    /**
     * @return PreviousCancellationReasonCode
     */
    public function getPreviousCancellationReasonCodeWithCreate(): PreviousCancellationReasonCode
    {
        $this->previousCancellationReasonCode = is_null($this->previousCancellationReasonCode) ? new PreviousCancellationReasonCode() : $this->previousCancellationReasonCode;

        return $this->previousCancellationReasonCode;
    }

    /**
     * @param PreviousCancellationReasonCode|null $previousCancellationReasonCode
     * @return static
     */
    public function setPreviousCancellationReasonCode(
        ?PreviousCancellationReasonCode $previousCancellationReasonCode = null,
    ): static {
        $this->previousCancellationReasonCode = $previousCancellationReasonCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPreviousCancellationReasonCode(): static
    {
        $this->previousCancellationReasonCode = null;

        return $this;
    }

    /**
     * @return ProcessReasonCode|null
     */
    public function getProcessReasonCode(): ?ProcessReasonCode
    {
        return $this->processReasonCode;
    }

    /**
     * @return ProcessReasonCode
     */
    public function getProcessReasonCodeWithCreate(): ProcessReasonCode
    {
        $this->processReasonCode = is_null($this->processReasonCode) ? new ProcessReasonCode() : $this->processReasonCode;

        return $this->processReasonCode;
    }

    /**
     * @param ProcessReasonCode|null $processReasonCode
     * @return static
     */
    public function setProcessReasonCode(?ProcessReasonCode $processReasonCode = null): static
    {
        $this->processReasonCode = $processReasonCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetProcessReasonCode(): static
    {
        $this->processReasonCode = null;

        return $this;
    }

    /**
     * @return array<ProcessReason>|null
     */
    public function getProcessReason(): ?array
    {
        return $this->processReason;
    }

    /**
     * @param array<ProcessReason>|null $processReason
     * @return static
     */
    public function setProcessReason(?array $processReason = null): static
    {
        $this->processReason = $processReason;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetProcessReason(): static
    {
        $this->processReason = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearProcessReason(): static
    {
        $this->processReason = [];

        return $this;
    }

    /**
     * @return ProcessReason|null
     */
    public function firstProcessReason(): ?ProcessReason
    {
        $processReason = $this->processReason ?? [];
        $processReason = reset($processReason);

        if ($processReason === false) {
            return null;
        }

        return $processReason;
    }

    /**
     * @return ProcessReason|null
     */
    public function lastProcessReason(): ?ProcessReason
    {
        $processReason = $this->processReason ?? [];
        $processReason = end($processReason);

        if ($processReason === false) {
            return null;
        }

        return $processReason;
    }

    /**
     * @param ProcessReason $processReason
     * @return static
     */
    public function addToProcessReason(ProcessReason $processReason): static
    {
        $this->processReason[] = $processReason;

        return $this;
    }

    /**
     * @return ProcessReason
     */
    public function addToProcessReasonWithCreate(): ProcessReason
    {
        $this->addToprocessReason($processReason = new ProcessReason());

        return $processReason;
    }

    /**
     * @param ProcessReason $processReason
     * @return static
     */
    public function addOnceToProcessReason(ProcessReason $processReason): static
    {
        if (!is_array($this->processReason)) {
            $this->processReason = [];
        }

        $this->processReason[0] = $processReason;

        return $this;
    }

    /**
     * @return ProcessReason
     */
    public function addOnceToProcessReasonWithCreate(): ProcessReason
    {
        if (!is_array($this->processReason)) {
            $this->processReason = [];
        }

        if ($this->processReason === []) {
            $this->addOnceToprocessReason(new ProcessReason());
        }

        return $this->processReason[0];
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
}
