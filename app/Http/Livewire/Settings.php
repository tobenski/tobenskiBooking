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
    public Hours $newhour;

    public $dayOfWeekHeader = [];
    public $dayOfWeekName = [];
    public $dayOfWeek = [];


    public function mount($page = 'profile')
    {
        $this->page = $page;
        $this->user = Auth::user();
        $this->profile = $this->user->profile;
        $this->dayOfWeek = $this->fillDays();
        $this->newhour = new Hours([
            'weekday' => 0,
            'opening_time' => '0:00',
            'closing_time' => '0:00',
            'online_booking' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.settings');
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
        'newhour.weekday' => 'required|integer|between:1,7',
        'newhour.opening_time' => 'required|date',
        'newhour.closing_time' => 'required|date|after:dayOfWeek.*.opening_time',
        'newhour.online_booking' => 'required|boolean',
        'dayOfWeek.0.0.weekday' => 'required|integer|between:1,7',
        'dayOfWeek.0.0.opening_time' => 'required|date',
        'dayOfWeek.0.0.closing_time' => 'required|date|after:dayOfWeek.*.opening_time',
        'dayOfWeek.0.0.online_booking' => 'required|boolean',
        'dayOfWeek.*.*.weekday' => 'required|integer|between:1,7',
        'dayOfWeek.*.*.opening_time' => 'required|date',
        'dayOfWeek.*.*.closing_time' => 'required|date|after:dayOfWeek.*.opening_time',
        'dayOfWeek.*.*.online_booking' => 'required|boolean',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updateProfileData()
    {
        $this->validate([
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
        ]);
        $this->profile->save();
        session()->flash('message', __('Stamdata er opdateret!!'));
    }

    public function addHour()
    {
        $this->validate([
            'newhour.weekday' => 'required|integer|between:1,7',
            'newhour.opening_time' => 'required|date',
            'newhour.closing_time' => 'required|date|after:dayOfWeek.*.opening_time',
            'newhour.online_booking' => 'required|boolean',
        ]);
        $this->newhour->profile_id = $this->profile->id;
        $this->newhour->save();
        $this->newhour = new Hours([
            'weekday' => 0,
            'opening_time' => '0:00',
            'closing_time' => '0:00',
            'online_booking' => true,
        ]);
        $this->dayOfWeek = $this->fillDays();
        session()->flash('message', __('Åbningstid ´tilføjet!!'));
    }

    public function destroyHour($day = null, $index = null)
    {
        if ($day != null && $index != null) {
            $record = Hours::find($this->dayOfWeek[$day][$index]['id']);
            $record->delete();
            unset($this->dayOfWeek[$day][$index]);
        }
    }

    private function fillDays()
    {
        $this->dayOfWeekHeader = ['', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag', 'Søndag'];
        $this->dayOfWeekName = ['', 'monday', 'tuesday','wednesday','tursday','friday','saturday','sunday'];
        return [
            1 => $this->profile->weekdayHours(1),
            2 => $this->profile->weekdayHours(2),
            3 => $this->profile->weekdayHours(3),
            4 => $this->profile->weekdayHours(4),
            5 => $this->profile->weekdayHours(5),
            6 => $this->profile->weekdayHours(6),
            7 => $this->profile->weekdayHours(7),
        ];
    }
}
