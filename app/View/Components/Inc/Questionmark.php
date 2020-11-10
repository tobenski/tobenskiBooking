<?php

namespace App\View\Components\Inc;

use Illuminate\View\Component;

class Questionmark extends Component
{
    public $msg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($msg = null)
    {
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.inc.questionmark');
    }
}
