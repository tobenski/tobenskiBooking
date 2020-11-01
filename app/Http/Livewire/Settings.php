<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Settings extends Component
{
    public $page;
    public User $user;

    public function mount($page = 'profile')
    {
        $this->page = $page;
        $this->user = Auth::user();
    }

    protected $rules = [
        'user.name' => 'required|min:4',
        'user.email' => 'required|unique:user, id',
    ];

    public function render()
    {
        return view('livewire.settings');
    }
}
