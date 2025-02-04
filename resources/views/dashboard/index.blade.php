<x-layout>
    <section class="flex flex-col md:flex-row gap-4">
        <div class="px-6 py-4 bg-white flex-[600px]">
            <div class="p-2 mb-3 font-bold ">
                <h2 class="text-xl">My Profile</h2>
            </div>
            <form action="{{ route('profile.update', $user) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-input-component name="name" label="Name" :value="$user->name" />
                <x-input-component name="email" label="Email" type="email" :value="$user->email" />
                <button class="p-2 text-white bg-green-500 hover:bg-green-600">Submit</button>
            </form>
        </div>
        <div class="w-full px-4 pt-4 bg-white flex-3">
            <div class="p-2 mb-3 font-bold ">
                <h2 class="text-xl">My Jobs</h2>
            </div>
            @forelse($jobs as $job)
                <div
                    class="flex items-center px-4 py-2 mb-1 font-bold text-center bg-white border-gray-100 rounded-2 shadow-sm">
                    <a href="{{ route('jobs.show', $job) }}" class="mr-auto text-gray-700">
                        <p>{{ $job->title }}</p>
                        <p class="italic text-left text-gray-400">{{ $job->job_type }}</p>
                    </a>
                    <span
                        class="p-2 ml-auto mr-6 text-xs text-gray-400 bg-slate-100 rounded-3">{{ $job->updated_at }}</span>
                    <a href="{{ route('jobs.edit', $job) }}?from_dashboard=true"
                        class="px-4 py-1 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                    <form method="POST" action="{{ route('jobs.destroy', $job->id) }}?from_dashboard=true"
                        onclick="confirm('Are you sure? ')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-1 ml-3 text-white bg-red-500 rounded hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            @empty
                <p>No jobs found</p>
            @endforelse
        </div>
    </section>
</x-layout>
