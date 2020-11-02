<?php

namespace Database\Seeders;

use App\Models\Hours;
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
        $this->call([
            ProfileSeeder::class,
            UserSeeder::class,
            HoursSeeder::class,
            RoomSeeder::class,
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
