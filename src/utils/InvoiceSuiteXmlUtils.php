<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\utils;

use DOMDocument;
use DOMXPath;

/**
 * Class representing XML utilities
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteXmlUtils
{
    /**
     * Create a safe DOMDocument instance
     *
     * @return DOMDocument
     */
    public static function createDomDocument(): DOMDocument
    {
        $domDocument = new DOMDocument();
        $domDocument->resolveExternals = false;
        $domDocument->substituteEntities = false;

        return $domDocument;
    }

    /**
     * Create a safe DOMXPath instance
     *
     * @param  DOMDocument $domDocument
     * @return DOMXPath
     */
    public static function createDomXPath(DOMDocument $domDocument): DOMXPath
    {
        return new DOMXPath($domDocument);
    }

    /**
     * Create DOMDocument and load XML
     *
     * @param  string            $source
     * @return DOMDocument|false
     */
    public static function loadXml(string $source): DOMDocument|false
    {
        $domDocument = static::createDomDocument();

        if (false === $domDocument->loadXML($source, LIBXML_NONET | LIBXML_NOERROR | LIBXML_NOWARNING)) {
            return false;
        }

        return $domDocument;
    }
}
