<x-layout>
    <x-slot name="title">Worktopia Index</x-slot>
    <h2 class="text-3xl font-bold text-center p-4 mb-6 border border-gray-300">Welcome to Worktopia</h2>
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p class="font-bold text-red-600">No jobs available</p>
        @endforelse
    </div>
    <a href="{{ route('jobs.index') }}" class="block mt-6 text-xl text-bold text-center">View all jobs
        <icon class="fa fa-arrow-alt-circle-right ml-2"></icon>
    </a>
    <x-banner-bottom/>
</x-layout>
