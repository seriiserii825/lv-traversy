<x-layout>
    <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data" class="w-full max-w-sm mx-auto">
        @csrf
        <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
            <input type="file" name="file" class="appearance" id="file" required>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
        </div>
    </form>
</x-layout>
