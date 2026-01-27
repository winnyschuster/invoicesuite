<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\concerns;

/**
 * Trait representing root-object handling
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
trait HandlesDocumentRootObject
{
    /**
     * Invoice root object
     *
     * @var mixed
     */
    protected $documentRootObject;

    /**
     * Initialize the root object
     *
     * @return static
     */
    public function createAndInitDocumentRootObjectByFormatProvider(): static
    {
        $className = $this->getCurrentDocumentFormatProvider()->getRootClassName();

        return $this->setDocumentRootObject(new $className())->initDocumentRootObject();
    }

    /**
     * Get the root object
     *
     * @return object
     */
    public function getDocumentRootObject()
    {
        return $this->documentRootObject;
    }

    /**
     * Set the rooot object
     *
     * @param  object $rootObject
     * @return static
     */
    public function setDocumentRootObject(
        object $rootObject
    ): static {
        $this->documentRootObject = $rootObject;

        return $this;
    }

    /**
     * Initialize the root object
     *
     * @return static
     */
    public function initDocumentRootObject(): static
    {
        return $this;
    }
}
