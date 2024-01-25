<div>
<body>
<div id="card-content" style="display:none;margin:0 auto; align-items:center;background:#fcfcfc; width:100%;">
<body>
    <div class="leave-transctions">
        <div class="pdf-heading">
          @if($employeeDetails->company_id === 'XSS-12345')
                <img src="https://media.licdn.com/dms/image/C4D0BAQHZsEJO8wdHKg/company-logo_200_200/0/1677514035093/xsilica_software_solutions_logo?e=2147483647&v=beta&t=rFgO4i60YIbR5hKJQUL87_VV9lk3hLqilBebF2_JqJg" alt="" style="width:200px;height:125px;">
            <div>
               <h2>XSILICA SOFTWARE SOLUTIONS P LTD <br>
               <span><p>3rd Floor, Unit No.4, Kapil Kavuri Hub IT Block, Nanakramguda Main Road, Hyderabad, Rangareddy, <br> Telangana, 500032</p></span></h2>
               <h3>Leave Transactions From 01 Jan 2023 To 31 Dec 2023</h3>
            </div>
            <!-- payglogo -->
            @elseif($employeeDetails->company_id === 'PAYG-12345')
                <img src="https://play-lh.googleusercontent.com/qUGkF93p010_IHxbn8FbnFWZfqb2lk_z07i6JkpOhC9zf8hLzxTdRGv2oPpNOOGVaA=w600-h300-pc0xffffff-pd" style="width:200px;height:125px;">
             <div >
               <h2> PayG <br>
               <span><p>3rd Floor, Unit No.4, Kapil Kavuri Hub IT Block, Nanakramguda Main Road, Hyderabad, Rangareddy, <br> Telangana, 500032</p></span></h2>
               <h3>Leave Transactions From 01 Jan 2023 To 31 Dec 2023</h3>
            </div>
            <!-- attune golabal logo -->
            @elseif($employeeDetails->company_id === 'AGS-12345')
                <img src="https://images.crunchbase.com/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/rxyycak6d2ydcybdbb3e" alt="" style="width:200px;height:125px;">
            <div>
               <h2>Attune Global Solutions<br>
               <span><p>3rd Floor, Unit No.4, Kapil Kavuri Hub IT Block, Nanakramguda Main Road, Hyderabad, Rangareddy, <br> Telangana, 500032</p></span></h2>
               <h3>Leave Transactions From 01 Jan 2023 To 31 Dec 2023</h3>
            </div>
            @endif
        </div>

        <!-- Employee Details -->
      <div class="emp-info">
        <div class="emp-details">
                <p > Name: <span>{{ $employeeDetails->first_name}}  {{ $employeeDetails->last_name}}</span></p>
                <p>Date of Join: <span>{{ optional(\Carbon\Carbon::parse($employeeDetails->hire_date))->format('d M, Y') }}
                </span></p>  
                <p>Reporting Manager: <span style="text-transform: uppercase;">{{ $employeeDetails->report_to}} ({{ $employeeDetails->manager_id}}) </span></p>
        </div>
        <div class="emp-details">
                <p>Employee No: <span>{{ $employeeDetails->emp_id}}</span></p>
                <p>Date of Birth: <span>{{ optional(\Carbon\Carbon::parse($employeeDetails->date_of_birth))->format('d M, Y') }}
                </span></p>
                <p>Gender: <span>{{ $employeeDetails->gender}}</span></p>
        </div>
      </div>
        <table>
            <thead>
                <tr>
                    <th>SI No</th>
                    <th>Posted Date</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Days</th>
                    <th>Leave Type</th>
                    <th>Transaction Type</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through leave transactions and populate the table -->
                @if(!empty($this->leaveTransactions))
                @foreach($this->leaveTransactions as $transaction)
                    <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ optional(\Carbon\Carbon::parse( $transaction->leave_created_at ))->format('d M, Y  H:i') }}</td>
                    <td>{{ optional(\Carbon\Carbon::parse( $transaction->from_date ))->format('d M, Y') }}</td>
                    <td>{{ optional(\Carbon\Carbon::parse( $transaction->to_date ))->format('d M, Y') }}</td>
                    <td>{{ $this->calculateNumberOfDays($transaction->from_date, $transaction->from_session, $transaction->to_date, $transaction->to_session) }}</td>
                    <td>{{ $transaction->leave_type }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>{{ $transaction->reason }}</td>
                    </tr>
                    @endforeach
            </tbody>
            @else
            <p>No leave transctions found</p>
            @endif
        </table>
    </div>
</body>
</div>

     

    <div class="buttons-container">
    <button class="button1" onclick="window.location.href='/leave-page'">Apply</button>
        <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fa-solid fa-download"></i>
       </button>
       <select class="dropdown bg-white " wire:model="selectedYear" wire:change="yearDropDown">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
       </select>
    </div>
      
       
    <!-- modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Download Leave Transaction Report</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form novalidate class="ng-valid ng-touched ng-dirty" wire:submit.prevent="generatePdf($event)">
            @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required-field label-style">From date</label>
                                <div class="input-group date">        
                                    <input type="date"wire:model="fromDateModal" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
                                </div>
                                <small class="text-danger" hidden="">From date should be less than to date</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required-field label-style">To date</label>
                                <div class="input-group date">
                                   <input type="date" wire:model="toDateModal" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
                                </div>
                                <small class="text-danger" hidden="">To date should be greater than from date</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Leave type</label>
                                <select name="leaveType" wire:model="leaveType" class="form-control">
                                    <option value="all"  selected>All Leaves</option>
                                    <option value="casual">Casual Leave</option>
                                    <option value="lop">Loss of Pay</option>
                                    <option value="maternity">Maternity</option>
                                    <option value="paternity">Paternity</option>
                                    <option value="sick">Sick Leave</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Transaction</label>
                                <select name="transactionType" wire:model="transactionType"  class="form-control">
                                    <option value="all"  selected>All Transactions</option>
                                    <option value="casual">Granted</option>
                                    <option value="lop">Availed</option>
                                    <option value="maternity">Cancelled</option>
                                    <option value="paternity">Withdrawn</option>
                                    <option value="sick">Rejected</option>
                                    <option value="sick">Approved</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Sort by</label>
                               <select name="sortBy"   class="form-control"  id="sortBySelect">
                                    <option value="oldest_first">Date (Oldest First)</option>
                                    <option value="newest_first">Date (Newest First)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  onclick="generatePDF(event)" class="btn btn-primary text-capitalize ng-star-inserted">Download</button>
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                    <button hidden=""></button>
                </div>
            </form>
        </div>
    </div>
</div>  

 <!-- 2022 year -->
 @if($show2022Content)
        <div>
        <div class="bal-container" >
         <div class="row" style="margin:10px auto;">
            <div class="col-md-4">
                <div class="leave-bal mb-2 bg-white rounded border p-3bg-white rounded border " style="height:200px;">
                    <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                        <div class="field">
                            <span class="leave-type font-weight-500" >Loss Of Pay</span>
                        </div>
                        <div>
                            <span class="leave-gran font-weight-500">Granted:0</span>
                        </div>
                    </div>
                    <div class="center text-center" style="margin-top:50px;" >
                        <h5 style="font-size:16px;">0</h5>
                        <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                    </div>
                </div>
            </div>
         <!-- ... (previous code) ... -->
            <div class="col-md-4">
               <div  class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;">
                <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                    <div class="field">
                        <span class="leave-type font-weight-500">
                            @if($gender === 'Female')
                            Maternity Leave
                            @elseif($gender === 'Male')
                            Paternity Leave
                            @else
                            Leave Type
                            @endif
                        </span>
                    </div>
                    <div>
                        <span class="leave-gran font-weight-500">Granted:0</span>
                    </div>
                </div>
                <div class="center text-center" style="margin-top:50px;">
                    <h5 style="font-size:16px;">0</h5>
                    <p style="margin-top:-15px;"><span class="remaining">balance</span></p>
                    <a href="#" class="view" style="font-size:0.9rem;">View Details</a>
                </div>
                <div class="tube-container">
                    <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $grantedLeave }} Consumed</p>
                    <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                </div>
            </div>
              </div>
                <div class="col-md-4">
                    <div class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;">
                        <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                                <div class="field">
                                    <span class="leave-type font-weight-500">Casual Leave 
                                </div>
                                <div>
                                    <span class="leave-gran font-weight-500">Granted:0</span>
                                </div>
                         </div>
                         <div class="center text-center" style="margin-top:50px;" >
                             <h5 style="font-size:16px;">0</h5>
                             <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                             <a href="#" style="font-size:0.9rem;">View Details</a>
                        </div>
                        <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $grantedLeave }} Consumed</p>
                                <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin:10px auto;">
              <div class="col-md-4">
                    <div   class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;">
                        <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                                <div class="field">
                                    <span class="leave-type font-weight-500">Sick Leave
                                </div>
                                <div>
                                    <span class="leave-gran font-weight-500">Granted:0</span>
                                </div>
                         </div>
                            <div class="center text-center" style="margin-top:50px;" >
                                <h5 style="font-size:16px;">0</h5>
                                <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                                <a href="#" style="font-size:0.9rem;">View Details</a>
                            </div>
                            <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $grantedLeave }} Consumed</p>
                                <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                            </div>
                        </div>
                    </div>
                </div>
           </div>
            
        </div>
        @endif
