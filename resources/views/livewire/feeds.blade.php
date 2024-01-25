<div>
   
    <div class="bg-white m-0 pt-4 pb-4 rounded-md row">
        <div class="col-md-1">
            <div class="avatar">
                <i class="fas fa-user"></i>
            </div>
        </div>
 
        <div class="col-md-11 mt-2 m-auto">
            <!-- Placeholder for avatar -->
            <p class="m-0">
                <span class="text-base font-semibol">Hey A,</span>
                <span class="text-xs">Ready to dive in?</span>
            </p>
 
        </div>
    </div>
    <div class="m-0 row">
        <div class="col-md-3 p-0">
            <div style="background:white;border:1px solid silver;border-radius:5px;margin-top:20px;" class="p-3">
                <b>Filters</b>
 
                <hr style="background: grey; margin-top:5px">
                <gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated" >
    <span _ngcontent-fon-c558="" class="flex items-center" style="display:flex">
        <input _ngcontent-fon-c558="" type="radio" class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn" name="activityType">
        <div _ngcontent-fon-c558="" class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-salmon-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello salmon stroke-1" _ngcontent-fon-c558="" style="width: 1rem; height: 1rem;">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <rect x="7" y="7" width="3" height="9"></rect>
                <rect x="14" y="7" width="3" height="5"></rect>
            </svg>
        </div>
        <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">All Activities</span>
    </span>
</gt-menu-item>
<gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated">
    <span _ngcontent-fon-c558="" class="flex items-center"  style="display:flex">
        <input _ngcontent-fon-c558="" type="radio" class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn" name="activityType">
        <div _ngcontent-fon-c558="" class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-purple-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file purple stroke-1" _ngcontent-fon-c558="" style="width: 1rem; height: 1rem;">
                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
        </div>
        <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">Posts</span>
    </span>
