@props(['name', 'label' => ''])
<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="company_logo">{{ $label }}</label>
    @endif
    <input id="{{ $name }}" type="file" name="{{ $name }}"
        class="w-full px-4 py-2 border rounded focus:outline-none" />
    @error($name)
        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
    @enderror
</div>

