<?php

namespace Database\Seeders;

use App\Models\DigitalStudioProject;
use Illuminate\Database\Seeder;

class DigitalStudioProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'project_type' => 'Landing Page / Brochure Website',
                'complexity' => 'simple',
                'min_price' => 500,
                'max_price' => 2000,
                'typical_timeline' => '1-2 weeks',
                'description' => 'Simple landing pages and brochure websites',
                'sort_order' => 1,
            ],
            [
                'project_type' => 'Business Website (5-10 pages)',
                'complexity' => 'basic',
                'min_price' => 2000,
                'max_price' => 5000,
                'typical_timeline' => '2-4 weeks',
                'description' => 'Professional business websites with multiple pages',
                'sort_order' => 2,
            ],
            [
                'project_type' => 'Custom Web Application',
                'complexity' => 'medium',
                'min_price' => 5000,
                'max_price' => 15000,
                'typical_timeline' => '4-8 weeks',
                'description' => 'Custom web applications with advanced functionality',
                'sort_order' => 3,
            ],
            [
                'project_type' => 'E-commerce Platform',
                'complexity' => 'medium',
                'min_price' => 8000,
                'max_price' => 20000,
                'typical_timeline' => '6-10 weeks',
                'description' => 'Full-featured e-commerce platforms',
                'sort_order' => 4,
            ],
            [
                'project_type' => 'Mobile App (iOS or Android)',
                'complexity' => 'medium',
                'min_price' => 10000,
                'max_price' => 25000,
                'typical_timeline' => '8-12 weeks',
                'description' => 'Native mobile applications for iOS or Android',
                'sort_order' => 5,
            ],
            [
                'project_type' => 'Cross-Platform Mobile App (both)',
                'complexity' => 'high',
                'min_price' => 15000,
                'max_price' => 40000,
                'typical_timeline' => '10-14 weeks',
                'description' => 'Cross-platform mobile apps for both iOS and Android',
                'sort_order' => 6,
            ],
            [
                'project_type' => 'Enterprise SaaS Platform',
                'complexity' => 'high',
                'min_price' => 25000,
                'max_price' => 75000,
                'typical_timeline' => '12-20 weeks',
                'description' => 'Enterprise-grade SaaS platforms',
                'sort_order' => 7,
            ],
            [
                'project_type' => 'E-government / Civic Tech Platform',
                'complexity' => 'high',
                'min_price' => 30000,
                'max_price' => 100000,
                'typical_timeline' => '16-24 weeks',
                'description' => 'Government and civic technology platforms',
                'sort_order' => 8,
            ],
            [
                'project_type' => 'AI/ML Powered Platform',
                'complexity' => 'enterprise',
                'min_price' => 50000,
                'max_price' => 150000,
                'typical_timeline' => '20-30 weeks',
                'description' => 'Artificial intelligence and machine learning platforms',
                'sort_order' => 9,
            ],
            [
                'project_type' => 'Full Digital Transformation',
                'complexity' => 'enterprise',
                'min_price' => 100000,
                'max_price' => 500000,
                'typical_timeline' => '6-12 months',
                'description' => 'Complete digital transformation projects',
                'sort_order' => 10,
            ],
        ];

        foreach ($projects as $project) {
            DigitalStudioProject::create($project);
        }
    }
}
