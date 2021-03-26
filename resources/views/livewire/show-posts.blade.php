<div class="gap-4 m-2 md:grid md:grid-cols-2 lg:grid-cols-4">
    @foreach ($posts as $post)
        @livewire('post-item', ['post' => $post], key($post->id))
    @endforeach
</div>
