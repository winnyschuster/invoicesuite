<?php

namespace horstoeko\invoicesuite\utils;

use horstoeko\stringmanagement\StringUtils;

/**
 * class representing string utilities
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuiteStringUtils
{
    /**
     * Its like the almost known C#-Methods
     * Tests if string is not null and has a value != ""
     *
     * @param string|null $str
     * @return boolean
     */
    public static function stringIsNullOrEmpty(?string $str): bool
    {
        return StringUtils::stringIsNullOrEmpty($str);
    }

    /**
     * Check if all elements are null or empty
     * Tests if any string in $values is not null and has a value != ""
     *
     * @param array<string|null> $values
     * @return bool
     */
    public static function allIsNullOrEmpty(array $values): bool
    {
        foreach ($values as $value) {
            if (!static::stringIsNullOrEmpty($value)) {
                return false;
            }
        }

        return true;
    }
}