<!-- leave  -->
@if($show2023Content)
    <div class="bal-container" >
        <div class="row" style="margin:10px auto;">
            <div class="col-md-4">
                <div   class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;">
                    <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                        <div class="field">
                            <span class="leave-type font-weight-500" >Loss Of Pay</span>
                        </div>
                        <div>
                            <span class="leave-gran font-weight-500">Granted:0</span>
                        </div>
                    </div>
                    <div class="center text-center" style="margin-top:50px;" >
                        <h5 style="font-size:16px;">0 </h5>
                        <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                    </div>
                </div>
            </div>
         <!-- ... (previous code) ... -->
            <div class="col-md-4">
               <div     class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;">
                <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                    <div class="field">
                        <span class="leave-type font-weight-500">
                            @if($gender === 'Female')
                            Maternity Leave
                            @elseif($gender === 'Male')
                            Paternity Leave
                            @else
                            Leave Type
                            @endif
                        </span>
                    </div>
                    <div>
                        <span class="leave-gran font-weight-500">Granted:{{ $grantedLeave }}</span>
                    </div>
                </div>
                <div class="center text-center" style="margin-top:50px;">
                    <h5 style="font-size:16px;">0</h5>
                    <p style="margin-top:-15px;"><span class="remaining">balance</span></p>
                    <a href="#" class="view" style="font-size:0.9rem;">View Details</a>
                </div>
                <div class="tube-container">
                    <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $grantedLeave }} Consumed</p>
                    <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                </div>
            </div>
              </div>
                <div class="col-md-4">
                    <div  class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;"">
                        <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                                <div class="field">
                                    <span class="leave-type font-weight-500">Casual Leave 
                                </div>
                                <div>
                                    <span class="leave-gran font-weight-500">Granted:0</span>
                                </div>
                         </div>
                         <div class="center text-center" style="margin-top:50px;" >
                             <h5 style="font-size:16px;">0</h5>
                             <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                             <a href="#" style="font-size:0.9rem;">View Details</a>
                        </div>
                            <div class="tube-container">
                            <p style="color: #778899; font-size: 10px; text-align: start; margin-top: -15px; font-weight: 400;">
                                        {{ $casualLeavePerYear }} of {{ $casualLeavePerYear }} Consumed
                                </p>
                               <div class="tube" style="width: 100%; background-color: #1E90FF;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin:10px auto;">
              <div class="col-md-4">
                    <div     class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;" >
                        <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                                <div class="field">
                                    <span class="leave-type font-weight-500">Sick Leave
                                </div>
                                <div>
                                    <span class="leave-gran font-weight-500">Granted:{{ $sickLeavePerYear }}</span>
                                </div>
                         </div>
                            <div class="center text-center" style="margin-top:50px;" >
                                <h5 style="font-size:16px;">0</h5>
                                <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                                <a href="#" style="font-size:0.9rem;">View Details</a>
                            </div>
                            <div class="tube-container">
                            <p style="color: #778899; font-size: 10px; text-align: start; margin-top: -15px; font-weight: 400;">
                                        {{ $sickLeavePerYear }} of {{ $sickLeavePerYear }} Consumed
                                </p>
                            <div class="tube" style="width: 100%; background-color: #1E90FF;"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endif

