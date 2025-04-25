<?php

namespace horstoeko\invoicesuite\concerns;

use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProvider;

/**
 * Trait representing methods for handling the current format provider
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesCurrentFormatProvider
{
    /**
     * The format provider for which the serializer was created
     *
     * @var InvoiceSuiteAbstractFormatProvider
     */
    protected $currentInvoiceSuiteAbstractFormat;

    /**
     * Returns the requested format provider
     *
     * @return InvoiceSuiteAbstractFormatProvider
     */
    public function getCurrentFormatProvider(): InvoiceSuiteAbstractFormatProvider
    {
        return $this->currentInvoiceSuiteAbstractFormat;
    }

    /**
     * Set the requested format provider
     *
     * @param InvoiceSuiteAbstractFormatProvider $invoiceSuiteAbstractFormatProvider
     * @return void
     */
    public function setCurrentFormatProvider(InvoiceSuiteAbstractFormatProvider $invoiceSuiteAbstractFormatProvider): void
    {
        $this->currentInvoiceSuiteAbstractFormat = $invoiceSuiteAbstractFormatProvider;
    }
}
