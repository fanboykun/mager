<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(15)->create()->each(function ($user) {
            $identity = \App\Models\Identity::factory()->make();
            $user->identity()->save($identity);
        });
        \App\Models\Category::factory(5)->create();
        \App\Models\Tag::factory(5)->create();
        \App\Models\Event::factory(1)->create();
        \App\Models\Setting::factory(1)->create();
    }
}