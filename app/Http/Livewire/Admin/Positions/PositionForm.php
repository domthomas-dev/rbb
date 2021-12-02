<?php

namespace App\Http\Livewire\Admin\Positions;

use App\Models\Position;
use CodencoDev\CodencoFaster\Http\Livewire\ModelFormComponent;

class PositionForm extends ModelFormComponent
{
    public $current = null;

     public string $modelClass = Position::class;

    protected $rules = [
    'current.name' => ['required','max:255','string'],
    ];
}




