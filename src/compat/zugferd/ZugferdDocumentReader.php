<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\zugferd;

use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;

/**
 * Legacy-class representing the ZUGFeRD document reader for incoming documents
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class ZugferdDocumentReader
{
    /**
     * Internal document builder
     *
     * @var InvoiceSuiteDocumentBuilder
     */
    protected InvoiceSuiteDocumentReader $documentReader;

    /**
     * Constructor (hidden)
     *
     * @param  InvoiceSuiteDocumentReader $documentReader
     * @return void
     */
    final protected function __construct(
        InvoiceSuiteDocumentReader $documentReader
    ) {
        $this->documentReader = $documentReader;
    }

    /**
     * Guess the profile type of a xml file.
     *
     * @param  string                $xmlFilename
     * @return ZugferdDocumentReader
     */
    public static function readAndGuessFromFile(string $xmlFilename): static
    {
        return new static(InvoiceSuiteDocumentReader::createFromFile($xmlFilename));
    }

    /**
     * Guess the profile type of the readden xml document.
     *
     * @param  string                $xmlContent
     * @return ZugferdDocumentReader
     */
    public static function readAndGuessFromContent(string $xmlContent): static
    {
        return new static(InvoiceSuiteDocumentReader::createFromContent($xmlContent));
    }
}
