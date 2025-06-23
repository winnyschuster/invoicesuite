<?php

namespace horstoeko\invoicesuite\concerns;

use LogicException;

/**
 * Trait representing reader pointer handling
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
trait HandlesReaderPointers
{
    /**
     * Internal pointer state storage
     *
     * @var array<string, int>
     */
    protected $pointerState = [];

    /**
     * First value of named pointer (init)
     *
     * @param string $name
     * @return self
     */
    protected function initNamedPointer(string $name): self
    {
        $this->pointerState[$name] = 0;

        return $this;
    }

    /**
     * Returns true if the given pointers exists, otherwise false
     *
     * @param string $name
     * @return boolean
     */
    protected function hasNamedPointer(string $name): bool
    {
        return array_key_exists($name, $this->pointerState);
    }

    /**
     * Check that a pointer is regisered. If not, an exception will be raised
     *
     * @param string $name
     * @return void
     */
    protected function testHasNamedPointer(string $name): void
    {
        if (!static::hasNamedPointer($name)) {
            throw new LogicException(sprintf("No pointer with name %s registered", $name));
        }
    }

    /**
     * Get the value of a named pointer
     *
     * @param string $name
     * @return integer
     */
    protected function getNamedPointer(string $name): int
    {
        static::testHasNamedPointer($name);

        return $this->pointerState[$name] ?? 0;
    }

    /**
     * Next value oi named pointer
     *
     * @param string $name
     * @return self
     */
    protected function nextNamedPointer(string $name): self
    {
        static::testHasNamedPointer($name);

        $this->pointerState[$name] = static::getNamedPointer($name) + 1;

        return $this;
    }

    /**
     * Check that an array has key. The array key is identified by a pointer state
     *
     * @param array $array
     * @param string $name
     * @return boolean
     */
    protected function getArrayHasNamedPointer(array $array, string $name): bool
    {
        static::testHasNamedPointer($name);

        return array_key_exists(static::getNamedPointer($name), $array);
    }
}
