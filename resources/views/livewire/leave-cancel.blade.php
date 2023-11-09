<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .detail-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 10px;
        padding: 5px;
        background-color: none;
    }
          .approved-leave{
            display: flex;
        flex-direction: row;
        width: 100%;
        gap: 10px;
        padding: 5px;
        background-color: none;
          }
 
    .heading {
    flex: 8; /* Adjust the flex value to control the size of the heading container */
    padding: 20px;
    width: 100%;
    background: #fff;
    border: 1px solid #ccc;
    border-radius:5px;
}
 
.side-container {
    flex: 4; /* Adjust the flex value to control the size of the side container */
    background-color: #fff;
    text-align: center;
    padding: 20px;
    height: 230px;
    border-radius:5px;
    border:1px solid #dcdcdc;
}
   
        .view-container{
            border:1px solid #ccc;
            background:#ffffe8;
            display:flex;
            width:80%;
            padding:5px 10px;
            border-radius:5px;
            height:auto;
        }
        .middle-container{
            background:#fff;
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            margin:0.975rem auto;
        }
 
        .field {
            display: flex;
            justify-content: start;
            flex-direction: column;
        }
 
        .pay-bal  {
         display:flex;
         gap:10px;
        }
 
        .details {
       
            line-height:2;
        }
 
        .details p {
            margin: 0;
        }
        .vertical-line {
            width: 1px; /* Width of the vertical line */
            height: 70px; /* Height of the vertical line */
            background-color: #ccc;
            margin-left:-10px; /* Color of the vertical line */
        }
 
 
        .group h6{
            font-weight:600;
            font-size:0.875rem;
        }
        .group h5{
            font-weight: 400;
            font-size: 1rem;
            white-space: nowrap; /* Prevent text from wrapping */
            overflow: hidden; /* Hide overflowing text */
            text-overflow: ellipsis;
            margin-top:0.975rem;
        }
        .group {
            margin-left:10px;
        }
     
        .data{
            display:flex;
            flex-direction:column;
   
        }
        .cirlce{
            height:0.75rem; width:0.75rem; background: #778899; border-radius:50%;
        }
        .v-line{
            height:100px; width:0.5px; background: #778899; border-right:1px solid #778899; margin-left:5px;
        }
        .leave{
            display:flex; flex-direction:row; gap:50px; background:#fff;
            border-bottom:1px solid #ccc;padding-bottom:10px;
        }
        @media screen and (max-width: 1060px) {
           .detail-container{
            width:100%;
            display:flex;
            flex-direction:column;
           }
           .heading {
        flex: 1; /* Change the flex value for the heading container */
        padding: 10px; /* Modify padding as needed */
        width: 100%;
    }
 
    .side-container {
        flex: 1; /* Change the flex value for the side container */
        padding: 10px; /* Modify padding as needed */
        height: auto;
        width: 100%;/* Allow the height to adjust based on content */
    }
}
    </style>
