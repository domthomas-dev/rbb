<x-site-base-layout>
    <div

        class="relative  pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <x-text.big-title>
                    {{$title ?? ''}}
                </x-text.big-title>
                {{--                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">--}}
                {{--                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus--}}
                {{--                    sed.--}}
                {{--                </p>--}}
            </div>



            <div class="my-12 max-w-lg mx-auto grid gap-5 max-w-sm sm:max-w-none grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 lg:max-w-none">
                @forelse($players as $player)
                    <x-player.detailed :player="$player"/>
                @empty
                    Aucun résultat à votre recherche
                @endforelse
            </div>


            {{$players->links()}}
        </div>
    </div>
</x-site-base-layout>
