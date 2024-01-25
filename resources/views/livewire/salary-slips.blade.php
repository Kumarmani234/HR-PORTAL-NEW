<div>
 
 
<div class="button-container1" style="text-align: center;display:flex;align-items:center;justify-content:end;margin-right:30px;">
 
 
<a href="/your-download-route" id="pdfLink2023_4" class="pdf-download" download style="margin-left: -40px; display: inline-block;">Download PDF</a>
 
<div>
    <div class="dropdown-container" style="  margin-left: 10px;
         position: relative;">
        <button class="dropdown-btn1" id="monthButton" style="color: black;   padding: 5px 15px;background-color: #fff;color: black;border: 1px solid #ccc;border-radius:5px;width:180px;cursor: pointer;position: relative;">Aug 2023</button>
 
        <div class="dropdown-content" style="color: black;display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1; max-height: 200px; /* Set the maximum height for scrollable content */overflow-y: scroll;">
            <div class="dropdown-item">Aug 2023</div>
            <div class="dropdown-item">Sep 2023</div>
            <div class="dropdown-item">Oct 2023</div>
            <div class="dropdown-item">Nov 2023</div>
            <div class="dropdown-item">Dec 2023</div>
            <div class="dropdown-item">Jan 2024</div> <!-- Updated month -->
            <div class="dropdown-item">Feb 2024</div> <!-- Updated month -->
            <div class="dropdown-item">Mar 2024</div> <!-- Updated month -->
            <div class="dropdown-item">Apr 2024</div> <!-- Updated month -->
            <div class="dropdown-item">May 2024</div>
            <div class="dropdown-item">Jun 2024</div>
            <div class="dropdown-item">Jul 2024</div>
        </div>
    </div>
</div>
</div>
@foreach($salaryRevision as $employee)
<div style="width:100%;display: flex;flex-direction: row; gap: 20px; justify-content: space-between; margin-top: 20px;">
<div style="display:flex">
<div style="display: flex; flex-direction: column; gap: 20px; width: 300px; margin-left: 10px; padding: 15px; background: white; border: 1px solid silver; border-radius: 5px;font-size:11px;height:400px">
        <h6>Earnings</h6>
        <p style="font-size: 12px;margin-left:170px">Amount in (₹)</p>
 
   
        <div class="column" style="display: flex; justify-content: space-between;">
    <p>BASIC</p>
    <span>{{ number_format($employee->basic, 2) }} <span style="margin-left: 20px;"></span></span>
</div>
 
<div class="column" style="display: flex; justify-content: space-between;">
    <p>HRA</p>
    <span>{{ number_format($employee->hra, 2) }} <span style="margin-left: 20px;"></span></span>
</div>
 
<div class="column" style="display: flex; justify-content: space-between;">
    <p>CONVEYANCE</p>
    <span>{{ number_format($employee->conveyance, 2) }} <span style="margin-left: 20px;"></span></span>
</div>
 
<div class="column" style="display: flex; justify-content: space-between;">
    <p>MEDICAL ALLOWANCE</p>
    <span>{{ number_format($employee->medical, 2) }} <span style="margin-left: 20px;"></span></span>
</div>
 
<div class="column" style="display: flex; justify-content: space-between;">
    <p>SPECIAL ALLOWANCE</p>
    <span>{{ number_format($employee->special, 2) }} <span style="margin-left: 20px;"></span></span>
</div>
 
<div class="column" style="display: flex; justify-content: space-between;">
    <p>Total</p>
    <b>{{ number_format($employee->calculateTotalAllowance(), 2) }}</b>
</div>
   
    </div>
 
   
<div style="display:flex">
<div style="display: flex; flex-direction: column; gap: 20px; width: 300px; margin-left: 10px; padding: 15px; background: white; border: 1px solid silver; border-radius: 5px;font-size:11px;height:350px">
        <h6>Deductions</h6>
        <p style="font-size: 12px;margin-left:170px">Amount in (₹)</p>
 
       
        <div class="column" style="display: flex; justify-content: space-between;">
    <p>PFA</p>
    <span>{{ number_format($employee->calculatePf(), 2) }} <span style="margin-left: 20px;"></span></span>
