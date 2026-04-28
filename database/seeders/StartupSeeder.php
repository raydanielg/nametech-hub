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
            $startup = \App\Models\Startup::create([
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

            \App\Models\Milestone::create([
                'id' => \Illuminate\Support\Str::uuid(),
                'startup_id' => $startup->id,
                'title' => 'MVP Launch',
                'description' => 'Complete the initial version of the product and launch to first 10 beta users.',
                'due_date' => now()->addWeeks(2),
                'status' => 'pending',
            ]);

            \App\Models\Milestone::create([
                'id' => \Illuminate\Support\Str::uuid(),
                'startup_id' => $startup->id,
                'title' => 'Business Model Canvas',
                'description' => 'Finalize the BMC and validate with mentors.',
                'due_date' => now()->subWeeks(1),
                'status' => 'completed',
            ]);
        }
    }
}
