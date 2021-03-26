<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CategoryPosts extends Component
{
    public $posts;

    public function mount($category)
    {
        $this->posts = Post::where('category', $category)->where('is_published', true)->get();
    }
    public function render()
    {
        return view('livewire.show-posts')->layout("layouts/guest");
    }
}
