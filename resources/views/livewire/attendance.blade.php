<div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+JqAcKMpZ0Kw0fF0Zr5l5f8r5E5Xn2ThIv2+1Jq2i/C5EdDX" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.js"></script>
    
    
<style>
     .my-button {
    
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    float:right;
    margin-right:30px;
    margin-top:20px;
    color: #fff;
    border-color: #24a7f8;
    background: #24a7f8;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;

  }
  .my-button:hover {
    /* Styles for hover state */
    text-decoration: none;
    background-color:rgb(2, 17, 79);; 
    color: #fff !important; /* Remove underline on hover */
}

.my-button:active {
    /* Styles for active/clicked state */
    text-decoration: none; 
    /* Remove underline when clicked */
}







  .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 500px; /* Adjust the total width as needed */
    height: 40px; /* Adjust the height as needed */
    /* Background color of the container */
    border: 1px solid #ccc; /* Border style for the container */
    padding: 10px; /* Padding inside the container */
    font-size: 14px;
    margin-left:170px;
    margin-bottom:-100px;
    background-color:#FFFFFF; /* Font size for the text */
  }
  .insight-card[_ngcontent-hbw-c670] {
    border: 1px solid #cbd5e1;
    border-radius: 4px;
    margin-right: 15px;
    min-height: 102px;
    width: 170px;
}
.insight-card[_ngcontent-hbw-c670] h6[_ngcontent-hbw-c670] {
    border-bottom: 1px solid #cbd5e1;
    margin: 0;
    padding: 7px 20px;
    text-transform: uppercase;
}
.text-regular {
    font-weight: 400;
}

 .text-secondary {
    color: #7f8fa4;
}
.text-center {
    text-align: center;
}
.info-icon-container {
    position: relative;
    display: inline-block;
  }

  .info-icon {
    font-size: 14px;
    color: blue;
  }

  .info-box {
    display: none;
    position: absolute;
    top: 100%;
    left: 50%;
    color:#fff;
    transform: translateX(-50%);
    background-color:  #808080;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius:5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  }

  .info-icon-container:hover .info-box {
    display: block;
  }
.text-2 {
    font-size: 18px;
}
.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgba(255,255,255,var(--tw-bg-opacity));
}
.text-success {
    color: #5bc67e;
}
.text-muted {
    color: #a3b2c7;
}
a{
    color: #24a7f8;
}
.text-5 {
    font-size: 12px;
    margin-top: 50px;
    margin-bottom: 0;
}
.btn-group {
    position: relative;
    display: inline-block;
    vertical-align: middle;
}
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group .btn.icon-btn {
    min-width: 30px;
    padding: 0;
}
.btn-group .btn.active {
    background-color: #24a7f8;
    border: 1px solid #24a7f8;
    color: #fff;
    }
    .btn-group>.btn:first-child {
    margin-left: 0;
}
[_nghost-exg-c673] .details[_ngcontent-exg-c673] {
    border: 1px solid #cbd5e1;
    border-radius: 4px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgba(255,255,255,var(--tw-bg-opacity));
}
.calendar {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    margin-left:10px;
    margin-top:30px;

    background-color: #f0f0f0;
  }
  .large-box {
    max-width: 900px;
    height:220px;
    margin: 0 auto;
    padding: 20px;
    margin-left:10px;
    margin-top:30px;
    overflow:auto;
    background-color: #f0f0f0;
  }

  /* Month header */
  .calendar-header {
    text-align: center;
    background-color: #888;
    color: white;
    padding: 10px;
  }
  
#calendar-icon {
    border-top-left-radius: 5px; /* Adjust the value as needed */
    border-bottom-left-radius: 5px; /* Adjust the value as needed */
}

