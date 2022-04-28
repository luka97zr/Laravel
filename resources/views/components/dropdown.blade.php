@props(['trigger'])
<div class="category">
    {{$trigger}}
    <ul class="category__menu">
        {{$slot}}
    </ul>
</div>

