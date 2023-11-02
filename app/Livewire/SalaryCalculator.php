<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryCalculator extends Component
{
    public $basicSalary;
    public $totalDays;
    public $leaveDays;
    public $results;

    public function render()
    {
        return view('livewire.salary-calculator');
    }

    public function calculateSalary(Request $request)
    {
        $request->validate([
            'basicSalary' => 'required|numeric',
            'totalDays' => 'required|integer',
            'leaveDays' => 'required|integer',
        ]);

        $basicSalary = $request->input('basic_salary');
        $totalDays = $request->input('total_days');
        $leaveDays = $request->input('leave_days');

        $result = $this->calculateSalaryComponents($basicSalary, $totalDays, $leaveDays);

        return view('salary-calculator', compact('result'));
    }

    private function calculateSalaryComponents($basicSalary, $totalDays, $leaveDays)
    {
        $dayBasic = $basicSalary / $totalDays;
        $adjustedBasic = $basicSalary - ($leaveDays * $dayBasic);

        $hra = $adjustedBasic * 0.40;
        $conveyance = $adjustedBasic * 0.20;
        $medicalAllowance = $adjustedBasic * 0.15625;
        $specialAllowance = $adjustedBasic * 0.62375;
        $pfDeduction = $adjustedBasic * 0.12;
        $esiDeduction = $adjustedBasic * 0.10725;
        $profTaxDeduction = $adjustedBasic * 0.01875;

        $monthlySalary = $adjustedBasic + $hra + $conveyance + $medicalAllowance + $specialAllowance;

        $totalDeductions = $pfDeduction + $esiDeduction + $profTaxDeduction;
        $netSalary = $monthlySalary - $totalDeductions;

        return [
            "basicSalary" => $basicSalary,
            "adjustedBasic" => $adjustedBasic,
            "hra" => $hra,
            "conveyance" => $conveyance,
            "medicalAllowance" => $medicalAllowance,
            "specialAllowance" => $specialAllowance,
            "pfDeduction" => $pfDeduction,
            "esiDeduction" => $esiDeduction,
            "profTaxDeduction" => $profTaxDeduction,
            "totalDays" => $totalDays,
            "leaveDays" => $leaveDays,
            "workingDays" => $totalDays - $leaveDays,
            "monthlySalary" => $monthlySalary,
            "totalDeductions" => $totalDeductions,
            "netSalary" => $netSalary,
        ];
    }

/*
    public function calculateSalaryFromDatabase($empId)
    {
        $salaryData = Salary::where('empId', $empId)->get();

        if ($salaryData->isEmpty()) {
            return redirect()->route('error-page');
        }

        $results = [];

        $totalresults = [
            'totalBasicSalary' => 0,
            'totalHRA' => 0,
            'totalConveyance' => 0,
            'totalMedicalAllowance' => 0,
            'totalSpecialAllowance' => 0,
            'totalGross' => 0,
            'totalPF' => 0,
            'totalESI' => 0,
            'totalProfTax' => 0,
            'totalTotalDeductions' => 0,
            'totalWorkingDays' => 0,
            'totalTotalDays' => 0,
            'totalNetPay' => 0,
        ];

        foreach ($salaryData as $data) {
            $basicSalary = $data->basicSalary;
            $totalDays = $data->totalDays;
            $leaveDays = $data->leaveDays;

            if ($totalDays == 0 || $leaveDays == 0) {
                continue;
            }
            $result = $this->calculateSalaryComponents($basicSalary, $totalDays, $leaveDays);

            $monthOrder = [
                'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'
            ];

            // Sort the $results array based on the order of months
    usort($results, function ($a, $b) use ($monthOrder) {
        return array_search($a['month'], $monthOrder) - array_search($b['month'], $monthOrder);
    });
       // dd($result);
               // Calculate totals
               $totalresults['totalBasicSalary'] += $basicSalary;
               $totalresults['totalHRA'] += $result['hra'];
               $totalresults['totalConveyance'] += $result['conveyance'];
               $totalresults['totalMedicalAllowance'] += $result['medicalAllowance'];
               $totalresults['totalSpecialAllowance'] += $result['specialAllowance'];
               $totalresults['totalGross'] += $result['monthlySalary'];
               $totalresults['totalPF'] += $result['pfDeduction'];
               $totalresults['totalESI'] += $result['esiDeduction'];
               $totalresults['totalProfTax'] += $result['profTaxDeduction'];
               $totalresults['totalTotalDeductions'] += $result['totalDeductions'];
               $totalresults['totalWorkingDays'] += $result['workingDays'];
               $totalresults['totalTotalDays'] += $totalDays;
               $totalresults['totalNetPay'] += $result['netSalary'];


            $results[] = [
                'month' => $data->month,
                'year' => $data->year,
                'basicSalary' => $basicSalary,
                'totalDays' => $totalDays,
                'leaveDays' => $leaveDays,
                'result' => $result,
                'totalresults' => $totalresults,

            ];
        }

        return view('livewire.salary-calculator', compact('result', 'results', 'totalresults'));
    } */


    public function calculateSalaryFromDatabase($empId)
{
    // Fetch salary data from the database for the specified employee
    $salaryData = Salary::where('empId', $empId)->get();

    if ($salaryData->isEmpty()) {
        // Redirect to an error page or return an appropriate response
        return redirect()->route('error-page');
    }

    $results = [];
    
    $totalresults = [
        'totalBasicSalary' => 0,
        'totalHRA' => 0,
        'totalConveyance' => 0,
        'totalMedicalAllowance' => 0,
        'totalSpecialAllowance' => 0,
        'totalGross' => 0,
        'totalPF' => 0,
        'totalESI' => 0,
        'totalProfTax' => 0,
        'totalTotalDeductions' => 0,
        'totalWorkingDays' => 0,
        'totalTotalDays' => 0,
        'totalNetPay' => 0,
    ];

    foreach ($salaryData as $data) {
        $basicSalary = $data->basicSalary;
        $totalDays = $data->totalDays;
        $leaveDays = $data->leaveDays;

        if ($totalDays == 0 || $leaveDays == 0) {
            continue;
        }

        // Calculate the result for the current month
        $result = $this->calculateSalaryComponents($basicSalary, $totalDays, $leaveDays);

        $monthOrder = [
            'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'
        ];

        // Sort the $results array based on the order of months
        usort($results, function ($a, $b) use ($monthOrder) {
            return array_search($a['month'], $monthOrder) - array_search($b['month'], $monthOrder);
        });

        // Calculate and update the totals for all months
        $totalresults['totalBasicSalary'] += $basicSalary;
        $totalresults['totalHRA'] += $result['hra'];
        $totalresults['totalConveyance'] += $result['conveyance'];
        $totalresults['totalMedicalAllowance'] += $result['medicalAllowance'];
        $totalresults['totalSpecialAllowance'] += $result['specialAllowance'];
        $totalresults['totalGross'] += $result['monthlySalary'];
        $totalresults['totalPF'] += $result['pfDeduction'];
        $totalresults['totalESI'] += $result['esiDeduction'];
        $totalresults['totalProfTax'] += $result['profTaxDeduction'];
        $totalresults['totalTotalDeductions'] += $result['totalDeductions'];
        $totalresults['totalWorkingDays'] += $result['workingDays'];
        $totalresults['totalTotalDays'] += $totalDays;
        $totalresults['totalNetPay'] += $result['netSalary'];

        // Store the result for this month in the $results array
        $results[] = [
            'month' => $data->month,
            'year' => $data->year,
            'basicSalary' => $basicSalary,
            'totalDays' => $totalDays,
            'leaveDays' => $leaveDays,
            'result' => $result,
            'totalresults' => $totalresults,
        ];
    }
    dd($results);
    $this->debug(['results' => $results, 'totalresults' => $totalresults]);
    var_dump($results);

    // Pass the results and totals to the view
    return view('livewire.salary-calculator', compact('result','results', 'totalresults'));

}
}
