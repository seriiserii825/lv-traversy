@props([
    /** @var \App\Models\Job $job */
    'job',
])
<div>
    <div class="p-4 bg-white rounded-lg shadow-md">
        <div class="flex items-center space-between gap-4">
            @if ($job->company_logo)
                <img src="/storage/{{ $job->company_logo }}" alt="{{ $job->company_name }}" class="w-14" />
            @else
                <img src="/images/no-image.jpg" alt="{{ $job->company_name }}" class="w-14" />
            @endif
            <div>
                <h2 class="text-xl font-semibold">{{ $job->title }}</h2>
                <p class="text-sm text-gray-500">{{ $job->job_type }}</p>
            </div>
        </div>
        <p class="mt-2 text-lg text-gray-700">@shortText($job->description, 100)</p>
        <ul class="p-4 my-4 bg-gray-100 rounded">
            <li class="mb-2"><strong>Salary:</strong> ${{ number_format($job->salary) }}</li>
            <li class="mb-2">
                <strong>Location:</strong> {{ $job->state }}, {{ $job->city }}
                @if ($job->remote)
                    <span class="px-2 py-1 ml-2 text-xs text-white bg-green-500 rounded-full">On-site</span>
                @else
                    <span class="px-2 py-1 ml-2 text-xs text-white bg-red-500 rounded-full">Remote</span>
                @endif
            </li>
            <li class="mb-2">
                <strong>Tags:</strong>
                @formatTags($job->tags)
            </li>
        </ul>
        <a href="{{ route('jobs.show', $job) }}"
            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
            Details
        </a>
    </div>
</div>
