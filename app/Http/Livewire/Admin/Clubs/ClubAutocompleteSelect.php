<?php

namespace App\Http\Livewire\Admin\Clubs;

use App\Models\Club;
use CodencoDev\CodencoFaster\Http\Livewire\AutocompleteSelect;

class ClubAutocompleteSelect extends AutocompleteSelect
{
    public string $modelClass = Club::class;
}




