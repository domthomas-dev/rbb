<?php

namespace App\Http\Livewire\Admin\Teams;

//use App\Models\Team;
use CodencoDev\CodencoFaster\Http\Livewire\ModelTableComponent;

class TeamTable extends ModelTableComponent
{
    public $current = null;

  //  public string $modelClass = Team::class;

    protected array $search_fields = [
    //    'name',
    ];
}




