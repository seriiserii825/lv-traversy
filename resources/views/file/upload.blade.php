<x-layout>
    <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data"
        class="w-full max-w-sm mx-auto mb-5">
        @csrf
        <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
            <input type="file" name="file" class="appearance" id="file">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
        </div>
        @error('file')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </form>
    <div class="flex gap-3">
        @forelse($files as $file)
            <div>
                <img src="{{ asset($file->file_path) }}" alt="" />
                <form action="{{ route('file.destroy', $file->id) }}" method="post" accept-charset="utf-8"
                    onclick="return confirmDelete(event)">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
        @empty
            <p>No files uploaded</p>
        @endforelse
    </div>
</x-layout>
<script>
    function confirmDelete(event) {
        if (!confirm('Are you sure?')) {
            event.preventDefault(); // Prevent form submission if Cancel is clicked
        }
    }
</script>
