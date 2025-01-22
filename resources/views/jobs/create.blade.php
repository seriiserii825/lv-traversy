<x-layout>
    <x-slot name="title">Worktopia Create</x-slot>
    <div class="w-full p-8 mx-auto bg-white rounded-lg shadow-md md:max-w-3xl">
        <h2 class="mb-4 text-4xl font-bold text-center">
            Create Job Listing
        </h2>
        <form method="POST" action="/jobs" enctype="multipart/form-data">
            @csrf
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-500">
                Job Info
            </h2>
            <x-input-component name="title" label="Job Title" placeholder="Software Engineer" />
            <x-textarea-component name="description" label="Job Description"
                placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />
            <x-input-component name="salary" type="number" label="Annual Salary" placeholder="90000" />
            <x-input-component name="location" label="Location" placeholder="New York, NY" />
            <x-textarea-component name="benefits" label="Benefits"
                placeholder="Health insurance, 401k, paid time off" />
            <x-input-component name="requirements" label="Requirements"
                placeholder="Bachelor's degree in Computer Science" />
            <div class="mb-4">
                <label class="block text-gray-700" for="job_type">Job Type</label>
                <select id="job_type" name="job_type" class="w-full px-4 py-2 border rounded focus:outline-none">
                    <option value="Full-Time" selected>
                        Full-Time
                    </option>
                    <option value="Part-Time">Part-Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Temporary">Temporary</option>
                    <option value="Internship">Internship</option>
                    <option value="Volunteer">Volunteer</option>
                    <option value="On-Call">On-Call</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="remote">Remote</label>
                <select id="remote" name="remote" class="w-full px-4 py-2 border rounded focus:outline-none">
                    <option value="false">No</option>
                    <option value="true">Yes</option>
                </select>
            </div>
            <x-input-component name="address" label="Address" placeholder="123 Main St" />
            <x-input-component name="city" label="City" placeholder="Albany" />
            <x-input-component name="state" label="State" placeholder="NY" />
            <x-input-component name="zipcode" label="ZIP Code" placeholder="12201" />
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-500">
                Company Info
            </h2>
            <x-input-component name="company_name" label="Company Name" placeholder="Worktopia" />
            <x-textarea-component name="company_description" label="Company Description"
                placeholder="Worktopia is a job board platform that connects job seekers with employers..." />
            <x-input-component name="company_website" label="Company Website" placeholder="https://worktopia.com" />
            <x-input-component name="contact_phone" label="Contact Phone" placeholder="555-555-5555" />
            <x-input-component name="contact_email" label="Contact Email" type="email" placeholder="text@gmail.com" />
            <x-textarea-component name="company_benefits" label="Company Benefits"
                placeholder="Health insurance, 401k, paid time off" />
            <button type="submit"
                class="w-full px-4 py-2 my-3 text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>
