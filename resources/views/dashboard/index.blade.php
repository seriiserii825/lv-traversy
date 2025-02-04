<x-layout>
    <section class="flex flex-col w-full lg:flex-row gap-4">
        <div class="px-6 py-4 bg-white basis-1/3">
            <div class="p-2 mb-3 font-bold ">
                <h2 class="text-xl">My Profile</h2>
            </div>
            @if ($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar" class="object-cover w-48 h-48 mb-4 rounded-full">
            @endif
            <form action="{{ route('profile.update', $user) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-input-component name="name" label="Name" :value="$user->name" />
                <x-input-component name="email" label="Email" type="email" :value="$user->email" />
                <x-file-component name="avatar" label="Avatar" :value="$user->avatar" :show_image="false" />
                    <x-button text="Update" bg="green" type="submit" />
            </form>
        </div>
        <div class="px-4 pt-4 bg-white basis-2/3">
            <div class="p-2 mb-3 font-bold ">
                <h2 class="text-xl">My Jobs</h2>
            </div>
            @forelse($jobs as $job)
                <div
                    class="flex items-center px-4 py-2 mb-1 font-bold text-center bg-white border-gray-100 gap-3 rounded-2 shadow-sm">
                    <a href="{{ route('jobs.show', $job) }}" class="mr-auto text-gray-700">
                        <p>{{ $job->title }}</p>
                        <p class="italic text-left text-gray-400">{{ $job->job_type }}</p>
                    </a>
                    <span
                        class="p-2 ml-auto mr-6 text-xs text-gray-400 bg-slate-100 rounded-3">{{ $job->updated_at }}</span>
                    <x-button url="{{ route('jobs.edit', $job) }}?from_dashboard=true" text="Edit" bg="blue" />
                    <form method="POST" action="{{ route('jobs.destroy', $job->id) }}?from_dashboard=true"
                        onclick="confirm('Are you sure? ')">
                        @csrf
                        @method('DELETE')
                        <x-button text="Delete" bg="red" type="submit" />
                    </form>
                </div>
            @empty
                <p>No jobs found</p>
            @endforelse
        </div>
    </section>
</x-layout>