#bars-icon {
    border-top-right-radius: 5px; /* Adjust the value as needed */
    border-bottom-right-radius: 5px; /* Adjust the value as needed */
}
  /* Days of the week */
  .calendar-weekdays {
    display: flex;
    justify-content: space-between;
    background-color: #ddd;
    padding: 5px;
  }

  .calendar-weekdays div {
    text-align: center;
    width: calc(100% / 7);
  }
  .centered-modal {
    display: flex;
    align-items: center;
    justify-content: center;
}
  /* Calendar days */
  .calendar-days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
  }

  .calendar-day {
    text-align: center;
    padding: 10px;
    border: 1px solid #ccc;
    background-color: white;
  }

  /* Today's date */
  .calendar-day.today {
    background-color: #0099cc;
    color: white;
  }
  .container1 {
    width: 600px; /* Adjust the width as needed */
    height: 180px;
    margin-right:-120px;
    background-color: #FFFFFF;
    margin-top:30px;
    /* margin-top:420px; */
    border-radius:10px;
    float:right;/* Adjust the height as needed */
/* Background color of the container */
    border: 1px solid #ccc; 
   /* Border style for the container */
  }
  .container2 {
    width: 600px; /* Adjust the width as needed */
    height: 140px;
    margin-right:-120px;
    background-color:#FFFFFF;
    margin-top:40px;
    border-radius:10px;
    padding-bottom:-70px;
    float:right;/* Adjust the height as needed */
    /* Background color of the container */
    border: 1px solid #ccc; /* Border style for the container */
  }
  .container1, .container2, .container3, .container6 {
      display: none;
    }
  .container6 {
    width: 600px; /* Adjust the width as needed */
    height: 45px;
    margin-right:-120px;
    background-color:#FFFFFF;
    margin-top:30px;
    border-radius:2px;
    float:right;/* Adjust the height as needed */
    /* Background color of the container */
    border: 1px solid #ccc; /* Border style for the container */
  }
  .container-body
  {
    width: 600px; /* Adjust the width as needed */
    height: 105px;
    margin-right:0px;
    background-color:#FFFFFF;
  
    display:none;
    /* border-radius:10px; */
    float:right;/* Adjust the height as needed */
    /* Background color of the container */
    border: 1px solid #ccc; 
  }
   /* Basic styles for the input container */
   .date-range-container {
            display: flex;
            align-items: center;
            width: 300px; /* Adjust the width as needed */
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-left:198px;

            margin-top:-80px;
        }
        .chart-range-container
        {
          display: flex;
            align-items: center;
            width: 600px; /* Adjust the width as needed */
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-left:-98px;
            overflow-x:auto;
            height:120px;
            margin-top:40px;
        }
        /* Style for the calendar icon */
        .calendar-icon {
            margin-right: 10px;
            color: #888;
        }

        /* Style for the input field */
        .date-range-input {
            border: none;
            outline: none;
            width: 100%;
        }
  .container3 {
    width: 600px; /* Adjust the width as needed */
    height: 180px;
    margin-right:-120px;
    background-color:#FFFFFF;
    margin-top:30px;
    border-radius:10px;
    float:right;/* Adjust the height as needed *//* Background color of the container */
    border: 1px solid #ccc; /* Border style for the container */
  }
  /* CSS for the table */
  .large-box {
    width: 100%;
    overflow-x: auto;
}
.second-header-row th.date {
    width: 100px; /* Adjust the width of the Date column as needed */
}

.second-header-row th:not(.date) {
    width: 120px; /* Adjust the width of the Shift and Shift Timings columns as needed */
}

.large-box table {
   
    
    
    max-width: 100%;
    margin-top:-20px;
    table-layout: fixed; /* Fix the table layout */
    width: auto; /* Set the table to an appropriate width or it will expand to the container's full width */
    white-space: nowrap; /* Prevent table cell content from wrapping */
    border-collapse: collapse;
   
}

 .large-box td {
    padding: 10px;
    border:1px solid #000;
    background-color:white;  
}
.date
{
  border-collapse: collapse;
  border:1px solid #000;
  margin-left:10px;

}
.large-box
{
  display:none;
  height:200px;
}
.large-box th {
    background-color: #24a7f8;
    color: white;
    width: 600px; /* Adjust the width as needed */
    padding-right: 50px;
}

/* CSS for the second header row */
.large-box .second-header-row {
    background-color: #3498db;
    color: white;
}
  .vertical-line {
  border-left: 1px solid black; /* Adjust the width and color as needed */
  height: 70px; /* Adjust the height as needed */
  margin-top: -70px;
  
  padding: 0;
  margin-left:60px;
}


.chart-column {
            flex: 1; /* Distribute available space equally among columns */
            padding: 70px;
            margin-top: -40px;
            text-align: center;
            border-right: 1px solid #ccc;
        }

        /* Remove the right border for the last column */
        .chart-column:last-child {
            border-right: none;
            margin-top: -40px;
        }
        
.horizontal-line {
  width: 100%; /* Set the width to the desired value */
  border-top: 1px solid #000; /* You can adjust the color and thickness */
  margin: 0px 0; /* Adjust the margin as needed */
}
.horizontal-line1 {
  width: 100%; /* Set the width to the desired value */
  border-top: 1px solid #000; /* You can adjust the color and thickness */
  margin: 0px 0; /* Adjust the margin as needed */
}
.box {
    width: 100px;
    height: 30px;
    border: 2px solid #000; /* You can change the border color here */
    text-align: center;
    display: inline-block;
    margin: 10px 8px;

    border: 2px solid grey;
}

.box-content {
    margin-top: 5px; /* Adjust the margin as needed to center the text vertically */
}






.horizontal-line2 {
  width: 100%; /* Set the width to the desired value */
  border-top: 1px solid #000; /* You can adjust the color and thickness */
  margin: -10px 0; /* Adjust the margin as needed */
}
table {
    border-collapse: collapse;
    width: 100%;
    
  }

  /* CSS for the table header (thead) */
  thead {
  
    background-color:#B6D0E2;
    color: white;
  }

  /* CSS for the table header cells (th) */
  th {
    padding: 10px;
    text-align: left;
  }
  td {
   /* Add borders to separate cells */
    padding: 10px;
    text-align: left;
  }
  .toggle-box {
    display: flex;
    align-items: center;
    background-color: #f0f0f0;
    
    width: 73px;
    margin-left: 850px;
    margin-top: -40px;
    padding: 5.5px 6px; /* Adjust padding as needed */
}

.toggle-box i {
    color: grey; /* Set the icon color */
    background-color: white; /* Set the background color for icons */
    padding: 7px 7px; /* Set padding for icons */
    margin-right: 0px; /* Add spacing between icons if desired */
}
.toggle-box i.fas.fa-calendar {
   /* Initial icon color */
  /* Initial background color for icon */
  padding: 7px 7px; /* Initial padding for icon */
  margin-right: 0px; /* Initial spacing between icons */
  border: 2px solid transparent;
  
   /* Initial border color (transparent) */
}


