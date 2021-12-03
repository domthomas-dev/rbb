@props([
    'route',
    'concern',
])
@if(auth()->check())
    <div class="absolute ml-4 top-1 grid grid-cols-4 gap-1">
        @can('update',$concern)
            <x-codenco-faster::button.primary target='_blank' class=""
                                              href="{{$route}}">
                Editer
            </x-codenco-faster::button.primary>
        @endcan
    </div>
@endif
