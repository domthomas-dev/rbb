<x-codenco-faster::crud.detail>
    <x-slot name="pageHeading">
        <x-codenco-faster::page-heading>
            <x-slot name="title">
                Détail d'une équipe : {{$current->name}}
            </x-slot>
        </x-codenco-faster::page-heading>
    </x-slot>
    <x-codenco-faster::panel>
        <div>
            {{$current->name}}
        </div>

        <x-slot name="action_form">
            <x-codenco-faster::crud._partials.button-detail/>
        </x-slot>

    </x-codenco-faster::panel>
</x-codenco-faster::crud.detail>