.toggle-box i.fas.fa-calendar:hover {
  color:  #24a7f8;/* Icon color on hover */
  /* Background color for icon on hover */
  border-color:  #24a7f8; /* Border color on hover */
}
.toggle-box i.fas.fa-bars {
  color: g
  rey; /* Initial icon color */
  /* Initial background color for icon */
  padding: 7px 7px; /* Initial padding for icon */
  margin-right: 0px; /* Initial spacing between icons */
  border: 2px solid transparent; /* Initial border color (transparent) */
}

.toggle-box i.fas.fa-bars:hover {
  color:  #24a7f8;; /* Icon color on hover */
  /* Background color for icon on hover */
  border-color: #24a7f8;; /* Border color on hover */
}
.toggle-box i.fas.fa-calendar.active {
  color: white; /* Icon color when active (clicked) */
  background-color:#24a7f8 ; /* Background color when active (clicked) */
}
.toggle-box i.fas.fa-bars.active {
  color: white; /* Icon color when active (clicked) */
  background-color: #24a7f8; /* Background color when active (clicked) */
}





  .custom-modal .modal-header {
    padding: 10px; 
    background-color: #e9edf1;/* Decrease header padding */
}
.date-picker-container {
            position: relative;
            display: none;
            
        }
        
        .date-input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .calendar-icon1 {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        
        #calendar4 {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            border: 1px solid #ccc;
            z-index: 1000;
        }
        
        #calendar4 .calendar {
            display: inline-block;
            margin: 10px;
        }
    

.custom-modal .modal-body {
    padding: 100px; /* Increase body padding */
}

  /* CSS for the icons */
  .icon {
    font-size: 24px;
    margin-right: 10px;
  }
 /* Style for the row container */
 

        /* Style for individual values */
    
        /* Style for individual values */
        .chart-value {
            flex: 1; /* Distribute available space equally among values */
            text-align: center;
            margin-top: 40px;
            padding: 10px;
            
            
        }
        .chart-column > div {
            margin: 0 auto;
        }
  /* CSS for the lines icon */
  .lines-icon::before {
    content: "\2630";
    background-color: white; 
    padding-top: 5px; 
    padding-right:12px;
    padding-bottom:7px;
    margin-left:-10px;
  /* Unicode character for the three lines icon */
  }
  .rotate-arrow {
  transform: rotate(90deg);
  transition: transform 0.3s ease; /* Add a smooth transition effect */
}
  /* CSS for the calendar icon */
  .calendar-icon::before {
    content: "\1F4C5";
    background-color: white; /* Add a blue background color */
    color: white; /* Set the text color to white */
    padding-top: 5px; 
    padding-right:6px;
    padding-bottom:6px;/* Add padding for spacing */
     /* Unicode character for the calendar icon */
  }
  
  .arrow-button::after {
    content: "\25B6"; /* Unicode character for right-pointing triangle (arrow) */
    font-size: 18px;
    
  }
  .modal-box {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}
.legend-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* Adjust as needed for spacing */
}
.custom-modal-lg {
    max-width: 90%;
    
}

