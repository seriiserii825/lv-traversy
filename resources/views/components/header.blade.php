<header class="p-4 text-white bg-blue-900">
    <div class="container flex items-center justify-between mx-auto">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <nav class="items-center hidden md:flex space-x-4">
            <x-navlink url="/" :active="request()->is('/')">Home</x-navlink>
            <x-navlink url="/jobs" :active="request()->is('jobs')">All Jobs</x-navlink>
            <x-navlink url="/jobs/saved" :active="request()->is('jobs/saved')">Saved Jobs</x-navlink>
            <x-navlink url="/login" :active="request()->is('login')">Login</x-navlink>
            <x-navlink url="/register" :active="request()->is('register')">Register</x-navlink>
            <x-navlink url="/dashboard" :active="request()->is('dashboard')" icon="fa-gauge">
                Dashboard
            </x-navlink>
            <a href="create-job.html"
                class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
                <i class="fa fa-edit"></i> Create Job
            </a>
        </nav>
        <button id="hamburger" class="flex items-center text-white md:hidden">
            <i class="text-2xl fa fa-bars"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden pb-4 mt-5 text-white bg-blue-900 md:hidden space-y-2">
        <a href="{{ url('/jobs') }}"
            class="block px-4 py-2 hover:bg-blue-700 {{ request()->is('jobs') ? 'text-yellow-500' : '' }}">All Jobs</a>
        <a href="{{ url('/jobs/saved') }}"
            class="block px-4 py-2 hover:bg-blue-700 {{ request()->is('jobs/saved') ? 'text-yellow-500' : '' }}">Saved
            Jobs</a>
        <a href="{{ url('/login') }}"
            class="block px-4 py-2 hover:bg-blue-700 {{ request()->is('login') ? 'text-yellow-500' : '' }}">Login</a>
        <a href="{{ url('/register') }}"
            class="block px-4 py-2 hover:bg-blue-700 {{ request()->is('register') ? 'text-yellow-500' : '' }}">Register</a>
        <a href="{{ url('/dashboard') }}"
            class="block text-white hover:underline py-2 {{ request()->is('dashboard') ? 'text-yellow-500' : '' }}">
            <i class="mr-1 fa fa-gauge"></i> Dashboard
        </a>
        <a href="{{ url('jobs/create') }}"
            class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black {{ request()->is('jobs/create') ? 'text-yellow-500' : '' }}">
            <i class="fa fa-edit"></i> Create Job
        </a>
    </nav>
</header>
