<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\zugferd;

use horstoeko\zugferd\ZugferdDocumentBuilder;
use horstoeko\invoicesuite\exceptions\InvoiceSuiteFileNotFoundException;
use horstoeko\invoicesuite\pdfs\abstracts\InvoiceSuiteAbstractPdfConstructor;

/**
 * Legacy-class representing the ZUGFeRD PDF document builder for outgoing documents
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class ZugferdDocumentPdfBuilder extends InvoiceSuiteAbstractPdfConstructor
{
    /**
     * @see self::__construct
     */
    public static function fromPdfFile(ZugferdDocumentBuilder $documentBuilder, string $pdfFileName): self
    {
        if (!is_file($pdfFileName)) {
            throw new InvoiceSuiteFileNotFoundException($pdfFileName);
        }

        return new self($documentBuilder, $pdfFileName);
    }

    /**
     * @see self::__construct
     */
    public static function fromPdfString(ZugferdDocumentBuilder $documentBuilder, string $pdfContent): self
    {
        return new self($documentBuilder, $pdfContent);
    }

    /**
     * Constructor
     *
     * @param ZugferdDocumentBuilder $documentBuilder The instance of the document builder. Needed to get the XML data
     * @param string                 $pdfData         The full filename or a string containing the binary pdf data. This is the original PDF (e.g. created by a ERP system)
     */
    public function __construct(ZugferdDocumentBuilder $documentBuilder, string $pdfData)
    {
        parent::__construct(
            $documentBuilder->getDocumentBuilderInstance()->getCurrentDocumentFormatProvider(),
            $documentBuilder->getContent(),
            $pdfData
        );
    }
}
