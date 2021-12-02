<x-codenco-faster::crud.form>
    <x-slot name="pageHeading">
        <x-codenco-faster::page-heading>
            <x-slot name="title">
                @if(!$current->exists)
                    Création d'une saison
                @else
                    Modification d'une saison : {{$current->name}}
                @endif
            </x-slot>
        </x-codenco-faster::page-heading>
    </x-slot>

    <x-codenco-faster::panel>
        <div>
            <x-codenco-faster::input.group required borderless="true" label="Nom" for="name"
                           :error="$errors->first('current.name')">
                <x-codenco-faster::input.text wire:model.defer="current.name" id="name"/>
            </x-codenco-faster::input.group>
            <x-codenco-faster::input.group required label="Nom" for="year"
                                           :error="$errors->first('current.year')">
                <x-codenco-faster::input.text wire:model.defer="current.year" id="year"/>
            </x-codenco-faster::input.group>
            <x-codenco-faster::info-model :model="$current"></x-codenco-faster::info-model>
        </div>
        <x-slot name="action_form">
            <x-codenco-faster::crud._partials.button-form />
        </x-slot>
    </x-codenco-faster::panel>

</x-codenco-faster::crud.form>
