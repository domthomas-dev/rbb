<?php

namespace App\Http\Livewire\Admin\Seasons;

//use App\Models\Season;
use CodencoDev\CodencoFaster\Http\Livewire\ModelFormComponent;

class SeasonForm extends ModelFormComponent
{
    public $current = null;

    // public string $modelClass = Season::class;

    protected $rules = [
    'current.name' => ['required','max:255','string'],
    ];
}




