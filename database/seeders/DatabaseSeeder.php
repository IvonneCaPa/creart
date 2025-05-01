<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Photo;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(4)->create();
       Event::factory(20)->create();
       Gallery::factory(6)->create();
       Photo::factory(20)->create();
    }
}
