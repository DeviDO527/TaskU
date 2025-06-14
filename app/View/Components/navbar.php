<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $logo;
    public $linkLogo;
    public $button1;
    public $button2;
    public $linkButton1;
    public $linkButton2;
    public $message1;
    public $message2;

    public function __construct(
        $logo=null,
        $linkLogo=null,
        $button1=null,
        $button2=null,
        $linkButton1=null,
        $linkButton2=null,
        $message1=null,
        $message2=null
    )
    {
        $this-> logo = $logo;
        $this-> linkLogo = $linkLogo;
        $this-> button1 = $button1;
        $this-> button2 = $button2;
        $this-> linkButton1 = $linkButton1;
        $this-> linkButton2 = $linkButton2;
        $this-> message1 = $message1;
        $this-> message2 = $message2;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
