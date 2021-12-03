@props([
    'picture' => false,
])
<div class="hidden sm:block relative pb-32 bg-gray-800">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover object-center" src="{{$picture}}" alt="">
        <div class="absolute inset-0 bg-gray-400 mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    </div>
</div>

<!-- Overlapping cards -->
<section class="pb-32 sm:-mt-16 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
    {{$slot}}
</section>