</head>
<body>
<div class="detail-container ">
        <div class="header" style="font-size: 1rem; font-weight: 500; text-align:start; margin-left:150px; ">
            <h6 >Leave  Cancel Applied on oct 23,2023  </h6>
        </div>
        <div class="approved-leave">
            <div class="heading">
                <div class="heading-2" >
                    <div style="display:flex; flex-direction:row; justify-content:space-between;">
                    <div class="field">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 500;"> Applied by
                     </span>
                    <span style="color: #333; font-weight: 500; ">
                                    Renuka Chinthala
                    </span>
                    </div> 
                   </div>
                   <div class="middle-container">
                <div class="view-container">
                     <div class="first" style="display:flex; gap:40px;padding:5px; ">
                            <div class="field">
                                <span style="color: #778899; font-size: 0.825rem; font-weight: 500;">From date</span>
                                <span style="font-size: 1rem; font-weight: 600;"> oct 23,2023<br><span style="color: #494F55;font-size: 0.825rem; font-weight: 600;">session1 </span></span>
                            </div>
                           <div class="field">
                                <span style="color: #778899; font-size: 0.825rem; font-weight: 500;">To date</span>
                                <span style="font-size: 1rem; font-weight: 600;">oct 23,2023 <br><span style="color: #494F55;font-size: 0.825rem; font-weight: 600;">session2</span></span>
                            </div>
                            <div class="vertical-line"></div>
                         </div>
                         <div class="box" style="display:flex;  margin-left:50px;  text-align:center; padding:5px;">
                            <div class="field">
                                <span style="color: #778899; font-size: 0.825rem; font-weight: 500;">No. of days</span>
                                <span style=" font-size: 0.875rem; font-weight: 600;"> 01</span>
                            </div>
                        </div>
                     </div>
                 </div>
                 <div class="leave">
                        <div class="pay-bal">
                            <span style=" font-size: 0.975rem; font-weight: 500;">Balance:</span>
                                <span style=" font-size: 0.875rem; font-weight: 500;">3</span>
                        </div>
                        <div class="leave-type">
                            <span style=" color: #605448; font-size: 1rem; font-weight: 600;">Casual Leave Probation</span>
                        </div>
                  </div>
              </div>
              <div class="details">
           <div class="data">
           <p><span style="color: #333; font-weight: 500; font-size:1rem;">Details</span></p>
           
            <p style=" font-size: 0.90rem; "><span style="color: #778899; font-size: 0.875rem; font-weight: 400;padding-right: 58px;">Applying to</span  >GYAN PRABODH DASARI</p>
          
             <div style="display:flex; flex-direction:row; justify-conetnt-space-between;">
             <span style="color: #778899; font-size: 0.875rem; font-weight: 400; padding-right: 88px;">Reason</span>
             <p>I am not going to Attend Function </p>
</div>
<p style="margin-top:10px;"><span style="color: #778899; font-size: 0.875rem; font-weight: 400; padding-right: 82px;">Contact</span>9800876997  </p>
            
                <p style="font-size: 0.975rem; font-weight: 500;">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 400; padding-right: 90px;">CC to</span>
                   
                </p>
                <p>Priyadashini Kanda </p>
          
 
           </div>
        </div>
        </div>
        <div class="side-container ">
            <h6 style="color: #778899; font-size: 0.875rem; font-weight: 500; text-align:start;"> Application Timeline </h6>
             
       
            <div  style="display:flex; ">
           <div style="margin-top:20px;">
             <div class="cirlce"></div>
             <div class="v-line"></div>
            <div class=cirlce></div>
             </div>
              <div style="display:flex; flex-direction:column; gap:40px;">
              <div class="group">
              <div>
                <h5 style="color: #333; font-size: 0.825rem; font-weight: 400; text-align:start;">
                <span style="color: #778899; font-weight: 500; ">Approved
                           
</span>
                        <br><span style="color: #778899; font-size: 0.825rem; font-weight: 400; text-align:start;">by</span>
                        <span style="color: #778899; font-weight: 500; text-transform: uppercase;">
                        Prabodh Dasari
                        </span>
                  
                                <!-- <span style="color: #778899; font-size: 0.825rem; font-weight: 500;text-align:start;">
                                    report_to'
                                </span> -->
                    <br> 
                    <span style="color: #778899; font-size: 0.725rem; font-weight: 400;text-align:start;">
                       oct 23,2023
                    </span><span style="color: #778899; font-weight: 400; font-size: 0.825rem;">
                        5.32 PM
                        </span>
                    
                </h5>
            </div>
 
           </div>
           <div class="group">
               <div >
                  <h5 style="color: #333; font-size: 0.825rem; font-weight: 400; text-align:start;">Submitted<br>
                <span style="color: #778899; font-size: 0.725rem; font-weight: 400;text-align:start;">oct 23,2023</span>
                <span style="color: #778899; font-weight: 400; font-size: 0.825rem;">
                        8.32 AM
                        </span>
                    </h5>
               </div>
           </div>
              </div>
           
           </div>
             
        </div>
        </div>
    </div>
   
</body>
</html>
 
</div>
