<?php

namespace Database\Seeders;

use App\Models\Team;
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
         \App\Models\User::factory(2)->sequence(
             ['name' => 'dom','email' => 'dthomas@codenco.fr',],
             ['name' => 'Nathan','email' => 'nathan76.thomas@gmail.com',],
         )->create();

         $this->call(TeamSeeder::class);
    }
}
