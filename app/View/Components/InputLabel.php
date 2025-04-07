<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputLabel extends Component
{
    public $for;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct($for, $value)
    {
        $this->for = $for;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.input-label');
    }
}
