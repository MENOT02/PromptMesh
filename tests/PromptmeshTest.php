<?php
/**
 * Tests for PromptMesh
 */

use PHPUnit\Framework\TestCase;
use Promptmesh\Promptmesh;

class PromptmeshTest extends TestCase {
    private Promptmesh $instance;

    protected function setUp(): void {
        $this->instance = new Promptmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Promptmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
