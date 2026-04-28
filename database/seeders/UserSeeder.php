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
        $hubDirector = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'first_name' => 'Hub',
            'last_name' => 'Director',
            'email' => 'hub@namtech.io',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'hub_director',
            'status' => 'active',
        ]);
        $hubDirector->assignRole('hub_director');

        // 2. Studio Director
        $studioDirector = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'first_name' => 'Studio',
            'last_name' => 'Director',
            'email' => 'studio@namtech.io',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'studio_director',
            'status' => 'active',
        ]);
        $studioDirector->assignRole('studio_director');

        // 3. Startup Founder
        $founder = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'first_name' => 'John',
            'last_name' => 'Founder',
            'email' => 'founder@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'startup_founder',
            'status' => 'active',
        ]);
        $founder->assignRole('startup_founder');

        // 4. Mentor
        $mentor = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'first_name' => 'Jane',
            'last_name' => 'Mentor',
            'email' => 'mentor@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'mentor',
            'status' => 'active',
        ]);
        $mentor->assignRole('mentor');

        // 5. Investor
        $investor = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'first_name' => 'Rich',
            'last_name' => 'Investor',
            'email' => 'investor@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'investor',
            'status' => 'active',
        ]);
        $investor->assignRole('investor');

        // 6. Student
        $student = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'first_name' => 'Sam',
            'last_name' => 'Student',
            'email' => 'student@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'student',
            'status' => 'active',
        ]);
        $student->assignRole('student');
    }
}
