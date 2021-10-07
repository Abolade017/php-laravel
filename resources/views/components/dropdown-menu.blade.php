@props(['trigger'])
<div x-data="{show: false}" @click.away="show= false">
    {{-- trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>
    {{-- dropdown links --}}
    <div x-show=" show" class="py-2 absolute w-full rounded-xl mt-2 bg-gray-100 z-50 overflow-auto max-h-52" style="display: none">
        {{ $slot }}
    </div>
</div>
