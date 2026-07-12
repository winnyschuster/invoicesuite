<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\documents\abstracts;

use horstoeko\invoicesuite\concerns\HandlesCurrentDocumentFormatProvider;
use horstoeko\invoicesuite\concerns\HandlesDocumentRootObject;
use horstoeko\invoicesuite\concerns\HandlesDocumentSerializer;
use horstoeko\invoicesuite\concerns\HandlesMessageBag;
use horstoeko\invoicesuite\concerns\HandlesMethodTracing;
use horstoeko\invoicesuite\utils\InvoiceSuiteFileUtils;
use JMS\Serializer\Exception\RuntimeException as JMSSerializerRuntimeException;
use JMS\Serializer\SerializationContext;

/**
 * Class representing methods for a builder
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
abstract class InvoiceSuiteAbstractDocumentFormatBuilder extends InvoiceSuiteAbstractDocumentBaseBuilder
{
    use HandlesCurrentDocumentFormatProvider;
    use HandlesDocumentRootObject;
    use HandlesDocumentSerializer;
    use HandlesMessageBag;
    use HandlesMethodTracing;

    /**
     * Constructor
     *
     * @param InvoiceSuiteAbstractDocumentFormatProvider $newProvider
     */
    public function __construct(
        InvoiceSuiteAbstractDocumentFormatProvider $newProvider
    ) {
        $this->setCurrentDocumentFormatProvider($newProvider);
        $this->createAndInitDocumentSerializerByFormatProvider();
        $this->createAndInitDocumentRootObjectByFormatProvider();
    }

    /**
     * Get the serialized content
     *
     * @return string
     *
     * @throws JMSSerializerRuntimeException
     */
    public function getContent(): string
    {
        return $this->documentSerializer->serialize(
            $this->getDocumentRootObject(),
            $this->getCurrentDocumentFormatProvider()->getContentType()->value,
            SerializationContext::create()->setGroups($this->getCurrentDocumentFormatProvider()->getSerializerGroups())
        );
    }

    /**
     * Save the serialized content to a file
     *
     * @param  string $tofile
     * @return void
     *
     * @throws JMSSerializerRuntimeException
     */
    public function saveContentToFile(
        string $tofile
    ): void {
        InvoiceSuiteFileUtils::putContentToFile($tofile, $this->getContent());
    }
}
