<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\documents\providers\fatturapa;

use JMS\Serializer\Handler\SubscribingHandlerInterface;

class InvoiceSuiteFatturaPaSerializerHandler implements SubscribingHandlerInterface
{
    /**
     * Get subscribing methods
     *
     * @return array<int, array{direction: int, format: string, type: string, method: string}>
     */
    public static function getSubscribingMethods()
    {
        return [];
    }
}
