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
        $cohort = Cohort::first();

        // Create multiple powerful startups
        $startups = [
            [
                'name' => 'TechNova Solutions',
                'slug' => 'technova-solutions',
                'description' => 'AI-powered supply chain optimization for African retailers, reducing costs by 40% and increasing efficiency.',
                'founder_email' => 'john@technova.io',
                'industry' => 'AI/ML',
                'website' => 'https://technova.io',
                'funding_status' => 'Series A',
                'progress' => 75,
                'team_size' => 15,
                'funding_raised' => 2500000
            ],
            [
                'name' => 'EduTech Africa',
                'slug' => 'edutech-africa',
                'description' => 'Digital learning platform connecting African students with quality education and skill development programs.',
                'founder_email' => 'sarah@edutechafrica.com',
                'industry' => 'EdTech',
                'website' => 'https://edutechafrica.com',
                'funding_status' => 'Seed',
                'progress' => 60,
                'team_size' => 8,
                'funding_raised' => 750000
            ],
            [
                'name' => 'FinTech Pro',
                'slug' => 'fintech-pro',
                'description' => 'Mobile-first banking solution for underserved communities in Africa with blockchain-based security.',
                'founder_email' => 'michael@fintechpro.com',
                'industry' => 'FinTech',
                'website' => 'https://fintechpro.com',
                'funding_status' => 'Series B',
                'progress' => 85,
                'team_size' => 25,
                'funding_raised' => 8500000
            ],
            [
                'name' => 'HealthConnect',
                'slug' => 'healthconnect',
                'description' => 'Telemedicine platform connecting rural patients with urban doctors for affordable healthcare access.',
                'founder_email' => 'emma@healthconnect.io',
                'industry' => 'HealthTech',
                'website' => 'https://healthconnect.io',
                'funding_status' => 'Pre-seed',
                'progress' => 35,
                'team_size' => 5,
                'funding_raised' => 150000
            ],
            [
                'name' => 'AgriSmart',
                'slug' => 'agrismart',
                'description' => 'IoT-powered farming solutions helping African farmers increase crop yields by 60% through smart agriculture.',
                'founder_email' => 'james@agrismart.africa',
                'industry' => 'AgriTech',
                'website' => 'https://agrismart.africa',
                'funding_status' => 'Seed',
                'progress' => 50,
                'team_size' => 12,
                'funding_raised' => 500000
            ],
            [
                'name' => 'LogisticsHub',
                'slug' => 'logisticshub',
                'description' => 'Real-time logistics and delivery management platform for e-commerce businesses across Africa.',
                'founder_email' => 'lisa@logisticshub.com',
                'industry' => 'Logistics',
                'website' => 'https://logisticshub.com',
                'funding_status' => 'Series A',
                'progress' => 70,
                'team_size' => 18,
                'funding_raised' => 3200000
            ]
        ];

        foreach ($startups as $startupData) {
            // Create or get founder user
            $founder = User::updateOrCreate(['email' => $startupData['founder_email']], [
                'name' => explode('@', $startupData['founder_email'])[0],
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role' => 'founder'
            ]);

            // Create startup
            $startup = Startup::updateOrCreate(['slug' => $startupData['slug']], [
                'id' => Str::uuid(),
                'name' => $startupData['name'],
                'description' => $startupData['description'],
                'founder_id' => $founder->id,
                'primary_contact_user_id' => $founder->id,
                'cohort_id' => $cohort->id ?? null,
                'industry' => $startupData['industry'],
                'status' => 'active',
                'progress' => $startupData['progress'],
                'website' => $startupData['website'],
                'funding_status' => $startupData['funding_status'],
                'team_size' => $startupData['team_size'],
                'funding_raised' => $startupData['funding_raised'],
                'revenue_mrr' => $startupData['funding_raised'] * 0.01, // 1% of funding as MRR
                'active_users' => rand(1000, 50000),
                'monthly_growth_rate' => rand(10, 30) / 100
            ]);

            // Create milestones for each startup
            $milestones = [
                [
                    'title' => 'MVP Development',
                    'description' => 'Build and launch the minimum viable product with core features.',
                    'status' => 'completed',
                    'due_date' => now()->subMonths(3)
                ],
                [
                    'title' => 'First 100 Users',
                    'description' => 'Acquire and onboard the first 100 active users.',
                    'status' => 'completed',
                    'due_date' => now()->subMonths(2)
                ],
                [
                    'title' => 'Product-Market Fit',
                    'description' => 'Achieve product-market fit with validated business model.',
                    'status' => $startupData['progress'] > 60 ? 'completed' : 'in_progress',
                    'due_date' => $startupData['progress'] > 60 ? now()->subMonth() : now()->addMonth()
                ],
                [
                    'title' => 'Series A Funding',
                    'description' => 'Secure Series A funding round for growth and expansion.',
                    'status' => $startupData['progress'] > 80 ? 'completed' : ($startupData['progress'] > 50 ? 'in_progress' : 'pending'),
                    'due_date' => $startupData['progress'] > 80 ? now()->subWeeks(2) : now()->addMonths(3)
                ],
                [
                    'title' => 'Team Expansion',
                    'description' => 'Grow the team to 20+ employees across key departments.',
                    'status' => $startupData['team_size'] > 15 ? 'completed' : ($startupData['team_size'] > 10 ? 'in_progress' : 'pending'),
                    'due_date' => $startupData['team_size'] > 15 ? now()->subWeek() : now()->addMonths(2)
                ]
            ];

            foreach ($milestones as $milestoneData) {
                Milestone::updateOrCreate([
                    'startup_id' => $startup->id,
                    'title' => $milestoneData['title']
                ], [
                    'id' => Str::uuid(),
                    'description' => $milestoneData['description'],
                    'status' => $milestoneData['status'],
                    'due_date' => $milestoneData['due_date'],
                    'completed_at' => $milestoneData['status'] === 'completed' ? $milestoneData['due_date'] : null
                ]);
            }
        }
    }
}
