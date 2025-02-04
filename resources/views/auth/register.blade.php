<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-1/3 p-4 m-auto bg-white rounded-sm">
            <h2 class="p-8 mx-auto text-lg font-bold text-center">Register</h2>
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <x-input-component label="Full Name" name="name" type="text" required />
                <x-input-component label="Email" name="email" type="email" required />
                <x-input-component label="Password" name="password" type="password" required />
                <x-input-component label="Confirm Password" name="password_confirmation" type="password" required />
                <div class="mb-6">
                    <button type="submit"
                        class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                </div>
                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Already have an account?
                        Login</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
