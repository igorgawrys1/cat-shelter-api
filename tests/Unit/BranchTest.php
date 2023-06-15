<?php

namespace Tests\Unit;


use App\Models\Branch;
use PHPUnit\Framework\TestCase;

class BranchTest extends TestCase
{
    public function test_can_create_branch()
    {
        $branch = new Branch(['name' => 'Test Branch', 'location' => 'Test Location']);
        $this->assertInstanceOf(Branch::class, $branch);
        $this->assertEquals('Test Branch', $branch->name);
        $this->assertEquals('Test Location', $branch->location);
    }
}
