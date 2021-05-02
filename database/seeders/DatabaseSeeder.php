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
        // \App\Models\User::factory(10)->create();
        $this->call([
            SubjectSeeder::class,
        ]);
        \App\Models\SchoolClass::factory(5)->create();
        \App\Models\Student::factory(300)->create();
        \App\Models\Teacher::factory(20)->create();
    }
}
