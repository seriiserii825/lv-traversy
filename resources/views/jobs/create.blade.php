<x-layout>
    <x-slot name="title">Worktopia Create</x-slot>
    <div class="max-w-96">
        <h2 class="mb-5 text-xl font-bold">Create job</h2>
        <form action="{{ route('jobs.store') }}" method="post">
            @csrf
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    title</label>
                <input name="title" type="title" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    text</label>
                <textarea
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="description" id="description"></textarea>
            </div>
            <button type="submit"
                class="px-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto -0.5rem py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</x-layout>
