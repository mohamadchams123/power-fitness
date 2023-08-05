@props(['active'=>false])
@php
    $classes='block text-sm text-left px-3 hover:bg-light-teal focus:bg-light-teal hover:text-dark-teal focus:text-dark-teal';
    if ($active) $classes = 'block text-sm text-left px-3 hover:bg-light-teal focus:bg-light-teal hover:text-dark-teal focus:text-dark-teal bg-light-teal text-dark-teal';
@endphp
<a {{$attributes->merge(['class'=> $classes]) }}>
    {{$slot}}
</a>