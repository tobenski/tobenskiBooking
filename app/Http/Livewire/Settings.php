<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Settings extends Component
{
    public $page;

    public function Mount($page = 'profile')
    {
        $this->page = $page;
    }
    public function render()
    {
        return view('livewire.settings');
    }
}
