@props(['name', 'label' => '', 'value' => '', 'show_image' => true, 'required' => ''])
<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="company_logo">{{ $label }}</label>
    @endif
    <input id="{{ $name }}" type="file" name="{{ $name }}" {{ $required ? 'required' : '' }}
        class="w-full px-4 py-2 border rounded focus:outline-none" />
    @error($name)
        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
    @enderror
    @if ($value && $show_image)
        <img src="{{ asset('storage/' . $value) }}" alt="Company Logo" class="w-20 h-20 mt-2" />
    @endif
</div>
