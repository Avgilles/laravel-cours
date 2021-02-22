<?php

namespace Database\Seeders;

use \App\Models\Task;
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
        // \App\Models\User::factory(10)->create();
        DB::table('tasks')->truncate(); #optionnel
        Task::factory(10)->create();
    }
}
