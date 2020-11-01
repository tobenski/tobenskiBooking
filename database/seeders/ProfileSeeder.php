<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name' => 'Det Gamle Posthus',
            'email' => 'kontakt@det-gamle-posthus.dk',
            'phone' => '42807678'
        ]);
        Profile::factory(10)->create();
    }
}
