@props([
    'name' => 'robert',
    'function' => 'ecrivain'
])
<div class="space-y-4">
    <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
    <div class="space-y-2">
        <div class="text-xs font-medium lg:text-sm">
            <h3>{{$name}}</h3>
            <p class="text-indigo-600">{{$function}}</p>
        </div>
    </div>
</div>
