<x-layout>
    <x-slot name="title">Worktopia Jobs</x-slot>
    <div class="flex justify-center p-4 mb-6 bg-blue-900">
        <x-search/>
    </div>
    <div class="mb-6 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p class="font-bold text-red-600">No jobs available</p>
        @endforelse
    </div>
    {{ $jobs->links() }}
</x-layout>
