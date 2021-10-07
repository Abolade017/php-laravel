@props(['active' => false])
@php
$classes = 'block text-left px-3 leading-5 hover:bg-blue-700 focus:bg-gray-300 hover:text-white';
if ($active) $classes .= ' bg-blue-700 text-white';


@endphp
<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}</a>
