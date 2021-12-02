<?php

namespace App\Models;

use CodencoDev\CodencoFaster\Models\Traits\HasList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    use HasList;
    protected $guarded = [];
}
