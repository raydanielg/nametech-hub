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
        // 4. Testimonials
        $testimonials = [
            ['name' => 'Andrew Brown', 'handle' => '@andrewbrown', 'content' => 'I think @namtechhub will win the tech ecosystem wars. What leads me to believe this is beyond the product itself and how the team executes.'],
            ['name' => 'Alex Finn', 'handle' => '@AlexFinnX', 'content' => 'Unreal. I just built an entire MVP in NAMTECH Digital Studio with 1 prompt and expert guidance.'],
            ['name' => 'The Jack Forge', 'handle' => '@TheJackForge', 'content' => 'I\'ve been exclusively using NIDOS for the past 3 weeks. They are not paying me to say this. It\'s really good. Really really good.'],
            ['name' => 'Alvaro Cintas', 'handle' => '@dr_cintas', 'content' => 'NAMTECH Academy is one of the best technical training grounds I have ever used. High quality and direct.'],
            ['name' => 'The Bodega Man', 'handle' => '@TheBodegaMan1', 'content' => 'The reason I chose NAMTECH is because you guys are on a constant mission of streamlining, improving and generally making the experience better for your users.'],
            ['name' => 'elvis', 'handle' => '@omarsar0', 'content' => 'NAMTECH makes innovation insanely fun and fast! Build faster, scale better.'],
            ['name' => 'Catalin', 'handle' => '@catalinmpit', 'content' => 'One of the many cool features of the NIDOS platform is the Synergy Model that connects talent directly to jobs.'],
            ['name' => 'Tom Blomfield', 'handle' => '@t_blom', 'content' => 'I\'ve been building a new thing with NAMTECH Studio and I spent the last hour in almost hysterical laughter because the responses are just so good.'],
        ];

        foreach ($testimonials as $t) {
            \App\Models\Testimonial::updateOrCreate(['handle' => $t['handle']], [
                'name' => $t['name'],
                'content' => $t['content'],
                'is_active' => true
            ]);
        }
    }
}
