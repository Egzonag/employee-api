<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name_prefix',
        'first_name',
        'middle_initial',
        'last_name',
        'gender',
        'email',
        'date_of_birth',
        'time_of_birth',
        'age_in_years',
        'date_of_joining',
        'age_in_company_years',
        'phone_no',
        'place_name',
        'county',
        'city',
        'zip',
        'region',
        'user_name',
    ];

    public static function createFromArray($data, $timeOfBirth)
    {
            Employee::create([
                'employee_id' => $data['Emp ID'],
                'name_prefix' => $data['Name Prefix'],
                'first_name' => $data['First Name'],
                'middle_initial' => $data['Middle Initial'],
                'last_name' => $data['Last Name'],
                'gender' => $data['Gender'],
                'email' => $data['E Mail'], 
                'date_of_birth' => $data['Date of Birth'],
                'time_of_birth' => $timeOfBirth,
                'age_in_years' => $data['Age in Yrs.'], 
                'date_of_joining' => $data['Date of Joining'],
                'age_in_company' => $data['Age in Company (Years)'],
                'phone_no' => $data['Phone No. '],
                'place_name' => $data['Place Name'],
                'county' => $data['County'],
                'city' => $data['City'],
                'zip' => $data['Zip'],
                'region' => $data['Region'],
                'user_name' => $data['User Name'],
            ]); 
    }
}
