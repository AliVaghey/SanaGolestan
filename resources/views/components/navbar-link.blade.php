@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-[#E7A40E] text-xl'
                : 'text-navi text-xl hover:text-[#E7A40E] transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
