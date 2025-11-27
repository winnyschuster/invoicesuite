<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxminimum\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxminimum\qdt\DocumentCodeType;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxminimum\udt\IDType;
use JMS\Serializer\Annotation as JMS;

class ExchangedDocumentType
{
    use HandlesObjectFlags;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var null|DocumentCodeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\qdt\DocumentCodeType")
     * @JMS\Expose
     * @JMS\SerializedName("TypeCode")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getTypeCode", setter="setTypeCode")
     */
    private $typeCode;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxminimum\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("IssueDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getIssueDateTime", setter="setIssueDateTime")
     */
    private $issueDateTime;

    /**
     * @return null|IDType
     */
    public function getID(): ?IDType
    {
        return $this->iD;
    }

    /**
     * @return IDType
     */
    public function getIDWithCreate(): IDType
    {
        $this->iD = is_null($this->iD) ? new IDType() : $this->iD;

        return $this->iD;
    }

    /**
     * @param  null|IDType $iD
     * @return static
     */
    public function setID(?IDType $iD = null): static
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
     * @return null|DocumentCodeType
     */
    public function getTypeCode(): ?DocumentCodeType
    {
        return $this->typeCode;
    }

    /**
     * @return DocumentCodeType
     */
    public function getTypeCodeWithCreate(): DocumentCodeType
    {
        $this->typeCode = is_null($this->typeCode) ? new DocumentCodeType() : $this->typeCode;

        return $this->typeCode;
    }

    /**
     * @param  null|DocumentCodeType $typeCode
     * @return static
     */
    public function setTypeCode(?DocumentCodeType $typeCode = null): static
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
     * @return null|DateTimeType
     */
    public function getIssueDateTime(): ?DateTimeType
    {
        return $this->issueDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getIssueDateTimeWithCreate(): DateTimeType
    {
        $this->issueDateTime = is_null($this->issueDateTime) ? new DateTimeType() : $this->issueDateTime;

        return $this->issueDateTime;
    }

    /**
     * @param  null|DateTimeType $issueDateTime
     * @return static
     */
    public function setIssueDateTime(?DateTimeType $issueDateTime = null): static
    {
        $this->issueDateTime = $issueDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIssueDateTime(): static
    {
        $this->issueDateTime = null;

        return $this;
    }
}
