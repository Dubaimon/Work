<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class home extends Component
{
    public $menuItems;
    /**
     * Create a new component instance.
     */
    public function __construct($menuItems = 'icon')
    {
        $this->menuItems = $menuItems;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home');
    }
}
