<?php

namespace App\View\assets\svg;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class logout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('assets.svg.logout');
    }
}
