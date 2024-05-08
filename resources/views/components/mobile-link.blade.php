@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex px-5 py-2 text-lg font-bold bg-blue-100 text-blue-800 border-l-4 border-blue-800'
                : 'flex px-5 py-2 text-lg';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:navigate.hover>
    {{ $slot }}
</a>
