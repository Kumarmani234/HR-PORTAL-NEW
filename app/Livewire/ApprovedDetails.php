<?php
// Created by : Bandari Divya
// About this component: this is detailed details of approved, rejected leave applications
namespace App\Livewire;

use App\Models\LeaveRequest;
use App\Models\EmployeeDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Helpers\LeaveHelper; 
use Carbon\Carbon;
use App\Livewire\LeavePage;

class ApprovedDetails extends Component
{
    public $selectedLeaveRequestId;
    public $employeeId;
    public $leaveRequestId;
    public $full_name;
    public $employeeDetails = [];
    public $leaveRequest; 
    public $selectedYear;
    public $leaveBalances;
 
    public function mount($leaveRequestId)
    {
        // Fetch leave request details based on $leaveRequestId with employee details
        $this->selectedYear = Carbon::now()->format('Y');
        $this->leaveRequest = LeaveRequest::with('employee')->find($leaveRequestId);
        $this->leaveRequest->from_date = Carbon::parse($this->leaveRequest->from_date);
        $this->leaveRequest->to_date = Carbon::parse($this->leaveRequest->to_date);
        $this->leaveBalances = LeaveBalances::getLeaveBalances($this->leaveRequest->emp_id, $this->selectedYear);
     
    }
   
    public  function calculateNumberOfDays($fromDate, $fromSession, $toDate, $toSession)
    {
        try {
       
            $startDate = Carbon::parse($fromDate);
            $endDate = Carbon::parse($toDate);
            // Check if the start and end sessions are different on the same day
            if ($startDate->isSameDay($endDate) && $this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)) {
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 0.5;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            // Check if the start and end sessions are different on the same day
            if (
               
                $startDate->isSameDay($endDate) &&
                $this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)
            ) {
             
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 0.5;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            if (
                $startDate->isSameDay($endDate) &&
                $this->getSessionNumber($fromSession) !== $this->getSessionNumber($toSession)
            ) {
               
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 1;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            $totalDays = 0;
 
            while ($startDate->lte($endDate)) {
                // Check if it's a weekday (Monday to Friday)
                if ($startDate->isWeekday()) {
                    $totalDays += 1;
                }
 
                // Move to the next day
                $startDate->addDay();
            }
 
            // Deduct weekends based on the session numbers
            if ($this->getSessionNumber($fromSession) > 1) {
                $totalDays -= $this->getSessionNumber($fromSession) - 1; // Deduct days for the starting session
            }
            if ($this->getSessionNumber($toSession) < 2) {
                $totalDays -= 2 - $this->getSessionNumber($toSession); // Deduct days for the ending session
            }
            // Adjust for half days
            if ($this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)) {
                // If start and end sessions are the same, check if the session is not 1
                if ($this->getSessionNumber($fromSession) !== 1) {
                    $totalDays += 0.5; // Add half a day
                }
            }elseif($this->getSessionNumber($fromSession) !== $this->getSessionNumber($toSession)){
                if ($this->getSessionNumber($fromSession) !== 1) {
                    $totalDays += 1; // Add half a day
                }
            }
            else {
                $totalDays += ($this->getSessionNumber($toSession) - $this->getSessionNumber($fromSession) + 1) * 0.5;
            }
 
            return $totalDays;
           
 
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
 
    private function getSessionNumber($session)
    {
        // You might need to customize this based on your actual session values
        return (int) str_replace('Session ', '', $session);
    }
 
    public function render()
{

    // Fetch leave balances for the selected year
    $this->leaveBalances = LeaveBalances::getLeaveBalances($this->leaveRequest->emp_id, $this->selectedYear);
    $fromDateYear = Carbon::parse($this->leaveRequest->from_date)->format('Y');
    // Check if the current year matches the selected year
    if ($this->selectedYear == $fromDateYear) {
        // If it's the current year, use the fetched leave balances
        $leaveBalance = $this->leaveBalances;
    } else {
        // If it's not the current year, set leave balance to 0
        $leaveBalance = 0;
    }
    try {
        // Attempt to decode applying_to
        $applyingToJson = trim($this->leaveRequest->applying_to);
        $this->leaveRequest->applying_to = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);

        // Attempt to decode cc_to
        $ccToJson = trim($this->leaveRequest->cc_to);
        $this->leaveRequest->cc_to = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);

    } catch (\Exception $e) {
        dd("Error in JSON decoding: " . $e->getMessage());
    }

    // Pass the leaveRequest data and leaveBalance to the Blade view
    return view('livewire.approved-details', [
        'leaveRequest' => $this->leaveRequest,
        'leaveBalance' => $leaveBalance,
    ]);
}

}
