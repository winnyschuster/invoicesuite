<?php

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\pdf;

use horstoeko\invoicesuite\concerns\HandlesCurrentDocumentFormatProvider;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractDocumentFormatProvider;
use horstoeko\invoicesuite\concerns\HandlesPdfConstructorRawContents;

/**
 * Class representing the PDF document build
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
abstract class InvoiceSuiteAbstractPdfConstructor
{
    use HandlesCurrentDocumentFormatProvider;
    use HandlesPdfConstructorRawContents;

    /**
     * Constructor
     *
     * @param InvoiceSuiteAbstractDocumentFormatProvider $newProvider
     * @param string $newRawDocumentContent
     * @param string $newRawPdfContent
     * @return self
     */
    public function __construct(
        InvoiceSuiteAbstractDocumentFormatProvider $newProvider,
        string $newRawDocumentContent,
        string $newRawPdfContent
    ) {
        $this->setCurrentDocumentFormatProvider($newProvider);
        $this->setRawDocumentContent($newRawDocumentContent);
        $this->setRawPdfContent($newRawPdfContent);
    }

    /**
     * Generate the final PDF and get the content as string
     *
     * @return string
     */
    public function generatePdfDocumentAndGetContent(): string
    {
        return $this->generatePdfDocument()->getGeneratedPdfDocumentContent();
    }

    /**
     * Generate the final PDF and save it to a file
     *
     * @param string $toFilename
     * @return InvoiceSuiteAbstractPdfConstructor
     */
    public function generatePdfDocumentAndSaveToFile(string $toFilename): self
    {
        return $this->generatePdfDocument()->saveGeneratedPdfDocumentToFile($toFilename);
    }

    /**
     * Generate the final PDF
     *
     * @return InvoiceSuiteAbstractPdfConstructor
     */
    protected abstract function generatePdfDocument(): self;

    /**
     * Get the content of the generated PDF as string
     *
     * @return string
     */
    protected abstract function getGeneratedPdfDocumentContent(): string;

    /**
     * Save the content of the generated PDF to a file
     *
     * @param string $toFilename
     * @return InvoiceSuiteAbstractPdfConstructor
     */
    protected abstract function saveGeneratedPdfDocumentToFile(string $toFilename): self;
}
