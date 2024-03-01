<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use App\Models\Employee;

class EmployeeService
{
    public function batchImportService($file)
    {
        $filePath = $file->storeAs('uploads', $file->getClientOriginalName());

        $csv = Reader::createFromPath(storage_path('app/' . $filePath), 'r');
        $csv->setHeaderOffset(0);
        
        foreach ($csv as $row) {
            $employeeId = $row['Emp ID'];
            if (Employee::where('employee_id', $employeeId)->exists()) {
                // Skip if a duplicate found
                continue;
            }
            $timeOfBirth = str_replace([' AM', ' PM'], '', $row['Time of Birth']);
            Employee::createFromArray($row, $timeOfBirth);
        }
    }
}

