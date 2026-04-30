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
        // 4. Programs (Core Offerings)
        foreach ($programs as $p) {
            Program::updateOrCreate(['title' => $p['title']], [
                'description' => $p['desc'],
                'price' => $p['price'],
                'duration' => $p['duration'],
                'is_active' => true
            ]);
        }

        // 5. Testimonials - Enhanced with Powerful Success Stories
        $testimonials = [
            ['name' => 'John Smith', 'handle' => '@johnsmith', 'content' => 'NAMTECH-HUB transformed our startup from just an idea to a thriving business. The mentorship and funding we received were game-changers. We couldn\'t have done it without their support. Raised $2.5M Series A!'],
            ['name' => 'Sarah Johnson', 'handle' => '@sarahj', 'content' => 'The Digital Studio team built our MVP in record time. Their expertise and dedication helped us launch 3 months ahead of schedule. Now we have 10K+ active users and growing!'],
            ['name' => 'Michael Chen', 'handle' => '@mchen', 'content' => 'The Scale program helped us grow from 5 to 50 employees in just 6 months. The network and resources provided are invaluable for any serious entrepreneur. Series B ready!'],
            ['name' => 'Emma Wilson', 'handle' => '@emmaw', 'content' => 'Amazing community and incredible mentorship! NAMTECH-HUB changed my entrepreneurial journey forever. Launchpad graduate with a thriving EdTech startup.'],
            ['name' => 'David Kim', 'handle' => '@davidk', 'content' => 'Best decision I made for my startup! The resources and network are unmatched. From idea to revenue in 4 months thanks to NAMTECH Academy.'],
            ['name' => 'Lisa Anderson', 'handle' => '@lisaa', 'content' => 'Transformative experience for our team. The innovation hub provided the perfect environment to collaborate and grow. Highly recommend to all entrepreneurs!'],
            ['name' => 'James Taylor', 'handle' => '@jamest', 'content' => 'NAMTECH makes innovation insanely fun and fast! Built our entire fintech platform with their digital studio. The support is incredible!'],
            ['name' => 'Maria Garcia', 'handle' => '@mariag', 'content' => 'The mentorship program connected us with investors who believed in our vision. Now we\'re expanding to 3 new markets. Thank you NAMTECH-HUB!'],
            ['name' => 'Robert Brown', 'handle' => '@robertb', 'content' => 'I\'ve been building startups for 10 years, and NAMTECH-HUB is by far the best ecosystem I\'ve experienced. The quality of programs and people is unmatched.'],
            ['name' => 'Jennifer Lee', 'handle' => '@jennl', 'content' => 'From a solo founder to a team of 25 in 8 months! The Scale program gave us the tools and connections needed for rapid growth. Game-changing!'],
            ['name' => 'Alex Thompson', 'handle' => '@alext', 'content' => 'The Academy courses are top-notch! Learned full-stack development and landed my dream job at a unicorn startup. NAMTECH delivers real results!'],
            ['name' => 'Patricia Davis', 'handle' => '@patriciad', 'content' => 'Innovation Hub is more than just a workspace - it\'s a community that pushes you to be better. Made lifelong connections and partnerships here!'],
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
