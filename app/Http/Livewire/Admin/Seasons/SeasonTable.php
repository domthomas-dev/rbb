<?php

namespace App\Http\Livewire\Admin\Seasons;

//use App\Models\Season;
use CodencoDev\CodencoFaster\Http\Livewire\ModelTableComponent;

class SeasonTable extends ModelTableComponent
{
    public $current = null;

  //  public string $modelClass = Season::class;

    protected array $search_fields = [
        'name',
    ];
}




