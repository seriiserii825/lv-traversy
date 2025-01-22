<x-layout>
    <main class="container p-4 mx-auto mt-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <section class="md:col-span-3">
                <div class="p-3 bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between">
                        <a class="block p-4 text-blue-700" href="{{ route('jobs.index') }}">
                            <i class="fa fa-arrow-alt-circle-left"></i>
                            Back To Listings
                        </a>
                        <div class="flex ml-4 space-x-3">
                            <a href="/edit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                            <!-- Delete Form -->
                            <form method="POST">
                                <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                            <!-- End Delete Form -->
                        </div>
                    </div>
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{ $job->title }}</h2>
                        <p class="mt-2 text-lg text-gray-700">{{ $job->description }}</p>
                        <ul class="p-4 my-4 bg-gray-100">
                            <li class="mb-2">
                                <strong>Job Type:</strong> {{ $job->job_type }}
                            </li>
                            <li class="mb-2">
                                <strong>Remote:</strong> {{ $job->remote ? 'Yes' : 'No' }}
                            </li>
                            <li class="mb-2">
                                <strong>Salary:</strong> ${{ number_format($job->salary) }}
                            </li>
                            <li class="mb-2">
                                <strong>Site Location:</strong> {{ $job->state }}, {{ $job->city }}
                            </li>
                            <li class="mb-2">
                                <strong>Tags:</strong>
                                @formatTags($job->tags)
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container p-4 mx-auto">
                    <h2 class="mb-4 text-xl font-semibold">Job Details</h2>
                    <div class="p-4 bg-white rounded-lg shadow-md">
                        <h3 class="mb-2 text-lg font-semibold text-blue-500">
                            Job Requirements
                        </h3>
                        <p>{{ $job->requirements }}</p>
                        <h3 class="mt-4 mb-2 text-lg font-semibold text-blue-500">
                            Benefits
                        </h3>
                        <p>{{ $job->benefits }}</p>
                    </div>
                    <p class="my-5">
                        Put "Job Application" as the subject of your email
                        and attach your resume.
                    </p>
                    <a href="mailto:{{ $job->contact_email }}" target="_blank"
                        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium cursor-pointer text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                        Apply Now
                    </a>
                </div>

                <div class="p-6 mt-6 bg-white rounded-lg shadow-md">
                    <div id="map"></div>
                </div>
            </section>

            <!-- Sidebar -->
            <aside class="p-3 bg-white rounded-lg shadow-md">
                <h3 class="mb-4 text-xl font-bold text-center">
                    Company Info
                </h3>
                <img src="/images/logos/{{ $job->company_logo }}" alt="Ad"
                    class="w-full m-auto mb-4 rounded-lg" />
                <h4 class="text-lg font-bold">{{ $job->company_name }}</h4>
                <p class="my-3 text-lg text-gray-700">@shortText($job->description, 100)</p>
                <a href="{{ $job->company_website }}" target="_blank" class="text-blue-500">Visit Website</a>

                <a href=""
                    class="flex items-center justify-center w-full px-4 py-2 mt-10 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-600"><i
                        class="mr-3 fas fa-bookmark"></i> Bookmark
                    Listing</a>
            </aside>
        </div>
    </main>
</x-layout>
