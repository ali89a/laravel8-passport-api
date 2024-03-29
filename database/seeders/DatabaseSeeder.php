<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
         \App\Models\Category::factory(1000)->create();
        \App\Models\Post::factory(1000)->create();
        // \App\Models\User::factory(10)->create();

    }
}
