<div>
    <x-codenco-faster::crud.listing :records="$models">
        <x-slot name="pageHeading">
            <x-codenco-faster::page-heading>
                <x-slot name="title">
                    Liste des équipes
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
            <x-codenco-faster::table.heading sortable multi-column wire:click="sortBy('id')"
                             :direction="$sorts['id'] ?? null">
                ID
            </x-codenco-faster::table.heading>
            <x-codenco-faster::table.heading sortable multi-column wire:click="sortBy('name')"
                             :direction="$sorts['name'] ?? null">Nom
             </x-codenco-faster::table.heading>
        </x-slot>

        @forelse ($models as $model)
        <x-codenco-faster::crud._partials.commun-row :record="$model">
            <x-codenco-faster::table.cell>
                <span class="text-cool-gray-600 font-medium">{{ $model->id}} </span>
            </x-codenco-faster::table.cell>
           <x-codenco-faster::table.cell>
                <span class="text-cool-gray-600 font-medium">{{ $model->name}} </span>
           </x-codenco-faster::table.cell>
        </x-codenco-faster::crud._partials.commun-row>
        @empty
        <x-codenco-faster::crud._partials.empty-row colspan="4"  />
        @endforelse

        <x-slot name="links">
            {{ $models->links() }}
        </x-slot>

    </x-codenco-faster::crud.listing>
</div>