</div>
 
<div class="column" style="display: flex; justify-content: space-between;">
    <p>ESI</p>
    <span>{{ number_format($employee->calculateEsi(), 2) }}<span style="margin-left: 20px;"></span></span>
</div>
 
<div class="column" style="display: flex; justify-content: space-between;">
    <p>PROF TAX</p>
    <span>150.00<span style="margin-left: 20px;"></span></span>
</div>
 
 
 
<div class="column" style="display: flex; justify-content: space-between;margin-top:10px">
    <p>Total</p>
    <b>{{ number_format($employee->calculateTotalDeductions(), 2) }}</b>
</div>
   
    </div>
 
@endforeach
@foreach($employees as $employee )
@foreach($empBankDetails as  $employeedata)
<div class="row" style="height:500px;width:350px;background:#FAFFDE;border:1px solid silver;border-radius:5px;margin-left:20px">
 
       
          <h6 style="margin-top:20px;" ><b>Employee details</b></h6>
        <div class="details" >
       
        <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Name</p>
 
          <p>Emp ID</p>
 
          </div>
         
          <div class="d-flex justify-content-between">
 
                <p> {{$employee->first_name}} {{$employee->last_name}}</p>
 
                <p>{{$employee->emp_id}}</p>
 
            </div>
           
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Joining Date</p>
 
          <p>Bank Name</p>
 
          </div>
         
          <div class="d-flex justify-content-between">
 
                <p>{{$employee->hire_date}}</p>
 
                <p>{{$employeedata->bank_name}}</p>
 
            </div>
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Designation</p>
 
          <p>Bank Account No</p>
 
          </div>
          <div class="d-flex justify-content-between">
 
                <p>{{$employee->job_title}}</p>
 
                <p>{{$employeedata->account_number}}</p>
 
            </div>
       
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Department</p>
 
          <p>PAN Number</p>
 
          </div>
          <div class="d-flex justify-content-between">
 
                <p>{{$employee->department}}</p>
                <p>{{$employee->pan_no}}</p>
 
            </div>
       
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Location</p>
 
          <p>PF No</p>
 
          </div>
          <div class="d-flex justify-content-between">
 
                <p>{{$employee->address}}</p>
 
                <p>{{$employee->pf_no}}</p>
 
            </div>
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
 <p>Company ID</p>
 
 <p>PF UAN</p>
 
 </div>
 <div class="d-flex justify-content-between">
 
       <p>{{$employee->company_id}}</p>
 
       <p>{{$employeedata->company_address1}}</p>
 
   </div>
           
         
         
       
        </div>
     
        </div>
 
</div>
@endforeach
@endforeach
      </div>
  </div>
  <script>
    // JavaScript to hide/show the Empdetails div
    const empDetailsDiv = document.querySelector('.Empdetails');
    const hideButton = document.getElementById('hide-button');
 
    hideButton.addEventListener('click', function () {
        empDetailsDiv.style.display = 'none'; // Hide the div
    });
 
    document.addEventListener("DOMContentLoaded", function () {
        // Get all dropdown buttons and contents
        var dropdownButtons = document.querySelectorAll('.dropdown-btn');
        var dropdownContents = document.querySelectorAll('.dropdowncontent');
 
        // Add click event listener to each dropdown button
        dropdownButtons.forEach(function (button, index) {
            button.addEventListener('click', function () {
                // Hide all dropdown contents
                dropdownContents.forEach(function (content) {
                    content.style.display = 'none';
                });
 
                // Display the selected dropdown content
                dropdownContents[index].style.display = 'block';
            });
        });
    });
 
</script>
<script>
    // JavaScript to handle the dropdown functionality
    const monthButton = document.getElementById('monthButton');
    const dropdownContent = document.querySelector('.dropdown-content');
    const dropdownItems = dropdownContent.querySelectorAll('.dropdown-item');
 
    dropdownItems.forEach(item => {
        item.addEventListener('click', function () {
            monthButton.innerText = item.innerText;
            dropdownContent.classList.remove('active');
        });
    });
</script>
 
 
 
 
 </div>