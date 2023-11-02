<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Include the jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <!-- Include the html2canvas library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
</head>

    <title>YTD Reports</title>
  </head>
  <body>
    
    <div class="continer" style="padding: 5px; margin:0;">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: none; /* Remove all borders for all tables */
            border-bottom-width: 0;
    }
        
        
        th, td {
            padding: 10px;
        }

        th {
            background-color: #ffff;
        }
        </style>   
            
        <script>
        // Function to download the web page as a PDF
        function downloadAsPDF() {
            const pdf = new jsPDF();

            // Convert the HTML content to a canvas
            html2canvas(document.body).then(canvas => {
                const imgData = canvas.toDataURL('image/png');

                // Add the canvas image to the PDF
                pdf.addImage(imgData, 'PNG', 0, 0);

                // Save the PDF file
                pdf.save('webpage.pdf');
            });
        }
    </script>


    <div class="nav-div">
        <div class="center-div"style="margin-top: 30px; margin-bottom: 80px;">
            <a class="btn btn-primary" href="{{url('/salary')}}" role="button" style="margin-left: 400px;">YTD Statement</a>
            <a class="btn btn-light" href="{{url('/PFYTD_statement')}}" role="button">PF YTD Statement</a>

        </div>
        <div class="btn-group float-end" role="group" style="bottom: 50px;">
            <button _ngcontent-dps-c428="" type="button" class="btn btn-primary" container="body" class="btn btn-default icon-btn"><i _ngcontent-dps-c428="" class="icon-gt-download"></i>       
                <i class="bi bi-download">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>
                    </i>
            </button>

            <button type="button" class="btn btn-outline-primary dropdown-toggle"data-bs-toggle="dropdown" aria-expanded="false">
            Apr 2023 - Mar 2024
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('/salary')}}">Apr 2023 - Mar 2024</a></li>
                    <li><a class="dropdown-item" href="#">Apr 2022 - Mar 2023</a></li>
                    <li><a class="dropdown-item" href="#">Apr 2021 - Mar 2022</a></li>
                </ul>
        </div>
    </div></div>
  
  
    <div class="tables-container"id=" ytdStatementButton" style="background-color:  #fff; border: 1px solid #ccc;  margin:0;">
  
    <table class="table table-hover" class="d-flex justify-content-between">
    
  <thead>

<style>
    .table td {
        padding-left: 18px;
        padding-right: 18px;
       /* padding-top: 10px;
        padding-bottom: 10px; 
        width: 197px;  */
     }
    .tableHeadear td,th {
        padding-left: 25px;
        padding-right: 25px;
    }
    .borderless td, .borderless th {
    border: none;
}
</style>


<h1>YTD Reports</h1>

    <table  class="table" class="tableHeadear" style="margin-bottom: 0px;">
        <thead>
            <tr style="background-color: #e9f7ff; " >
                <td scope="col" style="width: 196px;">Item</td>
                <td scope="col" style="width: 196px;">Total in ₹.</td>
      <!--          <td scope="col" style="width: 196px;">Jan 2023</td>
                <td scope="col" style="width: 196px;">Feb 2023</td>
                <td scope="col" style="width: 196px;">Mar 2023</td>
                <td scope="col" style="width: 196px;">Apr 2023</td>
                <td scope="col" style="width: 196px;">May 2023</td>
                <td scope="col" style="width: 196px;">Jun 2023</td>
                <td scope="col" style="width: 196px;">Jul 2023</td>
                <td scope="col" style="width: 196px;">Sep 2023</td>
                <td scope="col" style="width: 196px;">oct 2023</td>
                <td scope="col" style="width: 196px;">Nov 2023</td>
                <td scope="col" style="width: 196px;">Dec 2023</td>
