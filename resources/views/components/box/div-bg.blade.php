@props([
    'urlImage'
])
<div {{$attributes->merge(['class' => 'relative bg-overlay '])}}
     style="--overlay-image: url('{{$urlImage}}');">
    {{$slot}}
</div>
