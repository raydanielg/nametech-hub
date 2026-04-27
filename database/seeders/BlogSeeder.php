<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                'title' => 'The Future of Innovation in Africa',
                'category' => 'Startup Stories',
                'excerpt' => 'How technology is reshaping the startup landscape across the continent and what it means for the next generation of founders.',
                'content' => '
                <p>Africa is experiencing a technological renaissance that promises to transform the continent\'s economic landscape. From Nairobi\'s Silicon Savannah to Lagos\'s bustling tech hubs, innovation is taking root in ways that were unimaginable just a decade ago.</p>
                
                <h2>The Rise of African Tech Hubs</h2>
                <p>Across the continent, technology hubs are emerging as centers of innovation and entrepreneurship. These spaces provide not just infrastructure, but also mentorship, funding opportunities, and community support for aspiring entrepreneurs.</p>
                
                <blockquote>
                    "The next billion internet users will come from Africa. We\'re not just participating in the digital revolution—we\'re leading it."
                </blockquote>
                
                <h3>Key Sectors Driving Innovation</h3>
                <ul>
                    <li><strong>Fintech:</strong> Mobile money solutions are revolutionizing banking access</li>
                    <li><strong>AgriTech:</strong> Technology is optimizing food production and distribution</li>
                    <li><strong>HealthTech:</strong> Telemedicine and digital health solutions are expanding access</li>
                    <li><strong>EdTech:</strong> Online learning platforms are democratizing education</li>
                    <li><strong>CleanTech:</strong> Renewable energy solutions are powering communities</li>
                </ul>
                
                <h2>Success Stories That Inspire</h2>
                <p>Companies like Flutterwave, Paystack, and Andela have demonstrated that African startups can achieve global scale. These success stories are creating a ripple effect, inspiring a new generation of entrepreneurs and attracting significant investment.</p>
                
                <h3>Challenges and Opportunities</h3>
                <p>While the progress is remarkable, challenges remain. Infrastructure gaps, regulatory complexities, and access to funding continue to be hurdles. However, these challenges also present opportunities for innovation and creative problem-solving.</p>
                
                <h2>The Road Ahead</h2>
                <p>As we look to the future, the potential for African innovation seems limitless. With a young, tech-savvy population, increasing internet penetration, and growing investment interest, the continent is poised to become a major player in the global tech ecosystem.</p>
                
                <p>The question is no longer whether Africa will be a tech powerhouse, but how quickly we can scale these innovations to reach every corner of the continent. The future of innovation in Africa is bright, and it\'s being built today by ambitious founders, supportive ecosystems, and visionary investors.</p>
                ',
                'featured_image' => 'sampelsimaes/close-up-man-repairing-computer-chips_23-2150881003.jpg',
                'tags' => ['Innovation', 'Africa', 'Startups', 'Technology', 'Future'],
                'author_name' => 'Sarah Mwangi',
                'author_bio' => 'Tech journalist and innovation analyst with 10+ years covering African tech ecosystems.',
                'read_time' => 8,
                'views_count' => 12500,
                'is_featured' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Building a Scalable Business Model',
                'category' => 'Tech Tutorials',
                'excerpt' => 'Learn the key principles of creating a business that can grow sustainably in today\'s competitive market.',
                'content' => '
                <p>Building a scalable business model is the holy grail for entrepreneurs. It\'s the difference between a business that grows linearly with effort and one that can achieve exponential growth.</p>
                
                <h2>What is Scalability?</h2>
                <p>Scalability refers to a business\'s ability to grow and handle increased demand without compromising performance or efficiency. A scalable business can add customers, revenue, and market share without a corresponding increase in costs.</p>
                
                <h3>The Four Pillars of Scalability</h3>
                <ol>
                    <li><strong>Automated Systems:</strong> Reduce manual intervention</li>
                    <li><strong>Replicable Processes:</strong> Standardize operations</li>
                    <li><strong>Technology Leverage:</strong> Use tech to amplify impact</li>
                    <li><strong>Network Effects:</strong> Create value that increases with users</li>
                </ol>
                
                <blockquote>
                    "Scalability is not about doing more with less. It\'s about creating systems that amplify your impact exponentially."
                </blockquote>
                
                <h2>Practical Steps to Scale</h2>
                <p>Start by documenting every process in your business. Identify bottlenecks and manual tasks that can be automated. Invest in technology that can handle growth without proportional cost increases.</p>
                
                <h3>Technology as a Scaling Engine</h3>
                <p>Modern technology enables businesses to scale in ways that were previously impossible. Cloud computing, AI, and automation tools allow small teams to serve thousands of customers efficiently.</p>
                
                <p>Remember, scalability is not just about growth—it\'s about sustainable, efficient growth that maintains quality while expanding reach.</p>
                ',
                'featured_image' => 'sampelsimaes/close-up-man-repairing-computer-chips.jpg',
                'tags' => ['Business', 'Scaling', 'Startup', 'Growth', 'Strategy'],
                'author_name' => 'David Okonkwo',
                'author_bio' => 'Startup consultant and growth strategist helping African businesses scale globally.',
                'read_time' => 6,
                'views_count' => 8200,
                'is_featured' => false,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'The Future of VR Technology',
                'category' => 'Industry Insights',
                'excerpt' => 'Exploring how virtual reality is transforming industries from education to entertainment.',
                'content' => '
                <p>Virtual Reality (VR) is no longer just a gaming technology. It\'s rapidly becoming a transformative tool across multiple industries, from healthcare to real estate, education to manufacturing.</p>
                
                <h2>VR in Education</h2>
                <p>Immersive learning experiences are revolutionizing education. Students can now explore ancient Rome, dive into the human body, or conduct dangerous chemistry experiments—all in a safe, virtual environment.</p>
                
                <h3>Healthcare Applications</h3>
                <p>Surgeons are using VR for training, planning complex procedures, and even performing remote surgery. Therapy applications for PTSD, phobias, and rehabilitation are showing promising results.</p>
                
                <blockquote>
                    "VR is the ultimate empathy machine. It allows us to experience perspectives and environments that would otherwise be impossible."
                </blockquote>
                
                <h2>Business and Training</h2>
                <p>Companies are using VR for employee training, virtual meetings, and product prototyping. The ability to simulate real-world scenarios without real-world risks is invaluable.</p>
                
                <h3>The Future is Immersive</h3>
                <p>As hardware becomes more affordable and software more sophisticated, VR will become as commonplace as smartphones. The line between physical and digital reality will continue to blur.</p>
                ',
                'featured_image' => 'sampelsimaes/man-wearing-vr-headset-outdoor-futuristic-technology_53876-105391.jpg',
                'tags' => ['VR', 'Technology', 'Future', 'Innovation', 'Digital'],
                'author_name' => 'Dr. Amina Hassan',
                'author_bio' => 'Technology researcher specializing in immersive technologies and their applications in emerging markets.',
                'read_time' => 5,
                'views_count' => 6800,
                'is_featured' => false,
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'NAMTECH-HUB Welcomes New Partners',
                'category' => 'Hub Announcements',
                'excerpt' => 'We are excited to announce strategic partnerships with leading tech companies to accelerate innovation.',
                'content' => '
                <p>We are thrilled to announce that NAMTECH-HUB has entered into strategic partnerships with several leading technology companies and venture capital firms. These partnerships will significantly enhance our ability to support entrepreneurs and accelerate innovation across the region.</p>
                
                <h2>What This Means for Our Community</h2>
                <p>Our new partners bring not just funding, but expertise, networks, and resources that will be invaluable to our startup community. Members can expect:</p>
                
                <ul>
                    <li>Enhanced funding opportunities</li>
                    <li>Access to global markets and mentors</li>
                    <li>Advanced technology infrastructure</li>
                    <li>Expanded training and development programs</li>
                    <li>International networking events</li>
                </ul>
                
                <blockquote>
                    "These partnerships represent a significant milestone in our mission to foster innovation and entrepreneurship in Africa."
                </blockquote>
                
                <h3>Looking Ahead</h3>
                <p>Over the coming months, we will be rolling out new programs and initiatives made possible by these partnerships. Stay tuned for announcements about hackathons, demo days, and accelerator programs.</p>
                
                <p>We thank our community for your continued support and look forward to an exciting future together.</p>
                ',
                'featured_image' => 'sampelsimaes/photovoltaics-factory-engineer-using-vr-tech-build-models_482257-125969.jpg',
                'tags' => ['Partnership', 'NAMTECH-HUB', 'Community', 'Growth'],
                'author_name' => 'NAMTECH-HUB Team',
                'author_bio' => 'The official editorial team of NAMTECH-HUB, bringing you the latest updates from our innovation ecosystem.',
                'read_time' => 4,
                'views_count' => 4500,
                'is_featured' => false,
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Green Tech Innovation Guide',
                'category' => 'Industry Insights',
                'excerpt' => 'How renewable energy and smart manufacturing are shaping our sustainable future.',
                'content' => '
                <p>As climate change becomes an increasingly urgent concern, green technology is emerging as one of the most important sectors for innovation. From renewable energy to sustainable agriculture, technology is helping us build a more sustainable future.</p>
                
                <h2>The Green Tech Revolution</h2>
                <p>Green technology encompasses a wide range of innovations designed to reduce environmental impact. This includes renewable energy, energy efficiency, sustainable transportation, and waste reduction technologies.</p>
                
                <h3>Opportunities for Entrepreneurs</h3>
                <p>The green tech sector offers enormous opportunities for entrepreneurs. As governments and corporations commit to sustainability goals, the demand for innovative solutions is skyrocketing.</p>
                
                <blockquote>
                    "The greatest business opportunity of our time is solving climate change."
                </blockquote>
                
                <h2>Key Areas of Innovation</h2>
                <p>Solar and wind energy technologies continue to advance rapidly. Energy storage solutions are becoming more efficient and affordable. Smart grid technologies are optimizing energy distribution. Sustainable materials are replacing traditional, environmentally harmful options.</p>
                
                <h3>Building a Sustainable Business</h3>
                <p>For entrepreneurs, building a green tech business requires not just technical innovation, but also understanding policy landscapes, accessing appropriate funding, and building partnerships with established players in the energy sector.</p>
                ',
                'featured_image' => 'sampelsimaes/solar-panels-factory-engineer-using-vr-headset-improve-solar-energy_482257-125987.jpg',
                'tags' => ['Green Tech', 'Sustainability', 'Energy', 'Climate', 'Innovation'],
                'author_name' => 'James Ochieng',
                'author_bio' => 'Environmental scientist and clean tech advocate working on sustainable solutions for Africa.',
                'read_time' => 7,
                'views_count' => 3200,
                'is_featured' => false,
                'published_at' => now()->subDays(20),
            ],
        ];

        foreach ($posts as $post) {
            Blog::create($post);
        }
    }
}
