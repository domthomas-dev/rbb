<x-codenco-faster::crud.form>
    <x-slot name="pageHeading">
        <x-codenco-faster::page-heading>
            <x-slot name="title">
                @if(!$current->exists)
                    Création d'un joueur
                @else
                    Modification d'un joueur : {{$current->name}}
                @endif
            </x-slot>
        </x-codenco-faster::page-heading>
    </x-slot>

    <x-codenco-faster::panel>
        <div>



            <x-codenco-faster::input.group required borderless="true" label="Prénom" for="firstname"
                                           :error="$errors->first('current.firstname')">
                <x-codenco-faster::input.text wire:model.defer="current.firstname" id="firstname"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group required label="Nom" for="name"
                           :error="$errors->first('current.name')">
                <x-codenco-faster::input.text wire:model.defer="current.name" id="name"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group required label="Sexe" for="gender"
                                           :error="$errors->first('current.gender')">
                <x-codenco-faster::input.select wire:model.defer="current.gender" id="gender"
                                                :options="\App\Enums\Gender::asSelectArray()"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Main de lancer" for="throwing_hand"
                                           :error="$errors->first('current.throwing_hand')">
                <x-codenco-faster::input.select wire:model.defer="current.throwing_hand" id="throwing_hand"
                :options="\App\Enums\ThrowingHand::asSelectArray()"
                                                placeholder=""
                />
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Position à la bate" for="bating_position"
                                           :error="$errors->first('current.bating_position')">
                <x-codenco-faster::input.select wire:model.defer="current.bating_position" id="bating_position"
                                                :options="\App\Enums\BatingPosition::asSelectArray()"
                                                placeholder=""
                />
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Taille" for="size"
                                           :error="$errors->first('current.size')">
                <x-codenco-faster::input.text wire:model.defer="current.size" id="size"
                                              leadingAddOn="Cm"

                />
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Poids" for="weight"
                                           :error="$errors->first('current.weight')">
                <x-codenco-faster::input.text wire:model.defer="current.weight" id="weight"
                                              leadingAddOn="Kg"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Date de naissance" for="born_at"
                                           :error="$errors->first('current.born_at')">
                <x-codenco-faster::input.date wire:model.defer="current.born_at" id="born_at"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Lieu de naissance" for="place_of_born"
                                           :error="$errors->first('current.place_of_born')">
                <x-codenco-faster::input.text wire:model.defer="current.place_of_born" id="place_of_born"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group  label="Année d'arrivée" for="arriving_year"
                                           :error="$errors->first('current.arriving_year')">
                <x-codenco-faster::input.text size="4" wire:model.defer="current.arriving_year" id="arriving_year"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group  label="Photo de profil" for="profil"
            >
                <div wire:ignore>
                    <x-media-library-collection wire:change.debounce="500" name="profil"
                                                :model="$current"
                                                :collection="\App\Enums\MediaCollectionName::PLAYER_PROFILE"
                                                :max-items="1"

                    />
                </div>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group  label="Photo arrière plan" for="pictures"
            >
                <div wire:ignore>
                    <x-media-library-collection wire:change.debounce="500" name="pictures"
                                                :model="$current"
                                                :collection="\App\Enums\MediaCollectionName::PLAYER_BACK"

                    />
                </div>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group  label="Clubs successifs" for="clubs"
                                            :error="$errors->first('current.clubs')">
                <livewire:admin.clubs.club-autocomplete-select
                    name="Club"
                    placeholder="Sélectionné un club"
                    :searchable="true"
                    value=""

                />
                <div>
                    @foreach($clubs as $club)
                        <x-codenco-faster::tag wire:click="removeRelated('clubs',{{$club->id}})">
                            {{$club->name}}
                        </x-codenco-faster::tag>
                    @endforeach
                </div>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Biographie" for="biography"
                                           :error="$errors->first('current.biography')">
                <x-codenco-faster::input.ckeditor wire:model="current.biography">
                    {!! $current->biography !!}
                </x-codenco-faster::input.ckeditor>

            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Est un coach" for="is_coach"
                                           :error="$errors->first('current.is_coach')">
                <x-codenco-faster::input.checkbox wire:model.defer="current.is_coach" id="is_coach"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::info-model :model="$current"></x-codenco-faster::info-model>
        </div>
        <x-slot name="action_form">
            <x-codenco-faster::crud._partials.button-form />
        </x-slot>
    </x-codenco-faster::panel>

</x-codenco-faster::crud.form>
