<div>
<body>

    <div class="detail-container">
        <div class="date-header" style="font-size: 0.805rem; font-weight: 500; text-align:start; margin-left:150px; ">
            <h6 >Leave Applied on {{ $leaveRequest->created_at->format('d M, Y') }} </h6>
        </div>
        <div class="approved-leave">
            <div class="heading">
                <div class="heading-2" >
                    <div class="d-flex flex-row justify-content-between  p-2">
                    <div class="field">
                            <span style="color: #778899; font-size: 0.805rem; font-weight: 500;">
                                @if(strtoupper($leaveRequest->status) == 'WITHDRAWN')
                                    Withdrawn by
                                @elseif(strtoupper($leaveRequest->status) == 'APPROVED')
                                    Approved by
                                @else
                                    Rejected by
                                @endif
                            </span>
                            @if(strtoupper($leaveRequest->status) == 'WITHDRAWN')
                                <span style="color: #333; font-weight: 500; text-transform: uppercase;font-size:0.825rem;">
                                    {{ $this->leaveRequest->employee->first_name }} {{ $this->leaveRequest->employee->last_name }}
                                </span>
                                @if(is_array($leaveRequest['applying_to']) || is_object($leaveRequest['applying_to']))
                                @foreach($leaveRequest['applying_to'] as $applyingTo)
                                    <span style="color: #333; font-weight: 500; text-transform:uppercase;font-size:0.825rem;">
                                        {{ $applyingTo['report_to'] }}
                                    </span>
                                @endforeach
                                @else
                            <span style="color: #778899; font-size: 0.825rem; font-weight: 500;text-align:start;">
                                    Null
                            </span>
                            @endif
                            @endif
                        </div>

                     <div>
                        <span style="color: #32CD32; font-size: 0.825rem; font-weight: 500; text-transform:uppercase;">
                        @if(strtoupper($leaveRequest->status) == 'APPROVED')

                                    <span style="margin-top:0.625rem; font-size: 0.825rem; font-weight: 500; color:#32CD32;">{{ strtoupper($leaveRequest->status) }}</span>

                                @elseif(strtoupper($leaveRequest->status) == 'REJECTED')

                                    <span style="margin-top:0.625rem; font-size: 0.825rem; font-weight: 500; color:#FF0000;">{{ strtoupper($leaveRequest->status) }}</span>

                                @else

                                    <span style="margin-top:0.625rem; font-size: 0.825rem; font-weight: 500; color:#778899;">{{ strtoupper($leaveRequest->status) }}</span>

                                @endif
                        </span>
                   </div>
                </div>
            <div class="middle-container">
                <div class="view-container p-0 m-0">
                     <div class="history-list px-2" style="display:flex; gap:40px;">
                            <div class="field ">
                                <span style="color: #778899; font-size: 0.805rem; font-weight: 500;">From date</span>
                                <span style="font-size: 0.825rem; font-weight: 600;"> {{ $leaveRequest->from_date->format('d M, Y') }}<br><span style="color: #494F55;font-size: 0.755rem; font-weight: normal;">{{ $leaveRequest->from_session }}</span></span>
                            </div>
                            <div class="field">
                                <span style="color: #778899; font-size: 0.805rem; font-weight: 500;">To date</span>
                                <span style="font-size: 0.825rem; font-weight: 600;">{{ $leaveRequest->to_date->format('d M, Y') }} <br><span style="color: #494F55;font-size: 0.755rem; font-weight: normal;">{{ $leaveRequest->to_session }}</span></span>
                            </div>
                            <div class="vertical-line"></div>
                         </div>
                         <div class="box" style="display:flex;  margin-left:30px;  text-align:center; ">
                            <div class="field">
                                <span style="color: #778899; font-size: 0.815rem; font-weight: 500;">No. of days</span>
                                <span style=" font-size: 0.825rem; font-weight: 600;"> {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}</span>
                            </div>
                        </div>
                     </div>
                 </div>
                    <div class="leave">
                        <div class="pay-bal">
                            <span style=" font-size: 0.825rem; font-weight: 500;">Balance:</span>
                            @php
                                    // Extract the year from the from_date property
                                    $fromDateYear = Carbon\Carbon::parse($this->leaveRequest->from_date)->format('Y');
                                @endphp
                            @if(!empty($leaveBalances) && $fromDateYear == $this->selectedYear)
                                @if($leaveRequest->leave_type === 'Sick Leave')
                                <span style=" font-size: 0.805rem; font-weight: 500;">{{ $leaveBalances['sickLeaveBalance'] }}</span>
                                @elseif($leaveRequest->leave_type === 'Causal Leave Probation')
                                <span style=" font-size: 0.805rem; font-weight: 500;">{{ $leaveBalances['casualLeaveBalance'] }}</span>
                                @elseif($leaveRequest->leave_type === 'Loss Of Pay')
                                <span style=" font-size: 0.805rem; font-weight: 500;">{{ $leaveBalances['lossOfPayBalance'] }}</span>
                                @endif
                            @else
                            <p style="font-size:0.805rem;">0</p>
                            @endif
                        </div>
                        <div class="leave-type">
                            <span style=" color: #605448; font-size: 0.825rem; font-weight: 600;">{{ $leaveRequest->leave_type }}</span>
                        </div>
                  </div>
              </div>
              <div style="height:1px;border-top:1px solid #ccc;"></div>
        <div class="details">
           <div class="data">
           <p><span style="color: #333; font-weight: 500; font-size:0.825rem;">Details</span></p>
           @if(is_array($leaveRequest['applying_to']) || is_object($leaveRequest['applying_to']))
            @foreach($leaveRequest['applying_to'] as $applyingTo)
            <p style=" font-size: 0.805rem; "><span style="color: #778899; font-size: 0.805rem; font-weight: 400;padding-right: 58px;">Applying to</span  >{{ $applyingTo['report_to'] }}</p>
            @endforeach
            @endif
             <div style="display:flex; flex-direction:row;">
             <span style="color: #778899; font-size: 0.805rem; font-weight: 400;padding-right: 88px; ">Reason</span>
             <p style="font-size:0.805rem;">{{ ucfirst($leaveRequest->reason) }}</p>        
             </div>
            <p style="font-size:0.805rem;"><span style="color: #778899; font-size: 0.805rem; font-weight: 400; padding-right: 82px;">Contact</span>{{ $leaveRequest->contact_details }} </p>
            @if(is_array($leaveRequest->cc_to) || is_object($leaveRequest->cc_to))
                @if(!empty($leaveRequest->cc_to))
                    <p style="font-size: 0.975rem; font-weight: 500;">
                        <span style="color: #778899; font-size: 0.805rem; font-weight: 400; padding-right: 90px;">CC to</span>
                        @foreach($leaveRequest->cc_to as $ccToItem)
                            {{ $ccToItem['full_name'] }} (#{{ $ccToItem['emp_id'] }})
                            @if(!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </p>
                @endif
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
              <div style="display:flex; flex-direction:column; gap:50px;">
              <div class="group">
              <div>
                <h5 class="mt-3"style="color: #333; font-size: 0.805rem; font-weight: 400; text-align:start;">
                    @if(strtoupper($leaveRequest->status) == 'WITHDRAWN')
                        Withdrawn <br><span style="color: #778899; font-size: 0.805rem; font-weight: 400; text-align:start;">by</span> 
                        <span style="color: #778899; font-weight: 500; text-transform: uppercase;">
                            {{ $this->leaveRequest->employee->first_name }}  {{ $this->leaveRequest->employee->last_name }}
                        </span>
                    @elseif(strtoupper($leaveRequest->status) == 'APPROVED')
                        Approved by 
                        @if(is_array($leaveRequest['applying_to']))
                          @foreach($leaveRequest['applying_to'] as $applyingTo)
                                <span style="color: #778899; font-size: 0.825rem; font-weight: 500;text-align:start;">
                                    {{ $applyingTo['report_to'] }}
                                </span>
                            @endforeach
                            @else
                            <span style="color: #778899; font-size: 0.825rem; font-weight: 500;text-align:start;">
                                    Null
                            </span>
                          @endif
                    @else
                        Rejected by
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
                  <h5 class="mt-3" style="color: #333; font-size: 0.805rem; font-weight: 400; text-align:start;">Submitted<br>
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
</html>

</div>