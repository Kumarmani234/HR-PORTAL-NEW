<div>
    <style>

    </style>
<body>
    <div class="container-leave" >
        <div class="sidebar" style="width: {{ $showDialog ? '250px' : '0' }};display: flex; flex-direction: column; height: 100vh;">
            <div class="header">
                <a href="javascript:void(0)" class="closebtn" wire:click="close" style="margin-right: 10px;">×</a>
                <h6>Apply Filter</h6>
            </div>
             <div class="main-content">
                  <label for="locations" style="font-size: 0.825rem; color: #778899; font-weight: 500; margin-top: 20px; margin-right: 10px;">Location</label>
                    <div wire:click="openLocations" class="loc-dropdown">
                       <div style="position: relative;">
                           <div style="display: flex;justify-content:space-between; align-items: center;">
                                <p>
                                    @if($this->isSelectedAll())
                                        All
                                    @else
                                        {{ implode(', ', $selectedLocations) }}
                                    @endif
                                    </p>
                                <!-- Solid down arrow -->
                                <svg width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 13L6 9H14L10 13Z" fill="#778899"/>
                                </svg>
                          </div>
                        </div>
                    </div>
                    @if($showLocations)
                        <div class="locations">
                            <div style="display: flex;justify-content:space-between; text-align:center;align-items: center;padding:0;height:40px;position relative">
                               <p style="font-size:11px; padding:0; color:#148aff;font-weight:500;">Select Location</p>
                               <a href="#" wire:click="closeLocations" style="top:-5px; right:5px;position:absolute;" >×</a>
                            </div>
                             <div style="display:flex;flex-direction:column;gap:10px;">
                                <label>
                                    <input type="checkbox" wire:click="toggleSelection('All')" wire:model="selectedLocations" value="All"> All
                                </label>
                                <label>
                                    <input type="checkbox" wire:click="toggleSelection('Hyderabad')" wire:model="selectedLocations" value="Hyderabad"> Hyderabad
                                </label>
                                <label>
                                    <input type="checkbox" wire:click="toggleSelection('Udaipur')" wire:model="selectedLocations" value="Udaipur"> Udaipur
                                </label>
                                <label>
                                    <input type="checkbox" wire:click="toggleSelection('Rajasthan')" wire:model="selectedLocations" value="Rajasthan"> Rajasthan
                                </label>
                            </div>
                           
                        </div>
                    @endif
                    <!-- department -->
                    <label for="locations" style="font-size:12px; color: #778899; font-weight: 500; margin-top: 20px; margin-right: 10px;">Department</label>
                    <div wire:click="openDept" class="loc-dropdown">
                       <div style="position: relative;">
                           <div style="display: flex;justify-content:space-between; align-items: center;">
                                <p>
                                    @if($this->isSelecteDeptdAll())
                                        All
                                    @else
                                        {{ implode(', ', $selectedDepartments) }}
                                    @endif
                                    </p>
                                <!-- Solid down arrow -->
                                <svg width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 13L6 9H14L10 13Z" fill="#778899"/>
                                </svg>
                          </div>
                        </div>
                    </div>
                    @if($showDepartment)
                        <div class="departments">
                            <div style="display: flex;justify-content:space-between; text-align:center;align-items: center;padding:0;height:40px;position relative">
                               <p style="font-size:11px; padding:0;color:#148aff;font-weight:500;">Select Department</p>
                               <a href="#" wire:click="closeDept" style="top:-5px; right:5px;position:absolute;" >×</a>
                            </div>
                             <div style="display:flex;flex-direction:column;gap:10px;">
                                <label>
                                    <input type="checkbox" wire:click="toggleDeptSelection('All')" wire:model="selectedDepartments" value="All"> All
                                </label>
                                <label>
                                    <input type="checkbox" wire:click="toggleDeptSelection('Developement')" wire:model="selectedDepartments" value="Developement"> Developement
                                </label>
                                <label>
                                    <input type="checkbox" wire:click="toggleDeptSelection('Sales')" wire:model="selectedDepartments" value="Sales"> Sales
                                </label>
                                <label>
                                    <input type="checkbox" wire:click="toggleDeptSelection('IT')" wire:model="selectedDepartments" value="IT"> IT
                                </label>
                            </div>
                           
                        </div>
                        @endif
                    <!-- end -->
                    <div style="margin-top: 30px;">
                        <button class="btn-1" wire:click="applyFilter">Apply</button>
                        <button class="btn-2" wire:click="resetFilter">Reset</button>
                    </div>
            </div>
    </div>

    <div class="button-container" >
        <!-- Dropdown for filter selection -->
        <div class="filter-container">
            <label for="filterType" style="color: #778899; font-size: 12px;font-weight:500;">Filter Type:</label>
            <select style="font-size:12px;padding:2px 10px;cursor:pointer;outline:none;" wire:model.lazy="filterCriteria" id="filterType" class="filter-dropdown" wire:change="filterBy($event.target.value)">
                <option style="font-size:12px;padding:10px 15px;" value="Me" @if($filterCriteria === 'Me') selected @endif>Me</option>
                <option style="font-size:12px;padding:10px 15px;" value="MyTeam" @if($filterCriteria === 'MyTeam') selected @endif>My Team</option>
            </select>
        </div>


        <button class="custom-button-down">
        <i class="fa fa-download" aria-hidden="true"></i>
        </button>
    </div>
        <div class="row" style="margin:0;padding:0;">
            <div class="col-md-7">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="calendar-heading-container">
                        <button wire:click="previousMonth" class="nav-btn">&lt; Prev</button>
                        <h5>{{ date('F Y', strtotime("$year-$month-1")) }}</h5>
                        <button wire:click="nextMonth" class="nav-btn">Next &gt;</button>
                    </div>
                </div>
                <!-- Calendar -->
                <div class="table-responsive m-0 p-0">
                <table class="table-calendar table-bordered">
                        <thead>
                            <tr>
                                <th class="text">Sun</th>
                                <th class="text">Mon</th>
                                <th class="text">Tue</th>
                                <th class="text">Wed</th>
                                <th class="text">Thu</th>
                                <th class="text">Fri</th>
                                <th class="text">Sat</th>
                            </tr>
                        </thead>
                        <tbody class="m-0 p-0" id="calendar-body">
                            @foreach ($calendar as $week)
                                <tr>
                                    @foreach ($week as $day)
                                    @php
                                                    $carbonDate = \Carbon\Carbon::createFromDate($year, $month, $day['day']);
                                                    $isCurrentMonth = $day['isCurrentMonth'];
                                                    $isWeekend = in_array($carbonDate->dayOfWeek, [0, 6]); // 0 for Sunday, 6 for Saturday
                                                    $isActiveDate = ($selectedDate === $carbonDate->toDateString());
                                                @endphp
                                        <td wire:click="dateClicked($event.target.textContent)" class="calendar-date{{ $selectedDate === $day['day'] ? ' active-date' : '' }}" data-date="{{ $day['day'] }}"
                                                    style="color: {{ $isCurrentMonth ? ($isWeekend ? '#c5cdd4' : 'black') : '#c5cdd4' }};">
                                                
                                            @if ($day)
                                                <div >
                                                    @if ($day['isToday'])
                                                        <div style="background-color: #007bff; color: white; border-radius: 50%; width: 24px; height: 24px; text-align: center; line-height: 24px; ">
                                                            {{ str_pad($day['day'], 2, '0', STR_PAD_LEFT) }}
                                                        </div>
                                                    @else
                                                        {{ str_pad($day['day'], 2, '0', STR_PAD_LEFT) }}
                                                    @endif
                                                    <div class="circles{{ $day['isPublicHoliday'] ? ' IRIS' : '' }}">
                                                        <!-- Render your content -->
                                                    </div>
                                                    @php
                                                        $leaveCount = $filterCriteria === 'Me' ? $day['leaveCountMe'] : $day['leaveCountMyTeam'];
                                                    @endphp
                                                    @if ($leaveCount > 0)
                                                        <div class="circle-grey">
                                                            <!-- Render your grey circle -->
                                                            <span style="display: flex; justify-content: center; align-items: center;width:20px;height:20px;border-radius:50%;">
                                                                {{ $leaveCount }}
                                                            </span>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    </div>

                 <div class="tol-calendar-legend mt-3 mb-3">
                        <div>
                            Team on Leave
                            <span class="legend-circle" style="background: #ccc; font-size: 0.75rem;">
                                0
                            </span>
                        </div>
                        <div>
                            Restricted Holiday
                            <span class="legend-circle circle-pale-yellow" style="vertical-align: middle; display: inline-block; width: 12px; height: 12px; border-radius: 50%;"></span>
                        </div>
                        <div>
                            General Holiday
                            <span class="legend-circle circle-pale-pink" style="vertical-align: middle; display: inline-block; width: 12px; height: 12px; border-radius: 50%;"></span>
                        </div>
                    </div>
                </div>
                  <div class="col-md-5">
                       <!-- Inside the event-container div -->
                       <div class="event-details" >
                       @if($holidays->count() > 0)
                             <div class="date-day">
                                <span style="font-weight:500;">{{ \Carbon\Carbon::parse($selectedDate)->format('D') }} <br>
                                  <span style="font-weight:normal;font-size:12px;margin-top:-5px;">{{ \Carbon\Carbon::parse($selectedDate)->format('d') }}</span>
                                </span>
                               
                             </div>
                                   <div class="holiday-con">
                                            @foreach($holidays as $holiday)
                                                <span style="font-weight:normal;font-size:11px; color:#778899;">General Holiday <br>
                                                    <span style="font-weight:500;font-size:12px;color:#333;">{{ $holiday->festivals }}</span>
                                                </span>
                                               
                                            @endforeach
                                    </div>
                                 @endif
                            </div>
                            <!-- end -->
                        <div class="cont" style="display:flex;justify-content:end; margin-top:60px;">
                           <div class="search-container" >
                                <div class="form-group"  >
                                    <div class="search-input"  >
                                        <div class="search-cont">
                                                <input wire:model.debounce.500ms="searchTerm" type="text" placeholder="Search Employee">
                                               <!-- Search button -->
                                                <button class="btn-3" wire:click="searchData"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="filter-container1" >
                                <div id="main" style="margin-left: {{ $showDialog ? '250px' : '0' }}">
                                    <button class="openbtn" wire:click="open">
                                            <i class="fa-icon fas fa-filter"></i> 
                                    </button>  
                                </div>
                                
                            </div>
                        </div>
                
                    <div class="leave-accordion" >
                         <div class="leave-accordion-heading active" onclick="toggleAccordion(this)">
                            <div class="leave-accordion-title ">
                                <div class="accordion-content">
                                   <span style="font-size: 14px; font-weight: 500;color:#778899;padding:10px 15px;">Leave transactions({{ count($this->leaveTransactions) }})</span>
                                </div>
                                <div class="arrow-btn p-2" >
                                 <i class="fa fa-angle-down"></i>
                                 </div>
                            </div>
                        </div>
                     <div class="leave-accordion-body">
                       <div class="col-md-12 scroll-tabel" style="overflow-y:auto;max-height:320px; min-height:280px;padding:0;">
                        <table class="leave-table">
                            <thead style="text-align:start;  width:100%;">
                                <tr>
                                    <th style="padding:7px 5px; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc;color:#778899;font-size:11px;font-weight:normal;width: 40%;">Employee ID</th>
                                    <th style="padding:7px 5px; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc;color:#778899;font-size:11px;font-weight:normal;width: 20%;">No of days</th>
                                    <th style="padding:7px 5px; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc;color:#778899;font-size:11px;font-weight:normal;width: 40%;">From-To </th>
                                </tr>
                            </thead>
                            <tbody >
                            @if (empty($this->leaveTransactions))
                            <tr>
                                <td colspan="3">
                                    <p>No data found</p>
                                </td>
                            </tr>`
                            @else
                            @if (!empty($selectedDate))
                                @forelse($this->leaveTransactions as $transaction)
                                    <tr style="border-bottom: 1px solid #ccc; font-size:10px;text-align:start;">
                                        <td style="padding: 20px 5px; border-top: 1px solid #ccc; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                                            <span style="color: black; font-size: 10px; font-weight: 500;">
                                                {{ $transaction->employee->first_name }} {{ $transaction->employee->last_name }}
                                            </span>
                                            <span style="font-size: 10px; color: #778899;">
                                                (#{{ $transaction->emp_id }}<br>{{ $transaction->employee->job_location }}, {{ $transaction->employee->job_title }})
                                            </span>
                                        </td>

                                        <td style=" padding:20px 5px;border-top: 1px solid #ccc;font-weight:500;">{{ $this->calculateNumberOfDays($transaction->from_date, $transaction->from_session, $transaction->to_date, $transaction->to_session) }}</td>
                                        <td style=" padding:20px 5px;border-top: 1px solid #ccc;">
                                        @php
                                            $fromDate = \Carbon\Carbon::createFromFormat('Y-m-d', $transaction->from_date)->format('d M');
                                            $toDate = \Carbon\Carbon::createFromFormat('Y-m-d', $transaction->to_date)->format('d M');
                                        @endphp
                                            @if($fromDate === $toDate)
                                              <span style="color:black;font-size:10px;font-weight:500;"> {{ $fromDate }}</span>
                                            @else
                                                <span style="color:black;font-size:10px;font-weight:500;">{{ $fromDate }} - {{ $toDate }} </span><br><span style="font-size:0.60rem;color:#778899;">{{$transaction->from_session}}&nbsp;&nbsp;&nbsp;&nbsp;{{$transaction->to_session}}</span>
                                            @endif
                                        </td>
                                    </tr>
                                  
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            <div class="leave-trans" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                                <img src="/images/pending.png" alt="Pending Image" style="width: 100%; margin: 0 auto;">
                                                <span style="font-size: 0.75rem; font-weight: 500; color:#778899;">No Employees are on leave</span>
                                            </div>
                                        </td>
                                    </tr>
                                  
                                @endforelse
                              
                                @else
                                    <tr>
                                        <td colspan="3">
                                            <div class="leave-trans" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                                <img src="/images/pending.png" alt="Pending Image" style="width: 100%; margin: 0 auto;">
                                                <span style="font-size: 10px; font-weight: 500; color:#778899;">No Employees are on leave</span>
                                            </div>
                                        </td>
                                    </tr>
                                 @endif
                                 @endif
                               </tbody>
                          </table>
                       </div>
                    </div>
                </div>
            </div>
    </div>
 
    <script>
        function toggleAccordion(element) {
        const accordionBody = element.nextElementSibling;
        if (accordionBody.style.display === 'block') {
            // If accordion is already open, keep it open
            element.classList.add('active'); 
            element.closest('.wrapper').classList.add('fixed'); 
        } else {
            // If accordion is closed, open it
            accordionBody.style.display = 'block';
            element.classList.add('active'); 
            element.closest('.wrapper').classList.add('fixed'); 
        }
    }

    </script> 
</body>
 
</div>