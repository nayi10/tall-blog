<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostItem extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.post-item');
    }
}
