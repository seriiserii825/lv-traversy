<x-layout>
    <x-slot name="title">Worktopia Jobs</x-slot>
    <h2>Jobs list</h2>
    <ul>
        @forelse ($jobs as $job)
            <li>
                <a href="{{ route('jobs.show', ['job' => $job]) }}">{{ $job->title }}</a>
            </li>
        @empty
            <li class="font-bold text-red-600">No jobs available</li>
        @endforelse
    </ul>
</x-layout>
