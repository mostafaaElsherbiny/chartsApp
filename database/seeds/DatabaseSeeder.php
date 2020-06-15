<?php

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
        // Factory('App\User',20)->create();
        // $this->call(PostSeeder::class);
        $this->call(LogSeeder::class);
    }
}