-->
                
            </tr>
        </thead>

        <tbody>
            <tr>
                
                <td class="text-black font-weight-bold"  colspan="13" data-toggle="collapse" data-target="#incomeSection"><span id="toggleIcon">▶</span>Income</td>

            </tr>
           
        </tbody>
    </table>

        <div id="incomeSection" class="collapse">
            <table class="table" style="margin-bottom: 0px;">
            <tr>
                <td>Basic</td>
                <!-- <td>{{ number_format($result['totalresults']['totalBasicSalary'], 2) }}</td> -->
                
                @foreach ($results as $result)
                    <td>{{ number_format($result['basicSalary'], 2) }}</td>
                @endforeach
            </tr>
           <tr>
                <td>HRA</td>
                <td>{{ number_format($result['totalresults']['totalHRA'], 2) }}</td>

                @foreach ($results as $result)
                    <td>{{ number_format($result['result']['hra'], 2) }}</td>
                @endforeach
            </tr> 
            <tr>
                <td>Conveyance</td>
                <td>{{ number_format($result['totalresults']['totalConveyance'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['conveyance'], 2) }}</td>
                @endforeach
            </tr>
            <tr>
                <td>Medical Allowance</td>
                <td>{{ number_format($result['totalresults']['totalMedicalAllowance'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['medicalAllowance'], 2) }}</td>
                @endforeach
            </tr>
            <tr>
                <td>Special Allowance</td>
                <td>{{ number_format($result['totalresults']['totalSpecialAllowance'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['specialAllowance'], 2) }}</td>
                @endforeach
            </tr>
            <tr style="background-color: #f7f7f7;">
                <td>Gross</td>
                <td>{{ number_format($result['totalresults']['totalGross'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['monthlySalary'], 2) }}</td>
                @endforeach
            </tr>


        </tbody></table></div>
        <table class="table" style="margin-bottom: 0px;">
        <tr>
                <td class="text-black font-weight-bold"  colspan="13" data-toggle="collapse" data-target="#deductionsSection"><span id="toggleIcon">▶</span>Deductions</td>
             <!--   @foreach ($results as $result)
                    <td></td>
                @endforeach -->
            </tr>

        

        </table>
        <div id="deductionsSection" class="collapse">
        <table class="table" style="margin-bottom: 0px;">
            <tr>
                <td>PF</td>
                <td>{{ number_format($result['totalresults']['totalPF'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['pfDeduction'], 2) }}</td>
                @endforeach
            </tr>
            <tr>
                <td>ESI</td>
                <td>{{ number_format($result['totalresults']['totalESI'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['esiDeduction'], 2) }}</td>
                @endforeach
            </tr>
            <tr>
                <td>Prof Tax</td>
                <td>{{ number_format($result['totalresults']['totalProfTax'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['profTaxDeduction'], 2) }}</td>
                @endforeach
            </tr>
            <tr style="background-color:#f7f7f7">
                <td >Total Deductions</td>
                <td>{{ number_format($result['totalresults']['totalTotalDeductions'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['totalDeductions'], 2) }}</td>
                @endforeach
            </tr>
    </table></div>
    <table class="table" style="margin-bottom: 0px;">
             <tr>
                <td class="text-black font-weight-bold"  colspan="13" data-toggle="collapse" data-target="#daysSection"><span id="toggleIcon">▶</span>Days</td>
            <!--    @foreach ($results as $result)
                    <td></td>
                @endforeach -->
            </tr>
    </table>
    <div id="daysSection" class="collapse">
    <table class="table"  class="table table-borderless" style="margin-bottom: 0px;">

            <tr>
                <td style="width: 196px;">Working Days</td>
                <td>{{ number_format($result['totalresults']['totalWorkingDays'] , 2) }}</td>
                
                @foreach ($results as $result)
                <td>{{ number_format($result['result']['workingDays'], 2) }}</td>
                @endforeach
            </tr>
            <tr>
                <td style="width: 196px;">Total Days</td>
                <td>{{ number_format($result['totalresults']['totalTotalDays'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['totalDays'], 2) }}</td>
                @endforeach
            </tr>
            <tr style="background-color: #f7f7f7;">
                <td style="width: 196px;">Net Pay</td>
                <td>{{ number_format($result['totalresults']['totalNetPay'], 2) }}</td>

                @foreach ($results as $result)
                <td>{{ number_format($result['result']['netSalary'], 2) }}</td>
                @endforeach
            </tr>
            <!--

            <tr>
                <td>Adjusted Basic</td>
                @foreach ($results as $result)
                <td>{{ number_format($result['result']['adjustedBasic'], 2) }}</td>
                @endforeach
            </tr>
            <tr>
                <td>Leave Days</td>
                @foreach ($results as $result)
                    <td>{{ number_format($result['leaveDays'], 2) }}</td>
                @endforeach
            </tr>
-->
            <!-- Add more rows for other data as needed -->
        </tbody></table></div></thead></table></div></div>

        <script>
            $('#incomeSection').on('hidden.bs.collapse', function () {
                $('#toggleIcon').text('▶');
                $('#toggleText').text('Income');
            });
            
            $('#incomeSection').on('shown.bs.collapse', function () {
                $('#toggleIcon').text('▼');
                $('#toggleText').text('Income');
            });
        </script>



     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>