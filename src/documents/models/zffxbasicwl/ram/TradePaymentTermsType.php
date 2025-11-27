<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxbasicwl\ram;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType;
use horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\TextType;
use JMS\Serializer\Annotation as JMS;

class TradePaymentTermsType
{
    use HandlesObjectFlags;

    /**
     * @var null|TextType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\TextType")
     * @JMS\Expose
     * @JMS\SerializedName("Description")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDescription", setter="setDescription")
     */
    private $description;

    /**
     * @var null|DateTimeType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\DateTimeType")
     * @JMS\Expose
     * @JMS\SerializedName("DueDateDateTime")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDueDateDateTime", setter="setDueDateDateTime")
     */
    private $dueDateDateTime;

    /**
     * @var null|IDType
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxbasicwl\udt\IDType")
     * @JMS\Expose
     * @JMS\SerializedName("DirectDebitMandateID")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", cdata=false)
     * @JMS\Accessor(getter="getDirectDebitMandateID", setter="setDirectDebitMandateID")
     */
    private $directDebitMandateID;

    /**
     * @return null|TextType
     */
    public function getDescription(): ?TextType
    {
        return $this->description;
    }

    /**
     * @return TextType
     */
    public function getDescriptionWithCreate(): TextType
    {
        $this->description = is_null($this->description) ? new TextType() : $this->description;

        return $this->description;
    }

    /**
     * @param  null|TextType $description
     * @return static
     */
    public function setDescription(?TextType $description = null): static
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
     * @return null|DateTimeType
     */
    public function getDueDateDateTime(): ?DateTimeType
    {
        return $this->dueDateDateTime;
    }

    /**
     * @return DateTimeType
     */
    public function getDueDateDateTimeWithCreate(): DateTimeType
    {
        $this->dueDateDateTime = is_null($this->dueDateDateTime) ? new DateTimeType() : $this->dueDateDateTime;

        return $this->dueDateDateTime;
    }

    /**
     * @param  null|DateTimeType $dueDateDateTime
     * @return static
     */
    public function setDueDateDateTime(?DateTimeType $dueDateDateTime = null): static
    {
        $this->dueDateDateTime = $dueDateDateTime;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDueDateDateTime(): static
    {
        $this->dueDateDateTime = null;

        return $this;
    }

    /**
     * @return null|IDType
     */
    public function getDirectDebitMandateID(): ?IDType
    {
        return $this->directDebitMandateID;
    }

    /**
     * @return IDType
     */
    public function getDirectDebitMandateIDWithCreate(): IDType
    {
        $this->directDebitMandateID = is_null($this->directDebitMandateID) ? new IDType() : $this->directDebitMandateID;

        return $this->directDebitMandateID;
    }

    /**
     * @param  null|IDType $directDebitMandateID
     * @return static
     */
    public function setDirectDebitMandateID(?IDType $directDebitMandateID = null): static
    {
        $this->directDebitMandateID = $directDebitMandateID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDirectDebitMandateID(): static
    {
        $this->directDebitMandateID = null;

        return $this;
    }
}
