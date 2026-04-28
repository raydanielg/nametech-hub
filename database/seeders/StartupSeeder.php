<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $founder = \App\Models\User::where('email', 'founder@example.com')->first();
        $cohort = \App\Models\ProgramCohort::first();

        if ($founder) {
            \App\Models\Startup::create([
                'id' => \Illuminate\Support\Str::uuid(),
                'name' => 'TechNova Solutions',
                'description' => 'AI-powered supply chain optimization for African retailers.',
                'founder_id' => $founder->id,
                'cohort_id' => $cohort->id ?? null,
                'industry' => 'Fintech',
                'status' => 'active',
                'progress' => 45,
                'website' => 'https://technova.io',
                'funding_status' => 'Pre-seed',
            ]);
        }
    }
}
