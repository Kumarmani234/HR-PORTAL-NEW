<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
        DB::table('salaries')->insert([
            'empId' => '001',
            'employeeName' => 'Sunitha',
            'month' => 'apr',
            'year' => '2023',
            'leaveDays' => '2',
            'totalDays' => '31',
            'basicSalary' => 5000.00,
            // Add other data as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('salaries')->insert([
            'empId' => '001',
            'employeeName' => 'Sunitha',
            'month' => 'mar',
            'year' => '2023',
            'leaveDays' => '2',
            'totalDays' => '31',
            'basicSalary' => 5000.00,
            // Add other data as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('salaries')->insert([
            'empId' => '001',
            'employeeName' => 'Sunitha',
            'month' => 'feb',
            'year' => '2023',
            'leaveDays' => '0',
            'totalDays' => '31',
            'basicSalary' => 5000.00,
            // Add other data as needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}


