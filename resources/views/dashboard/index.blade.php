<x-layout>
    <div class=" mb-3 p-2 font-bold">
        <h2 class="text-xl">My Jobs</h2>
    </div>
    @forelse($jobs as $job)
        <div class="bg-white rounded-2 py-2 text-center font-bold flex items-center px-4 mb-1 shadow-sm border-gray-100">
            <a href="{{ route('jobs.show', $job) }}" class="text-gray-700 mr-auto">
                <p>{{ $job->title }}</p>
                <p class="text-gray-400 text-left italic">{{ $job->job_type }}</p>
            </a>
            <span class=" ml-auto text-xs p-2 bg-slate-100 rounded-3 mr-6 text-gray-400">{{ $job->updated_at }}</span>
            <a href="{{ route('jobs.edit', $job) }}?from_dashboard=true"
                class="px-4 py-1 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
            <form method="POST" action="{{ route('jobs.destroy', $job->id) }}?from_dashboard=true"
                onclick="confirm('Are you sure? ')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-1 text-white bg-red-500 rounded ml-3 hover:bg-red-600">
                    Delete
                </button>
            </form>
        </div>
    @empty
        <p>No jobs found</p>
    @endforelse
</x-layout>
