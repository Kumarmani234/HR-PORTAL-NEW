<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
   
       

        </style>
</head>
<body>
<div class="row" style="margin:0;padding:0;">
    <div class="col-md-2">
       <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <div
           class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <!-- Attendace link -->
                <label for="Attendabce">ATTENDANCE</label>
                <a class="nav-side active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Attendance Regularisation</a>    
                <!-- EMPINFO sides -->
                <label for="EMPINFO">EMPINFO</label>
                <a class="nav-side" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Confirmation</a>
                <a class="nav-side" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Resignations</a>
                <a class="nav-side" id="v-pills-helpdesk-tab" data-toggle="pill" href="#v-pills-helpdesk" role="tab" aria-controls="v-pills-helpdesk" aria-selected="false">Help Desk</a>
                <!-- lave sides -->
                <label for="leave">LEAVE</label>
                <a class="nav-side" id="v-pills-leave-tab" data-toggle="pill" href="#v-pills-leave" role="tab" aria-controls="v-pills-leave" aria-selected="false">Leave</a>
                <a class="nav-side" id="v-pills-leavecancel-tab" data-toggle="pill" href="#v-pills-leavecancel" role="tab" aria-controls="v-pills-leavecancel" aria-selected="false">Leave Cancel</a>
                <a class="nav-side" id="v-pills-LeaveComp-tab" data-toggle="pill" href="#v-pills-LeaveComp" role="tab" aria-controls="v-pills-LeaveComp" aria-selected="false">Leave Comp Off</a>
                <a class="nav-side" id="v-pills-restricted-tab" data-toggle="pill" href="#v-pills-restricted" role="tab" aria-controls="v-pills-restricted" aria-selected="false" style="width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Restricted Holiday</a>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="tab-content" id="v-pills-tabContent" >
                <!-- Attendace link -->
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div  style="display:flex;align-items:center;justify-content:center;">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" >Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Closed</a>
                        </li>
                    </ul>
                </div>
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">Hey, you have no regularization records to view</p>
                        </div>
                     </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">Hey, you have no regularization records to view</p>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
            <!-- confirmation links -->
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div style="display:flex;align-items:center;justify-content:center;">
               <ul class="nav nav-pills mb-3" id="pills-Confrmsstab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-confirmationActive-tab" data-toggle="pill" href="#pills-confirmationActive" role="tab" aria-controls="pills-confirmationActive" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-confirmClose-tab" data-toggle="pill" href="#pills-confirmClose" role="tab" aria-controls="pills-confirmClose" aria-selected="false">Closed</a>
                    </li>
                </ul>
               </div>
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-confirmationActive" role="tabpanel" aria-labelledby="pills-confirmationActive-tab">
                       <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400;">Nothing to show! You've got no confirmation to review yet.</p>

                         </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="pills-confirmClose" role="tabpanel" aria-labelledby="pills-confirmClose-tab">
                     <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">Nothing to show! You've got no confirmation to review yet.</p>
                        </div>
                     </div>
                   </div>
                </div>
            </div>
            <!-- Resignation links -->
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <div style="display:flex;align-items:center;justify-content:center;">
               <ul class="nav nav-pills mb-3" id="pills-Regtab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-resignationActive-tab" data-toggle="pill" href="#pills-resignationActive" role="tab" aria-controls="pills-resignationActive" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-resignationClose-tab" data-toggle="pill" href="#pills-resignationClose" role="tab" aria-controls="pills-resignationClose" aria-selected="false">Closed</a>
                    </li>
                </ul>
               </div>
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-resignationActive" role="tabpanel" aria-labelledby="pills-resignationActive-tab">
                       <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400;">Hey, you have no resignation records to show</p>

                         </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="pills-resignationClose" role="tabpanel" aria-labelledby="pills-resignationClose-tab">
                     <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">Hey, you have no resignation records to show</p>
                        </div>
                     </div>
                   </div>
                </div>
            </div>
            <!-- help desk links -->
            <div class="tab-pane fade" id="v-pills-helpdesk" role="tabpanel" aria-labelledby="v-pills-helpdesk-tab">
            <div style="display:flex;align-items:center;justify-content:center;">
               <ul class="nav nav-pills mb-3" id="pills-helptab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-helpdeskActive-tab" data-toggle="pill" href="#pills-helpdeskActive" role="tab" aria-controls="pills-helpdeskActive" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-helpdeskClose-tab" data-toggle="pill" href="#pills-helpdeskClose" role="tab" aria-controls="pills-helpdeskClose" aria-selected="false">Closed</a>
                    </li>
                </ul>
               </div>
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-helpdeskActive" role="tabpanel" aria-labelledby="pills-helpdeskActive-tab">
                       <div style="display:flex;align-items:center;justify-content:center;">
                         <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400;">No helpdesk review items</p>

                         </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="pills-helpdeskClose" role="tabpanel" aria-labelledby="pills-helpdeskClose-tab">
                     <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">No helpdesk review items</p>
                        </div>
                     </div>
                   </div>
                </div>
            </div>
            <!-- leave links -->
            <div class="tab-pane fade" id="v-pills-leave" role="tabpanel" aria-labelledby="v-pills-leave-tab">
                <div style="display:flex;align-items:center;justify-content:center;">
                    <ul class="nav nav-pills mb-3" id="pills-leavetab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-leaveactive-tab" data-toggle="pill" href="#pills-leaveactive" role="tab" aria-controls="pills-leaveactive" aria-selected="true">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-leaveprofile-tab" data-toggle="pill" href="#pills-leaveprofile" role="tab" aria-controls="pills-leaveprofile" aria-selected="false">Closed</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-leaveactive" role="tabpanel" aria-labelledby="pills-leaveactive-tab">
                       <div class="closed-leaves-container"  style="width:100%; max-height:400px; overflow-y:auto; margin-top:10px;"  >
                       @if($this->leaveApplications)
                            <div class="reviewList"  >
                                @livewire('view-pending-details')
                            </div>
                        @else
                            <div class="card" style="height: 330px; width:473px; ">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                                    alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                                <p style="text-align: center; font-size:15px;">Hey, you have no leave applications to review.</p>
                            </div>
                        @endif
                       </div>
                    </div>
                    <div class="tab-pane fade" id="pills-leaveprofile" role="tabpanel" aria-labelledby="pills-leaveprofile-tab">
                     <div class="closed-leaves-container" style="width:100%; max-height:400px; overflow-y:auto; margin-top:10px;" >
                       @if(!empty($approvedLeaveApplicationsList))
                       @foreach($approvedLeaveApplicationsList as $leaveRequest)
                                <div class="accordion mb-3">
                                    <div class="accordion-heading" onclick="toggleAccordion(this)">
                                        <div class="accordion-head">
                                            <!-- Display leave details here based on $leaveRequest -->
                                            <div class="accordion-content">
                                                    <div class="accordion-profile" style="display:flex; gap:7px; margin:auto 0;align-items:center;justify-content:center;">
                                                        @if(isset($leaveRequest['approvedLeaveRequest']->image))
                                                          <img src="{{ $leaveRequest['approvedLeaveRequest']->image }}" alt="User Profile Image" style="width: 40px; height: 40px; border-radius: 50%;">
                                                            @else
                                                            <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" alt="Default User Image" style="width: 45px; height: 45px; border-radius: 50%;">
                                                            @endif
                                                            <div >
                                                                @if(isset($leaveRequest['approvedLeaveRequest']->first_name))
                                                                    <p style="font-size: 0.755rem; font-weight: 500; text-align: center;margin: auto;">
                                                                        {{ $leaveRequest['approvedLeaveRequest']->first_name }}  {{ $leaveRequest['approvedLeaveRequest']->last_name }} <br>
                                                                        @if(isset($leaveRequest['approvedLeaveRequest']->emp_id))
                                                                            <span style="color: #778899; font-size: 0.675rem; text-align: start;">
                                                                                #{{ $leaveRequest['approvedLeaveRequest']->emp_id }}
                                                                            </span>
                                                                        @endif
                                                                    </p>
                                                                @else
                                                                    <p style="font-size: 0.755rem; font-weight: 500; text-align: center;">Name Not Available</p>
                                                                @endif
                                                            </div>
                                                     </div>
                                              </div>

                                                <div class="accordion-content">

                                                    <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Leave Type</span>

                                                <span style="color: #36454F; font-size: 0.755rem; font-weight: 500;">{{$leaveRequest['approvedLeaveRequest']->leave_type}}</span>

                                                </div>

                                                <div class="accordion-content">

                                                    <span style="color: #778899; font-size:0.755rem; font-weight: 500;">No. of Days</span>

                                                    <span style="color: #36454F; font-size:0.755rem; font-weight: 500;">

                                                    {{ $this->calculateNumberOfDays($leaveRequest['approvedLeaveRequest']->from_date, $leaveRequest['approvedLeaveRequest']->from_session, $leaveRequest['approvedLeaveRequest']->to_date, $leaveRequest['approvedLeaveRequest']->to_session) }}

                                                    </span>

                                                </div>

                                

                                                <div class="accordion-content">

                                                @if(strtoupper($leaveRequest['approvedLeaveRequest']->status) == 'APPROVED')

                                                    <span style=" font-size: 0.755rem; font-weight: 500; color:#32CD32;">{{ strtoupper($leaveRequest['approvedLeaveRequest']->status) }}</span>

                                                @elseif(strtoupper($leaveRequest['approvedLeaveRequest']->status) == 'REJECTED')

                                                    <span style=" font-size: 0.755rem; font-weight: 500; color:#FF0000;">{{ strtoupper($leaveRequest['approvedLeaveRequest']->status) }}</span>

                                                    @else

                                                    <span style=" font-size: 0.755rem; font-weight: 500; color:#778899;">{{ strtoupper($leaveRequest['approvedLeaveRequest']->status) }}</span>

                                                    @endif

                                                </div>
                                                
                                                <div class="arrow-btn" >
                                                    <i class="fa fa-angle-down"></i>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="accordion-body">

                                            <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:5px;"></div>

                                            <div class="review-content">

                                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Duration:</span>

                                                <span style="font-size: 0.755rem;">

                                                <span style="font-size: 0.755rem; font-weight: 500;">{{ $leaveRequest['approvedLeaveRequest']->formatted_from_date }}</span>

                                                ({{ $leaveRequest['approvedLeaveRequest']->from_session }} ) to

                                                <span style="font-size: 0.755rem; font-weight: 500;">{{ $leaveRequest['approvedLeaveRequest']->formatted_to_date }}</span>

                                            ( {{ $leaveRequest['approvedLeaveRequest']->to_session }} )

                                                </span>

                                            </div>

                                            <div class="review-content">

                                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Reason:</span>

                                                <span style="font-size: 0.755rem;">{{ucfirst( $leaveRequest['approvedLeaveRequest']->reason) }}</span>

                                            </div>

                                            <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                                            <div style="display:flex; flex-direction:row; justify-content:space-between;">

                                                <div class="review-content">

                                                    <span style="color: #778899; font-size: 0.755rem; font-weight: 400;">Applied on:</span>

                                                <span style="color: #333; font-size: 0.755rem; font-weight: 500;">{{ $leaveRequest['approvedLeaveRequest']->created_at->format('d M, Y') }}</span>

                                            </div>
                                            <div class="review-content">
                                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Leave Balance:</span>
                                                @if(!empty($leaveRequest['leaveBalances']))
                                                        <div style=" flex-direction:row; display: flex; align-items: center;justify-content:center;">
                                                        <!-- Sick Leave -->
                                                            <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #e6e6fa; display: flex; align-items: center; justify-content: center; margin-left:15px;">
                                                                <span style="font-size: 0.625rem; color: #50327c;font-weight:500;">SL</span>
                                                        </div>
                                                            <span style="font-size: 0.755rem; font-weight: 500; color: #333; margin-left: 5px;">{{ $leaveRequest['leaveBalances']['sickLeaveBalance'] }}</span>
                                                        <!-- Casual Leave -->
                                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #e7fae7; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                                                <span style="font-size: 0.625rem; color: #1d421e;font-weight:500;">CL</span>
                                                        </div>
                                                            <span style="font-size: 0.755rem; font-weight: 500; color: #333; margin-left: 5px;">{{ $leaveRequest['leaveBalances']['casualLeaveBalance'] }}</span>
                                                        <!-- Loss of Pay -->
                                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #ffebeb; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                                                <span style="font-size: 0.625rem; color: #890000;font-weight:500;">LP</span>
                                                        </div>
                                                            <span style="font-size: 0.755rem; font-weight: 500; color: #333; margin-left: 5px;">{{ $leaveRequest['leaveBalances']['lossOfPayBalance'] }}</span>
                                                    </div>
                                                    @else
                                                    <span style="font-size: 0.755rem; font-weight: 500; color: #333; margin-left: 5px;">0</span>
                                                @endif
                                            </div>
                            
                                                <div class="review-content">

                                                    <a href="{{ route('approved-details', ['leaveRequestId' => $leaveRequest['approvedLeaveRequest']->id]) }}">
                                                        <span style="color: #3a9efd; font-size: 0.755rem; font-weight: 500;">View Details</span>
                                                    </a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    @endforeach

                                </div>
                           

                        @else

                            <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                                <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                                <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no closed of  leave transaction</p>

                            </div>

                        @endif

                    </div>
                   
                </div>
            </div>
            <!-- leave Cancel links-->
            <div class="tab-pane fade" id="v-pills-leavecancel" role="tabpanel" aria-labelledby="v-pills-leavecancel-tab">
               <div style="display:flex;align-items:center;justify-content:center;">
               <ul class="nav nav-pills mb-3" id="pills-canceltab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-leavecancel-tab" data-toggle="pill" href="#pills-leavecancel" role="tab" aria-controls="pills-leavecancel" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Closeprofile-tab" data-toggle="pill" href="#pills-Closeprofile" role="tab" aria-controls="pills-Closeprofile" aria-selected="false">Closed</a>
                    </li>
                </ul>
               </div>
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-leavecancel" role="tabpanel" aria-labelledby="pills-leavecancel-tab">
                       <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">No Review Items for Leave Cancel</p>

                         </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Closeprofile" role="tabpanel" aria-labelledby="pills-Closeprofile-tab">
                    <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">
                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">No Closed Review Items for Leave Cancel</p>
                         </div>
                       </div>
                    </div>
                </div>
            </div>
            <!-- Comp off links-->
            <div class="tab-pane fade" id="v-pills-LeaveComp" role="tabpanel" aria-labelledby="v-pills-LeaveComp-tab">
            <div style="display:flex;align-items:center;justify-content:center;">
               <ul class="nav nav-pills mb-3" id="pills-comptab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-leaveCompOff-tab" data-toggle="pill" href="#pills-leaveCompOff" role="tab" aria-controls="pills-leaveCompOff" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-CloseCompOff-tab" data-toggle="pill" href="#pills-CloseCompOff" role="tab" aria-controls="pills-CloseCompOff" aria-selected="false">Closed</a>
                    </li>
                </ul>
               </div>
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-leaveCompOff" role="tabpanel" aria-labelledby="pills-leaveCompOff-tab">
                       <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400;">No Review Items for Leave Grant</p>

                         </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="pills-CloseCompOff" role="tabpanel" aria-labelledby="pills-CloseCompOff-tab">
                     <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">
                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">No Review Items for Leave Grant</p>
                        </div>
                     </div>
                   </div>
                </div>
            </div>
            <!-- restricted Holidays links -->
            <div class="tab-pane fade" id="v-pills-restricted" role="tabpanel" aria-labelledby="v-pills-restricted-tab">
            <div style="display:flex;align-items:center;justify-content:center;">
               <ul class="nav nav-pills mb-3" id="pills-restab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-restrictedHoliday-tab" data-toggle="pill" href="#pills-restrictedHoliday" role="tab" aria-controls="pills-restrictedHoliday" aria-selected="true">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-CloserestrictedHoliday-tab" data-toggle="pill" href="#pills-CloserestrictedHoliday" role="tab" aria-controls="pills-CloserestrictedHoliday" aria-selected="false">Closed</a>
                    </li>
                </ul>
               </div>
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-restrictedHoliday" role="tabpanel" aria-labelledby="pills-restrictedHoliday-tab">
                       <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400;">No Review Items for Restricted Holiday</p>

                         </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="pills-CloserestrictedHoliday" role="tabpanel" aria-labelledby="pills-CloserestrictedHoliday-tab">
                     <div style="display:flex;align-items:center;justify-content:center;">
                        <div class="leave-pending" style="margin-top:10px; background:#fff;  display:flex; width:80%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">
                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">No Review Items for Restricted Holiday</p>
                        </div>
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