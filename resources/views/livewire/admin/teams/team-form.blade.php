<x-codenco-faster::crud.form>
    <x-slot name="pageHeading">
        <x-codenco-faster::page-heading>
            <x-slot name="title">
                @if(!$current->exists)
                    Création d'une équipe
                @else
                    Modification d'une équipe : {{$current->name}}
                @endif
            </x-slot>
        </x-codenco-faster::page-heading>
    </x-slot>

    <x-codenco-faster::panel>
        <div>
            <x-codenco-faster::input.group borderless="true" label="Nom" for="name"
                           :error="$errors->first('current.name')">
                <x-codenco-faster::input.text wire:model.defer="current.name" id="name"/>
            </x-codenco-faster::input.group>
        </div>
        <x-slot name="action_form">
            <x-codenco-faster::crud._partials.button-form />
        </x-slot>
    </x-codenco-faster::panel>

</x-codenco-faster::crud.form>
