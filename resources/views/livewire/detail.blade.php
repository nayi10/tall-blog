<div class="mx-auto md:w-4/5 lg:w-3/5">
    <h2 class="mt-2 text-xl font-bold lg:text-2xl">
        {{ $post->title }}
    </h2>
    <div class="flex flex-row my-3">
        <div class="mr-2 text-gray-700">
            {{ $post->user->name }}
        </div>
        <div class="w-2 h-2 my-auto mr-1 text-xl bg-gray-300 rounded-full"></div>
        <div class="my-auto mr-2 text-sm text-gray-500" title="Category">
            {{ ucwords($post->category) }}
        </div>
        <div class="w-2 h-2 my-auto mr-1 text-xl bg-gray-300 rounded-full"></div>
        <div class="col-span-3 my-auto text-sm text-gray-500">
            {{ $post->published_date }}
        </div>
    </div>
    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}"
    class="w-full my-4 rounded-sm max-h-96">
    <div>
        {!! $post->body !!}
    </div>
</div>
