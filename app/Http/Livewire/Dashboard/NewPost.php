<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;

class NewPost extends Component
{
    public $post;

    protected $rules = [
        'post.title' => 'required|string',
        'post.category' => 'required',
        'post.body' => 'required|string|min:500',
        'post.excerpt' => 'required|min:100:max:250',
        'post.is_published' => 'boolean',
    ];

    protected $messages = [
        'required' => 'This field is required',
        'min' => 'Value must be more than :min chars',
        'max' => 'Maximum value is 250 chars'
    ];

    public function render()
    {
        return view('livewire.dashboard.new-post');
    }

    public function save()
    {
        $this->validate();

        $slug = Str::slug($this->post['title']);
        $post = Post::create([
            'title' => $this->post['title'],
            'excerpt' => $this->post['excerpt'],
            'category' => $this->post['category'],
            'body' => $this->post['body'],
            'published_date' => now(),
            'user_id' => Auth()->user()->id,
            'slug' => $slug,
            'is_published' => $this->post['is_published']
        ]);

        $id = $post->save();
        return redirect()->to(route('upload-featured-image', ['id' => $id]));
    }
}
