@props(['url' => '', 'text' => '', 'bg' => 'blue', 'type' => 'link', 'width' => ''])
@php
    $color = 'bg-blue-500 hover:bg-blue-600';
    if ($bg === 'red') {
        $color = 'bg-red-500 hover:bg-red-600';
    } elseif ($bg === 'green') {
        $color = 'bg-green-500 hover:bg-green-600';
    } elseif ($bg === 'yellow') {
        $color = 'bg-yellow-500 hover:bg-yellow-600';
    } elseif ($bg === 'indigo') {
        $color = 'text-indigo-700 bg-indigo-300 hover:bg-indigo-400 text-indigo-700';
    }
    if ($width === 'full') {
        $color .= ' w-full';
    }
@endphp
@if ($type === 'button')
    <button class="px-4 py-1 text-white rounded {{ $color }}">{{ $text }}</button>
@elseif ($type === 'submit')
    <button type="submit" class="px-4 py-1 text-white rounded {{ $color }}">{{ $text }}</button>
@else
    <a href="{{ $url }}" class="px-4 py-1 text-white rounded {{ $color }}">{{ $text }}</a>
@endif

