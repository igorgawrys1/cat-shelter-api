<?php

namespace Tests\Unit;

use App\Models\Cat;
use PHPUnit\Framework\TestCase;

class CatTest extends TestCase
{
    public function test_can_create_cat()
    {
        $cat = new Cat([
            'name' => 'Test Cat', 
            'breed' => 'Test Breed', 
            'age' => 2, 
            'branch_id' => 1, 
            'employee_id' => 1
        ]);

        $this->assertInstanceOf(Cat::class, $cat);
        $this->assertEquals('Test Cat', $cat->name);
        $this->assertEquals('Test Breed', $cat->breed);
        $this->assertEquals(2, $cat->age);
        $this->assertEquals(1, $cat->branch_id);
        $this->assertEquals(1, $cat->employee_id);
    }
}
