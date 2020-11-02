<?php

namespace App\Http\Livewire;

use App\Models\Hours;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Settings extends Component
{
    public $page;
    public User $user;
    public Profile $profile;
    public $monday;
    public $tuesday;
    public $wednesday;
    public $thursday;
    public $friday;
    public $saturday;
    public $sunday;

    public $dayOfWeekHeader = ['', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag', 'Søndag'];
    public $dayOfWeekName = ['', 'monday', 'tuesday','wednesday','tursday','friday','saturday','sunday'];
    public $dayOfWeek = [];


    public function mount($page = 'profile')
    {
        $this->page = $page;
        $this->user = Auth::user();
        $this->profile = $this->user->profile;
        $this->monday = $this->profile->weekdayHours(1);
        $this->tuesday = $this->profile->weekdayHours(2);
        $this->wednesday = $this->profile->weekdayHours(3);
        $this->thursday = $this->profile->weekdayHours(4);
        $this->friday = $this->profile->weekdayHours(5);
        $this->saturday = $this->profile->weekdayHours(6);
        $this->sunday = $this->profile->weekdayHours(7);
        $this->dayOfWeek = [
            1 => $this->profile->weekdayHours(1),
            2 => $this->profile->weekdayHours(2),
            3 => $this->profile->weekdayHours(3),
            4 => $this->profile->weekdayHours(4),
            5 => $this->profile->weekdayHours(5),
            6 => $this->profile->weekdayHours(6),
            7 => $this->profile->weekdayHours(7),
        ];
    }

    protected $rules = [
        // Profile
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
        // Hours
        'monday.*.weekday' => 'required|integer|between:1,7',
        'monday.*.opening_time' => 'required|date',
        'monday.*.closing_time' => 'required|date|after:hours.*.opening_time',
        'monday.*.online_booking' => 'required|boolean',
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
