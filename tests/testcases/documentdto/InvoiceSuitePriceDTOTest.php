<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documents\dto\InvoiceSuitePriceDTO;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteQuantityDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuitePriceDTOTest extends TestCase
{
    public function testConstructorAndDefaults(): void
    {
        $invoiceSuitePriceDTO = new InvoiceSuitePriceDTO();

        $this->assertNull($invoiceSuitePriceDTO->getAmount());
        $this->assertNotInstanceOf(\horstoeko\invoicesuite\documents\dto\InvoiceSuiteQuantityDTO::class, $invoiceSuitePriceDTO->getPriceQuantity());
    }

    public function testAmountGetterAndSetter(): void
    {
        $invoiceSuitePriceDTO = new InvoiceSuitePriceDTO();
        $amountValue = 123.45;
        $invoiceSuitePriceDTO->setAmount($amountValue);

        $this->assertSame($amountValue, $invoiceSuitePriceDTO->getAmount());
    }

    public function testPriceQuantityGetterAndSetter(): void
    {
        $invoiceSuitePriceDTO = new InvoiceSuitePriceDTO();
        $priceQuantityValue = new InvoiceSuiteQuantityDTO();
        $invoiceSuitePriceDTO->setPriceQuantity($priceQuantityValue);

        $this->assertSame($priceQuantityValue, $invoiceSuitePriceDTO->getPriceQuantity());
    }
}
