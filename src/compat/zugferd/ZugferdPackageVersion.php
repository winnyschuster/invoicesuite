<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\zugferd;

use horstoeko\invoicesuite\utils\InvoiceSuitePackageVersion;

/**
 * Legacy-class representing some tools for getting the package version
 * of this package
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class ZugferdPackageVersion
{
    /**
     * Get the installed version of this library
     *
     * @return string
     */
    public static function getInstalledVersion(): string
    {
        return InvoiceSuitePackageVersion::getInstalledVersion();
    }
}
