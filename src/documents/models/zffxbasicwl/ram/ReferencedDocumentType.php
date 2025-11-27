<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType;
use JMS\Serializer\Annotation as JMS;

class ReferencedDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("IssuerAssignedID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIssuerAssignedID", setter="setIssuerAssignedID")
     */
    private $issuerAssignedID;

    /**
     * @var null|FormattedDateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\qdt\FormattedDateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("FormattedIssueDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getFormattedIssueDateTime", setter="setFormattedIssueDateTime")
     */
    private $formattedIssueDateTime;

    /**
     * @return null|IDType
     */
    public function getIssuerAssignedID(): ?IDType
    {
        return $this->issuerAssignedID;
    }

    /**
     * @return IDType
     */
    public function getIssuerAssignedIDWithCreate(): IDType
    {
        $this->issuerAssignedID = is_null($this->issuerAssignedID) ? new IDType() : $this->issuerAssignedID;

        return $this->issuerAssignedID;
    }

    /**
     * @param  null|IDType $issuerAssignedID
     * @return static
     */
    public function setIssuerAssignedID(?IDType $issuerAssignedID = null): static
    {
        $this->issuerAssignedID = $issuerAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIssuerAssignedID(): static
    {
        $this->issuerAssignedID = null;

        return $this;
    }

    /**
     * @return null|FormattedDateTimeType
     */
    public function getFormattedIssueDateTime(): ?FormattedDateTimeType
    {
        return $this->formattedIssueDateTime;
    }

    /**
     * @return FormattedDateTimeType
     */
    public function getFormattedIssueDateTimeWithCreate(): FormattedDateTimeType
    {
        $this->formattedIssueDateTime = is_null($this->formattedIssueDateTime) ? new FormattedDateTimeType() : $this->formattedIssueDateTime;

        return $this->formattedIssueDateTime;
    }

    /**
     * @param  null|FormattedDateTimeType $formattedIssueDateTime
     * @return static
     */
    public function setFormattedIssueDateTime(?FormattedDateTimeType $formattedIssueDateTime = null): static
    {
        $this->formattedIssueDateTime = $formattedIssueDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFormattedIssueDateTime(): static
    {
        $this->formattedIssueDateTime = null;

        return $this;
    }
}
