@props([
    'url' => false,
    'title' => false,
    'category' => false,
    'buttons' => false,
    'picture' => false,
])

<div
    @if(config('app.debug'))
    @view_name
    @endif
    {{$attributes->merge(['class' => 'flex flex-col rounded-lg shadow-lg overflow-hidden  lg:min-h-full relative ' ])}}>
{{--    sm:bg-gray-300 bg-red-300 lg:bg-blue-300 xl:bg-blue-900--}}
    <div class="flex-shrink-0">
        <a href="{{$url}}">
            <img class="h-48 w-full object-cover"
                 loading="lazy"
                 src="{{$picture}}" alt="">
        </a>
    </div>
    <div class="flex-1 p-6 flex flex-col ">
        <div class="flex-initial">
            <span class="inline-flex items-center text-xs font-black text-ccsf-blue uppercase">
                {{$category}}
            </span>
            <a href="{{$url}}" class="block mt-2">
                <p class="h-8 min-h-full box-title">
                    {{$title}}
                </p>
            </a>
        </div>
        <div class="h-32 pt-1">
            {{$slot}}
        </div>
        @if($buttons)
            <div class="mt-6 flex items-center">
                {{$buttons}}
            </div>
        @endif
    </div>
</div>
