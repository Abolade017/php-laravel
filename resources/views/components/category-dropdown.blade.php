<x-dropdown-menu>
    <x-slot name="trigger">
        <button
            class="flex lg:inline-flex appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold  w-full lg:w-32 text-left">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'categories' }}
            {{-- <x-down-arrow class=" absolute pointer-events-none " style="right: 12px;"  /> --}}
            <x-icon name="down-arrow" class=" absolute pointer-events-none " style="right: 12px;" />
        </button>
    </x-slot>
    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>
    @foreach ($categories as $category)
        {{-- ->id ? 'bg-blue-700 text-white' : '' }} --}}
        <x-dropdown-item href="/?categories={{ $category->slug }} " {{-- :active="isset($currentCategory) && $currentCategory->is($category)" or --}}
            :active='request()->is("categories/.{$category->slug}")'>
            {{ ucwords($category->name) }} </x-dropdown-item>
    @endforeach
</x-dropdown-menu>