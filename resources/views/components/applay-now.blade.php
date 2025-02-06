@props(['job' => null])
@if ($job)
    <div x-data="{ open: false }">
        <div @click="open = true" class="flex justify-center">
            <x-button text="Apply now" type="button" bg="indigo" />
        </div>
        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <div @click.away="open = false" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
                <h2 class="text-lg font-semibold mb-4">Job applicant</h2>
                <form enctype="multipart/form-data">
                    @csrf
                    <x-input-component label="Full Name" name="name" :required="true" id="name" />
                    <x-input-component label="Phone" name="contact_phone" id="contact_phone" />
                    <x-input-component :required="true" label="Email" name="contact_email" id="contact_email" type="email" />
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
