@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-[#E7A40E]'
                : 'text-black hover:text-[#E7A40E] transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
