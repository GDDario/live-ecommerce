@props(['active'])

@php
$classes = ($active ?? false)
            ? 'underline'
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
