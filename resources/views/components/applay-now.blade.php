@props(['job' => null])
@if ($job)
<div x-data="{open: false}">
    <x-button @click="open = true" text="Apply now" type="button" width="full" bg="indigo"/>
</div>
    <a href="mailto:{{ $job->contact_email }}" target="_blank"
        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium cursor-pointer text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
        Apply Now
    </a>
@endif