<!-- 2024 -->
        <div>
        <div class="bal-container" >
         <div class="row" style="margin:10px auto;">
            <div class="col-md-4">
                <div  class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;" >
                    <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                        <div class="field">
                            <span class="leave-type font-weight-500" >Loss Of Pay</span>
                        </div>
                        <div>
                            <span class="leave-gran font-weight-500">Granted:{{$lossOfPayPerYear}}</span>
                        </div>
                    </div>
                    <div class="center text-center" style="margin-top:50px;" >
                        <h5 style="font-size:16px;">
                            {{$lossOfPayBalance}}
                        </h5>
                        <p style="margin-top:-14px;font-size:11px;color:#778899;"><span class="remaining" >Balance</span></p>
                    </div>
                </div>
            </div>
         <!-- ... (previous code) ... -->
            <div class="col-md-4">
               <div  class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;" >
                <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                    <div class="field">
                        <span class="leave-type font-weight-500">
                            @if($gender === 'Female')
                            Maternity Leave
                            @elseif($gender === 'Male')
                            Paternity Leave
                            @else
                            Leave Type
                            @endif
                        </span>
                    </div>
                    <div>
                        <span class="leave-gran font-weight-500">Granted:0</span>
                    </div>
                </div>
                <div class="center text-center" style="margin-top:50px;">
                    <h5 style="font-size:16px;">0</h5>
                    <p style="margin-top:-14px;font-size:11px;color:#778899;"><span class="remaining">Balance</span></p>
                    <a href="#" class="view" style="font-size:0.9rem;">View Details</a>
                </div>
                <div class="tube-container">
                    <p>0 of {{ $grantedLeave }} Consumed</p>
                    <div class="tube" style="width: 0%; background-color: #1E90FF;transition: width 0.3s ease-in-out, background-color 0.3s ease-in-out;"></div> <!-- Adjust the width and color based on your usage -->
                </div>
            </div>
              </div>
                <div class="col-md-4">
                    <div class="leave-bal mb-2 bg-white rounded border p-3 " style="height:200px;">
                        <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                                <div class="field">
                                    <span class="leave-type font-weight-500">Casual Leave 
                                </div>
                                <div>
                                    <span class="leave-gran font-weight-500">Granted:{{$casualLeavePerYear}}</span>
                                </div>
                         </div>
                         <div class="center text-center" style="margin-top:50px;" >
                             <h5 >{{$casualLeaveBalance}}</h5>
                             <p style="margin-top:-13px;font-size:11px;color:#778899;"><span class="remaining" >Balance</span></p>
                             <a href="#" style="font-size:0.9rem;">View Details</a>
                        </div>
                        <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $casualLeaveForYear2024 }} Consumed</p>
                                <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin:10px auto;">
              <div class="col-md-4">
                    <div  class="leave-bal mb-2 bg-white rounded border p-3"  style="height:200px;">
                        <div class="balance d-flex flex-row justify-content-between " style="font-size:12px; color:#778899;">
                                <div class="field">
                                    <span class="leave-type font-weight-500">Sick Leave
                                </div>
                                <div>
                                    <span class="leave-gran font-weight-500">Granted:{{ $sickLeavePerYear }}</span>
                                </div>
                         </div>
                            <div class="center text-center" style="margin-top:50px;" >
                                <h5 style="font-size:16px;">{{ $sickLeaveBalance }}</h5>
                                <p style="margin-top:-13px;font-size:11px;color:#778899;"><span class="remaining" >Balance</span></p>
                                <a href="#" style="font-size:0.9rem;">View Details</a>
                            </div>
                            <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $sickLeaveForYear2024 }} Consumed</p>
                                <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
