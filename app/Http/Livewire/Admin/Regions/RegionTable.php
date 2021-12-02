<?php

namespace App\Http\Livewire\Admin\Regions;

use App\Models\Region;
use CodencoDev\CodencoFaster\Http\Livewire\ModelTableComponent;

class RegionTable extends ModelTableComponent
{
    public $current = null;

    public string $modelClass = Region::class;

    protected array $search_fields = [
        'name',
    ];
}




