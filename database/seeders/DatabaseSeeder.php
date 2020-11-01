<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Det Gamle Posthus',
            'phone' => '42807678',
            'email' => 'kontakt@det-gamle-posthus.dk',
            'password' => Hash::make('Password'),
            'email_verified_at' => Carbon::now(),
            'active' => true,
        ]);
        User::create([
            'name' => 'Knudhule Badehotel',
            'phone' => '42807678',
            'email' => 'info@knudhule.dk',
            'password' => Hash::make('Password'),
            'email_verified_at' => Carbon::now(),
            'active' => false,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
