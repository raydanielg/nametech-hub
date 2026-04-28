<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Cohort;
use App\Models\Startup;
use App\Models\Milestone;
use Illuminate\Support\Str;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $founder = User::where('email', 'founder@example.com')->first();
        $cohort = Cohort::first();

        if ($founder) {
            $startup = Startup::create([
                'id' => Str::uuid(),
                'name' => 'TechNova Solutions',
                'slug' => Str::slug('TechNova Solutions'),
                'description' => 'AI-powered supply chain optimization for African retailers.',
                'primary_contact_user_id' => $founder->id,
                'cohort_id' => $cohort->id ?? null,
                'industry' => 'Fintech',
                'status' => 'active',
                'progress' => 45,
                'website' => 'https://technova.io',
                'funding_status' => 'Pre-seed',
            ]);

            Milestone::create([
                'id' => Str::uuid(),
                'startup_id' => $startup->id,
                'title' => 'MVP Launch',
                'description' => 'Complete the initial version of the product and launch to first 10 beta users.',
                'due_date' => now()->addWeeks(2),
                'status' => 'pending',
            ]);

            Milestone::create([
                'id' => Str::uuid(),
                'startup_id' => $startup->id,
                'title' => 'Business Model Canvas',
                'description' => 'Finalize the BMC and validate with mentors.',
                'due_date' => now()->subWeeks(1),
                'status' => 'completed',
            ]);
        }
    }
}
