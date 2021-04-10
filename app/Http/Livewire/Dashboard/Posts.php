<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::paginate(10);
        return view('livewire.dashboard.posts', ['posts' => $posts]);
    }

    public function delete(int $id)
    {
        $post = Post::find($id);
        unlink(storage_path("app/public/posts/".$post->featured_image));
        $post->delete();
        session()->flash("message", "Post has been deleted");
    }

    public function publish(int $id)
    {
        $post = Post::find($id);
        $status = $post->is_published ? "unpublished": "published";
        $post->is_published = !$post->is_published;
        $post->published_date = now();
        $post->save();
        session()->flash("message", "Post $status successfully");
    }
}
