<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\concerns;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\tests\TestCase;

final class HandlesObjectFlagsTest extends TestCase
{
    use HandlesObjectFlags;

    public function testInitialState(): void
    {
        $this->assertIsArray($this->objectFlags);
        $this->assertEmpty($this->objectFlags);
    }

    public function testAddToObjectFlags(): void
    {
        $this->assertEmpty($this->objectFlags);

        $this->addToObjectFlags('');
        $this->assertEmpty($this->objectFlags);

        $this->addToObjectFlags('FLAG1');
        $this->assertCount(1, $this->objectFlags);

        $this->addToObjectFlags('FLAG1');
        $this->assertCount(1, $this->objectFlags);

        $this->addToObjectFlags('FLAG2');
        $this->assertCount(2, $this->objectFlags);
    }

    public function testRemoveFromObjectFlags(): void
    {
        $this->assertEmpty($this->objectFlags);

        $this->addToObjectFlags('FLAG1');
        $this->assertCount(1, $this->objectFlags);

        $this->removeFromObjectFlags('FLAG2');
        $this->assertCount(1, $this->objectFlags);

        $this->removeFromObjectFlags('');
        $this->assertCount(1, $this->objectFlags);

        $this->removeFromObjectFlags('FLAG1');
        $this->assertCount(0, $this->objectFlags);
    }

    public function testHasObjectFlag(): void
    {
        $this->assertEmpty($this->objectFlags);

        $this->addToObjectFlags('FLAG1');
        $this->assertTrue($this->hasObjectFlag('FLAG1'));
        $this->assertFalse($this->hasObjectFlag('FLAG2'));
    }
}
