<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Detail extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::firstWhere('slug', $slug);
    }
    public function render()
    {
        return view('livewire.detail')
            ->layout("layouts/guest");
    }
}
