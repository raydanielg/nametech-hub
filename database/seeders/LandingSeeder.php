<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Announcement;
use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LandingSeeder extends Seeder
{
    public function run()
    {
        // 1. Announcements (Latest from NIDOS)
        Announcement::updateOrCreate(['content' => "Early bird offer: Get 20% off Launchpad if you apply by May 30."], [
            'badge_text' => 'New',
            'link_text' => "Learn More",
            'url' => '/products/launchpad',
            'is_active' => true
        ]);

        // 2. Partners (Trusted by Industry Leaders)
        $partners = [
            ['name' => 'Google for Startups', 'order' => 0],
            ['name' => 'AWS', 'order' => 1],
            ['name' => 'Stripe', 'order' => 2],
            ['name' => 'Y Combinator', 'order' => 3],
            ['name' => 'GitHub', 'order' => 4],
            ['name' => 'Microsoft', 'order' => 5],
            ['name' => 'Reddit', 'order' => 6],
            ['name' => 'Product Hunt', 'order' => 7],
        ];
        foreach ($partners as $p) {
            Partner::updateOrCreate(['name' => $p['name']], [
                'is_active' => true,
                'order' => $p['order']
            ]);
        }

        // 3. Programs (Core Offerings)
        $programs = [
            [
                'title' => 'Launchpad', 
                'desc' => '6-month intensive startup incubation program for early-stage founders.', 
                'price' => 299, 
                'duration' => '6 Months'
            ],
            [
                'title' => 'Scale', 
                'desc' => '3-month growth acceleration program for post-revenue startups seeking investment.', 
                'price' => 999, 
                'duration' => '3 Months'
            ],
            [
                'title' => 'NAMTECH Academy', 
                'desc' => 'Elite technical training for developers to master full-stack and modern tech stacks.', 
                'price' => 199, 
                'duration' => '12 Weeks'
            ],
        ];
        foreach ($programs as $p) {
            Program::updateOrCreate(['title' => $p['title']], [
                'slug' => Str::slug($p['title']),
                'description' => $p['desc'],
                'price' => $p['price'],
                'duration' => $p['duration'],
                'is_active' => true
            ]);
        }
    }
}
