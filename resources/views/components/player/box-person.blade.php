@props([
    'picture' => false,
    'person' => false,
    'slot' => false,
])

<li>
    <a href="{{route('people.show',$credit->person)}}" >
        <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="{{ $picture }}" alt="">
            <div class="space-y-2">
                  <div>
                       <p class="text-base text-gray-800">{{ $slot }}</p>
                       <p class="text-sm text-gray-500">{{ $slot }}</p>
                  </div>
            </div>
        </div>
    </a>
</li>
