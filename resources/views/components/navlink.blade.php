@props(['url', 'active' => false, 'icon' => null, 'mobile' => null])
@if ($mobile)
    <a href="{{ $url }}" class="block px-4 py-2 hover:bg-blue-700 {{ $active ? 'text-yellow-500' : '' }}">
        @if ($icon)
            <i class="mr-1 fa {{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <a href="{{ $url }}" class="text-white hover:underline py-2 {{ $active ? 'text-yellow-500' : '' }}">
        @if ($icon)
            <i class="mr-1 fa {{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@endif
