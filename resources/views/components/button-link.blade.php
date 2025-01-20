@props(['url', 'icon' => null, 'text_class' => 'text-black', 'bg_class' => 'bg-yellow-500', 'hover_class' => 'hover:bg-yellow-600'])
<a href="{{ $url }}"
    class="px-4 py-2 {{ $text_class }} {{ $bg_class }} rounded {{ $hover_class }} hover:shadow-md transition duration-300">
    <i class="fa {{ $icon }}"></i> Create Job
</a>

