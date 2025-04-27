<?php

namespace horstoeko\invoicesuite\providers\ubl;

use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProvider;
use horstoeko\invoicesuite\models\ubl\main\Invoice;

class InvoiceSuiteUblInvoiceProvider extends InvoiceSuiteAbstractFormatProvider
{
    /**
     * @inheritDoc
     */
    public function getUniqueId(): string
    {
        return 'ublinvoice';
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Common Invoice in UBL syntax';
    }

    /**
     * @inheritDoc
     */
    public function getMetadataDirectories(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getHandlers(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getListeners(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getSubscribers(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getGroups(): array
    {
        return ["ubl"];
    }

    /**
     * @inheritDoc
     */
    public function isSatisfiableBy(string $content): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function getRootClassName(): string
    {
        return Invoice::class;
    }

    /**
     * @inheritDoc
     */
    public function getReaderClassName(): string
    {
        return InvoiceSuiteUblInvoiceProviderReader::class;
    }

    /**
     * @inheritDoc
     */
    public function getBuilderClassName(): string
    {
        return InvoiceSuiteUblInvoiceProviderBuilder::class;
    }
}
