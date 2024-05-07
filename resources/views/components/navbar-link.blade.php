@props(['active'])

@php
    $classes = ($active ?? false)
                ? ''
                : 'i';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
