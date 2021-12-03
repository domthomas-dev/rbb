@props([
    'people',
    'peopleLink' => true,
    'firstOnly' => false,
])
<span {{$attributes}}>
    @if($firstOnly && $people->first())
        @if($peopleLink)
            <a class="inline" href="{{route('people.show',$people->first())}}">{{$people->first()->name}}</a>
        @else
            {{$people->first()->name}}
        @endif

    @else
        @foreach($people as $person)
            @if($peopleLink)
                <a class="inline"
                   href="{{route('people.show',$person)}}">{{$person->name}}</a>@if(!$loop->last && $loop->iteration==($loop->count - 1))
                    et @elseif(!$loop->last),@endif
            @else
                {{$person->name}}@if(!$loop->last && $loop->iteration==($loop->count - 1)) et @elseif(!$loop->last)
                    ,@endif
            @endif
        @endforeach

    @endif


</span>
