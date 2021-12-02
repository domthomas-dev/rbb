<?php

namespace App\Http\Livewire\Admin\Clubs;

use App\Enums\ClubLevel;
use App\Models\Club;
use CodencoDev\CodencoFaster\Http\Livewire\ModelFormComponent;
use Illuminate\Validation\Rule;

class ClubForm extends ModelFormComponent
{
    public $current = null;

     public string $modelClass = Club::class;

    protected $rules = [
    'current.short_name' => ['nullable','max:255','string'],
    'current.name' => ['required','max:255','string'],
    'current.facebook' => ['nullable','max:255','string'],
    'current.twitter' => ['nullable','max:255','string'],
    'current.youtube' => ['nullable','max:255','string'],
    'current.instagram' => ['nullable','max:255','string'],
    'current.website' => ['nullable','max:255','url'],
    'current.region_id' => ['nullable','exists:regions,id'],
    ];

    public function rules()
    {
        return array_merge([
            'current.level' => ['nullable','string',Rule::in(ClubLevel::asArray())],
        ], $this->rules);
    }
}




