<nav x-data="{ isOpen: false }" @keydown.escape="isOpen = false"
    class="z-10 flex flex-wrap justify-between w-full p-4 shadow-md">

    <div class="mr-6 text-xl font-bold">
        <a href="{{ route('home') }}"
        class="grid grid-cols-3 gap-1 transition duration-500 hover:text-purple-500">
            <x-jet-application-logo class="w-8 h-8 border border-blue-300 rounded-full" />
            <div class="col-span-2">Tall Blog</div>
        </a>
    </div>
    <button x-on:click="isOpen = !isOpen" type="button" class="px-2 lg:hidden"
        :class="{ 'transition transform-180': isOpen }">
        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path x-show="isOpen"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
            <path x-show="!isOpen"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
        </svg>
    </button>
    <div class="flex-grow w-full transition-all duration-500 ease-in lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false" x-show.transition="true">
        <ul class="items-center justify-end flex-1 pt-4 space-y-4 lg:pt-0 list-reset lg:flex lg:space-y-0">
            <li class="py-2 md:py-0">
                <a href="{{ route('home') }}" class="mx-4 text-lg hover:text-indigo-500">Home</a>
            </li>
            <li class="py-2 md:py-0">
                <a href="{{ route('login') }}" class="mx-4 text-lg hover:text-indigo-500">
                    Login
                </a>
            </li>
        </ul>
    </div>
    </div>
</nav>
