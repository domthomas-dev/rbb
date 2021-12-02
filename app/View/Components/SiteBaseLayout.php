<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SiteBaseLayout extends Component
{

    public $donations = true;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.site-base');
    }
}