.modal-content {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.fa-info-circle:hover {
      text-decoration: underline;
    }
    .container11 {
    display: flex;
}
.sidebar {
    position: fixed;
    top: 0;
    right: -250px; /* Initially, hide the sidebar off-screen */
    width: 250px;
    height: 100%;
    background-color: #fff;
    color: #fff;
    transition: right 0.3s ease-in-out;
}
.close-sidebar
{
    margin-left:205px;
    margin-bottom:-50px;
}
.content {
    margin-right: 20px;
    
}
/* Existing styles for sidebar */


/* Styles for sidebar header */
.sidebar .sidebar-header {
    background-color: #e9edf1;
    padding: 10px;
    text-align: center;
}

.sidebar .sidebar-header h2 {
    color: #7f8fa4;
    font-size: 24px;
    margin: 0;
}
.sidebar-content h3{
    color: #7f8fa4; 
    margin-left:30px;
}
.sidebar-content p
{
    color:#7f8fa4;
    font-size:12px;
    margin-left:30px;
}

/* Hover styles */

.text-overflow
{
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
</style>    
<div style="width:450">
   <a href="/regularisation"class="my-button" id="myButton">My Regularisations</a>
   <div class="container">
  <!-- Red info icon on the left -->
     <i class="fa fa-info-circle" aria-hidden="true"style="font-size: 24px; color: red;"></i>
  <!-- Small box with the text -->
     <div>Access card details not available</div>
  <!-- Blue info icon on the right -->
      <div class="info-icon-container">

        <i class="fa fa-info-circle" aria-hidden="true"style="font-size: 14px; color: blue;"></i>
        <div class="info-box">
             Contact administrator to get access card assigned.
        </div>
      </div>  
  </div>  
  <div style="display:flex;flex-direction:row;margin-top:140px;margin-left:20px;">
    <div _ngcontent-hbw-c670="" class="insight-card bg-white ng-star-inserted">
      <h6 _ngcontent-hbw-c670="" class="text-secondary text-regular text-center"> Penalty Days </h6>
      <section _ngcontent-hbw-c670="">
        <p _ngcontent-hbw-c670="" style="margin-left:80px;"class="text-2"> 0 </p>
      </section>
    </div>
    <div _ngcontent-hbw-c670="" class="insight-card bg-white ng-star-inserted"style="width:250px;">
      <h6 _ngcontent-hbw-c670="" class="text-secondary text-regular text-center">Avg.&nbsp;Actual&nbsp;Work&nbsp;Hrs</h6>
      <section _ngcontent-hbw-c670="">
     
        <p _ngcontent-hbw-c670="" style="margin-left:100px;"class="text-2">02:00</p>
        <div style="margin-left:40px;margin-top:-10px;">
          <span _ngcontent-hbw-c670="" class="text-success ng-star-inserted"style="font-size:10px;margin-left:40px;"> +233% </span>
          <span _ngcontent-hbw-c670="" class="text-muted"style="font-size:10px;margin-left:0px;"> From August </span>
        </div>  
     </section>
    </div>
    <div _ngcontent-hbw-c670="" class="insight-card bg-white ng-star-inserted">
      <h6 _ngcontent-hbw-c670="" class="text-secondary text-regular text-center">Avg. Work Hrs</h6>
      <section _ngcontent-hbw-c670="">
        <p _ngcontent-hbw-c670="" style="margin-left:60px;"class="text-2">02:00</p>
        <div style="margin-left:40px;margin-top:-10px;">
         <span _ngcontent-hbw-c670="" class="text-success ng-star-inserted"style="font-size:10px;"> +233% </span>
         <span _ngcontent-hbw-c670="" class="text-muted"style="font-size:10px;"> From August </span>
        </div> 
      </section>
  </div>
     

     <a href="#"  data-toggle="modal" data-target="#exampleModal" style="text-transform:uppercase;margin-top:40px;">
                       +3 Insights
                   </a> 
                   <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog custom-modal-lg centered-modal custom-modal"role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #a3b2c7;">
                                    <h5 class="modal-title" id="exampleModalLabel">Insights&nbsp;for&nbsp;Attendance&nbsp;Period&nbsp;01 Oct - 01 Oct</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true close-btn">×</span>
                                    </button>
                                </div>
                               <div class="modal-body">
                                   <div class="date-range-container">
                                      
                                       <input class="date-range-input" type="text" placeholder="Select date range">
                                       <span><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <p style="margin-left:-90px;font-size:12px;">Total Working Days:<span style="font-weight:bold;">0</span></p>
                                    
                                    <div class="chart-range-container">
                                         <div class="chart-value"><span style="font-weight:bold;">0</span></div>
                                         <div class="chart-column">AVG.&nbsp;WORK&nbsp;HRS</div>
                                         <div class="chart-value"><span style="font-weight:bold;">-</span></div> 
                                         <div class="chart-column">AVG.&nbsp;ACTUAL&nbsp;WORK&nbsp;HRS</div>
                                         <div class="chart-value"><span style="font-weight:bold;">0</span></div>
                                         <div class="chart-column">PENALTY&nbsp;DAYS</div>
                                         <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                         <div class="chart-column">LATE&nbsp;IN</div>
                                         <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                         <div class="chart-column">EARLY&nbsp;OUT</div>
                                         <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                         <div class="chart-column">LEAVE&nbsp;TAKEN</div>
                                         <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                         <div class="chart-column">ABSENT&nbsp;DAYS</div>
                                         <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                         <div class="chart-column">EXCEPTION&nbsp;DAYS</div>
                                         
                                         
                                     
                                    </div>

                                    <div style="margin-top:20px;display:flex;flex-direction:row;">
                                       <p style="margin-left:-30px;">Avg&nbsp;First&nbsp;In&nbsp;Time:&nbsp;&nbsp;<span style="font-weight:600;">00:00:00</span></p>
                                       <p style="border-right: 1px solid #ccc;margin-left:40px;"></p>
                                       <p style="margin-left:50px;">Avg&nbsp;Last&nbsp;Out&nbsp;Time:&nbsp;&nbsp;<span style="font-weight:600;">00:00:00</span></p>
                                    </div>        
                                          
                                </div>
                               
                            </div>
                        </div>
                    </div>  
           
     <a href="#" id="toggleSidebar" class="gt-overlay-toggle" style="margin-top:69px;color:#24a7f8;margin-left:50px;">Legend</a>
     <div class="sidebar">
        <!-- Sidebar content goes here -->
        <div class="sidebar-header"style="display: flex; justify-content: space-between; align-items: center;">
           <h3 style="color: #7f8fa4;margin-left:0;font-size:20px;">Legends</h3>
           <button style="font-size: 12px; padding: 5px 10px; margin-left: 10px; margin-top: -5px;" id="closeSidebar">&#10006;</button>
           

        </div> 
        <div class="sidebar-content">
          <h3 style="font-size: 16px;">Shift Codes</h3>
         <div style="display:flex;flex-direction:row;margin-top:-10px;margin-left:8px;">
          <div class="legend-item">
            <i class="fas fa-caret-right" style="font-size: 24px; color: #e2b7ff;margin-left:25px;"></i>
            <p style="display: inline-block; margin-left: -10px;margin-top:20px;">Override</p>
        </div>
        <div class="legend-item">
            <i class="fas fa-caret-right" style="font-size: 24px; color: #ff9595;margin-left:25px;"></i>
            <p style="display: inline-block; margin-left: -10px;margin-top:20px">Deduction</p>
        </div>
        </div>
        <div style="display:flex;flex-direction:row;margin-top:-30px;margin-left:8px;">
        <div class="legend-item">
            <i class="fas fa-caret-right" style="font-size: 24px; color: #7dd4ff;margin-left:25px;"></i>
            <p style="display: inline-block; margin-left: -10px;margin-top:20px">Alert&nbsp;for&nbsp;Deduction</p>
        </div>
        <div class="legend-item">
            <i class="fas fa-caret-right" style="font-size: 24px; color: #c7c7c7;margin-left:25px;"></i>
            <p style="display: inline-block; margin-left: -10px;margin-top:20px">Ignored</p>
        </div>
        </div>
        <div style="display:flex;flex-direction:row;margin-top:-30px;margin-left:8px;">
        <div class="legend-item">
            <i class="fas fa-caret-right" style="font-size: 24px; color: #ffe8de;margin-left:25px;"></i>
            <p style="display: inline-block; margin-left: -10px;margin-top:20px">Grace</p>
        </div>
        </div>
          <h3 style="font-size: 16px;">Status</h3>
          <div style="display:flex;flex-direction:row;margin-top:-10px;">
             <div class="legend-item">
               <i class="fas fa-circle" style=" color: #e2b7ff;margin-left:25px;"></i>
               <p style="display: inline-block; margin-left: -10px;margin-top:20px">Holiday</p>
             </div>
             <div class="legend-item">
               <i class="fas fa-circle" style=" color: #e3c82e;;margin-left:25px;"></i>
               <p style="display: inline-block; margin-left: -10px;margin-top:20px">Overtime</p>
             </div>

           
          </div> 
          <div style="display:flex;flex-direction:row;margin-top:-30px;">   
             <div class="legend-item">
               <i class="fas fa-circle" style="color: #eae929;margin-left:25px;"></i>
               <p style="display: inline-block; margin-left: -10px;margin-top:20px">Restricted&nbsp;Holiday</p>
             </div>
             <div class="legend-item">
               <p  style=" color: #f66;margin-left:10px;margin-top:20px;">A</p>
               <p style="display: inline-block; margin-left: 10px;margin-top:20px">Absent</p>
             </div>
          </div>  
          <div style="display:flex;flex-direction:row;margin-top:-30px;margin-left:20px;">   
             <div class="legend-item">
               <p  style=" color: #a3b2c7;;margin-left:10px;margin-top:20px;">R</p>
               <p style="display: inline-block; margin-left: 10px;margin-top:20px">Rest&nbsp;Day</p>
             </div>
             <div class="legend-item">
               <p  style=" color:#a3b2c7;;margin-left:10px;margin-top:20px;">P</p>
               <p style="display: inline-block; margin-left: 10px;margin-top:20px">Present</p>
             </div> 
          </div> 
          <div style="display:flex;flex-direction:row;margin-top:-30px;margin-left:20px;">   
             <div class="legend-item">
               <p  style=" color: #a3b2c7;;margin-left:10px;margin-top:20px;">O</p>
               <p style="display: inline-block; margin-left: 10px;margin-top:20px">Off&nbsp;Day</p>
             </div> 
             <div class="legend-item">
               <p  style=" color: #a3b2c7;;margin-left:10px;margin-top:20px;">L</p>
               <p style="display: inline-block; margin-left: 10px;margin-top:20px">Leave</p>
             </div> 
          </div>
          <div style="display:flex;flex-direction:row;margin-top:-30px;margin-left:20px;">
            <div class="legend-item">
               <p  style=" color: #a3b2c7;;margin-left:10px;margin-top:20px;">?</p>
               <p style="display: inline-block; margin-left: 10px;margin-top:20px">Status Unknown</p>
             </div> 
          </div>  
          
        </div>

    </div>

     
  </div>
  
  <div class="toggle-box">
        <i class="fas fa-calendar"id="calendar-icon" onclick="showCalendar()" ></i>
        <i class="fas fa-bars" id="bars-icon" onclick="showMessage()"></i>
     </div>
     
     <div class="calendar"style="display:none;">
  <div class="calendar-header">
    <h1>September 2023</h1>
  </div>
  <div class="calendar-weekdays">
    <div>Sun</div>
    <div>Mon</div>
    <div>Tue</div>
    <div>Wed</div>
    <div>Thu</div>
    <div>Fri</div>
    <div>Sat</div>
  </div>
  <div class="calendar-days" id="calendar-days">
    <!-- Calendar days will be generated here -->
  </div>

<div class="container1">
  <!-- Content goes here -->
  <div>
    <p style="margin-left:20px;font-weight:bold;">{{ $currentDate }}</p>
    <p style="margin-left:15px;margin-top:-10px;font-weight:bold;">{{$currentWeekday}}</p>
</div> 
  <div class="vertical-line">
    <div>
     <p class="text-overflow" style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;font-weight:bold;">10:00 Am to 07:00 pm</p> 
     <p class="text-muted"style="margin-top:-10px;">Shift:10:00 to 19:00</p> 
    </div>
    <div style="margin-left:200px;margin-top:-68px;"> 
     <p style="font-weight:bold;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">10:00 Am to 07:00 pm</p> 
     <p class="text-muted"style="margin-top:-10px;">Attendance Scheme</p>
    </div> 
  </div>
    
   
  <div class="horizontal-line"></div>
  <div class="text-muted">Processed On</div>
  <div class="horizontal-line1"></div>
  <div style=" overflow-x: auto;
    max-width: 100%;">
  <table>
  <thead>
    <tr>
      <th>First&nbsp;In</th>
      <th>Last&nbsp;Out</th>
      <th>Total&nbsp;Work&nbsp;Hrs</th>
      <th>Break&nbsp;Hrs</th>
      <th>Actual&nbsp;Work&nbsp;Hrs</th>
      <th>Work&nbsp;Hours&nbsp;in&nbsp;Shift&nbsp;Time</th>
      <th>Shortfall&nbsp;Hrs</th>
      <th>Excess&nbsp;Hrs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <!-- Add more rows with dashes as needed -->
  </tbody>
  <!-- Add table rows (tbody) and data here if needed -->
</table>

</div>
</div>
<div class="container2">
  <h3 style="margin-left:20px;margin-top:20px;color: #7f8fa4;font-size:20px;">Status Details</h3> 
  
  <div style=" overflow-x: auto;
    max-width: 100%;">
  <table style="margin-top:-10px;">
  <thead>
    <tr>
      <th>Status</th>
      <th>Remarks</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>-</td>
      <td>-</td>
      
    </tr>
    <!-- Add more rows with dashes as needed -->
  </tbody>
  <!-- Add table rows (tbody) and data here if needed -->
</table>
</div>
</div> 
<div class="container3">
  <h3 style="margin-left:20px;margin-bottom:10px;color: #7f8fa4;font-size:20px;">Session Details</h3> 
  
  <div style=" overflow-x: auto;
    max-width: 100%;">
  <table style="margin-top:20px">
  <thead>
    <tr>
      <th>Session</th>
      <th>Session&nbsp;Timing</th>
      <th>First&nbsp;In</th>
      <th>Last&nbsp;Out</th>
      <th>Late&nbsp;In&nbsp;Hrs</th>
      <th>Early&nbsp;Out&nbsp;Hrs</th>
      <th>Total&nbsp;Work&nbsp;Hrs</th>
      <th>Actual&nbsp;Work&nbsp;Hrs</th>
      <th>Excess&nbsp;Hrs</th>
      <th>Shortfall&nbsp;Hrs</th>
      <th>Break&nbsp;Hrs</th>
    </tr>
  </thead>
  <tbody>
    <tr style="border-bottom: 1px solid #ddd;">
      <td>Session&nbsp;1</td>
      <td>10:00 - 14:00</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>+00:00</td>
      <td>00:00</td>
      <td>00:00</td>
      <td>00:00</td>
      <td>00:00</td>
      <td>00:00</td>
    </tr>
    <tr style="border-bottom: 1px solid #ddd;">
      <td>Session&nbsp;2</td>
      <td>10:00 - 14:00</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>+00:00</td>
      <td>00:00</td>
      <td>00:00</td>
      <td>00:00</td>
      <td>00:00</td>
      <td>00:00</td>
    </tr>
    <!-- Add more rows with dashes as needed -->
  </tbody>
  <!-- Add table rows (tbody) and data here if needed -->
</table>
</div>

</div>
<div class="container6">
  <h3 style="margin-left:20px;color: #7f8fa4;">Swipes</h3>
  <div class="arrow-button"style="float:right;margin-top:-40px;margin-right:20px;"id="toggleButton"></div> 
  
<div class="container-body" style="margin-top:2px;height:auto;"id="myContainerBody">
    <!-- Content of the container body -->
    <div style="max-width: 100%;">
      <table>
      <thead>
         @if ($Swiperecords->count() > 0)
        <tr>
             <th>In/Out</th>
             <th>Swipe&nbsp;Time</th>
             <th>Location</th>
             <th></th> 
        </tr>
     </thead>
      <tbody>
               
               @foreach ($Swiperecords as $index =>$swiperecord)
               <tr>
                    <td>{{ $swiperecord->in_or_out }}</td>
                    <td>
                        <div style="display:flex;flex-direction:column;">
                            <p style="margin-bottom: 0;">{{ date('h:i:s A', strtotime($swiperecord->swipe_time)) }}</p>
                            <p style="margin-bottom: 0;font-size: 10px;color: #a3b2c7;"> {{ date('d M Y', strtotime($currentDate1)) }}</p>
                        </div>     
                    </td>
                    <td>-</td>
                                             
                    <td><button class="info-button"style="background-color: rgb(2, 17, 79); border: 2px solid rgb(2, 17, 79);height:20px; color: white; border-radius: 5px;font-size:12px;margin-top:-10px"data-toggle="modal"data-target="#viewStudentModal"wire:click="viewDetails({{$swiperecord->id}})">Info{{$swiperecord->id}}</button></td>
                                            
              </tr>
              @if (($index + 1) % 2 == 0)
                <!-- Add a small container after every two records -->
                  <tr>
                      <td colspan="4" style="height:1px; background-color: #f0f0f0; text-align: left;font-size:10px;">Actual Hrs:{{ $actualHours[($index + 1) / 2 - 1] }}</td>
                </tr>
              @endif    
            @endforeach
                                     
  
   
    <!-- Add more rows with dashes as needed -->
  </tbody>
  <!-- Add table rows (tbody) and data here if needed -->
               @else
                         <img src="https://gt-linckia.s3.amazonaws.com/static-ess-v6.3.0-prod-144/attendace_swipe_empty.svg"style="margin-left:300px;margin-top:30px;">
                         <div class="text-muted"style="margin-left:300px;margin-top:-10px;">No record Found</div> 
                @endif
</table>

</div>
    <!-- <img src="https://gt-linckia.s3.amazonaws.com/static-ess-v6.3.0-prod-144/attendace_swipe_empty.svg"style="margin-left:200px;margin-top:30px;">
    <div class="text-muted"style="margin-left:175px;margin-top:-10px;">No record Found</div> -->
    
  </div>
 
  <div wire:ignore.self class="modal fade" id="viewStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content"style="width:100%"> 
                <div class="modal-header">
                    <h5 class="modal-title">Swipe Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeViewStudentModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                          @if($swiperecord)
                           @if ($data->isNotEmpty())
                            <tr>
                                <th>Employee&nbsp;Name: </th>
                                <td>{{ $data[0]->first_name }} {{ $data[0]->last_name }}</td>
                            </tr>
                           @endif
                            <tr>
                                <th>Employee&nbsp;Id</th>
                                <td >{{ $view_student_emp_id }}</td>
                            </tr>

                            <tr>
                                <th>Swipe&nbsp;Date:</th>
                                <td>{{\Carbon\Carbon::parse($swiperecord->created_at)->format('jS F, Y')}}</td>
                            </tr>

                            <tr>
                                <th>Swipe&nbsp;Time:</th>
                                <td>{{ $view_student_swipe_time }}</td>
                            </tr>

                            <tr>
                                <th>In/Out:</th>
                                <td>{{ $view_student_in_or_out }}</td>
                            </tr>
                            <tr>
                                <th>Access&nbsp;Card&nbsp;Number:</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>Location:</th>
                                <td>-</td>
                            </tr>
                            @endif
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-danger" wire:click="cancel()" data-dismiss="modal" aria-label="Close">Cancel</button>
                   
                </div>
            </div>
        </div>
  </div>
  
</div>

</div>

<div class="large-box">
  <div class="table-container"style=" width: 100%;
    overflow-x: auto;">
<table>
            <tr class="first-header-row"style="background-color: #24a7f8;">
                <th class="date">Genaral&nbsp;Details</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                
                
            </tr>
            <tr class="second-header-row">
                <th class="date">Date</th>
              
                <th class="date">Shift</th>
                <th class="date">Attendance&nbsp;Scheme</th>
                <th class="date">First&nbsp;In</th>
                <th class="date">Last&nbsp;Out</th>
                <th class="date">Work&nbsp;Hrs</th>
                <th class="date">Actual&nbsp;Hrs</th>
                <th class="date">Status</th>
                <th class="date">Swipe&nbsp;Details</th>
                <th class="date">Exception</th>
                <th class="date">Shortfall/Excess&nbsp;Hrs.</th>
                <th class="date">Shift&nbsp;Timings</th>
                <th class="date">Shift&nbsp;Timings</th>
              
            </tr>
            @foreach($Swiperecords1 as $index=>$swiperecords1)
            @if($swiperecords1->in_or_out === 'Sign In'||$swiperecords1->in_or_out === 'IN')
            <tr>
                

                 <td class="date">{{$swiperecords1->created_at->format('d M Y')}}</td>
                 <td>10:(GS)</td>
                 <td>10:00 am to 07:00pm</td>
                  @if ($swiperecords1->in_or_out === 'Sign In'||$swiperecords1->in_or_out === 'IN')
                     <td>{{\Carbon\Carbon::parse($swiperecords1->swipe_time)->format('H:i')}}</td>

                  @endif
                  @if ($index < count($Swiperecords1) - 1)
                     <?php $nextRecord = $Swiperecords1[$index + 1]; ?>
                      @if ($nextRecord->in_or_out === 'Sign Out' || $nextRecord->in_or_out === 'OUT')
                          <td>{{ \Carbon\Carbon::parse($nextRecord->swipe_time)->format('H:i')}}</td>
                          
                          
                          
                      @else
                          <td>00:00</td>
                      @endif
                  @else
                    <td>00:00</td>


                  @endif  
                 
              
                  <td>00:00</td>
                  <td>00:00</td>
                  
                  <td>-</td>
                  <td>Swipe&nbsp;Details</td>
                  <td>No&nbsp;attention&nbsp;required</td>
                  <td>-</td>
                  <td>10:00-14:00</td>
                  <td>14:01-19:00</td>

            </tr>
            @endif
            @endforeach
            
            
            <tr>
                <td class="date">Total </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>00:00</td>
                <td>00:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td>00:00</td>
                <td></td>
                <td></td>
            </tr>
        </table>
   </div>
</div>
<div id="box-container" style="display: none;margin-left:300px;">
<div class="box">
    <div class="box-content">
        Present: 2
    </div>
</div>
<div class="box"style="background-color: rgb(250, 242, 253)">
    <div class="box-content">
        Holiday: 1
    </div>
</div>
<div class="box">
    <div class="box-content"style="background-color: rgb(217, 218, 213);margin-top:-2px;">
        Offday: 1
    </div>
</div>
</div>
 
<script>
  // Function to generate calendar days for a given month and year
  function generateCalendarDays(year, month) {
    const daysInMonth = new Date(year, month, 0).getDate();
    const calendarDays = document.getElementById('calendar-days');

    calendarDays.innerHTML = ''; // Clear previous calendar days

    for (let day = 1; day <= daysInMonth; day++) {
      const calendarDay = document.createElement('div');
      calendarDay.classList.add('calendar-day');
      calendarDay.textContent = day;
      calendarDays.appendChild(calendarDay);
    }
  }

  // Call the function with the desired year and month (0-based index for month)
  generateCalendarDays(2023, 8); 
  // September 2023
  
</script>
<script>
      document.getElementById("toggleButton").addEventListener("click", function() {
  var containerBody = document.getElementById("myContainerBody");
  if (containerBody.style.display === "none" || containerBody.style.display === "") {
    containerBody.style.display = "block";
  } else {
    containerBody.style.display = "none";
  }
});
</script>
<script>
  const toggleButton = document.getElementById("toggleButton");
  const containerBody = document.getElementById("myContainerBody");

  toggleButton.addEventListener("click", function () {
    toggleButton.classList.toggle("rotate-arrow");
  });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const toggleSidebarButton = document.getElementById("toggleSidebar");
    const sidebar = document.querySelector(".sidebar");

    toggleSidebarButton.addEventListener("click", function () {
        if (sidebar.style.right === "0px" || sidebar.style.right === "") {
            sidebar.style.right = "-250px"; // Hide the sidebar
        } else {
            sidebar.style.right = "0px"; // Show the sidebar
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const toggleSidebarButton = document.getElementById("toggleSidebar");
    const closeSidebarButton = document.getElementById("closeSidebar");
    const sidebar = document.querySelector(".sidebar");

    toggleSidebarButton.addEventListener("click", function () {
        sidebar.style.right = "0px"; // Show the sidebar
    });

    closeSidebarButton.addEventListener("click", function () {
        sidebar.style.right = "-250px"; // Hide the sidebar
    });
});   


</script> 
<script>
    document.getElementById("myButton").onclick = function () {
        // Replace 'destination-page.html' with the URL of the page you want to navigate to
        window.location.href = 'das.html';
    };
</script>

<script>
    function showCalendar() {
      // Show the calendar and associated containers
      document.querySelector('.calendar').style.display = 'block';
      document.querySelector('.container1').style.display = 'block';
      document.querySelector('.container2').style.display = 'block';
      document.querySelector('.container3').style.display = 'block';
      document.querySelector('.container6').style.display = 'block';
      document.querySelector('.large-box').style.display = 'none';
      document.querySelector('.date-picker-container').style.dispaly='none';
      
    }

    function showMessage() {
      // Hide all containers except the calendar
      

      // Show a message

      document.querySelector('.calendar').style.display = 'none';
      document.querySelector('.container1').style.display = 'none';
      document.querySelector('.container2').style.display = 'none';
      document.querySelector('.container3').style.display = 'none';
      document.querySelector('.container6').style.display = 'none';
      document.querySelector('.large-box').style.display = 'block';
      document.querySelector('.date-picker-container').style.dispaly='block';
    }
  </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.toggle-box i.fas.fa-calendar').click(function() {
    // Toggle the 'active' class on the calendar icon
    $(this).toggleClass('active');

    // Reset the bars icon to its initial styles
    $('.toggle-box i.fas.fa-bars').removeClass('active');
  });
  
  $('.toggle-box i.fas.fa-bars').click(function() {
    // Toggle the 'active' class on the bars icon
    $(this).toggleClass('active');

    // Reset the calendar icon to its initial styles
    $('.toggle-box i.fas.fa-calendar').removeClass('active');
  });
});
</script>
<script>
function toggleBoxContainer() {
    const boxContainer = document.getElementById('box-container');
    if (boxContainer.style.display === 'none') {
        boxContainer.style.display = 'block';
    } else {
        boxContainer.style.display = 'none';
    }
}

function hideBoxContainer() {
    const boxContainer = document.getElementById('box-container');
    boxContainer.style.display = 'none';
}

// Event listener for the bars-icon click event
const barsIcon = document.getElementById('bars-icon');
barsIcon.addEventListener('click', toggleBoxContainer);

// Event listener for the calendar-icon click event (to hide the box-container)
const calendarIcon = document.getElementById('calendar-icon');
calendarIcon.addEventListener('click', hideBoxContainer);

</script>  
<script>
        // Initialize the date range picker
        $('#daterange').daterangepicker({
            "startDate": "12-09-2023",
            "endDate": "20-09-2023",
            "opens": "left", // Position of the calendar
            "locale": {
                "format": "DD-MM-YYYY" // Date format
            }
        });
    </script>

<script>
    document.addEventListener('livewire:load', function () {
        // Select all "Info" buttons and attach a click event handler to each.
        const infoButtons = document.querySelectorAll('.info-button');
        infoButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Fetch the data-record-id attribute to get the record ID.
                const recordId = button.getAttribute('data-record-id');
                
                // Set the selectedRecordId property in Livewire to the clicked record's ID.
                Livewire.emit('recordSelected', recordId);
            });
        });
    });
</script>


</div> 