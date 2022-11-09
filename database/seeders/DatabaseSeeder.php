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
            UserSeeder::class,
            ProfileSeeder::class,
            SkillSeeder::class,
            ExperienceSeeder::class,
            EducationalSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
