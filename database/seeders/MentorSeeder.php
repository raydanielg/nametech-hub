<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Startup;
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
        $mentor = User::where('email', 'mentor@example.com')->first();
        $startup = Startup::first();

        if ($mentor && $startup) {
            // Create Assignment first
            $assignment = MentorAssignment::create([
                'id' => Str::uuid(),
                'mentor_id' => $mentor->id,
                'startup_id' => $startup->id,
                'status' => 'active',
                'started_at' => now(),
            ]);

            // Create Sessions using the assignment_id
            MentorSession::create([
                'id' => Str::uuid(),
                'assignment_id' => $assignment->id,
                'scheduled_at' => now()->addDays(1)->setTime(10, 0),
                'duration_minutes' => 60,
                'status' => 'scheduled',
                'meeting_link' => 'https://zoom.us/j/123456789',
                'notes' => 'Go-to-Market Strategy Review',
            ]);

            MentorSession::create([
                'id' => Str::uuid(),
                'assignment_id' => $assignment->id,
                'scheduled_at' => now()->subDays(2)->setTime(14, 0),
                'duration_minutes' => 90,
                'status' => 'completed',
                'notes' => 'Product Roadmap Planning',
                'feedback_from_startup' => 'Excellent session, roadmap finalized for Q3.',
                'rating_from_startup' => 5,
            ]);
        }
    }
}
