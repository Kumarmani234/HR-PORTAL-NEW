<div>
    <body>
        <div class="container">
            <div class="row">
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
            <div class="row m-0"> <!-- Create a flex container for months -->
                @foreach($filteredData2023->groupBy(function($entry) {
                return date('F Y', strtotime($entry->date));
                }) as $month => $entries)
                <div class="col-md-3">
                    <div class="inner-container">
                        <h6>{{ $month }}</h6>
                        @if($entries->isEmpty() || $entries->every(function ($entry) {
                        return empty($entry->festivals);
                        }))
                        <div class="no-holidays">
                            <h6>No holidays</h6>
                        </div>
                        @else
                        <div class="group" >
                            @foreach($entries as $entry)
                            <div class="fest" style="display:flex; gap:20px;">
                                <h5>{{ date('d', strtotime($entry->date)) }}<span>
                                        <p style="font-size: 0.7rem;">{{ substr($entry->day, 0, 3) }}</p>
                                    </span></h5>
                                <p style=" font-size: 0.856rem;">{{ $entry->festivals }}</p>
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
        <div id="calendar2024" class="hol-container">
            <div class="row m-0"> <!-- Create a flex container for months -->
                @foreach($filteredData2024->groupBy(function($entry) {
                return date('F Y', strtotime($entry->date));
                }) as $month => $entries)
                <div class="col-md-3">
                    <div class="inner-container">
                        <h6>{{ $month }}</h6>
                        @if($entries->isEmpty() || $entries->every(function ($entry) {
                        return empty($entry->festivals);
                        }))
                        <div class="no-holidays">
                            <h6>No holidays</h6>
                        </div>
                        @else
                        <div class="group" style="">
                            @foreach($entries as $entry)
                            <div class="fest" style="display:flex; gap:10px;">
                                <h5>{{ date('d', strtotime($entry->date)) }}<span>
                                        <p style="font-size: 0.7rem;">{{ substr($entry->day, 0, 3) }}</p>
                                    </span></h5>
                                <p style=" font-size: 0.856rem;">{{ $entry->festivals }}</p>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Include Bootstrap and jQuery JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

    </body>

    </html>
</div>