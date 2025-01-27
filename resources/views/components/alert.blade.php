@props(['type' => 'success', 'message' => ''])

@if (session()->has($type))
    <div class="p-4 mb-4 text-white rouded-2 {{ $type === 'success' ? 'bg-green-500' : 'bg-red-500' }}">
        {{ $message }}
    </div>
@endif
