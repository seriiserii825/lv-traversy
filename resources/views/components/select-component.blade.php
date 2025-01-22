@props(['name', 'options', 'label' => '', 'value' => ''])
<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif
    <select id="{{ $name }}" name="{{ $name }}"
        class="@error($name) border-red-500 @enderror w-full px-4 py-2 border rounded focus:outline-none">
        @foreach ($options as $option_value => $option_label)
            <option value="{{ $option_value }}" {{ old($name, $value) === $option_value ? 'selected' : '' }}>
                {{ $option_label }}
            </option>
        @endforeach
    </select>
    @error($name)
        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
    @enderror
</div>

