@props(['url', 'text' => '', 'bg' => 'blue', 'type' => 'link'])
@php
    $color = 'bg-blue-500 hover:bg-blue-600';
    if ($bg === 'red') {
        $color = 'bg-red-500 hover:bg-red-600';
    } elseif ($bg === 'green') {
        $color = 'bg-green-500 hover:bg-green-600';
    } elseif ($bg === 'yellow') {
        $color = 'bg-yellow-500 hover:bg-yellow-600';
    }
@endphp
@if ($type === 'button')
    <button class="px-4 py-1 text-white rounded {{ $color }}">{{ $text }}</button>
@elseif ($type === 'submit')
    <button type="submit" class="px-4 py-1 text-white rounded {{ $color }}">{{ $text }}</button>
@else
    <a href="{{ $url }}" class="px-4 py-1 text-white rounded {{ $color }}">{{ $text }}</a>
@endif

