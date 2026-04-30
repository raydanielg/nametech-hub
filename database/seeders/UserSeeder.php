<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Hub Director
        $hubDirector = \App\Models\User::updateOrCreate(
            ['email' => 'hub@namtech.io'],
            [
                'name' => 'Hub Director',
                'first_name' => 'Hub',
                'last_name' => 'Director',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'hub_director',
                'status' => 'active',
                'email_verified_at' => now(),
            ]
        );
        $hubDirector->assignRole('hub_director');

        // 2. Studio Director
        $studioDirector = \App\Models\User::updateOrCreate(
            ['email' => 'studio@namtech.io'],
            [
                'name' => 'Studio Director',
                'first_name' => 'Studio',
                'last_name' => 'Director',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'studio_director',
                'status' => 'active',
                'email_verified_at' => now(),
            ]
        );
        $studioDirector->assignRole('studio_director');

        // 3. Startup Founder
        $founder = \App\Models\User::updateOrCreate(
            ['email' => 'founder@example.com'],
            [
                'name' => 'John Founder',
                'first_name' => 'John',
                'last_name' => 'Founder',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'startup_founder',
                'status' => 'active',
                'email_verified_at' => now(),
            ]
        );
        $founder->assignRole('startup_founder');

        // 4. Mentor
        $mentor = \App\Models\User::updateOrCreate(
            ['email' => 'mentor@example.com'],
            [
                'name' => 'Jane Mentor',
                'first_name' => 'Jane',
                'last_name' => 'Mentor',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'mentor',
                'status' => 'active',
                'email_verified_at' => now(),
            ]
        );
        $mentor->assignRole('mentor');

        // 5. Investor
        $investor = \App\Models\User::updateOrCreate(
            ['email' => 'investor@example.com'],
            [
                'name' => 'Rich Investor',
                'first_name' => 'Rich',
                'last_name' => 'Investor',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'investor',
                'status' => 'active',
                'email_verified_at' => now(),
            ]
        );
        $investor->assignRole('investor');

        // 6. Student
        $student = \App\Models\User::updateOrCreate(
            ['email' => 'student@example.com'],
            [
                'name' => 'Sam Student',
                'first_name' => 'Sam',
                'last_name' => 'Student',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'student',
                'status' => 'active',
                'email_verified_at' => now(),
            ]
        );
        $student->assignRole('student');
    }
}
