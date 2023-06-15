<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function store(EmployeeRequest $request)
    {
        try {
            $employee = Employee::create($request->all());

            return response()->json($employee, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Employee $employee)
    {
        return $employee;
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        try {
            $employee->update($request->all());

            return response()->json($employee, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Employee $employee)
    {
        try {
            $employee->delete();

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
