<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\zffxcomfort\rsm;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\zffxcomfort\ram\ExchangedDocumentContextType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\ram\ExchangedDocumentType;
use horstoeko\invoicesuite\documents\models\zffxcomfort\ram\SupplyChainTradeTransactionType;

/**
 * @JMS\XmlNamespace(uri="urn:un:unece:uncefact:data:standard:CrossIndustryInvoice:100", prefix="rsm")
 * @JMS\XmlNamespace(uri="urn:un:unece:uncefact:data:standard:QualifiedDataType:100", prefix="qdt")
 * @JMS\XmlNamespace(uri="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100", prefix="ram")
 * @JMS\XmlNamespace(uri="http://www.w3.org/2001/XMLSchema", prefix="xs")
 * @JMS\XmlNamespace(uri="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100", prefix="udt")
 * @JMS\XmlNamespace(uri="http://www.w3.org/2001/XMLSchema-instance", prefix="xsi")
 */
class CrossIndustryInvoiceType
{
    use HandlesObjectFlags;

    /**
     * @var ExchangedDocumentContextType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\ExchangedDocumentContextType")
     * @JMS\Expose
     * @JMS\SerializedName("ExchangedDocumentContext")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:CrossIndustryInvoice:100", cdata=false)
     * @JMS\Accessor(getter="getExchangedDocumentContext", setter="setExchangedDocumentContext")
     */
    private $exchangedDocumentContext;

    /**
     * @var ExchangedDocumentType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\ExchangedDocumentType")
     * @JMS\Expose
     * @JMS\SerializedName("ExchangedDocument")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:CrossIndustryInvoice:100", cdata=false)
     * @JMS\Accessor(getter="getExchangedDocument", setter="setExchangedDocument")
     */
    private $exchangedDocument;

    /**
     * @var SupplyChainTradeTransactionType|null
     * @JMS\Groups({"zffx"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\zffxcomfort\ram\SupplyChainTradeTransactionType")
     * @JMS\Expose
     * @JMS\SerializedName("SupplyChainTradeTransaction")
     * @JMS\XmlElement(namespace="urn:un:unece:uncefact:data:standard:CrossIndustryInvoice:100", cdata=false)
     * @JMS\Accessor(getter="getSupplyChainTradeTransaction", setter="setSupplyChainTradeTransaction")
     */
    private $supplyChainTradeTransaction;

    /**
     * @return ExchangedDocumentContextType|null
     */
    public function getExchangedDocumentContext(): ?ExchangedDocumentContextType
    {
        return $this->exchangedDocumentContext;
    }

    /**
     * @return ExchangedDocumentContextType
     */
    public function getExchangedDocumentContextWithCreate(): ExchangedDocumentContextType
    {
        $this->exchangedDocumentContext = is_null($this->exchangedDocumentContext) ? new ExchangedDocumentContextType() : $this->exchangedDocumentContext;

        return $this->exchangedDocumentContext;
    }

    /**
     * @param ExchangedDocumentContextType|null $exchangedDocumentContext
     * @return static
     */
    public function setExchangedDocumentContext(?ExchangedDocumentContextType $exchangedDocumentContext = null): static
    {
        $this->exchangedDocumentContext = $exchangedDocumentContext;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExchangedDocumentContext(): static
    {
        $this->exchangedDocumentContext = null;

        return $this;
    }

    /**
     * @return ExchangedDocumentType|null
     */
    public function getExchangedDocument(): ?ExchangedDocumentType
    {
        return $this->exchangedDocument;
    }

    /**
     * @return ExchangedDocumentType
     */
    public function getExchangedDocumentWithCreate(): ExchangedDocumentType
    {
        $this->exchangedDocument = is_null($this->exchangedDocument) ? new ExchangedDocumentType() : $this->exchangedDocument;

        return $this->exchangedDocument;
    }

    /**
     * @param ExchangedDocumentType|null $exchangedDocument
     * @return static
     */
    public function setExchangedDocument(?ExchangedDocumentType $exchangedDocument = null): static
    {
        $this->exchangedDocument = $exchangedDocument;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExchangedDocument(): static
    {
        $this->exchangedDocument = null;

        return $this;
    }

    /**
     * @return SupplyChainTradeTransactionType|null
     */
    public function getSupplyChainTradeTransaction(): ?SupplyChainTradeTransactionType
    {
        return $this->supplyChainTradeTransaction;
    }

    /**
     * @return SupplyChainTradeTransactionType
     */
    public function getSupplyChainTradeTransactionWithCreate(): SupplyChainTradeTransactionType
    {
        $this->supplyChainTradeTransaction = is_null($this->supplyChainTradeTransaction) ? new SupplyChainTradeTransactionType() : $this->supplyChainTradeTransaction;

        return $this->supplyChainTradeTransaction;
    }

    /**
     * @param SupplyChainTradeTransactionType|null $supplyChainTradeTransaction
     * @return static
     */
    public function setSupplyChainTradeTransaction(
        ?SupplyChainTradeTransactionType $supplyChainTradeTransaction = null,
    ): static {
        $this->supplyChainTradeTransaction = $supplyChainTradeTransaction;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSupplyChainTradeTransaction(): static
    {
        $this->supplyChainTradeTransaction = null;

        return $this;
    }
}