</gt-menu-item>
            <hr style="background:#f3f3f3;">
            <div style="overflow-y:auto;max-height:300px;">
            <div class="row">
                        <div class="col " style="margin: 0px;">
                            <div class="input-group" >
                                <input wire:model="search" style="width:80%;font-size: 10px; border-radius: 5px 0 0 5px; cursor: pointer; " type="text" class="form-control" placeholder="Search...." aria-label="Search" aria-describedby="basic-addon1">
                                    <button wire:click="starredFilter" style=" height: 25px; border-radius: 0 5px 5px 0; background-color: rgb(2, 17, 79);; color: #fff; border: none;" class="search-btn" type="button">
                                        <i style="text-align: center;" class="fa fa-search"></i>
                                    </button>
                            </div>
                        </div>
                    </div>
 
                <div class="w-full visible mt-1" style="margin-top:20px">
                    <button type="button" class="custom-button" style="  display: flex; justify-content: space-between;
   ; align-items: center;width: 100%;border-radius: 5px;height: 30px;border: 1px solid grey;padding: 0.5rem;"
                        onclick="toggleDropdown('dropdownContent1', 'arrowSvg1')">
                        <span class="text-xs  leading-4 color-black">Groups</span>
                        <span class="arrow-icon" id="arrowIcon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg1">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </button>
                    <div id="dropdownContent1" style="display: none;">
                        <ul class="d-flex flex-column "style="font-size: 12px;line-height:2; text-decoration:none;color:#778899;">

                            <a class="menu-item" href="/Feeds" style="margin-top:5px">
                                All Feeds
                            </a>
 
                            <a class="menu-item" href="/everyone" style="margin-top:5px">
                                Every One
                            </a>
                            <a class="menu-item" href="/Feeds" style="margin-top:5px">
                                Events
                            </a>
 
                            <a class="menu-item" href="/everyone" style="margin-top:5px">
                                Company News
                            </a>
 
                            <a class="menu-item" href="/everyone" style="margin-top:5px">
                                Appreciation
                            </a>
 
                            <a class="menu-item" href="/everyone" style="margin-top:5px">
                                Buy/Sell/Rent
                            </a>
 
                        </ul>
                    </div>
                </div>
 
                <div class="w-full visible mt-1x" style="margin-top:20px">
                    <button type="button" class="custom-button" style="display: flex;justify-content: space-between;align-items: center; width: 100%; border-radius: 5px;height: 30px; border: 1px solid grey;  padding: 0.5rem;"
                        onclick="toggleDropdown('dropdownContent2', 'arrowSvg2')">
                        <span class="text-xs  leading-4">Location</span>
                        <span class="arrow-icon" id="arrowIcon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </button>
                    <div id="dropdownContent2" style="display: none;">
                        <ul style="font-size: 12px;margin-top:3px">
                            <p>Guntur</p>
                            <p>Hyderabad</p>
                            <p>Doddaballapur</p>
                            <p>Tirupati</p>
                            <p>Vijayavada</p>
                            <p>Trivandrum</p>
                            <p>Adilabad</p>
                        </ul>
                    </div>
                </div>
                <div class="w-full visible mt-1x" style="margin-top:20px">
                    <button type="button" class="custom-button" style="display: flex;justify-content: space-between;align-items: center; width: 100%; border-radius: 5px;height: 30px; border: 1px solid grey;  padding: 0.5rem;"
                        onclick="toggleDropdown('dropdownContent3', 'arrowSvg3')">
                        <span class="text-xs  leading-4">Department</span>
                        <span class="arrow-icon" id="arrowIcon3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </button>
                    <div id="dropdownContent3" style="display: none;">
                        <ul style="font-size: 12px;margin-top:3px">
                            <p>HR</p>
                            <p>Operations</p>
                            <p>Operations Team</p>
                            <p>Product</p>
                            <p>Production Suppport</p>
                            <p>QA</p>
                            <p>Sales Team</p>
                            <p>Technology</p>
                            <p>Testing Team</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

     </div>
                
        <div class="col-md-9" style="max-height: 400px; overflow-y: auto;">
            @foreach ($combinedData as $index => $data)
            @if ($data['type'] === 'date_of_birth' )
 
            <div class="birthday-card bg-dark">
                <!-- Upcoming Birthdays List -->
                <div class="F"
                    style="padding: 15px; background-color: white; border-radius: 5px; border: 1px solid #CFCACA; color: #3b4452; margin-top: 20px">
                    <div class="row m-0">
                        <div class="col-md-4 mb-2" style="text-align: center;">
                            @livewire('company-logo')
                        </div>
                        <div class="col-md-4 m-auto"
                            style="color: #677A8E; font-size: 14px;font-weight: 100px; text-align: center;">
                            Group Events
                        </div>
                        <div class="c col-md-4 m-auto"
                            style="font-size: 13px; font-weight: 100px; color: #9E9696; text-align: center;">
                            {{ date('d M ', strtotime($data['employee']->date_of_birth)) }}
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/Blowing_out_Birthday_candles_Gif.gif') }}"
                                alt="Image Description" style="width: 200px;">
                        </div>
                        <div class="col-md-8 m-auto">
                            <p style="color: #677A8E;">
                                Happy Birthday {{ $data['employee']->first_name }} {{ $data['employee']->last_name }},
                                Have a great year ahead!
                            </p>
                            <div style="display: flex; align-items: center;">
                                <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                    style="height: 25px; width: 20px;">
                                <p style="margin-left: 10px; font-size: 14px; color: black;">
                                    Happy Birthday {{ $data['employee']->first_name }}
                                    {{ $data['employee']->last_name }}! 🎂
                                </p>
                            </div>
                        </div>
 
                    </div>
 
                    <!-- Display existing comments -->
                    <div class="row m-0">
                        <div class="col-md-3 mb-2">
                            <i class="far fa-smile"></i>
                            <a style="margin-left: 10px;" onclick="toggleEmojiDiv({{ $index }})">
                                 Reaction
                            </a>
                            <!-- <textarea style="background-color: red;height:20px;max-height:50px" id="mytextarea"></textarea> -->
                            <div class="myEmojiDiv" id="myEmojiDiv_{{ $index }}" style="display: none;">
                                <emoji-picker style="width: 100%"></emoji-picker>
                            </div>
                           
                        </div>
                        <div class="col-md-9 p-0">
                            <form wire:submit.prevent="add_comment('{{ $data['employee']->emp_id }}')">
                            @csrf
                                <div class="row m-0">
                                   
                                    <div class="col-md-4 mb-2">
                                        <i class="comment-icon">💬</i>
                                        <a href="#" onclick="comment({{ $index }})"  style="margin-left: 10px; ">Comment</a>
                                    </div>
 
                                    <div class="col-md-8 p-0 mb-2">
                                        <div class="replyDiv row m-0" id="replyDiv_{{ $index }}" style="display: none;">
                                            <div class="col-md-8">
                                                <textarea wire:model="newComment" placeholder="Post comment something here"
                                                    style="font-size: 12px"
                                                    name="comment" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="submit" class="btn btn-primary"
                                                    style="text-align: center; line-height: 10px;font-size:12px;"
                                                    value="Comment" wire:target="add_comment">
                                            </div>
 
                                            <!-- <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                                style="height: 20px; width: 20px;"> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row m-0">
                        @if($comment && count($comment) > 0)
                        @foreach ($comment as $index => $singleComment)
                        @if ($singleComment->emp_id === $data['employee']->emp_id)
                        <div style="display: flex;">
                            <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                style="height: 25px; width: 20px;">
                            <div class="comment"
                                style="font-size: 14px; font-family: 'Open Sans', sans-serif;margin-left:20px; margin-bottom: 15px">
                                <b
                                    style="font-size: 14px; font-family: 'Open Sans', sans-serif;">{{ $singleComment->first_name  }}{{ $singleComment->last_name  }}</b>
                                <p style="font-size: 14px; font-family: 'Open Sans', sans-serif;">
                                    {{ $singleComment->comment }}</p>
                               
                                    <div class="row m-0">
                                   
                                    <div class="col-md-3 p-0 mb-2">
                                        <a href="#" onclick="subReply({{ $index }})" >Reply</a>
                                    </div>
 
                                    <div class="col-md-9 p-0 mb-2">
                                        <div class="replyDiv row m-0" id="subReplyDiv_{{ $index }}" style="display: none;">
                                            <div class="col-md-8 mb-2 ps-0">
                                                <textarea wire:model="newComment" placeholder="Write something here"
                                                    style="font-size: 12px"
                                                    name="comment" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-4 mb-2 ps-0">
                                                <input type="submit" class="btn btn-primary"
                                                    style="text-align: center; line-height: 10px;font-size:12px;"
                                                    value="Comment">
                                            </div>
 
                                            <!-- <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                                style="height: 20px; width: 20px;"> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#" onclick="reply(this); return false;">Reply</a>
                                <div class="replyDiv" style="display: none; font-family: 'Open Sans', sans-serif;">
                                    <textarea placeholder="write something here"
                                        style="width: 250px; font-family: 'Open Sans', sans-serif;"></textarea>
                                    <a href="#" class="btn btn-primary"
                                        style="margin-left: 10px; margin-top: -31px;; font-size: 14px;">Comment
                                    </a>
                                </div> -->
                                <!-- Additional HTML for reply functionality, etc. -->
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @else
                        <p>No comments available.</p>
                        @endif
                    </div>
 
                </div>
            </div>
            @elseif ($data['type'] === 'hire_date' )
            <div class="hire-card">
                <!-- Upcoming Hire Dates List -->
                <div class="F"
                    style="padding: 15px; background-color:white; border-radius: 5px; border: 1px solid #CFCACA; color: #3b4452; margin-top:20px">
                    <div class="row m-0">
                        <div class="col-md-4 mb-2" style="text-align: center;">
                            @livewire('company-logo')
                        </div>
                        <div class="col-md-4 m-auto"
                            style="color: #677A8E; font-size: 14px;font-weight: 100px; text-align: center;">
                            Group Events
                        </div>
                        <div class="c col-md-4 m-auto"
                            style="font-size: 13px; font-weight: 100px; color: #9E9696; text-align: center;">
                            {{ date('d M ', strtotime($data['employee']->hire_date)) }}
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/New_team_members_gif.gif') }}" alt="Image Description"
                                style="width: 200px;">
                        </div>
                        <div class="col-md-8 m-auto">
                            <p style="color: #677A8E;">
                                {{ $data['employee']->first_name }} {{ $data['employee']->last_name }} has joined us
                                in the company on {{ date('d M Y', strtotime($data['employee']->hire_date)) }},
                                Please join us in welcoming our newest team member.
                            </p>
                            <div style="display: flex; align-items: center;">
                                <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                    style="height: 25px; width: 20px;">
                                <p style="margin-left: 10px; font-size: 14px; color: black;">
                                    {{ $data['employee']->first_name }} {{ $data['employee']->last_name }} Just
                                    Joined Us!
                                </p>
                            </div>
                        </div>
 
                        <confirmation-modal class="confirmation-modal">
                            <gt-popup-modal label="modal" size="sm" class="hydrated">
                                <div class="body-content">
                                    <div slot="modal-body">
                                        <!-- Content for modal body -->
                                    </div>
                                </div>
                                <div slot="modal-footer">
                                    <div class="flex justify-end">
                                        <gt-button shade="secondary" name="Cancel" class="mr-2x hydrated">
                                        </gt-button>
                                        <gt-button shade="primary" name="Confirm" class="hydrated"></gt-button>
                                    </div>
                                </div>
                            </gt-popup-modal>
                        </confirmation-modal>
 
                    </div>
                    <div style="display: flex;">
                        <div class="like-button">
                            <i class="thumb-icon">👍</i>
                            <span class="like-count">0 Likes</span>
                        </div>
                        <div class="comment-icon">
                            <i class="comment-icon" style="margin-left: 10px; margin-top: 20px;">💬</i>
                            <span class="comment-count">0 Comments</span>
                        </div>
 
                    </div>
                </div>
            </div>
 
 
            @endif
            @endforeach
 
        </div>
    </div>
 
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
 
 
 
    <script>
    function toggleEmojiDiv(index) {
        var div = document.getElementById('myEmojiDiv_' + index);
        if (div.style.display === 'none') {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    }
 
    function comment(index) {
        var div = document.getElementById('replyDiv_' + index);
        if (div.style.display === 'none') {
            div.style.display = 'flex';
        } else {
            div.style.display = 'none';
        }
    }
 
    function subReply(index) {
        var div = document.getElementById('subReplyDiv_' + index);
        if (div.style.display === 'none') {
            div.style.display = 'flex';
        } else {
            div.style.display = 'none';
        }
    }
 
 
    document.querySelector('emoji-picker').addEventListener('emoji-click', event => console.log(event.detail));
    // JavaScript function to toggle arrow icon visibility
    // JavaScript function to toggle arrow icon and dropdown content visibility
    // JavaScript function to toggle dropdown content visibility and arrow rotation
    function toggleDropdown(contentId, arrowId) {
        var dropdownContent = document.getElementById(contentId);
        var arrowSvg = document.getElementById(arrowId);
 
        if (dropdownContent.style.display === 'none') {
            dropdownContent.style.display = 'block';
            arrowSvg.style.transform = 'rotate(180deg)';
        } else {
            dropdownContent.style.display = 'none';
            arrowSvg.style.transform = 'rotate(0deg)';
        }
    }
 
 
    function reply(caller) {
        var replyDiv = $(caller).siblings('.replyDiv');
        $('.replyDiv').not(replyDiv).hide(); // Hide other replyDivs
        replyDiv.toggle(); // Toggle display of clicked replyDiv
    }
 
    // function comment(caller) {
    //     var replyDiv = $(caller).siblings('.replyDiv');
    //     $('.replyDiv').not(replyDiv).hide(); // Hide other replyDivs
    //     replyDiv.toggle(); // Toggle display of clicked replyDiv
    // }
    </script>
 
 
    <script>
    function react(reaction) {
        // Handle reaction logic here, you can send it to the server or perform any other action
        console.log('Reacted with: ' + reaction);
    }
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        console.log("Document ready!");
 
        var emojiArea = $('#reaction-textarea').emojioneArea({
            pickerPosition: 'bottom'
        });
 
        $('#reaction-button').click(function() {
            console.log("Reaction button clicked!");
            $('#reaction-container').toggle();
        });
    });
    </script>
    <script>
    function addEmoji(emoji) {
        let inputEle = document.getElementById('input');
 
        input.value += emoji;
    }
 
    function toggleEmojiDrawer() {
        let drawer = document.getElementById('drawer');
 
        if (drawer.classList.contains('hidden')) {
            drawer.classList.remove('hidden');
        } else {
            drawer.classList.add('hidden');
        }
    }
    </script>
    <script>
    tinymce.init({
        height: 140,
        selector: "textarea#mytextarea",
        plugins: "emoticons",
        toolbar: "emoticons",
        toolbar_location: "bottom",
        menubar: false,
        setup: function(editor) {
            editor.on('input', function() {
                autoResizeTextarea();
            });
        }
    });
 
    function autoResizeTextarea() {
        var textarea = document.getElementById('mytextarea');
        textarea.style.height = '140';
    }
    </script>