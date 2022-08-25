<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikePost extends Component
{
    public $post;

    public function like()
    {
        return "desde la función de Like";
    }

    public function render()
    {
        return view('livewire.like-post');
    }
}