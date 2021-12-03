<?php

namespace App\Models\Traits;

use Str;

trait DisplayableOnWebsite
{

    public function getUrlOnWebsiteAttribute(): string
    {
        return route($this->getResourceRouteName().'.show', $this);
    }

    public function getResourceRouteName()
    {
        return Str::plural(Str::kebab((new \ReflectionClass($this))->getShortName()));
    }

}
