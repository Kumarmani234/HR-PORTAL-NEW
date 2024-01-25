<div>
    <div class="declaration-container m-3 p-3">
        <div class="row" style="display:flex;">
     
       <div style=" margin-left: 10px; position: relative;">
       <a href="/itdeclaration" class="custom-button4" style="display: inline-block;padding: 10px 20px;background-color: blue;color: white;text-align: center;text-decoration: none;border: 1px solid silver;border-radius: 5px;font-size: 12px;margin-left: 500px;margin-bottom: 50px;height:38px;width:150px;" ><p > Tax Planner</p></a>
       <button class="dropdown-btn4" id="yearButton" style="padding: 5px 15px; background-color: #fff; color: black; border: 1px solid #ccc; border-radius:5px;width:180px;cursor: pointer;  position: relative;">Aug 2023</button>
            <div class="dropdown-content4" style="display: none;position: absolute;background-color: #f9f9f9;min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);  z-index: 1; max-height: 200px; /* Set the maximum height for scrollable content */overflow-y: scroll; ">
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Aug 2023</a>
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Sep 2023</a>
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Oct 2023</a>
                <a style="padding: 12px 16px;text-decoration: none;display: block;color: #333;">Nov 2023</a>
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Dec 2023</a>
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Jan 2024</a> <!-- Updated month -->
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Feb 2024</a> <!-- Updated month -->
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Mar 2024</a> <!-- Updated month -->
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">Apr 2024</a> <!-- Updated month -->
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">May 2024</a> <!-- Updated month -->
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">June 2024</a> <!-- Updated month -->
                <a style=" padding: 12px 16px;text-decoration: none;display: block;color: #333;">July 2024</a> <!-- Updated month -->
            </div>
        </div>
<div>
<div  style="display:flex">
<div  style="width:500px;height:300px;background:white;border:1px solid silver;border-radius:5px;margin-top:20px;margin-left:10px;">
 
<img src="https://th.bing.com/th/id/OIP.vwV51NMNZ8YgCdZ__BSFkQAAAA?pid=ImgDet&rs=1" style="height:80px;width:100px;margin-top:80px;margin-left:100px">
<p style="margin-left:100px;color:#ACADAA;margin-top:20px">Sigh! Declaration is locked</p>
<p style="margin-left:50px;color:#ACADAA;font-size:12px">This declaration window is locked. Please wait for the admin notification</p>
    </div>  
<div class="row" style="margin-left:15px" >
    <div class="row mb-3" style="width:300px;height:100px;background:#FBF5BF;border:1px solid silver;border-radius:5px;margin-top:20px;margin-left:5px;display:flex">
    <div class="column" style="display:flex">
    <p style="margin-left:-10px">Declaration Status : LOCKED</p>
   
    </div>
    <p style="font-size:14px">You have declared on  {{ now()->format('F') }}, {{ now()->format('Y') }}, and you cannot withdraw it</p>
    </div>
    <div class="row" style="width:300px;height:70px;background:white;border:1px solid silver;border-radius:5px;margin-top:-40px;margin-left:5px;display:flex">
   
    <p style="font-size:14px;margin-top:10px">Your IT declaration is considered as per the New Regime</p>
    </div>
    <a href="/downloadform" id="pdfLink2023_4" class="downloadform" download style="margin-left: 10px; display: inline-block;">Download Form 12BB</a>
 
</div>
    </div>
 
  </div>
</div>
 
   
    </div>
<script>
    // JavaScript to hide/show the Empdetails div
    const empDetailsDiv = document.querySelector('.Empdetails');
    const hideButton = document.getElementById('hide-button');
 
    hideButton.addEventListener('click', function () {
        empDetailsDiv.style.display = 'none'; // Hide the div
    });
</script>
<script>
        // JavaScript to handle the dropdown functionality
        const yearButton = document.getElementById('yearButton');
        const dropdownContent = document.querySelector('.dropdown-content4');
        const dropdownItems = dropdownContent.querySelectorAll('a');
 
        yearButton.addEventListener('click', function () {
            dropdownContent.classList.toggle('active');
        });
 
        dropdownItems.forEach(item => {
            item.addEventListener('click', function () {
                yearButton.innerText = item.innerText;
                dropdownContent.classList.remove('active');
            });
        });
    </script>