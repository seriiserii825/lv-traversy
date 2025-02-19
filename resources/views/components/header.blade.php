<header class="p-4 text-white bg-blue-900" x-data="{ open: false }">
    <div class="container flex items-center justify-between mx-auto">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
            @auth
                <span class="text-sm italic font-bold text-white underline">{{ auth()->user()->email }}</span>
            @endauth
        </h1>
        <nav class="items-center hidden md:flex space-x-4">
            <x-navlink url="/" :active="request()->is('/')">Home</x-navlink>
            <x-navlink url="/jobs" :active="request()->is('jobs')">All Jobs</x-navlink>
            <x-navlink url="/bookmarks" :active="request()->is('bookmarks')">Saved Jobs</x-navlink>
            @auth
                <x-navlink url="/dashboard" :active="request()->is('dashboard')" icon="fa-gauge">
                    Dashboard
                </x-navlink>
                <x-logout-btn />
                <a href="{{ route('dashboard') }}" target="_blank">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="avatar"
                            class="w-8 h-8 rounded-full" />
                    @else
                        <img src="{{ asset('storage/avatars/default-avatar.webp') }}" alt="avatar"
                            class="w-8 h-8 rounded-full" />
                    @endif
                </a>
                <x-button-link url="/jobs/create" icon="fa-edit" hover_class="hover:bg-green-500">Create Job</x-button-link>
            @else
                <x-navlink url="/login" :active="request()->is('login')">Login</x-navlink>
                <x-navlink url="/register" :active="request()->is('register')">Register</x-navlink>
            @endauth
        </nav>
        <button @click="open = !open" id="hamburger" class="flex items-center text-white md:hidden">
            <i class="text-2xl fa fa-bars"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" x-show="open === true" @click.away="open = false"
        class="pb-4 mt-5 text-white bg-blue-900 md:hidden space-y-2">
        <x-navlink url="/" :active="request()->is('/')" :mobile="true">Home</x-navlink>
        <x-navlink url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-navlink>
        <x-navlink url="/bookmarks" :active="request()->is('bookmarks')" :mobile="true">Saved Jobs</x-navlink>
        @auth
            <x-navlink url="/dashboard" :active="request()->is('dashboard')" icon="fa-gauge" :mobile="true">
                Dashboard
            </x-navlink>
            <x-logout-btn />
            <x-button-link url="/jobs/create" icon="fa-edit" hover_class="hover:bg-green-500" :mobile="true">
                Create Job
            </x-button-link>
        @else
            <x-navlink url="/login" :active="request()->is('login')" :mobile="true">Login</x-navlink>
            <x-navlink url="/register" :active="request()->is('register')" :mobile="true">Register</x-navlink>
            <br>
            <x-button-link url="/jobs/create" icon="fa-edit" hover_class="hover:bg-green-500" :mobile="true">
                Create Job
            </x-button-link>
        @endauth
    </nav>
</header>
