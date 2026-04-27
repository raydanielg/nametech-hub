<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Innovation Hub',
                'slug' => 'innovation-hub',
                'description' => 'Physical and virtual community space for innovators, startups, and tech professionals',
                'target_users' => 'Freelancers, remote workers, startups, investors, students',
                'category' => 'innovation_hub',
                'icon' => 'fas fa-lightbulb',
                'has_free_option' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Digital Studio',
                'slug' => 'digital-studio',
                'description' => 'Custom digital product development – we build software, apps, and platforms for clients',
                'target_users' => 'Startups, SMEs, corporations, government, NGOs',
                'category' => 'digital_studio',
                'icon' => 'fas fa-code',
                'has_free_option' => false,
                'sort_order' => 2,
            ],
            [
                'name' => 'Launchpad',
                'slug' => 'launchpad',
                'description' => '6-month structured incubation program for early-stage tech startups',
                'target_users' => 'Startups at idea or MVP stage (pre-revenue or early revenue)',
                'category' => 'launchpad',
                'icon' => 'fas fa-rocket',
                'has_free_option' => false,
                'sort_order' => 3,
            ],
            [
                'name' => 'Scale',
                'slug' => 'scale',
                'description' => '3-month intensive acceleration program for post-revenue startups ready to scale',
                'target_users' => 'Startups with $5k+ MRR, 2+ team members, live product',
                'category' => 'scale',
                'icon' => 'fas fa-chart-line',
                'has_free_option' => false,
                'sort_order' => 4,
            ],
            [
                'name' => 'NAMTECH Academy',
                'slug' => 'namtech-academy',
                'description' => 'Online and in-person technology courses, bootcamps, and certifications',
                'target_users' => 'Students, professionals, career changers, corporate teams',
                'category' => 'academy',
                'icon' => 'fas fa-graduation-cap',
                'has_free_option' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'SaaS Products',
                'slug' => 'saas-products',
                'description' => 'Proprietary digital products built and owned by NAMTECH-HUB Studio',
                'target_users' => 'Startups, SMEs, individuals',
                'category' => 'saas',
                'icon' => 'fas fa-cloud',
                'has_free_option' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
