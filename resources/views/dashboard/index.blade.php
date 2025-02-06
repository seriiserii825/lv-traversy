<x-layout>
    <section class="flex flex-col w-full lg:flex-row gap-4">
        <div class="px-6 py-4 bg-white basis-1/3">
            <div class="p-2 mb-3 font-bold ">
                <h2 class="text-xl">My Profile</h2>
            </div>
            @if ($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar"
                    class="object-cover w-48 h-48 mb-4 rounded-full">
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
                    class="flex items-center px-4 py-4 font-bold text-center bg-gray-200 border-gray-100 gap-3 rounded-2 shadow-sm">
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
                <div class="p-3 mb-6 border border-gray-200 border-solid">
                    @if (count($job->applicants) > 0)
                        <h3 class="text-lg font-semibold">Applicants</h3>
                        <table class="my-4 border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-white bg-gray-400 border border-gray-300 border-solid">
                                        Name</th>
                                    <th class="px-4 py-2 text-white bg-gray-400 border border-gray-300 border-solid">
                                        Phone</th>
                                    <th class="px-4 py-2 text-white bg-gray-400 border border-gray-300 border-solid">
                                        Email</th>
                                    <th class="px-4 py-2 text-white bg-gray-400 border border-gray-300 border-solid">
                                        Message</th>
                                    <th class="px-4 py-2 text-white bg-gray-400 border border-gray-300 border-solid">
                                        File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($job->applicants as $applicant)
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-300 border-solid">
                                            {{ $applicant->full_name }}</td>
                                        <td class="px-4 py-2 border border-gray-300 border-solid">
                                            {{ $applicant->contact_phone }}</td>
                                        <td class="px-4 py-2 border border-gray-300 border-solid">
                                            {{ $applicant->contact_email }}</td>
                                        <td class="px-4 py-2 border border-gray-300 border-solid">
                                            {{ $applicant->message }}
                                        </td>
                                        <td
                                            class="px-4 py-2 text-blue-600 underline border border-gray-300 border-solid">
                                            <a href="{{ asset('storage/' . $applicant->resume_path) }}"
                                                target="_blank">
                                                <i class="mr-2 fas fa-download"></i>
                                                <span>Download</span>
                                            </a>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            @empty
                <p>No jobs found</p>
            @endforelse
        </div>
    </section>
</x-layout>
