<?php

namespace Database\Seeders;

use App\Models\Hours;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class HoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile_id = Profile::where('email', 'kontakt@det-gamle-posthus.dk')->first()->id;
        Hours::create([
            'weekday' => 1,
            'opening_time' => '11:30',
            'closing_time' => '16:30',
            'online_booking' => true,
            'profile_id' => $profile_id,
        ]);
        Hours::create([
            'weekday' => 1,
            'opening_time' => '17:30',
            'closing_time' => '22:00',
            'online_booking' => true,
            'profile_id' => $profile_id,
        ]);/*
        Hours::create([
            'weekday' => 3,
            'opening_time' => Carbon::createFromTime(11,30,0),
            'closing_time' => Carbon::createFromTime(21,30,0),
            'online_booking' => true,
            'profile_id' => $profile_id,
        ]);
        Hours::create([
            'weekday' => 4,
            'opening_time' => Carbon::createFromTime(11,30,0),
            'closing_time' => Carbon::createFromTime(21,30,0),
            'online_booking' => true,
            'profile_id' => $profile_id,
        ]);
        Hours::create([
            'weekday' => 5,
            'opening_time' => Carbon::createFromTime(11,30,0),
            'closing_time' => Carbon::createFromTime(21,30,0),
            'online_booking' => true,
            'profile_id' => $profile_id,
        ]);
        Hours::create([
            'weekday' => 6,
            'opening_time' => Carbon::createFromTime(11,30,0),
            'closing_time' => Carbon::createFromTime(21,30,0),
            'online_booking' => true,
            'profile_id' => $profile_id,
        ]);
        Hours::create([
            'weekday' => 7,
            'opening_time' => Carbon::createFromTime(11,30,0),
            'closing_time' => Carbon::createFromTime(21,30,0),
            'online_booking' => true,
            'profile_id' => $profile_id,
        ]);*/
    }
}
