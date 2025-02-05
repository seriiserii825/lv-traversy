 <x-layout>
     <x-slot name="title">Bookmarks</x-slot>
     <h2 class="p-4 mb-6 text-3xl font-bold text-center border border-gray-300">User Bookmarks</h2>

     <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
         @forelse ($user_bookmarks as $job)
             <x-job-card :job="$job" />
         @empty
             <p class="font-bold text-red-600">No jobs available</p>
         @endforelse
     </div>
 </x-layout>
