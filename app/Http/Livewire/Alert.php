<?php

namespace App\Http\Livewire;

use Exception;
use Livewire\Component;

class Alert extends Component
{
    public $showAlert = false;
    public $type;
    public $msg;
    public $duration;
    public $icon;

    protected $listeners = ['showAlert'];

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.alert');
    }

    public function showAlert($type = 'info', $msg = '', $duration = '3000')
    {
        $this->type = $type;
        $this->msg = $msg;
        $this->showAlert = true;
        $this->icon = $this->getIcon($type);
        $this->duration = $duration;
    }

    protected function getIcon($type)
    {
        switch ($type) {
            case 'danger':
                return '<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>';
                break;
            case 'info':
                return '<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                break;
            case 'success':
                return '<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                break;
            case 'warning':
                return '<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
                break;
            default:
                throw new Exception("Unknown Icon Type", 1);
                break;
        }
    }
}
