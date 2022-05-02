@props(['active' => false])

@php
    $classes = "category__item";
    if ($active) $classes .= ' active';
@endphp

<li {{$attributes(['class'=> $classes])}}><a {{$attributes}} class="category__link">{{$slot}}</a></li>
