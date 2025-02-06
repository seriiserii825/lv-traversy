<form method="GET" action="{{ route('jobs.search') }}" class="block mx-5 space-y-2 md:mx-auto md:space-x-2">
    <input type="text" name="keywords" placeholder="Keywords" value="{{ request('keywords') }}"
        class="w-full px-4 py-3 md:w-72 focus:outline-none" />
    <input type="text" name="location" placeholder="Location" value="{{ request('location') }}"
        class="w-full px-4 py-3 md:w-72 focus:outline-none" />
    <button class="w-full px-4 py-3 text-white bg-blue-700 md:w-auto hover:bg-blue-600 focus:outline-none">
        <i class="mr-1 fa fa-search"></i> Search
    </button>
</form>

