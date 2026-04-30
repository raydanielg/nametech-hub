<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Startup;
use App\Models\Mentor;
use App\Models\MentorAssignment;
use App\Models\MentorSession;
use Illuminate\Support\Str;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startup = Startup::first();

        // Create multiple powerful mentors
        $mentors = [
            [
                'name' => 'Dr. Sarah Williams',
                'email' => 'sarah.williams@mentor.com',
                'expertise_areas' => ['AI/ML', 'Product Strategy', 'Scaling'],
                'years_of_experience' => 15,
                'current_role' => 'VP of Product',
                'company' => 'Tech Unicorn Inc.',
                'bio' => 'Former CTO at 3 unicorns. Expert in AI-driven product development and scaling tech startups globally.',
                'avatar' => 'https://i.pravatar.cc/150?u=sarahmentor',
                'rating' => 4.9,
                'sessions_completed' => 127
            ],
            [
                'name' => 'Michael Chen',
                'email' => 'michael.chen@mentor.com',
                'expertise_areas' => ['Fintech', 'Blockchain', 'Investment'],
                'years_of_experience' => 12,
                'current_role' => 'Managing Partner',
                'company' => 'Africa Ventures Fund',
                'bio' => 'Invested in 50+ African startups. Deep expertise in fintech, payments, and blockchain technology.',
                'avatar' => 'https://i.pravatar.cc/150?u=michaelmentor',
                'rating' => 4.8,
                'sessions_completed' => 98
            ],
            [
                'name' => 'Emma Thompson',
                'email' => 'emma.thompson@mentor.com',
                'expertise_areas' => ['Marketing', 'Growth Hacking', 'Branding'],
                'years_of_experience' => 10,
                'current_role' => 'CMO',
                'company' => 'Growth Masters Agency',
                'bio' => 'Scaled 3 startups from 0 to 1M+ users. Expert in digital marketing and growth strategies.',
                'avatar' => 'https://i.pravatar.cc/150?u/emmamentor',
                'rating' => 4.7,
                'sessions_completed' => 156
            ],
            [
                'name' => 'James Rodriguez',
                'email' => 'james.rodriguez@mentor.com',
                'expertise_areas' => ['Sales', 'B2B Strategy', 'Partnerships'],
                'years_of_experience' => 18,
                'current_role' => 'VP of Sales',
                'company' => 'Enterprise Solutions Co.',
                'bio' => 'Built sales teams from scratch that generated $100M+ in revenue. Expert in B2B sales and strategic partnerships.',
                'avatar' => 'https://i.pravatar.cc/150?u=jamesmentor',
                'rating' => 4.9,
                'sessions_completed' => 203
            ],
            [
                'name' => 'Lisa Park',
                'email' => 'lisa.park@mentor.com',
                'expertise_areas' => ['Operations', 'Process Optimization', 'Team Building'],
                'years_of_experience' => 14,
                'current_role' => 'COO',
                'company' => 'ScaleOps Inc.',
                'bio' => 'Streamlined operations for 20+ startups. Expert in building efficient processes and high-performing teams.',
                'avatar' => 'https://i.pravatar.cc/150?u=lisamentor',
                'rating' => 4.6,
                'sessions_completed' => 87
            ]
        ];

        foreach ($mentors as $mentorData) {
            // Create or get user for mentor
            $user = User::updateOrCreate(['email' => $mentorData['email']], [
                'name' => $mentorData['name'],
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role' => 'mentor'
            ]);

            // Create mentor record
            $mentor = Mentor::updateOrCreate(['user_id' => $user->id], [
                'id' => Str::uuid(),
                'expertise_areas' => $mentorData['expertise_areas'],
                'years_of_experience' => $mentorData['years_of_experience'],
                'current_role' => $mentorData['current_role'],
                'company' => $mentorData['company'],
                'bio' => $mentorData['bio'],
                'avatar' => $mentorData['avatar'],
                'rating' => $mentorData['rating'],
                'sessions_completed' => $mentorData['sessions_completed'],
                'is_active' => true
            ]);

            // Create assignments and sessions if startup exists
            if ($startup) {
                $assignment = MentorAssignment::updateOrCreate([
                    'mentor_id' => $mentor->id,
                    'startup_id' => $startup->id
                ], [
                    'id' => Str::uuid(),
                    'program_type' => ['Launchpad', 'Scale', 'Academy'][array_rand(['Launchpad', 'Scale', 'Academy'])],
                    'status' => 'active',
                    'start_date' => now()->subDays(rand(1, 30)),
                ]);

                // Create multiple sessions
                for ($i = 0; $i < 3; $i++) {
                    $status = rand(0, 1) ? 'completed' : 'scheduled';
                    $scheduledAt = $status === 'completed' 
                        ? now()->subDays(rand(1, 20)) 
                        : now()->addDays(rand(1, 14));

                    MentorSession::create([
                        'id' => Str::uuid(),
                        'assignment_id' => $assignment->id,
                        'scheduled_at' => $scheduledAt->setTime(10 + $i * 2, 0),
                        'duration_minutes' => [60, 90, 120][array_rand([60, 90, 120])],
                        'status' => $status,
                        'meeting_link' => 'https://zoom.us/j/' . rand(100000000, 999999999),
                        'notes' => [
                            'Product Strategy Review and Market Analysis',
                            'Go-to-Market Planning and Customer Acquisition',
                            'Team Building and Organizational Structure',
                            'Financial Planning and Fundraising Strategy',
                            'Technical Architecture and Scalability Review'
                        ][array_rand([
                            'Product Strategy Review and Market Analysis',
                            'Go-to-Market Planning and Customer Acquisition',
                            'Team Building and Organizational Structure',
                            'Financial Planning and Fundraising Strategy',
                            'Technical Architecture and Scalability Review'
                        ])],
                        'feedback_from_startup' => $status === 'completed' ? [
                            'Excellent session! Very insightful and practical advice.',
                            'Game-changing insights that transformed our approach.',
                            'Highly recommended! Helped us avoid costly mistakes.',
                            'Amazing mentorship! Clear action items and follow-up.',
                            'Professional and experienced. Delivered real value.'
                        ][array_rand([
                            'Excellent session! Very insightful and practical advice.',
                            'Game-changing insights that transformed our approach.',
                            'Highly recommended! Helped us avoid costly mistakes.',
                            'Amazing mentorship! Clear action items and follow-up.',
                            'Professional and experienced. Delivered real value.'
                        ])] : null,
                        'rating_from_startup' => $status === 'completed' ? rand(4, 5) : null,
                    ]);
                }
            }
        }
    }
}
