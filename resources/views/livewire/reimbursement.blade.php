<style>
      .dropdown2 {
            position: relative;
            display: inline-block;
        }
       
        .dropbtn2 {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
       
        .dropdown-content2 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
       
        .dropdown-content2 a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }
       
        .dropdown-content2 a:hover {
            background-color: #ddd;
        }
       
        .dropdown2:hover .dropdown-content2 {
            display: block;
        }
        .dropdown-button2{
            height:30px;
            width:220px;
            border-radius:5px;
        }
    </style>
 
<div>
    <div class="row m-0 p-0">
        <h6 style="color:blue;text-decoration:underline;margin-top:20px">overview</h6>
        <div class="dropdown2 d-flex justify-content-end" style="position: relative;display: inline-block;">
            <button class="dropdown-button2" id="dateButton">01 Apr, 2021 - 31 Mar, 2022</button>
            <div class="dropdown-content2">
                <div class="dropdown-item">01 Apr, 2021 - 31 Mar, 2022</div>
                <div class="dropdown-item">01 Apr, 2022 - 31 Mar, 2023</div>
                <div class="dropdown-item">01 Apr, 2023 - 31 Mar, 2024</div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript to handle the dropdown functionality
        const dropdownButton = document.getElementById('dateButton');
        const dropdownContent = document.querySelector('.dropdown-content2');
        const dropdownItems = document.querySelectorAll('.dropdown-item');
 
        dropdownButton.addEventListener('click', function () {
            dropdownContent.classList.toggle('active');
        });
 
        dropdownItems.forEach(item => {
            item.addEventListener('click', function () {
                dropdownButton.innerText = item.innerText;
                dropdownContent.classList.remove('active');
            });
        });
    </script>