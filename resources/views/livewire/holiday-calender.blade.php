<div>
        <div class="container-holiday m-0">
            <div class="row m-0 p-0">
                <div class="col-md-12 text-right">
                    <select id="yearSelect">
                        <option class="dropdown" value="2023">2023</option>
                        <option class="dropdown" value="2024" selected>2024</option>
                    </select>
                </div>
            </div>
        </div>
        @php
        // Filter the data based on the selected year
        $filteredData2023 = $calendarData->where('year', 2023)->sortBy('date');
        $currentMonth = '';
        $key = 0; // Reset the loop counter
        @endphp
        <div class="hol-container" id="calendar2023" style="display: none;"> <!-- Start the grid -->
            <div class="row m-0 align-items-stretch"> <!-- Create a flex container for months -->
                @foreach($filteredData2023->groupBy(function($entry) {
                return date('F Y', strtotime($entry->date));
                }) as $month => $entries)
                <div class="col-md-3">
                    <div class="inner-container bg-white px-4 py-2 rounded mb-0 mt-4 overflow-auto border hover:bg-light " style="height:230px;box-shadow: 0 2px 5px 1px rgb(0 0 0 / 7%);border-color:#ccc;">
                        <h6 style="font-weight:500;font-size:12px;color:rgb(2, 17, 79);">{{ $month }}</h6>
                        @if($entries->isEmpty() || $entries->every(function ($entry) {
                        return empty($entry->festivals);
                        }))
                        <div class="no-holidays text-center d-flex align-items-center justify-content-center mt-10 font-weight-500" style="color:#778899;">
                            <h6>No holidays</h6>
                        </div>
                        @else
                        <div class="group px-2" >
                            @foreach($entries as $entry)
                            <div class="fest d-flex gap-4 align-items-center" style="color:#778899;">
                                <h5 class="d-flex flex-column align-items-center">{{ date('d', strtotime($entry->date)) }}<span >
                                        <p style="font-size: 10px;">{{ substr($entry->day, 0, 3) }}</p>
                                    </span></h5>
                                <p style=" font-size: 12px;">{{ $entry->festivals }}</p>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        @php
        // Filter the data based on the selected years
        $filteredData2024 = $calendarData->where('year', 2024)->sortBy('date');
        $currentMonth = '';
        @endphp
        <div id="calendar2024" class="hol-container ">
            <div class="row m-0 align-items-stretch"> <!-- Create a flex container for months -->
                @foreach($filteredData2024->groupBy(function($entry) {
                return date('F Y', strtotime($entry->date));
                }) as $month => $entries)
                <div class="col-md-3">
                    <div class="inner-container bg-white px-4 py-2 rounded mb-0 mt-4 overflow-auto border hover:bg-dark" style="border-color:#ccc;height:230px;box-shadow: 0 2px 5px 1px rgb(0 0 0 / 5%);">
                        <h6 style="font-weight:500;font-size:12px;color:rgb(2, 17, 79);">{{ $month }}</h6>
                        @if($entries->isEmpty() || $entries->every(function ($entry) {
                        return empty($entry->festivals);
                        }))
                        <div class="no-holidays text-center d-flex align-items-center justify-content-center font-weight-500 mt-10" style="color:#778899;">
                            <h6>No holidays</h6>
                        </div>
                        @else
                        <div class="group px-2" >
                            @foreach($entries as $entry)
                            <div class="fest d-flex gap-4 align-items-center" style="color:#778899;">
                                <h5 class="d-flex flex-column align-items-center">{{ date('d', strtotime($entry->date)) }}<span >
                                        <p style="font-size: 10px;">{{ substr($entry->day, 0, 3) }}</p>
                                    </span></h5>
                                <p style=" font-size: 12px;">{{ $entry->festivals }}</p>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <script>
            $(document).ready(function() {
                // Initially, show the calendar for the selected year
                var selectedYear = $("#yearSelect").val();
                $("#calendar" + selectedYear).show();

                $("#yearSelect").change(function() {
                    var selectedYear = $(this).val();
                    // Hide all calendars
                    $(".hol-container").hide();
                    // Show the calendar based on the selected year
                    $("#calendar" + selectedYear).show();
                });
            });
        </script>
</div>