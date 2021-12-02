<?php

namespace App\Http\Livewire\Admin\Regions;

use App\Models\Region;
use CodencoDev\CodencoFaster\Http\Livewire\ModelFormComponent;

class RegionForm extends ModelFormComponent
{
    public $current = null;

     public string $modelClass = Region::class;

    protected $rules = [
    'current.name' => ['required','max:255','string'],
    ];
}




