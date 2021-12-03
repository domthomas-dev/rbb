@props([
    'player',
    'addedInfo' => false,

   ])
<div
    @if(config('app.debug'))
    @view_name
    @endif
     class=" relative">

    <a href="{{route('players.show',$player)}}"
       class="text-base text-center text-gray-800 leading-6 font-semibold space-y-1">
        <div class="aspect-w-2 aspect-h-3">
            <img class=" mx-auto object-cover shadow-lg rounded-lg " src="{{$player->profile_picture}}" alt="">
        </div>

        <div class="space-y-2">

            <h3>{{$player->firstname}} {{$player->name}}</h3>
            @if($addedInfo)
                <p class="text-gray-500 text-sm font-normal">{{$addedInfo}}</p>
            @endif

        </div>
    </a>
    <x-buttons.mini-edit :route="route('admin.players.edit',$player)" :concern="$player" />
</div>
