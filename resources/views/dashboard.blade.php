<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-x-scroll bg-white shadow-xl sm:rounded-lg">
                @livewire('dashboard.posts')
            </div>
        </div>
    </div>
</x-app-layout>
