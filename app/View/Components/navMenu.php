<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public $logo;
    public $linkLogo;
    public $items;
    public function __construct(
        $class = null,
        $logo = null,
        $linkLogo = null,
        $items = []
    )
    {
        $this->class = $class;
        $this->logo = $logo;
        $this->linkLogo = $linkLogo;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-menu');
    }
}
