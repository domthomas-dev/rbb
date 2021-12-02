<?php

namespace App\Http\Livewire\Admin\Clubs;

//use App\Models\Club;
use CodencoDev\CodencoFaster\Http\Livewire\ModelTableComponent;

class ClubTable extends ModelTableComponent
{
    public $current = null;

  //  public string $modelClass = Club::class;

    protected array $search_fields = [
        'name',
    ];
}




