<div class="p-4 mx-auto mt-3 h-4/5 md:p-8 md:w-3/5">
    <h2 class="my-2 text-lg font-semibold text-gray-700">Upload featured image</h2>
    <form wire:submit.prevent="upload" enctype="multipart/form-data">
        <div class="bg-white rounded shadow">
            <div class="p-8">
                @if (session()->has('message'))
                <div class="flex flex-row justify-between p-2 mb-4 text-green-900 bg-green-600 bg-opacity-25 rounded-md">
                    <span>{{ session('message') }}</span>
                    <a href="{{ route('new-post') }}">Add another post</a>
                </div>
                @endif
                <x-jet-label for="photo" class="flex items-center justify-center text-3xl border-2 border-dashed rounded-sm w-3/3 h-60 bg-gray-50">
                {{ __('Choose image') }}
                <x-jet-input type="file" id="photo" accept="jpg,png,gif"
                wire:model="photo" class="w-0 h-0"/>
                </x-jet-label>
                <x-jet-input-error for="photo" />
                </div>
            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                <x-jet-button class="inline-flex justify-center">
                    {{ __("Upload") }}
                </x-jet-button>
            </div>
        </div>
    </form>
</div>
