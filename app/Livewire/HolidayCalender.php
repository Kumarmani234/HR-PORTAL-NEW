<?php
// Created by : Bandari Divya
// About this component: Displaying Holidays list 
namespace App\Livewire;

use Livewire\Component;
use App\Models\HolidayCalendar;
class HolidayCalender extends Component
{
    public $year = '2023'; // Default year

    public function render()
    {
        try {
            // Attempt to fetch the calendar data for the selected year (default: 2023)
            $calendarData = HolidayCalendar::where('year', $this->year)->get();

            // Fetch data for 2022
            $calendarData2022 = HolidayCalendar::where('year', '2022')->get();

            // Fetch data for 2024
            $calendarData2024 = HolidayCalendar::where('year', '2024')->get();

            // Merge the data for all years
            $calendarData = $calendarData->concat($calendarData2022)->concat($calendarData2024);
        } catch (\Exception $e) {
            // Handle the exception, log it, or display an error message
            \Log::error('Error fetching calendar data: ' . $e->getMessage());
    
            $calendarData = [];
        }
    
        return view('livewire.holiday-calender', [
            'calendarData' => $calendarData,
        ]);
    }

}
