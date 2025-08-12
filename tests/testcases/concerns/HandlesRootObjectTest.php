<?php

namespace horstoeko\invoicesuite\tests\testcases\concerns;

use horstoeko\invoicesuite\concerns\HandlesRootObject;
use horstoeko\invoicesuite\models\zffxextended\rsm\CrossIndustryInvoice;
use horstoeko\invoicesuite\providers\zffxextended\InvoiceSuiteZfFxExtendedProvider;
use horstoeko\invoicesuite\tests\TestCase;

class HandlesRootObjectTest extends TestCase
{
    use HandlesRootObject;

    public function testInitialState(): void
    {
        $this->assertNull($this->rootObject);
        $this->assertNull($this->getRootObject());
    }

    public function testCreateAndInitRootObjectByFormatProvider(): void
    {
        $this->setCurrentFormatProvider(new InvoiceSuiteZfFxExtendedProvider());
        $this->createAndInitRootObjectByFormatProvider();
        $this->assertInstanceOf(CrossIndustryInvoice::class, $this->rootObject);
        $this->assertInstanceOf(CrossIndustryInvoice::class, $this->getRootObject());
    }
}
