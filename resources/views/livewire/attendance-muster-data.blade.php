<div>
    <style>
        .search-bar{
            display:flex;
            padding:0;
            justify-content:start;
            width: 250px; /* Adjust width as needed */
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow: hidden;
            background:#fff;
        }
        /* Styling for the input */
        .search-bar input[type="search"] {
            flex: 1;
            padding: 5px;
            border: none;
            outline: none;
            font-size: 14px;
            background: transparent;
        }
        /* Styling for the search icon */
        .search-bar::after {
            content: "\f002"; /* Unicode for the search icon (font-awesome) */
            font-family: FontAwesome; /* Use an icon font library like FontAwesome */
            font-size: 16px;
            padding: 5px;
            color: #999; /* Icon color */
            cursor: pointer;
        }

        /* Styling for the search icon (optional) */
        .search-bar input[type="search"]::placeholder {
            color: #999; /* Placeholder color */
        }

        .search-bar input[type="search"]::-webkit-search-cancel-button {
            display: none; /* Hide cancel button on Chrome */
        }
        .summary{
            border:1px solid #ccc;
            background:#ebf5ff;
            padding:0;
        }
        .Attendance {
            border: 1px solid #ccc;
            background: #ebf5ff;
            padding: 0;
            max-width: 800px;
            overflow-x: auto;
            scrollbar-width: thin; /* For Firefox */
            scrollbar-color: #dce0e5; /* For Firefox */
        }

        /* For Webkit-based browsers (Chrome, Safari, Edge) */
        .Attendance::-webkit-scrollbar {
            width: 2px; /* Width of the scrollbar */
            height:8px;
        }

        /* Track (the area where the scrollbar sits) */
        .Attendance::-webkit-scrollbar-track {
            background: #fff; /* Background color of the track */
        }

        /* Handle (the draggable part of the scrollbar) */
        .Attendance::-webkit-scrollbar-thumb {
            background: #dce0e5; /* Color of the scrollbar handle */
            border-radius: 2px; /* Border radius of the handle */
        }

        /* Handle on hover */
        .Attendance::-webkit-scrollbar-thumb:hover {
            background: #dce0e5; /* Color of the scrollbar handle on hover */
        }

        .Attendance th,
        .Attendance td {
            width: auto;
            white-space: nowrap; /* Prevent content from wrapping */
        }
        .table{
            background:#fff;
            margin:0;
        }
       
        td{
            font-size:0.795rem;
        }
        .table tbody td {
            border-right: 1px solid #d5d5d5; /* Vertical border color and width */
        }

        /* Remove right border for the last cell in each row to avoid extra border */
        .summary .table tbody tr td:last-child {
            border-right: none;
            background:#f2f2f2;
        }
        .Attendance .table tbody tr td:last-child {
            border-right: none;
        }
     
    
    </style>
    @php
        $present=0;
        $count=0;
        $flag=0;
    @endphp  
    
    <div class="container">
        <div class="search-bar">
            <input type="search" placeholder="Search...">
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="summary col-md-3">
                <p style="background:#ebf5ff;padding:5px 15px;font-size:0.755rem;">Summary</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:75%;background:#ebf5ff;color:#778899;font-weight:500;line-height:2;font-size:0.825rem;">Employee Name</th>
                            <th  style="width:25%;background:#ebf5ff;color:#778899;font-weight:500;line-height:2;font-size:0.8255rem;">P</th>
                            <!-- Add more headers as needed -->
                        </tr>
                    </thead>
                    
                      <tbody>
                        <!-- Add table rows and data for Summary -->
                        @foreach($Employees as $emp)
                          <tr>
                             
                                <td>{{ucfirst($emp->first_name)}}&nbsp;{{ucfirst($emp->last_name)}}<br/>#{{ $emp->emp_id }}</td>
                               @foreach($DistinctDatesMapCount as $empId=>$d1)
                                   @if($empId ==$emp->emp_id)
                                      
                                      <td>{{$d1['date_count']}}</td>
                                      
                                   @endif

                                  
                               @endforeach 
                                
                          </tr>
                         @endforeach 
                        <!-- Add more rows as needed -->
                     </tbody>
                   
                </table>
            </div>
            <div class="Attendance col-md-9" >
                <p style="background:#ebf5ff; padding:5px 15px;font-size:0.755rem;">Attendance</p>
                <table class="table">
                @php
                    // Get current month and year
                    $currentMonth =12;
                    
                    $currentYear = 2023;
                    
                    // Total number of days in the current month
                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
                @endphp
                 
                <thead>
                    <tr>
                        @for ($i = 1; $i <= $daysInMonth; $i++)
                            @php
                                $timestamp = mktime(0, 0, 0, $currentMonth, $i, $currentYear);
                                $dayName = date('D', $timestamp); // Get the abbreviated day name (e.g., Sun, Mon)
                                $fullDate = date('Y-m-d', $timestamp); // Full date in 'YYYY-MM-DD' format
                               
                            @endphp
                            <th style="width:75%; background:#ebf5ff; color:#778899; font-weight:500; text-align:center;">
                                <div style="font-size:0.825rem;line-height:0.8;font-weight:500;">{{ $i }}</div>
                                <div style="margin-top:-5px; font-size:0.625rem;margin-top:1px;">{{ $dayName }}</div>
                            </th>

                        @endfor
                    </tr>
                </thead>
              
                    <tbody>
                        <!-- Add table rows and data for Attendance -->
                        
                        @while ($EmployeesCount > 0)
                        @foreach($Employees as $e)
                            
                          
                        <tr style="height:64px;background-color:pink;">
                          
                           @for ($i = 1; $i <= $daysInMonth; $i++)
                           @php
                                $timestamp = mktime(0, 0, 0, $currentMonth, $i, $currentYear);
                                $dayName = date('D', $timestamp); // Get the abbreviated day name (e.g., Sun, Mon)
                                $fullDate = date('Y-m-d', $timestamp);
                                 // Full date in 'YYYY-MM-DD' format
                           @endphp
                       
                          <td >
                         
                          @foreach ($DistinctDatesMap  as $empId => $distinctDates)
                            @if($empId==$e->emp_id)
                            @php 
                             
                               foreach ($distinctDates as $distinctDate) {
                            // Extract date part from created_at and distinctDate
                             print($distinctDate);
                               $createdAtDate = date('Y-m-d', strtotime($e->created_at));
                               
               
                            // Your logic for each distinct date
                              if ($distinctDate === $fullDate) {
                                $present=1;
                                
                              }
                            }
                            @endphp
                           @endif  
                          @endforeach
                                  @if ($dayName === 'Sat' || $dayName === 'Sun')
                                    <p style="color:#666;font-weight:500;">O</p>
                                  @elseif ($Holiday->contains('date',$createdAtDate))
                                    <p style="color: #666; font-weight: 500;">H</p>
                                        
                                  @elseif($present==1)
                                    <p style=" color:#666;font-weight:500;">P</p> 
                                
                                  
                                  @else
                                    <p style=" color: #f66;font-weight:500;">A</p>    
                                  @endif
                        </td>
                            
                          @php
                             $present=0;
                          @endphp   
                         @endfor
                         @php
                             $EmployeesCount--;
                           
                         @endphp
                        
                        
                        
                       </tr>
                       @endforeach
                       @endwhile
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>