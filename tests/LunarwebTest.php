<?php
/**
 * Tests for LunarWeb
 */

use PHPUnit\Framework\TestCase;
use Lunarweb\Lunarweb;

class LunarwebTest extends TestCase {
    private Lunarweb $instance;

    protected function setUp(): void {
        $this->instance = new Lunarweb(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Lunarweb::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
