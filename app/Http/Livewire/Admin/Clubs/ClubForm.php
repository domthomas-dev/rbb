<?php

namespace App\Http\Livewire\Admin\Clubs;

//use App\Models\Club;
use CodencoDev\CodencoFaster\Http\Livewire\ModelFormComponent;

class ClubForm extends ModelFormComponent
{
    public $current = null;

    // public string $modelClass = Club::class;

    protected $rules = [
    'current.name' => ['required','max:255','string'],
    ];
}




