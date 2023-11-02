<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries'; // Specify the table name
    protected $primaryKey= 'id';
//    protected $primaryKey= 'empId';

    protected $fillable = [
        'employeeName',
        'basicSalary',
        'totalDays',
        'leaveDays',
        // Add other fillable columns as needed
    ];


    // Relationships (if applicable)
    // Example: Each salary record belongs to an employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
     // Create a method to retrieve salary records by ID
     public static function findSalaryById($id)
     {
         return self::find($id);
     }
}