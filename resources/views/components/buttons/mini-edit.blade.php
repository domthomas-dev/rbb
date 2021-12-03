@props([
    'route',
    'concern',
])
<div class="absolute top-0 right-0 z-auto">
    @if(auth()->check())
            @can('update',$concern)
                <a href="{{$route}}" target="_blank"> <div class="bg-red-500 text-white text-center p-1">Editer</div></a>
            @endcan
    @endif
</div>
