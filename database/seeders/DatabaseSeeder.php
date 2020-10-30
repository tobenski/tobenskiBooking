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
            'email' => 'kontakt@det-gamle-posthus.dk',
            'password' => Hash::make('Password'),
            'email_verified_at' => Carbon::now(),
            'active' => true,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
