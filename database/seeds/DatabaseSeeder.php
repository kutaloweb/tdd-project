<?php

use Illuminate\Database\Seeder;
use App\Thread;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Thread::class, 50)->create();
    }
}
