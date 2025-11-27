<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\documents\dto;

use DateTimeInterface;

/**
 * Class representing a DTO for...
 *
 * @category InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @see      https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuitePaymentTermDTO
{
    /**
     * The text description of the payment terms
     *
     * @var null|string
     */
    protected ?string $description = null;

    /**
     * The date by which payment is due
     *
     * @var null|DateTimeInterface
     */
    protected ?DateTimeInterface $dueDate = null;

    /**
     * The payment discounts
     *
     * @var array<InvoiceSuitePaymentTermDiscountDTO>
     */
    protected array $discountTerms = [];

    /**
     * The payment penalties
     *
     * @var array<InvoiceSuitePaymentTermPenaltyDTO>
     */
    protected array $penaltyTerms = [];

    /**
     * The mandate reference
     *
     * @var null|string
     */
    protected ?string $mandate = null;

    /**
     * Constructor
     *
     * @param null|string                               $description   The text description of the payment terms
     * @param null|DateTimeInterface                    $dueDate       The date by which payment is due
     * @param array<InvoiceSuitePaymentTermDiscountDTO> $discountTerms The payment discounts
     * @param array<InvoiceSuitePaymentTermPenaltyDTO>  $penaltyTerms  The payment penalties
     * @param null|string                               $description   The mandate reference
     */
    public function __construct(
        ?string $description = null,
        ?DateTimeInterface $dueDate = null,
        array $discountTerms = [],
        array $penaltyTerms = [],
        ?string $mandate = null,
    ) {
        $this->setDescription($description);
        $this->setDueDate($dueDate);
        $this->setDiscountTerms($discountTerms);
        $this->setPenaltyTerms($penaltyTerms);
        $this->setMandate($mandate);
    }

    /**
     * Returns the text description of the payment terms
     *
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets the text description of the payment terms
     *
     * @param  null|string $description The text description of the payment terms
     * @return static
     */
    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns the mandate reference
     *
     * @return null|string
     */
    public function getMandate(): ?string
    {
        return $this->mandate;
    }

    /**
     * Sets the mandate reference
     *
     * @param  null|string $mandate The mandate reference
     * @return static
     */
    public function setMandate(?string $mandate): static
    {
        $this->mandate = $mandate;

        return $this;
    }

    /**
     * Returns the date by which payment is due
     *
     * @return null|DateTimeInterface
     */
    public function getDueDate(): ?DateTimeInterface
    {
        return $this->dueDate;
    }

    /**
     * Sets the date by which payment is due
     *
     * @param  null|DateTimeInterface $dueDate The date by which payment is due
     * @return static
     */
    public function setDueDate(?DateTimeInterface $dueDate): static
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Returns the payment discounts
     *
     * @return array<InvoiceSuitePaymentTermDiscountDTO>
     */
    public function getDiscountTerms(): array
    {
        return $this->discountTerms;
    }

    /**
     * Sets the payment discounts
     *
     * @param  array<InvoiceSuitePaymentTermDiscountDTO> $discountTerms The payment discounts
     * @return static
     */
    public function setDiscountTerms(array $discountTerms): static
    {
        $this->discountTerms = $discountTerms;

        return $this;
    }

    /**
     * Add single The payment discounts
     *
     * @param  InvoiceSuitePaymentTermDiscountDTO $discountTerms The payment discounts
     * @return static
     */
    public function addDiscountTerm(InvoiceSuitePaymentTermDiscountDTO $discountTerms): static
    {
        $this->discountTerms[] = $discountTerms;

        return $this;
    }

    /**
     * Get first The payment discounts
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function firstDiscountTerm(callable $callback, ?callable $callbackElse = null): static
    {
        if (($discountTerms = reset($this->discountTerms)) !== false) {
            $callback($discountTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The payment discounts
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function nextDiscountTerm(callable $callback, ?callable $callbackElse = null): static
    {
        if (($discountTerms = next($this->discountTerms)) !== false) {
            $callback($discountTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The payment discounts
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function previousDiscountTerm(callable $callback, ?callable $callbackElse = null): static
    {
        if (($discountTerms = prev($this->discountTerms)) !== false) {
            $callback($discountTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The payment discounts
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function lastDiscountTerms(callable $callback, ?callable $callbackElse = null): static
    {
        if (($discountTerms = end($this->discountTerms)) !== false) {
            $callback($discountTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The payment discounts and execute callback
     *
     * @param  callable      $callback     Callback to execute for each item
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @param  null|int      $limit        Maximum number of loops
     * @return static
     */
    public function forEachDiscountTerm(callable $callback, ?callable $callbackElse = null, ?int $limit = null): static
    {
        $count = 0;

        foreach ($this->discountTerms as $discountTerms) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            ++$count;

            $callback($discountTerms);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Returns the payment penalties
     *
     * @return array<InvoiceSuitePaymentTermPenaltyDTO>
     */
    public function getPenaltyTerms(): array
    {
        return $this->penaltyTerms;
    }

    /**
     * Sets the payment penalties
     *
     * @param  array<InvoiceSuitePaymentTermPenaltyDTO> $penaltyTerms The payment penalties
     * @return static
     */
    public function setPenaltyTerms(array $penaltyTerms): static
    {
        $this->penaltyTerms = $penaltyTerms;

        return $this;
    }

    /**
     * Add single The payment penalties
     *
     * @param  InvoiceSuitePaymentTermPenaltyDTO $penaltyTerms The payment penalties
     * @return static
     */
    public function addPenaltyTerm(InvoiceSuitePaymentTermPenaltyDTO $penaltyTerms): static
    {
        $this->penaltyTerms[] = $penaltyTerms;

        return $this;
    }

    /**
     * Get first The payment penalties
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function firstPenaltyTerm(callable $callback, ?callable $callbackElse = null): static
    {
        if (($penaltyTerms = reset($this->penaltyTerms)) !== false) {
            $callback($penaltyTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get next The payment penalties
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function nextPenaltyTerm(callable $callback, ?callable $callbackElse = null): static
    {
        if (($penaltyTerms = next($this->penaltyTerms)) !== false) {
            $callback($penaltyTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get previous The payment penalties
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function previousPenaltyTerm(callable $callback, ?callable $callbackElse = null): static
    {
        if (($penaltyTerms = prev($this->penaltyTerms)) !== false) {
            $callback($penaltyTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Get last The payment penalties
     *
     * @param  callable      $callback     Callback to execute if an item was found
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @return static
     */
    public function lastPenaltyTerm(callable $callback, ?callable $callbackElse = null): static
    {
        if (($penaltyTerms = end($this->penaltyTerms)) !== false) {
            $callback($penaltyTerms);
        } elseif (!is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }

    /**
     * Loop over The payment penalties and execute callback
     *
     * @param  callable      $callback     Callback to execute for each item
     * @param  null|callable $callbackElse Callback to execute if no item was found
     * @param  null|int      $limit        Maximum number of loops
     * @return static
     */
    public function forEachPenaltyTerm(callable $callback, ?callable $callbackElse = null, ?int $limit = null): static
    {
        $count = 0;

        foreach ($this->penaltyTerms as $penaltyTerms) {
            if ($limit !== null && $count >= $limit) {
                break;
            }

            ++$count;

            $callback($penaltyTerms);
        }

        if ($count === 0 && !is_null($callbackElse)) {
            $callbackElse();
        }

        return $this;
    }
}
