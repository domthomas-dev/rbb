<div class="relative bg-white" x-data="{ open: false,showM1: false,showM2: false,showM6: false,showMobile: false}">
    <div class="absolute inset-0 shadow z-30 pointer-events-none" aria-hidden="true"></div>
    <div class="relative z-20">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-5 sm:px-6 sm:py-4 lg:px-8 md:justify-start md:space-x-10">
            <div>
                <a href="{{route('home')}}" class="flex">
                    <span class="sr-only">Workflow</span>
                    <x-logo class="h-8 w-auto sm:h-10"></x-logo>
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>

                    <x-heroicon-o-menu class="h-6 w-6" @click="showMobile = true" />
                </button>
            </div>
            <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">
                <nav class="flex space-x-10">
                    <div>

                        <div>
                            <x-codenco-faster::nav-link
                                class="text-base"
                                href="#" :active="request()->routeIs('dashboard')" @click="showM1 = !showM1">
                                Le club
                                <x-heroicon-s-chevron-down class="text-gray-500 h-5 w-5" />
                            </x-codenco-faster::nav-link>


                            <x-codenco-faster::flyout-menu name="M1">
                                <div class="bg-white max-w-full">
                                    <div class="mx-auto max-w-7xl grid gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">
                                        Menu du club à venir

                                    </div>
                                </div>
                            </x-codenco-faster::flyout-menu>
                        </div>
                    </div>
                    <div>
                        <x-codenco-faster::nav-link
                            class="text-base"
                            href="#" :active="request()->routeIs('dashboard')" @click="showM2 = !showM2">
                            Les équipes
                            <x-heroicon-s-chevron-down class="text-gray-500 h-5 w-5" />

                        </x-codenco-faster::nav-link>
                        <x-codenco-faster::flyout-menu name="M2">
                            <div class="bg-white max-w-full">
                                <div class="mx-auto max-w-7xl grid gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">
                                    Menu des équipes à venir
                                    <div>En attendant : <a href="{{route('players.index')}}">Voir tous les joueurs</a></div>
                                </div>

                            </div>
                        </x-codenco-faster::flyout-menu>
                    </div>
                    <div>
                        <x-codenco-faster::nav-link
                            class="text-base"
                            href="https://www.shoprouenhuskies.com/" target="_blank" :active="request()->routeIs('dashboard')" >
                            Huskies Shop

                        </x-codenco-faster::nav-link>
                    </div>
                    <div>
                        <x-codenco-faster::nav-link
                            class="text-base"
                            href="#" :active="request()->routeIs('dashboard')" >
                            Contact

                        </x-codenco-faster::nav-link>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        x-show="showMobile"
        class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5 sm:pb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <x-logo class="h-8 w-auto sm:h-10"></x-logo>
                    </div>
                    <div class="-mr-2">
                        <button type="button" @click="showMobile = false" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6 sm:mt-8">
                    <nav>
                        <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
                            <a href="{{route('home')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Accueil
                            </a>
                            <a href="{{route('players.index')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Les joueurs
                            </a>


                            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Equipes (Coming soon)
                            </a>
                            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Le club (Coming soon)
                            </a>



                            <a href="https://www.shoprouenhuskies.com/" target="_blank" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Huskies shop
                            </a>
                            <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Contact (Coming soon)
                            </a>
                        </div>
                        <div class="mt-8 text-base">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all products <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5">
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                        Division 1
                    </a>

                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                        Division 2
                    </a>

                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                        Company
                    </a>

                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                        Resources
                    </a>

                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                        Blog
                    </a>

                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">
                        Contact Sales
                    </a>
                </div>
                <div class="mt-6">
                    <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                        Sign up
                    </a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="#" class="text-indigo-600 hover:text-indigo-500">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
