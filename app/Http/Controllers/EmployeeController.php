<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmployeeService;  
use App\Models\Employee;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function batchImport(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('file');
        $this->employeeService->batchImportService($file);

        return response()->json(['message' => 'Employees imported successfully'], 201);
    }

    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['message' => 'Employee deleted successfully'], 200);
    }

}
