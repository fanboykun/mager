<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\User;
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
        \App\Models\Division::factory(5)->has(
            \App\Models\User::factory()->count(3)
            )
            ->create();

        $divisions = Division::all();
        foreach ($divisions as $division){
            \App\Models\User::factory()->for($division)->create()->each(function ($user) use ($division){
                $user->manager()->save($division);
            });
            $project = \App\Models\Project::factory()->make();
            $division->projects()->save($project);
            $announcement =  \App\Models\Announcement::factory()->make();
            $division->announcements()->save($announcement);
        }

        User::all()->each(function ($user) {
            $identity = \App\Models\Identity::factory()->make();
            $user->identity()->save($identity);

            $category = \App\Models\Category::factory()->create();
            \App\Models\Article::factory()->for($user)->for($category)->hasAttached(
                \App\Models\Tag::factory()->count(3)
                )
                ->create();
        });

        \App\Models\Event::factory(1)->create();
        \App\Models\Setting::factory(1)->create();
        \App\Models\Schedule::factory(10)->create();
    }
}
