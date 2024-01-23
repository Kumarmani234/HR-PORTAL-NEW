<?php
// Created by : Bandari Divya
// About this component: Landing/Home page for admin dashboard
namespace App\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public $show= false;
    public function open(){
        $this->show= true;
    }
    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
