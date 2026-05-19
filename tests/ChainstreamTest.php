<?php
/**
 * Tests for ChainStream
 */

use PHPUnit\Framework\TestCase;
use Chainstream\Chainstream;

class ChainstreamTest extends TestCase {
    private Chainstream $instance;

    protected function setUp(): void {
        $this->instance = new Chainstream(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainstream::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
