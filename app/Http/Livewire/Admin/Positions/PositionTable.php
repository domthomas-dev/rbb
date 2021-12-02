<?php

namespace App\Http\Livewire\Admin\Positions;

//use App\Models\Position;
use CodencoDev\CodencoFaster\Http\Livewire\ModelTableComponent;

class PositionTable extends ModelTableComponent
{
    public $current = null;

  //  public string $modelClass = Position::class;

    protected array $search_fields = [
        'name',
    ];
}




