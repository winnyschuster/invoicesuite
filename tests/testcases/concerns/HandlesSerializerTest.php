<?php

namespace horstoeko\invoicesuite\tests\testcases\concerns;

use horstoeko\invoicesuite\concerns\HandlesSerializer;
use horstoeko\invoicesuite\providers\zffxextended\InvoiceSuiteZfFxExtendedProvider;
use horstoeko\invoicesuite\tests\TestCase;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

class HandlesSerializerTest extends TestCase
{
    use HandlesSerializer;

    public function testInitialState(): void
    {
        $this->assertNull($this->serializerBuilder);
        $this->assertNull($this->serializer);
    }

    public function testCreateAndInitSerializerByFormatProvider(): void
    {
        $this->setCurrentFormatProvider(new InvoiceSuiteZfFxExtendedProvider());
        $this->createAndInitSerializerByFormatProvider();
        $this->assertInstanceOf(SerializerBuilder::class, $this->serializerBuilder);
        $this->assertInstanceOf(SerializerInterface::class, $this->serializer);
    }
}
