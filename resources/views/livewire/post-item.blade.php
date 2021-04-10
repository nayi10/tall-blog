<article class="flex flex-col mb-2 rounded-md shadow-md md:mb-0">
    <a href="{{ route('post-detail', ['slug' => $post->slug]) }}">
        <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-56 rounded-t-md">
    </a>
    <div class="p-3">
        <h3 class="text-lg font-semibold text-gray-900">
            <a href="{{ route('post-detail', ['slug' => $post->slug]) }}">
                {{ $post->title }}
            </a>
        </h3>
        <p class="text-gray-800">
            <a href="{{ route('post-detail', ['slug' => $post->slug]) }}">
                {{ $post->excerpt }}
            </a>
        </p>
        <div class="flex flex-row justify-between mt-2">
            <a href="{{ route('category', ['category' => $post->category]) }}" class="px-2 text-sm text-indigo-900 bg-indigo-100 rounded">
                {{ $post->category }}
            </a>
            <small>
                {{ $post->published_date }}
            </small>
        </div>
    </div>
</article>
