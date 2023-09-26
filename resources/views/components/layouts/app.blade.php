<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grey HR Portal</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="{{ mix('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="reload"></script>
    <!-- Include Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    <script src="{{ asset('livewire/livewire.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" data-turbolinks-track="reload">
    <livewire:styles />
</head>
<body>
<div>
<style>
        .profile-container {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: white;
            box-shadow: 2px 4px 4px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .profile-image {
            height: 32px;
            width: 32px;
            background-color: green;
            border-radius: 50%;
            margin-right: 10px;
        }

        .username {
            font-size: 16px;
            margin: 0;
        }

        .nav-item {
            font-size: 14px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .nav-item-1 {
            font-size: 12px;
        }

        .fas {
            width: 30px;
            color: black;
        }

        .emp-name {
            margin-right: 20px;
        }

        .profile-image {
            margin-right: 15px;
        }
        .nav-link{
            color: black;
        }
    </style>

    <div class="row">
    <div class="card" style="border-radius:0px;height: auto; width: 20%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <ul class="nav flex-column">
                <div style="margin-bottom: 10px;">
                    <img  height="80" width="210" src="https://www.thesmbguide.com/images/greytHR-1024x512-20190228.png" alt="">
                </div>
                <div class="profile-container">
                    <div>
                        <img  class="profile-image" src="https://mlwfc8l8ikil.i.optimole.com/jr6wDGA-tSMksOQ4/w:374/h:535/q:90/https://nationaltranslationservices.com.au/wp-content/uploads/2020/07/bottom-banner-2.png">
                    </div>

                    <div class="emp-name">
                        <h6 style="font-size: 12px;" class="username">Sri Kumar Asapu</h6>
                        <a href="{{ route('profile.info') }}" class="nav-item-1" style="text-decoration: none;">View My Info</a>
                    </div>
                    <div>
                        <a href="">
                            <i style="color: black;" class="fas fa-cog"></i>
                        </a>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-rss"></i> Feeds
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-tasks"></i> To do
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-money-bill-wave"></i> Salary
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-alt"></i> Leave
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-clock"></i> Attendance
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-folder"></i> Document Center
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i> People
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-headset"></i> Helpdesk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user-friends"></i> Workflow Delegates
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col" style="height: 60px; width: 100%; background-color:rgb(2, 17, 79)">
    <div class="col" style="display: flex; align-items: center; margin-top:2%;justify-content: start;">
        <h6 style="color: white; margin-right: 75%;">Home</h6>
        <h6 style="color: grey; margin-right: 20px;margin-top:5px;width:100px">Quick Links</h6>
        <div class="notification-icon" style="margin-right: 10px;">
            <i style="color: white;" class="fas fa-bell"></i>
        </div>
        <div class="notification-icon">
        <i style="color: white;" class="fas fa-sign-out-alt"></i>
        </div>
        </div>
        <div style="margin-top:3%;margin-left:1%">
        {{$slot}}
    </div>
    </div>
</div>
@livewireScripts
</body>
</html>
