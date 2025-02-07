<x-layout>
    @section('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css"
            integrity="sha512-h9FcoyWjHcOcmEVkxOfTLnmZFWIH0iZhZT1H2TbOq55xssQGEJHEaIm+PgoUaZbRvQTNTluNOEfb1ZRy6D3BOw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endsection
    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"
            integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endsection
    <main class="container p-4 mx-auto mt-4">
        <div class="flex items-start justify-between gap-4">
            <section class="flex-1">
                <div class="p-3 bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between">
                        <a class="block p-4 text-blue-700" href="{{ route('jobs.index') }}">
                            <i class="fa fa-arrow-alt-circle-left"></i>
                            Back To Listings
                        </a>
                        @can('update', $job)
                            <div class="flex ml-4 space-x-3">
                                <a href="{{ route('jobs.edit', $job) }}"
                                    class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                                <!-- Delete Form -->
                                <form method="POST" action="{{ route('jobs.destroy', $job->id) }}"
                                    onclick="confirm('Are you sure? ')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                                <!-- End Delete Form -->
                            </div>
                        @endcan
                    </div>
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{ $job->title }}</h2>
                        <p class="mt-2 text-lg text-gray-700">{{ $job->description }}</p>
                        <pre>{{ $job_type }}</pre>
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
                            <li id="site-location" data-state="{{ $job->state }}" data-city="{{ $job->city }}" data-address="{{ $job->address }}"
                                class="mb-2">
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
                </div>

                @auth
                    @can('update', $job)
                        <div class="flex justify-center">
                            <span class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">You can't apply to your
                                own job</span>
                        </div>
                    @else
                        <x-applay-now :job="$job" />
                    @endcan
                @else
                    <div class="flex justify-center">
                        <a href="{{ route('login') }}"
                            class="px-4 py-2 text-white bg-red-500 rounded hover:bg-blue-600">Login to Apply</a>
                    </div>
                @endauth

                <div class="p-6 mt-6 bg-white rounded-lg shadow-md">
                    <div id="map" class="h-[600px]"></div>
                </div>
            </section>

            <!-- Sidebar -->
            <aside class="p-3 bg-white rounded-lg shadow-md basis-96">
                <h3 class="mb-4 text-xl font-bold text-center">
                    Company Info
                </h3>
                <img src="/storage/{{ $job->company_logo }}" alt="Ad" class="w-full m-auto mb-4 rounded-lg" />
                <h4 class="text-lg font-bold">{{ $job->company_name }}</h4>
                <p class="my-3 text-lg text-gray-700">@shortText($job->description, 100)</p>
                <a href="{{ $job->company_website }}" target="_blank" class="text-blue-500">Visit Website</a>

                @auth
                    @if (auth()->user()->bookmarkedJobs()->where('job_id', $job->id)->exists())
                        <form method="POST" action="{{ route('bookmarks.destroy', $job) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="flex items-center justify-center w-full px-4 py-2 mt-10 font-bold text-white bg-red-500 rounded-full hover:bg-blue-600">
                                <i class="mr-3 fas fa-bookmark"></i>
                                <span>Remove Bookmark</span>
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('bookmarks.store', $job) }}">
                            @csrf
                            <button type="submit"
                                class="flex items-center justify-center w-full px-4 py-2 mt-10 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-600">
                                <i class="mr-3 fas fa-bookmark"></i>
                                <span>Add Bookmark</span>
                            </button>
                        </form>
                    @endif
                @else
                    <div
                        class="flex items-center justify-center w-full px-4 py-2 mt-10 font-bold text-white bg-gray-500 rounded-full hover:bg-blue-600">
                        <i class="mr-3 fas fa-bookmark"></i>
                        <span>Login to add bookmark</span>
                    </div>
                @endauth
            </aside>
        </div>
    </main>
</x-layout>


<script>
    document.addEventListener('DOMContentLoaded', async () => {
        async function getLatLon(address) {
            const url =
                `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`;

            try {
                const response = await fetch(url, {
                    headers: {
                        'User-Agent': 'YourAppName'
                    }
                });
                const data = await response.json();

                if (data.length > 0) {
                    return {
                        lat: data[0].lat,
                        lon: data[0].lon
                    };
                } else {
                    console.error('Address not found');
                    return null;
                }
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }

        const site_location = document.getElementById('site-location');
        const state = site_location.dataset.state;
        const city = site_location.dataset.city;
        let address = site_location.dataset.address;
        const full_address = `${state} ${city} ${address}`;
        const lat_long = await getLatLon(address);
        const coords = [lat_long.lat, lat_long.lon];
        setTimeout(() => {
            let map = L.map("map").setView(coords, 16);

            L.marker(coords)
                .bindTooltip(address, {
                    direction: "right",
                    offset: [-10, -30],
                    permanent: false,
                })
                .addTo(map);
            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 24,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(map);
        }, 1000);

    })
</script>
