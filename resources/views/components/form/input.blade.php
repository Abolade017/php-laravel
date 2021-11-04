@props(['name'])
    <x-form.field>
        <x-form.label name='{{ $name }}' />
        <input name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" required
            class="border border-gray-200 rounded p-2 w-full" {{ $attributes }}>
        <x-form.error name={{ $name }} />
    </x-form.field>