<!-- Initialize Datepicker -->
<script>
    $(document).ready(function() {
        console.log("Document ready!");

        // Check if jQuery is loaded
        if (typeof jQuery == 'undefined') {
            console.error('jQuery is not loaded!');
        } else {
            console.log('jQuery is loaded!');
        }

        // Check if Bootstrap is loaded
        if (typeof bootstrap == 'undefined') {
            console.error('Bootstrap is not loaded!');
        } else {
            console.log('Bootstrap is loaded!');
        }

        // Check if Bootstrap Datepicker is loaded
        if (typeof $.fn.datepicker == 'undefined') {
            console.error('Bootstrap Datepicker is not loaded!');
        } else {
            console.log('Bootstrap Datepicker is loaded!');
        }

        // Initialize Datepicker
        $('.date input').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy'
        });
    });
    function generatePDF(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Close the modal
    $('#exampleModalCenter').modal('hide');

    // Call your Livewire function to fetch and update data
    Livewire.emit('checkSortBy');

    // Delay to wait for Livewire to update data
    setTimeout(function () {
        // Assuming Livewire has updated the data, proceed to generate PDF
        const cardContent = document.getElementById('card-content').innerHTML;

        // Create a Blob from the HTML content
        const blob = new Blob([`<div style="max-width: 800px; margin:0 auto;">${cardContent}</div>`], {
            type: 'text/html'
        });

        // Create a URL for the Blob
        const url = URL.createObjectURL(blob);

        // Create an <a> element for downloading the PDF
        const a = document.createElement('a');
        a.href = url;
        a.download = 'leave_transactions.html'; // Specify the filename with .html extension
        a.style.display = 'none';

        // Append the <a> element to the document and trigger the download
        document.body.appendChild(a);
        a.click();

        // Clean up by revoking the object URL
        window.URL.revokeObjectURL(url);

        // Remove the <a> element from the document
        document.body.removeChild(a);
    }, 1000); // Increase the delay if needed
}


</script>

    </body>

</div>