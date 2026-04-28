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
        $this->call([
            RoleSeeder::class,
            AdminUserSeeder::class,
            UserSeeder::class, // Hii ijumuishe Startup Founders, Mentors, Investors
            ProgramSeeder::class,
            StartupSeeder::class,
            MentorSeeder::class,
            InvestorSeeder::class,
            AcademyCourseSeeder::class,
            DigitalStudioProjectSeeder::class,
            MembershipSeeder::class,
            EventSeeder::class,
            BlogSeeder::class,
            ProductSeeder::class,
            ProductPlanSeeder::class,
            ProductFeatureSeeder::class,
            ProductAddonSeeder::class,
            ProductFaqSeeder::class,
        ]);
    }
}
