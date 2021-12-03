@props([
    'url' => false,
    'title' => false,
    'picture' => false,
])

<div
    @if(config('app.debug'))
    @view_name
    @endif
    {{$attributes->merge(['class' => 'flex flex-col  overflow-hidden  lg:min-h-full relative ' ])}}>
    <div class="flex-shrink-0">
        <a href="{{$url}}">
            <img class="h-48 w-full object-cover rounded-md"
                 loading="lazy"
                 src="{{$picture}}" alt="">
        </a>
    </div>
    <div class="flex-1 flex pt-4 flex-col ">
        <div class="flex-initial">
            <a href="{{$url}}" class="block mt-1">
                <p class="box-title font-bold">
                    {{$title}}
                </p>
            </a>
        </div>
        <div class="h-25 pt-1">
            {{$slot}}
        </div>
    </div>
</div>
