<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::where('is_published', true)->get();
    }
    public function render()
    {
        return view('livewire.show-posts')->layout("layouts/guest");
    }
}
