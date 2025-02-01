<x-layout>
    <div class="min-h-screen flex items-center justify-center  bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg  w-full max-w-xl mx-auto ">
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <x-input-component label="Full Name" name="name" type="text" required />
                <x-input-component label="Email" name="email" type="email" required />
                <x-input-component label="Password" name="password" type="password" required />
                <x-input-component label="Confirm Password" name="password_confirmation" type="password" required />
                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                </div>
                <div class="text-center">
                    <a href="{{ route('login.view') }}" class="text-blue-500 hover:underline">Already have an account?
                        Login</a>
                </div>
            </form>
        </div>
    </div>

</x-layout>
