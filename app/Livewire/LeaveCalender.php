<?php
// Created by : Bandari Divya
// About this component: This is to display leaves of employee and his team members, also holidays in a calnedar
namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\LeaveRequest;
use App\Models\EmployeeDetails;
use App\Models\HolidayCalendar;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class LeaveCalender extends Component
{
    public $year;
    public $month;
    public $calendar;
    public $leaveData;
    public $restrictedHolidayData;
    public $generalHolidayData;
    public $leaveRequests;
    public $selectedDate;
    public $eventDetails;
    public $companyId;
    public $filterCriteria = null;
    public $leaveTransactions = [];
    public $searchTerm = '';
    public $showDialog = false;
    public $showLocations = false;
    public $showDepartment = false;
    public $selectedLocations = [];
    public $selectedDepartments = [];


    public function open()
    {
        $this->showDialog = true;
    }

    public function close()
    {
        $this->showDialog = false;
    }
    public function openLocations()
    {
        $this->showLocations = !$this->showLocations;
    }

    public function closeLocations()
    {
        $this->showLocations = false;
    }
    public function toggleSelection($location)
    {
        if ($location === 'All') {
            if (in_array('All', $this->selectedLocations)) {
                $this->selectedLocations = [];
            } else {
                $this->selectedLocations = ['All'];
            }
        } else {
            $key = array_search('All', $this->selectedLocations);
            if ($key !== false) {
                unset($this->selectedLocations[$key]);
            }

            if (in_array($location, $this->selectedLocations)) {
                $this->selectedLocations = array_diff($this->selectedLocations, [$location]);
            } else {
                $this->selectedLocations[] = $location;
            }
        }
    }

    public function isSelectedAll()
    {
        return in_array('All', $this->selectedLocations);
    }

    public function openDept()
    {
        $this->showDepartment = !$this->showDepartment;
    }

    public function closeDept()
    {
        $this->showDepartment = false;
    }
    public function toggleDeptSelection($dept)
    {
        if ($dept === 'All') {
            if (in_array('All', $this->selectedDepartments)) {
                $this->selectedDepartments = [];
            } else {
                $this->selectedDepartments = ['All'];
            }
        } else {
            $key = array_search('All', $this->selectedDepartments);
            if ($key !== false) {
                unset($this->selectedDepartments[$key]);
            }

            if (in_array($dept, $this->selectedDepartments)) {
                $this->selectedDepartments = array_diff($this->selectedDepartments, [$dept]);
            } else {
                $this->selectedDepartments[] = $dept;
            }
        }
    }

    public function isSelecteDeptdAll()
    {
        return in_array('All', $this->selectedDepartments);
    }
    public function filterBy($value)
    {
        // Implement your filtering logic based on the selected value
        // For example, update the filterCriteria property based on the selected value
        $this->filterCriteria = $value;
    
        // You can add more logic here, such as reloading data or performing specific actions based on the filter criteria.
        // For instance, load leave transactions based on the updated filter criteria.
        $this->loadLeaveTransactions($this->selectedDate);
    }
    
    public function resetFilter()
    {
        // Reset selected locations to default (All)
        $this->selectedLocations = ['All'];

        // Reset selected departments to default (All)
        $this->selectedDepartments = ['All'];
    }

       public function mount()
    {
        $this->year = now()->year;
        $this->month = now()->month;
        $this->leaveRequests = LeaveRequest::all();
        $this->filterCriteria = 'Me';
        $this->searchTerm = ''; 
        $this->selectedLocations = ['All'];
        $this->selectedDepartments = ['All'];
        $this->loadLeaveTransactions(now()->toDateString());
        $this->generateCalendar();
    }
    public function generateCalendar()
{
    $firstDay = Carbon::create($this->year, $this->month, 1);
    
    $daysInMonth = $firstDay->daysInMonth;
   
    $today = now();
   
    $calendar = [];
    $dayCount = 1;
    $publicHolidays = $this->getPublicHolidaysForMonth($this->year, $this->month);
    
    // Calculate the first day of the week for the current month
    $firstDayOfWeek = $firstDay->dayOfWeek;
    
    // Calculate the starting date of the previous month
    $startOfPreviousMonth = $firstDay->copy()->subMonth();

    // Fetch holidays for the previous month
    $publicHolidaysPreviousMonth = $this->getPublicHolidaysForMonth(
        $startOfPreviousMonth->year,
        $startOfPreviousMonth->month
    );
    
    // Calculate the last day of the previous month
    $lastDayOfPreviousMonth = $firstDay->copy()->subDay();

    for ($i = 0; $i < ceil(($firstDayOfWeek + $daysInMonth) / 7); $i++) {
        $week = [];
        for ($j = 0; $j < 7; $j++) {
            if ($i === 0 && $j < $firstDay->dayOfWeek) {
                // Add the days of the previous month
                $previousMonthDays = $lastDayOfPreviousMonth->copy()->subDays($firstDay->dayOfWeek - $j - 1);
                $week[] = [
                    'day' => $previousMonthDays->day,
                    'isToday' => false,
                    'isPublicHoliday' => in_array($previousMonthDays->toDateString(), $publicHolidaysPreviousMonth->pluck('date')->toArray()),
                    'isCurrentMonth' => false,
                    'isPreviousMonth' => true,
                    'backgroundColor' => '', // Initialize with an empty background color
                    'leaveCountMe' => 0,
                    'leaveCountMyTeam' => 0,
                    ];
            } elseif ($dayCount <= $daysInMonth) {
                // Add the days of the current month
                $isToday = $dayCount === $today->day && $this->month === $today->month && $this->year === $today->year;
                $isPublicHoliday = in_array(
                    Carbon::create($this->year, $this->month, $dayCount)->toDateString(),
                    $publicHolidays->pluck('date')->toArray()
                );
                
                $backgroundColor = $isPublicHoliday ? 'background-color: IRIS;' : '';
                
                $date = Carbon::create($this->year, $this->month, $dayCount)->toDateString();
                $leaveCountMe = 0;
                $leaveCountMyTeam = 0;

                if ($this->filterCriteria === 'Me') {
                    $leaveCountMe = $this->loadLeaveTransactions($date, 'Me');
                } elseif ($this->filterCriteria === 'MyTeam') {
                    $leaveCountMyTeam = $this->loadLeaveTransactions($date, 'MyTeam');
                }

                $week[] = [
                    'day' => $dayCount,
                    'isToday' => $isToday,
                    'isPublicHoliday' => $isPublicHoliday,
                    'isCurrentMonth' => true,
                    'isPreviousMonth' => false,
                    'backgroundColor' => $backgroundColor,
                    'leaveCountMe' => $leaveCountMe,
                    'leaveCountMyTeam' => $leaveCountMyTeam,
                ];
              
                $dayCount++;
            } else {
                // Add the days of the next month
                $week[] = [
                    'day' => $dayCount - $daysInMonth,
                    'isToday' => false,
                    'isPublicHoliday' => in_array($lastDayOfPreviousMonth->copy()->addDays($dayCount - $daysInMonth)->toDateString(), $this->getPublicHolidaysForMonth($startOfPreviousMonth->year, $startOfPreviousMonth->month)->pluck('date')->toArray()),
                    'isCurrentMonth' => false,
                    'isNextMonth' => true,
                    'backgroundColor' => '', // Initialize with an empty background color
                    'leaveCountMe' => 0,
                    'leaveCountMyTeam' => 0,
                ];
                $dayCount++;
            }
        }
        $calendar[] = $week;
    }
    

    $this->calendar = $calendar;
   
}
 
    protected function getPublicHolidaysForMonth($year, $month)
    {
        return HolidayCalendar::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->get();
    }


    public function previousMonth()
    {
        
        $date = Carbon::create($this->year, $this->month, 1)->subMonth();
     
        $this->year = $date->year;
        $this->month = $date->month;
        $this->generateCalendar();
    }

    public function nextMonth()
    {
        $date = Carbon::create($this->year, $this->month, 1)->addMonth();
        $this->year = $date->year;
        $this->month = $date->month;
        $this->generateCalendar();
    }
    public function searchData()
    {
        $this->loadLeaveTransactions($this->selectedDate);
    }


    public function loadLeaveTransactions($date)
    {
     
        // Retrieve leave transactions for the selected date from the database
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $companyId = auth()->guard('emp')->user()->company_id;
        $dateFormatted = Carbon::parse($date)->format('Y-m-d');
        $leaveCount = 0; // Initialize leave count variable
            // Filter data based on the selected filter type
        if ($this->filterCriteria === 'Me') {
            
            $leaveTransactions = LeaveRequest::with('employee')
                ->whereDate('from_date', '<=', $dateFormatted)
                ->whereDate('to_date', '>=', $dateFormatted)
                ->where('emp_id', $employeeId)
                ->where('status', 'approved')                
                ->get();
            $leaveCount = $leaveTransactions->count();
            $this->leaveTransactions = $leaveTransactions;
            
        } elseif ($this->filterCriteria === 'MyTeam') {
            $teamMembersIds = EmployeeDetails::where('manager_id', $employeeId)->pluck('emp_id');
            $leaveTransactions = LeaveRequest::with('employee')
                ->whereIn('emp_id', $teamMembersIds)
                ->where('from_date', '<=', $dateFormatted)
                ->where('to_date', '>=', $dateFormatted)
                ->where('status', 'approved')
                ->where(function ($query) {
                    $query->whereHas('employee', function ($q) {
                        $q->where('first_name', 'like', '%' . $this->searchTerm . '%')
                            ->orWhere('last_name', 'like', '%' . $this->searchTerm . '%');
                    });
                })
                ->get();
    
            $leaveCount = $leaveTransactions->count();
            $this->leaveTransactions = $leaveTransactions;
        } else {
            $this->leaveTransactions = null;
        }
    
        return $leaveCount;
    }
    

    protected function getTeamOnLeaveDataForDay($day)
    {
        // Fetch team leave data from your database

        return LeaveRequest::where('from_date', $day)->get();
    }

    protected function isRestrictedHolidayForDay($day)
    {
        // Check if $day is a restricted holiday
    // return LeaveRequest::where('date', $day)->where('type', 'restricted')->exists();
    return LeaveRequest::where('from_date', $day)->get();
    }


    public function dateClicked($date)
    {
        $date = (int) $date;
        $this->selectedDate = Carbon::createFromDate($this->year, $this->month, $date)->format('Y-m-d');
        $this->loadLeaveTransactions($this->selectedDate);  
    }
    


    public function render()
    {   
       
        $this->leaveData = LeaveRequest::where('emp_id', auth()->guard('emp')->user()->emp_id)
        ->where('status', 'approved')
        ->get();    
        $holidays = $this->getHolidays();
    
        return view('livewire.leave-calender', [
            'holidays' => $holidays,
            'leaveTransactions'=>$this->leaveTransactions,
        ]);
       
    }

    public function getHolidays()
    {
       
        // Extract only the date part before the space
        $dateParts = explode(' ', $this->selectedDate);
        $dateOnly = $dateParts[0]; // Take only the date part

        // Get only the first two characters for the date part
        $dateFormatted = substr($dateOnly, 0, 10);

        // Parse the cleaned date
        $clickedDate = Carbon::parse($dateFormatted);

      
        return HolidayCalendar::whereDate('date', $clickedDate->toDateString())->get();
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

    
}
    

