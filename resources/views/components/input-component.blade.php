@props(['name', 'type' => 'text', 'label' => false, 'placeholder' => '', 'value' => '', 'required' => ''])
<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="title">{{ $label }}</label>
    @endif
    <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}"
        class="@error($name) border-red-500 @enderror w-full px-4 py-2 border rounded focus:outline-none"
        placeholder="{{ $placeholder }}" @if ($required) required @endif
        value="{{ old($name, $value) }}" />
    @error($name)
        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
    @enderror
</div>
