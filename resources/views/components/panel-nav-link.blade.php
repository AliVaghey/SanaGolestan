@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'bg-navi rounded-lg w-full px-5 text-xl py-2 text-white'
                : 'bg-light_blue rounded-lg w-full px-5 text-xl py-2 hover:bg-gold transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:navigate.hover>
    {{ $slot }}
</a>
