@props(['job' => null])
@if ($job)
    <div class="relative z-20" x-data="{ open: false }">
        <div @click="open = true" class="flex justify-center">
            <x-button text="Apply now" type="button" bg="indigo" />
        </div>
        <div x-cloak x-show="open" class="fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-80">
            <div @click.away="open = false" class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
                <h2 class="mb-4 text-lg font-semibold">Job applicant</h2>
                <form method="POST" enctype="multipart/form-data" action="{{ route('applicant.store', $job->id) }}">
                    @csrf
                    <x-input-component label="Full Name" name="full_name" :value="auth()->user()->name" :required="true" id="full_name" />
                    <x-input-component label="Phone" name="contact_phone" id="contact_phone" />
                    <x-input-component :required="true" label="Email" name="contact_email" id="contact_email"
                        type="email" />
                    <x-textarea-component label="Message" name="message" id="message" />
                    <x-input-component label="Location" name="location" id="location" />
                    <x-file-component :required="true" label="Upload you file(pdf)" name="resume" id="resume" />
                    <div class="flex gap-3">
                        <x-button text="Submit" type="submit" bg="indigo" />
                        <div @click.prevent="open = false">
                            <x-button text="Close" type="button" bg="red" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
