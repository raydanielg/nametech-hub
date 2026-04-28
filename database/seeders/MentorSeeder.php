<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentor = \App\Models\User::where('email', 'mentor@example.com')->first();
        $startup = \App\Models\Startup::first();

        if ($mentor && $startup) {
            \App\Models\MentorshipSession::create([
                'id' => \Illuminate\Support\Str::uuid(),
                'mentor_id' => $mentor->id,
                'startup_id' => $startup->id,
                'mentee_id' => $startup->founder_id,
                'title' => 'Go-to-Market Strategy Review',
                'description' => 'Reviewing the initial GTM strategy and identifying key channels.',
                'start_time' => now()->addDays(1)->setTime(10, 0),
                'duration' => 60,
                'status' => 'pending',
                'meeting_link' => 'https://zoom.us/j/123456789',
            ]);

            \App\Models\MentorshipSession::create([
                'id' => \Illuminate\Support\Str::uuid(),
                'mentor_id' => $mentor->id,
                'startup_id' => $startup->id,
                'mentee_id' => $startup->founder_id,
                'title' => 'Product Roadmap Planning',
                'description' => 'Detailed planning for the next 3 months of product development.',
                'start_time' => now()->subDays(2)->setTime(14, 0),
                'duration' => 90,
                'status' => 'completed',
                'summary' => 'Product roadmap finalized for Q3.',
            ]);
        }
    }
}
