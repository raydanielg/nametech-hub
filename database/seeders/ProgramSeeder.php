<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'title' => 'Launchpad',
                'description' => 'A 6-month incubation program for early-stage startups to build their MVP and validate their business model.',
                'duration' => '24 Weeks',
                'price' => 299.00,
                'icon' => 'rocket'
            ],
            [
                'title' => 'Scale',
                'description' => 'Advanced acceleration for startups with traction looking to scale their operations and raise investment.',
                'duration' => '12 Months',
                'price' => 999.00,
                'icon' => 'trending-up'
            ],
            [
                'title' => 'Academy',
                'description' => 'Intensive technical training for developers to master full-stack development and modern tech stacks.',
                'duration' => '12 Weeks',
                'price' => 199.00,
                'icon' => 'code'
            ],
        ];

        foreach ($programs as $program) {
            Program::create([
                'title' => $program['title'],
                'slug' => Str::slug($program['title']),
                'description' => $program['description'],
                'duration' => $program['duration'],
                'price' => $program['price'],
                'icon' => $program['icon'],
                'is_active' => true,
            ]);
        }
    }
}
