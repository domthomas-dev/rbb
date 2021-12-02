<div>
    <x-codenco-faster::crud.listing :records="$models">
        <x-slot name="pageHeading">
            <x-codenco-faster::page-heading>
                <x-slot name="title">
                    Liste des joueurs
                </x-slot>
            </x-codenco-faster::page-heading>
        </x-slot>

        <x-slot name="filterContent">
            <div class="w-1/2 pr-2 space-y-4">
{{--                <x-codenco-faster::input.group inline for="filter-filter1" label="Label of filter">--}}
{{--                   <x-codenco-faster::input.text wire:model="filters.filter1" id="filter-filter1"/>--}}
{{--                </x-codenco-faster::input.group>--}}
            </div>
        </x-slot>

        <x-slot name="tableHeading">
            <x-codenco-faster::table.heading text="ID" sortable multi-column wire:click="sortBy('id')"
                             :direction="$sorts['id'] ?? null" />
            <x-codenco-faster::table.heading text="Nom" sortable multi-column wire:click="sortBy('name')"
                             :direction="$sorts['name'] ?? null"/>
        </x-slot>

        @forelse ($models as $model)
        <x-codenco-faster::crud._partials.commun-row :record="$model">
            <x-codenco-faster::table.cell :text="$model->id" />
           <x-codenco-faster::table.cell  :text="$model->name" />
        </x-codenco-faster::crud._partials.commun-row>
        @empty
        <x-codenco-faster::crud._partials.empty-row colspan="4"  />
        @endforelse

        <x-slot name="links">
            {{ $models->links() }}
        </x-slot>

    </x-codenco-faster::crud.listing>
</div>
