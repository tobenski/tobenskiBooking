<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = User::create([
            'name' => 'Knud Rishøj',
            'phone' => '23290172',
            'email' => 'knud@det-gamle-posthus.dk',
            'password' => Hash::make('Password'),
            'email_verified_at' => Carbon::now(),
            'profile_id' => 1
        ]);
        $u->addRole('admin');
        User::create([
            'name' => 'Knudhule Badehotel',
            'phone' => '42807678',
            'email' => 'info@knudhule.dk',
            'password' => Hash::make('Password'),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
