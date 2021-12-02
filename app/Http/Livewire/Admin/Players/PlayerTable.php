<?php

namespace App\Http\Livewire\Admin\Players;

//use App\Models\Player;
use CodencoDev\CodencoFaster\Http\Livewire\ModelTableComponent;

class PlayerTable extends ModelTableComponent
{
    public $current = null;

  //  public string $modelClass = Player::class;

    protected array $search_fields = [
        'name',
    ];
}




