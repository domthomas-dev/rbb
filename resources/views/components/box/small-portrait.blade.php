@props([
    'url' => false,
    'title' => false,
    'poster' => false,
])

<div
    @if(config('app.debug'))
    @view_name
    @endif

    {{$attributes->merge(['class' => 'flex flex-col  overflow-hidden  lg:min-h-full relative ' ])}}>
    {{--    sm:bg-gray-300 bg-red-300 lg:bg-blue-300 xl:bg-blue-900--}}
    <div class="flex-shrink-0">
        <a href="{{$url}}">
            <img class="h-72 w-48  object-cover rounded-md"
                 loading="lazy"
                 src="{{$poster}}" alt="">
        </a>
    </div>
    <div class="flex-1 flex pt-4 flex-col ">
        <div class="flex-initial">
            <a href="{{$url}}" class="block mt-1">
                <x-text.small-title>
                    {{$title}}
                </x-text.small-title>
            </a>
        </div>
        <div class="h-25 pt-1">
            {{$slot}}
        </div>
    </div>
</div>
