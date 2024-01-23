<div>
<body>
    <div class="detail-container ">
        <div class="date-heading" style="font-size: 0.855rem; font-weight: 500; text-align:start; margin-left:150px; ">
            <p >Leave Applied on {{ $leaveRequest->created_at->format('d M, Y') }} </p>
        </div>
        <div class="approved-leave">
            <div class="heading">
                <div class="heading-2" >
                    <div style="display:flex; flex-direction:row; justify-content:space-between;padding:10px 15px;">
                    <div class="field">
                            <span style="color: #778899; font-size: 0.825rem; font-weight: 500;">
                             Applied by
                            </span>
                            @if(strtoupper($leaveRequest->status) == 'APPROVED')
                                <span style="color: #333; font-size: 0.755rem;font-weight: 500; text-transform: uppercase;">
                                    {{ $this->leaveRequest->employee->first_name }} {{ $this->leaveRequest->employee->last_name }}
                                </span>
                                @elseif(strtoupper($leaveRequest->status) == 'REJECTED')
                                <span style="color: #333; font-size: 0.755rem;font-weight: 500; text-transform: uppercase;">
                                    {{ $this->leaveRequest->employee->first_name }} {{ $this->leaveRequest->employee->last_name }}
                                </span>
                            @endif
                        </div>
 
                     <div>
                        <span style="color: #32CD32; font-size: 0.805rem; font-weight: 500; text-transform:uppercase;">
                        @if(strtoupper($leaveRequest->status) == 'APPROVED')

                                    <span style="margin-top:0.625rem; font-size: 0.805rem; font-weight: 500; color:#32CD32;">{{ strtoupper($leaveRequest->status) }}</span>

                                @elseif(strtoupper($leaveRequest->status) == 'REJECTED')

                                    <span style="margin-top:0.625rem; font-size: 0.805rem; font-weight: 500; color:#FF0000;">{{ strtoupper($leaveRequest->status) }}</span>

                                @else

                                    <span style="margin-top:0.625rem; font-size: 0.805rem; font-weight: 500; color:#778899;">{{ strtoupper($leaveRequest->status) }}</span>

                                @endif
                        </span>
                   </div>
                </div>
            <div class="middle-container">
                <div class="view-container">
                     <div class="approved-dates" style="display:flex; gap:40px;padding:5px 10px; ">
                            <div class="field">
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">From date</span>
                                <span style="font-size: 0.805rem; font-weight: 600;"> {{ $leaveRequest->from_date->format('d M, Y') }}<br><span style="color: #494F55;font-size: 0.725rem;font-weight:500; ">{{ $leaveRequest->from_session }}</span></span>
                            </div>
                            <div class="field">
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">To date</span>
                                <span style="font-size: 0.805rem; font-weight: 600;">{{ $leaveRequest->to_date->format('d M, Y') }} <br><span style="color: #494F55;font-size: 0.725rem;font-weight:500; ">{{ $leaveRequest->to_session }}</span></span>
                            </div>
                         </div>
                         <div style="width:1px;border:1px solid #ccc;"></div>
                         <div class="box" style="display:flex;  margin-left:30px;  text-align:center; padding:5px;">
                            <div class="field">
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">No. of days</span>
                                <span style=" font-size: 0.805rem; font-weight: 600;"> {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}</span>
                            </div>
                        </div>
                     </div>
                 </div>
                    <div class="leave">
                        <div class="pay-bal">
                               <span style=" font-size: 0.805rem; font-weight: 500;">Balance:</span>
                               @php
                                    // Extract the year from the from_date property
                                    $fromDateYear = Carbon\Carbon::parse($this->leaveRequest->from_date)->format('Y');
                                @endphp
                                @if (!empty($this->leaveBalances) && $fromDateYear == $this->selectedYear)
                                    <div style="flex-direction: row; display: flex; align-items: center; justify-content: center;">
                                        <!-- Sick Leave -->
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #e6e6fa; display: flex; align-items: center; justify-content: center; margin-left:15px;">
                                            <span style="font-size: 0.625rem; color: #50327c; font-weight: 500;">SL</span>
                                        </div>
                                        <span style="font-size: 0.795rem; font-weight: 500; color: #50327c; margin-left: 5px;">{{ $this->leaveBalances['sickLeaveBalance'] }}</span>

                                        <!-- Casual Leave -->
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #e7fae7; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                            <span style="font-size: 0.625rem; color: #1d421e; font-weight: 500;">CL</span>
                                        </div>
                                        <span style="font-size: 0.795rem; font-weight: 500; color: #1d421e; margin-left: 5px;">{{ $this->leaveBalances['casualLeaveBalance'] }}</span>

                                        <!-- Loss of Pay -->
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #ffebeb; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                            <span style="font-size: 0.625rem; color: #890000; font-weight: 500;">LP</span>
                                        </div>
                                        <span style="font-size: 0.795rem; font-weight: 500; color: #890000; margin-left: 5px;">{{ $this->leaveBalances['lossOfPayBalance'] }}</span>
                                    </div>
                                @else
                                    <!-- Display 0 or any other message when the year does not match -->
                                    <span style="text-align: center; color: #000;font-weight:500;font-size:0.795rem;">0</span>
                                @endif

                            </div>
                                <div class="leave-type">
                                    <span style=" color: #605448; font-size: 0.805rem; font-weight: 600;">{{ $leaveRequest->leave_type }}</span>
                                </div>
                           </div>
                     </div>
     <div style="height:1px;border:1px solid #f3f3f3;"></div>
        <div class="details">
           <div class="data">
           <p><span style="color: #333; font-weight: 500; font-size:0.825rem;">Details</span></p>
           @if (!empty($leaveRequest['applying_to']))
                <div class="row">
                    @foreach ($leaveRequest['applying_to'] as $applyingTo)
                        <div class="col-md-6">
                            <div class="d-flex flex-row gap-4   ">
                                <span style="color: #778899; font-size: 13px; font-weight: 400;">Applying to</span>
                                <p style="font-size: 13px;">{{ ucfirst($applyingTo['report_to']) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="row mt-1">
                <div class="col-md-6">
                    <div class="d-flex flex-row gap-5">
                        <span style="color: #778899; font-size: 0.805rem; font-weight: 400;">Reason</span>
                        <p style="font-size: 0.805rem;">{{ ucfirst($leaveRequest->reason) }}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-6">
                    <div class="d-flex flex-row gap-5">
                        <span style="color: #778899; font-size: 0.805rem; font-weight: 400;">Contact</span>
                        <p style="font-size: 0.805rem;">{{ ucfirst($leaveRequest->contact_details) }}</p>
                    </div>
                </div>
            </div>
            @if(!empty($leaveRequest->cc_to))
                <p style="font-size: 0.805rem; font-weight: 500;">
                    <span style="color: #778899; font-size: 0.805rem; font-weight: 400; padding-right: 90px;">CC to</span>
                    @foreach($leaveRequest->cc_to as $ccToItem)
                    {{ $ccToItem['full_name'] }} (#{{ $ccToItem['emp_id'] }})
                    @if(!$loop->last)
                        ,
                    @endif
                    @endforeach
                </p>
            @endif
           </div>
        </div>
        </div>
        <div class="side-container ">
            <h6 style="color: #778899; font-size: 0.825rem; font-weight: 500; text-align:start;"> Application Timeline </h6>
           <div  style="display:flex; ">
           <div style="margin-top:20px;">
             <div class="cirlce"></div>
             <div class="v-line"></div>
            <div class=cirlce></div>
             </div>
              <div style="display:flex; flex-direction:column; gap:70px;">
              <div class="group">
              <div>
                <h5 class="mt-2"style="color: #333; font-size: 0.755rem; font-weight: 400; text-align:start;">
                    @if(strtoupper($leaveRequest->status) == 'WITHDRAWN')
                        Withdrawn <br><span style="color: #778899; font-size: 0.755rem; font-weight: 400; text-align:start;">by</span>
                        <span style="color: #778899; font-weight: 500; text-transform: uppercase;">
                            {{ $this->leaveRequest->employee->first_name }}  {{ $this->leaveRequest->employee->last_name }}
                        </span>
                    @elseif(strtoupper($leaveRequest->status) == 'APPROVED')
                        Approved <br> by
                        @if(!empty($leaveRequest['applying_to']))
                            @foreach($leaveRequest['applying_to'] as $applyingTo)
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;text-align:start;">
                                    {{ $applyingTo['report_to'] }}
                                </span>
                            @endforeach
                        @endif
                    @else
                        Rejected by <br>
                        <span style="color: #778899; font-size: 0.795rem; font-weight: 500;text-align:start;">
                                    {{ $applyingTo['report_to'] }}
                        </span>
                    @endif
                    <br>
                    <span style="color: #778899; font-size: 0.725rem; font-weight: 400;text-align:start;">
                        {{ $leaveRequest->updated_at->format('d M, Y g:i A') }}
                    </span>
                </h5>
            </div>
 
           </div>
           <div class="group">
               <div >
                  <h5 style="color: #333; font-size: 0.755rem; font-weight: 400; text-align:start;">Submitted<br>
                <span style="color: #778899; font-size: 0.725rem; font-weight: 400;text-align:start;">{{ $leaveRequest->created_at->format('d M, Y g:i A') }}</span>
                    </h5>
               </div>
           </div>
              </div>
           
           </div>
             
        </div>
        </div>
    </div>
   
</body> 
</div>