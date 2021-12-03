@props([
    'url' => false,
    'title' => false,
    'category' => false,
    'buttons' => false,
    'picture' => false,
    'publishingDate' => false,
    'publishingDateFr' => false,

])

<div
    @if(config('app.debug'))
    @view_name
    @endif
    {{$attributes->merge(['class' => 'flex flex-col rounded-lg shadow-lg overflow-hidden  lg:min-h-full relative ' ])}}>
    <div class="flex-shrink-0">
        <a href="{{$url}}">
            <img class="h-100 w-full object-cover"
                 loading="lazy"
                 src="{{$picture}}" alt="">
        </a>
    </div>
    <div class="flex-1 p-6 flex flex-col ">
        <div class="flex-initial">
            <span class="inline-flex items-center text-xs font-black text-ccsf-blue uppercase">
                {{$category}} |
            </span>
            <span class="inline-flex items-center text-xs font-bold text-ccsf-blue italic ">
                <time datetime="{{$publishingDate}}">
                   {{$publishingDateFr}}
                </time>
            </span>
            <a href="{{$url}}" class="block mt-2">
                <h2 class="min-h-full text-lg font-black  tracking-tight leading-relaxed md:text-2xl lg:text-4xl text-gray-900 font-serif">
                   {{$title}}
                </h2>
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
