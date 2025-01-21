<x-layout>
    <x-slot name="title">Worktopia Jobs</x-slot>
    <h2 class="mb-5 text-xl font-bold">All jobs</h2>
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p class="font-bold text-red-600">No jobs available</p>
        @endforelse
    </div>
</x-layout>
