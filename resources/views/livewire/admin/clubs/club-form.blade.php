<x-codenco-faster::crud.form>
    <x-slot name="pageHeading">
        <x-codenco-faster::page-heading>
            <x-slot name="title">
                @if(!$current->exists)
                    Création d'un club
                @else
                    Modification d'un club : {{$current->name}}
                @endif
            </x-slot>
        </x-codenco-faster::page-heading>
    </x-slot>

    <x-codenco-faster::panel>
        <div>

            <x-codenco-faster::input.group borderless="true" required  label="Nom" for="name"
                           :error="$errors->first('current.name')">
                <x-codenco-faster::input.text wire:model.defer="current.name" id="name"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Nom Court" for="short_name"
                                           :error="$errors->first('current.short_name')">
                <x-codenco-faster::input.text wire:model.defer="current.short_name" id="short_name"/>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group required label="Région" for="region_id"
                                           :error="$errors->first('current.youtube')">
                <x-codenco-faster::input.select wire:model.defer="current.region_id" id="region_id"
                                                :options="\App\Models\Region::getSimpleList()"
                                                placeholder="Sélectionnez la région" />
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Site Web" for="website"
                                           :error="$errors->first('current.website')">
                <x-codenco-faster::input.text wire:model.defer="current.website" id="website">
                    <x-slot name="leadingAddOn">
                        <x-heroicon-o-link class="w-5 h-5"/>
                    </x-slot>
                </x-codenco-faster::input.text>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Facebook" for="facebook"
                                           :error="$errors->first('current.facebook')">
                <x-codenco-faster::input.text wire:model.defer="current.facebook" id="facebook">
                    <x-slot name="leadingAddOn">
                        <x-fab-facebook class="w-5 h-5"/>
                    </x-slot>
                </x-codenco-faster::input.text>
            </x-codenco-faster::input.group>
            <x-codenco-faster::input.group label="Twitter" for="twitter"
                                           :error="$errors->first('current.twitter')">
                <x-codenco-faster::input.text wire:model.defer="current.twitter" id="twitter">
                    <x-slot name="leadingAddOn">
                        <x-fab-twitter class="w-5 h-5"/>
                    </x-slot>
                </x-codenco-faster::input.text>
            </x-codenco-faster::input.group>
            <x-codenco-faster::input.group label="Instagram" for="instagram"
                                           :error="$errors->first('current.instagram')">
                <x-codenco-faster::input.text wire:model.defer="current.instagram" id="instagram">
                    <x-slot name="leadingAddOn">
                        <x-fab-instagram class="w-5 h-5"/>
                    </x-slot>
                </x-codenco-faster::input.text>
            </x-codenco-faster::input.group>
            <x-codenco-faster::input.group label="Youtube" for="youtube"
                                           :error="$errors->first('current.youtube')">
                <x-codenco-faster::input.text wire:model.defer="current.youtube" id="youtube">
                    <x-slot name="leadingAddOn">
                        <x-fab-youtube class="w-5 h-5"/>
                    </x-slot>
                </x-codenco-faster::input.text>
            </x-codenco-faster::input.group>

            <x-codenco-faster::input.group label="Niveau" for="level"
                                           :error="$errors->first('current.level')">
                <x-codenco-faster::input.select wire:model.defer="current.level" id="level"
                :options="\App\Enums\ClubLevel::asSelectArray()"
                placeholder="Sélectionnez le niveau" />
            </x-codenco-faster::input.group>
            <x-codenco-faster::info-model :model="$current"></x-codenco-faster::info-model>

        </div>
        <x-slot name="action_form">
            <x-codenco-faster::crud._partials.button-form />
        </x-slot>
    </x-codenco-faster::panel>

</x-codenco-faster::crud.form>
