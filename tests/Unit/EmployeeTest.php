<?php
namespace Tests\unit;

use App\Models\Employee;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    public function test_can_create_employee()
    {
        $employee = new Employee([
            'first_name' => 'Test', 
            'last_name' => 'Employee', 
            'position' => 'Test Position', 
            'branch_id' => 1
        ]);
        
        $this->assertInstanceOf(Employee::class, $employee);
        $this->assertEquals('Test', $employee->first_name);
        $this->assertEquals('Employee', $employee->last_name);
        $this->assertEquals('Test Position', $employee->position);
        $this->assertEquals(1, $employee->branch_id);
    }
}