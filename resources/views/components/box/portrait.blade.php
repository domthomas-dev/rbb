@props([
    'url' => false,
    'title' => false,
    'category' => false,
    'buttons' => false,
    'poster' => false,
])

<div
    @if(config('app.debug'))
    @view_name
    @endif
    {{$attributes->merge(['class' => 'grid grid-cols-1 lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-5 xl:grid-cols-5 rounded-lg shadow-lg overflow-hidden  lg:min-h-full relative ' ])}}>
{{--    sm:bg-gray-300 bg-red-300 lg:bg-blue-300 xl:bg-blue-900--}}
    <div class="
    sm:col-span-2
    md:col-span-1
    lg:col-span-2  lg:relative
    xl:col-span-2">
        <a href="{{$url}}">
            <img class="min-w-full min-h-full" src="{{$poster}}"/>
        </a>
    </div>
    <div class=" flex-auto px-5 pt-2 pb-1
    sm:col-span-3
    md:col-span-3
    lg:col-span-2
    xl:col-span-3
">
        <div class="flex-1 pb-1">
            <span class="inline-flex items-center text-xs font-black text-ccsf-blue uppercase">
                {{$category}}
            </span>
            <a href="{{$url}}" class="block mt-1">
                <p class="h-8 min-h-full box-title">
                    {{$title}}
                </p>
            </a>
        </div>
        <div>
            {{$slot}}
        </div>

        @if($buttons)
            <div class="lg:absolute lg:bottom-1 mt-2">
                {{$buttons}}
            </div>
        @endif
    </div>
</div>
