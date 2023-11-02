<?php

namespace App\Livewire;
use App\Models\Review;
use Livewire\Component;

class ReviewRegularizations extends Component
{
    public $reviews = [];
    public function render()
    {
        $reviews= Review::all();
        return view('livewire.review-regularizations',['reviews1'=>$reviews]);
    }
}
