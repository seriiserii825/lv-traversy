<x-layout>
    <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data" class="w-full max-w-sm mx-auto mb-5">
        @csrf
        <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
            <input type="file" name="file" class="appearance" id="file" required>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
        </div>
    </form>
    <div class="flex gap-3">
        @forelse($files as $file)
            <div>
                <img src="/uploads/{{ $file->file_path }}" alt="" />
            </div>
        @empty
            <p>No files uploaded</p>
        @endforelse
    </div>
</x-layout>
