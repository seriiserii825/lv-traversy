@props(['type' => 'success', 'message' => ''])

@if (session()->has($type))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 4000)"
        class="p-4 mb-4 text-white rouded-2 {{ $type === 'success' ? 'bg-green-500' : 'bg-red-500' }}">
        {{ $message }}
    </div>
@endif
