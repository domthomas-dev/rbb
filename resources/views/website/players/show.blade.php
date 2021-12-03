<x-site-base-layout>
    <div>
        <x-pictured-header-with-overlapping-cards :picture="\App\Enums\AnonymousPictures::BACKDROP">
            <h2 class="sr-only" id="contact-heading">Contact us</h2>
            <div class="grid grid-cols-1 gap-y-20 md:grid-cols-3 md:gap-y-0 md:gap-x-8">
                <div class="flex flex-col  bg-white  shadow-xl">
                    <img src="{{$player->profile_picture}}">
                </div>

                <div class="flex flex-col col-span-2 bg-white rounded-2xl shadow-xl ">

                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <x-buttons.mini-edit :route="route('admin.players.edit',$player)" :concern="$player" />
                        <x-text.title>{{$player->firstname}} {{$player->name}}</x-text.title>



                        @if($player->born_at)
                            <div>
                                Naissance&nbsp;:
                                <time
                                    datetime="{{$player->born_at}}">{{$player->born_at_fr}}</time> @if($player->place_of_born)
                                    ({{$player->place_of_born}}) @endif
                            </div>
                        @endif


                        @if($player->size)
                            <div>
                                Taille&nbsp;: {{$player->size / 100}}m
                            </div>
                        @endif

                        @if($player->weight)
                            <div>
                                Poids&nbsp;: {{$player->weight}}Kg
                            </div>
                        @endif

                        @if($player->throwing_hand)
                        <div>
                                Main de lancer&nbsp;: <span class="font-bold">{{\App\Enums\ThrowingHand::getDescription($player->throwing_hand)}}</span>
                        </div>
                        @endif

                        @if($player->bating_position)
                            <div>
                                Position à la bate&nbsp;: <span class="font-bold">{{\App\Enums\BatingPosition::getDescription($player->bating_position)}}</span>
                            </div>
                        @endif

                        @if($player->clubs()->exists())
                            <div>
                                Club successifs&nbsp;: <span class="font-bold">{{$player->clubs->pluck('name')->implode(', ')}}</span>
                            </div>
                        @endif

                        @if($player->arriving_year)
                            <div>
                                Année d'arrivée au club&nbsp;: {{$player->arriving_year}}
                            </div>
                        @endif



                        @if($player->website)
                            <div>
                                Lance&nbsp;: {{$player->throwing_hand}}
                            </div>
                        @endif






                    </div>

                </div>


            </div>

        </x-pictured-header-with-overlapping-cards>
        @if($player->biography)
            <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-8">
                <x-text.title>A propos de {{$player->name}}</x-text.title>
                <div class="whitespace-pre-line">
                    {!!  $player->biography  !!}
                </div>
            </div>
        @endif




        @if(count($player->getPictureUrls())>0)
            <div class="bg-white">
                <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
                    <div class="space-y-12">
                        <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                            <x-text.title>Photos de {{$player->name}}</x-text.title>
                            <p class="text-xl text-gray-500"></p>
                        </div>

                        <ul role="list"
                            class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                            @foreach($player->getPictureUrls()->take(18) as $pictureUrl)
                                <li>
                                    <div class="space-y-4">
                                        <div class="aspect-w-3 aspect-h-2">
                                            <img class="object-cover shadow-lg rounded-lg" src="{{$pictureUrl}}" alt="">
                                        </div>

                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-site-base-layout>
