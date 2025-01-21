<x-layout>
    <x-slot name="title">Worktopia Jobs</x-slot>
    <h2>Jobs list</h2>
    <ul>
        @forelse ($jobs as $job)
            <li>
                <span>{{ $job->title }}</span>
            </li>
        @empty
            <li class="font-bold text-red-600">No jobs available</li>
        @endforelse
    </ul>
</x-layout>
