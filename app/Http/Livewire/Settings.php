<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Settings extends Component
{
    public $page;
    public User $user;
    public Profile $profile;

    public function mount($page = 'profile')
    {
        $this->page = $page;
        $this->user = Auth::user();
        $this->profile = $this->user->profile;
    }

    protected $rules = [
        'profile.name' => 'required|min:4',
        'profile.email' => 'required|email',
        'profile.phone' => 'required|min:8',
        'profile.address' => 'nullable',
        'profile.zip' => 'nullable|integer|between:1000,9999',
        'profile.city' => 'nullable',
        'profile.country' => 'nullable',
        'profile.lang' => 'nullable',
        'profile.timezone' => 'nullable',
        'profile.24_hour' => 'boolean',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function opdater()
    {
        $this->validate();
        $this->profile->save();
        session()->flash('message', __('Stamdata er opdateret!!'));
    }



    public function render()
    {
        return view('livewire.settings');
    }
}
