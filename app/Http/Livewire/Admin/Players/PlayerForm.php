<?php

namespace App\Http\Livewire\Admin\Players;

//use App\Models\Player;
use CodencoDev\CodencoFaster\Http\Livewire\ModelFormComponent;

class PlayerForm extends ModelFormComponent
{
    public $current = null;

    // public string $modelClass = Player::class;

    protected $rules = [
    'current.name' => ['required','max:255','string'],
    ];
}




