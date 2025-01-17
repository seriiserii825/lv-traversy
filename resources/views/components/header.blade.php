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
            <x-button-link url="/jobs/create" icon="fa-edit" hover_class="hover:bg-green-500">Create Job</x-button-link>
            <!-- <a href="create-job.html" -->
            <!--     class="px-4 py-2 text-black bg-yellow-500 rounded hover:bg-yellow-600 hover:shadow-md transition duration-300"> -->
            <!--     <i class="fa fa-edit"></i> Create Job -->
            <!-- </a> -->
        </nav>
        <button id="hamburger" class="flex items-center text-white md:hidden">
            <i class="text-2xl fa fa-bars"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden pb-4 mt-5 text-white bg-blue-900 md:hidden space-y-2">
        <x-navlink url="/" :active="request()->is('/')" :mobile="true">Home</x-navlink>
        <x-navlink url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-navlink>
        <x-navlink url="/jobs/saved" :active="request()->is('jobs/saved')" :mobile="true">Saved Jobs</x-navlink>
        <x-navlink url="/login" :active="request()->is('login')" :mobile="true">Login</x-navlink>
        <x-navlink url="/register" :active="request()->is('register')" :mobile="true">Register</x-navlink>
        <x-navlink url="/dashboard" :active="request()->is('dashboard')" icon="fa-gauge" :mobile="true">
            Dashboard
        </x-navlink>
        <br>
        <x-button-link url="/jobs/create" icon="fa-edit" hover_class="hover:bg-green-500" :mobile="true">
            Create Job
        </x-button-link>
    </nav>
</header>
