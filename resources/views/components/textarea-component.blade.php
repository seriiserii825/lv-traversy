@props(['name', 'label' => '', 'placeholder' => '', 'value' => ''])
<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="description">{{ $label }}</label>
    @endif
    <textarea cols="30" rows="7" id="{{ $name }}" name="{{ $name }}"
        class="@error($name) border-red-500 @enderror w-full px-4 py-2 border rounded focus:outline-none"
        placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
    @enderror
</div>

