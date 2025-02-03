<x-layout>
    <x-slot name="title">Worktopia Edit</x-slot>
    <div class="w-full p-8 mx-auto bg-white rounded-lg shadow-md md:max-w-3xl">
        <h2 class="mb-4 text-4xl font-bold text-center">
            Edit Job Listing
        </h2>
        <form method="POST"
            action="{{ route('jobs.update', $job->id) }}@if ($from_dashboard) ?from_dashboard=true @endif"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-500">
                Job Info
            </h2>
            <x-input-component name="title" label="Job Title" :value="old('title', $job->title)" placeholder="Software Engineer" />
            <x-textarea-component name="description" :value="old('description', $job->description)" label="Job Description"
                placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />
            <x-input-component name="salary" :value="old('salary', $job->salary)" type="number" label="Annual Salary"
                placeholder="90000" />
            <x-textarea-component name="benefits" :value="old('benefits', $job->benefits)" label="Benefits"
                placeholder="Health insurance, 401k, paid time off" />
            <x-input-component name="requirements" :value="old('requirements', $job->requirements)" label="Requirements"
                placeholder="Bachelor's degree in Computer Science" />
            <x-select-component name="job_type" label="Type" value="{{ old('job_type', (int) $job->job_type) }}"
                :options="[
                    'Full-time' => 'Full-time',
                    'Part-time' => 'Part-time',
                    'Contract' => 'Contract',
                    'Internship' => 'Internship',
                ]" />
            <x-select-component name="remote" label="Remote" :value="old('remote', $job->remote)" :options="[0 => 'No', 1 => 'Yes']" />
            <x-input-component name="address" :value="old('address', $job->address)" label="Address" placeholder="123 Main St" />
            <x-input-component name="city" :value="old('city', $job->city)" label="City" placeholder="Albany" />
            <x-input-component name="state" :value="old('state', $job->state)" label="State" placeholder="NY" />
            <x-input-component name="zipcode" :value="old('zipcode', $job->zipcode)" label="ZIP Code" placeholder="12201" />
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-500">
                Company Info
            </h2>
            <x-input-component name="company_name" :value="old('company_name', $job->company_name)" label="Company Name" placeholder="Worktopia" />
            <x-textarea-component name="company_description" :value="old('company_description', $job->company_description)" label="Company Description"
                placeholder="Worktopia is a job board platform that connects job seekers with employers..." />
            <x-input-component name="company_website" :value="old('company_website', $job->company_website)" label="Company Website"
                placeholder="https://worktopia.com" />
            <x-input-component name="contact_phone" :value="old('contact_phone', $job->contact_phone)" label="Contact Phone"
                placeholder="555-555-5555" />
            <x-input-component name="contact_email" :value="old('contact_email', $job->contact_email)" label="Contact Email" type="email"
                placeholder="text@gmail.com" />
            <x-file-component name="company_logo" :value="old('company_logo', $job->company_logo)" label="Company Logo" />
            <button type="submit"
                class="w-full px-4 py-2 my-3 text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>
