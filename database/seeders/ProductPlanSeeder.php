<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPlan;
use Illuminate\Database\Seeder;

class ProductPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Innovation Hub Plans
        $innovationHub = Product::where('slug', 'innovation-hub')->first();
        $innovationHubPlans = [
            [
                'name' => 'Free',
                'slug' => 'innovation-hub-free',
                'description' => 'Students, first-time visitors',
                'price_monthly' => 0,
                'price_annual' => 0,
                'payment_model' => 'monthly',
                'target_audience' => 'Students, first-time visitors',
                'sort_order' => 1,
            ],
            [
                'name' => 'Day Pass',
                'slug' => 'innovation-hub-day-pass',
                'description' => 'Occasional users',
                'price_monthly' => 10,
                'payment_model' => 'per_day',
                'target_audience' => 'Occasional users',
                'sort_order' => 2,
            ],
            [
                'name' => 'Hot Desk',
                'slug' => 'innovation-hub-hot-desk',
                'description' => 'Freelancers, remote workers',
                'price_monthly' => 49,
                'price_annual' => 490,
                'payment_model' => 'monthly',
                'target_audience' => 'Freelancers, remote workers',
                'sort_order' => 3,
            ],
            [
                'name' => 'Dedicated Desk',
                'slug' => 'innovation-hub-dedicated-desk',
                'description' => 'Startup teams, power users',
                'price_monthly' => 149,
                'price_annual' => 1490,
                'payment_model' => 'monthly',
                'target_audience' => 'Startup teams, power users',
                'sort_order' => 4,
            ],
            [
                'name' => 'Private Office',
                'slug' => 'innovation-hub-private-office',
                'description' => 'Teams of 2-4 people',
                'price_monthly' => 499,
                'price_annual' => 4990,
                'payment_model' => 'monthly',
                'target_audience' => 'Teams of 2-4 people',
                'sort_order' => 5,
            ],
            [
                'name' => 'Virtual Membership',
                'slug' => 'innovation-hub-virtual',
                'description' => 'Remote founders, investors',
                'price_monthly' => 29,
                'price_annual' => 290,
                'payment_model' => 'monthly',
                'target_audience' => 'Remote founders, investors',
                'sort_order' => 6,
            ],
        ];

        foreach ($innovationHubPlans as $plan) {
            $innovationHub->plans()->create($plan);
        }

        // Launchpad Plans
        $launchpad = Product::where('slug', 'launchpad')->first();
        $launchpadPlans = [
            [
                'name' => 'Standard Track',
                'slug' => 'launchpad-standard',
                'description' => 'Bootstrapped startups with cash',
                'setup_fee' => 1500,
                'payment_model' => 'onetime',
                'target_audience' => 'Bootstrapped startups with cash',
                'sort_order' => 1,
            ],
            [
                'name' => 'Equity Track',
                'slug' => 'launchpad-equity',
                'description' => 'Startups with no cash',
                'equity_percentage' => 3,
                'payment_model' => 'equity',
                'target_audience' => 'Startups with no cash',
                'sort_order' => 2,
            ],
            [
                'name' => 'Hybrid Track',
                'slug' => 'launchpad-hybrid',
                'description' => 'Balanced option',
                'setup_fee' => 500,
                'equity_percentage' => 1.5,
                'payment_model' => 'hybrid',
                'target_audience' => 'Balanced option',
                'sort_order' => 3,
            ],
        ];

        foreach ($launchpadPlans as $plan) {
            $launchpad->plans()->create($plan);
        }

        // Scale Plans
        $scale = Product::where('slug', 'scale')->first();
        $scalePlans = [
            [
                'name' => 'Fee Track',
                'slug' => 'scale-fee',
                'description' => 'Startups with revenue, want to keep equity',
                'setup_fee' => 5000,
                'payment_model' => 'onetime',
                'target_audience' => 'Startups with revenue, want to keep equity',
                'sort_order' => 1,
            ],
            [
                'name' => 'Equity Track',
                'slug' => 'scale-equity',
                'description' => 'Startups raising funding soon',
                'equity_percentage' => 6,
                'payment_model' => 'equity',
                'target_audience' => 'Startups raising funding soon',
                'sort_order' => 2,
            ],
            [
                'name' => 'Revenue Share Track',
                'slug' => 'scale-revenue-share',
                'description' => 'Revenue-generating startups',
                'revenue_share_percentage' => 5,
                'payment_model' => 'revenue_share',
                'target_audience' => 'Revenue-generating startups',
                'sort_order' => 3,
            ],
        ];

        foreach ($scalePlans as $plan) {
            $scale->plans()->create($plan);
        }

        // Academy Plans
        $academy = Product::where('slug', 'namtech-academy')->first();
        $academyPlans = [
            [
                'name' => 'Basic',
                'slug' => 'academy-basic',
                'description' => 'Any 1 course at a time',
                'price_monthly' => 29,
                'price_annual' => 290,
                'payment_model' => 'monthly',
                'target_audience' => 'Individual learners',
                'sort_order' => 1,
            ],
            [
                'name' => 'Pro',
                'slug' => 'academy-pro',
                'description' => 'Unlimited access all courses',
                'price_monthly' => 49,
                'price_annual' => 490,
                'payment_model' => 'monthly',
                'target_audience' => 'Dedicated learners',
                'sort_order' => 2,
            ],
            [
                'name' => 'Pro+',
                'slug' => 'academy-pro-plus',
                'description' => 'Unlimited courses + 2hrs/month 1:1 tutoring',
                'price_monthly' => 79,
                'price_annual' => 790,
                'payment_model' => 'monthly',
                'target_audience' => 'Premium learners',
                'sort_order' => 3,
            ],
        ];

        foreach ($academyPlans as $plan) {
            $academy->plans()->create($plan);
        }

        // SaaS Bundles
        $saas = Product::where('slug', 'saas-products')->first();
        $saasPlans = [
            [
                'name' => 'Starter Bundle',
                'slug' => 'saas-starter-bundle',
                'description' => 'HubManager Starter + PitchPerfect Pro + TaskFlow Pro',
                'price_monthly' => 79,
                'price_annual' => 790,
                'payment_model' => 'monthly',
                'target_audience' => 'Small teams',
                'sort_order' => 1,
            ],
            [
                'name' => 'Growth Bundle',
                'slug' => 'saas-growth-bundle',
                'description' => 'HubManager Growth + PitchPerfect Team + TaskFlow Business + DataViz Basic',
                'price_monthly' => 149,
                'price_annual' => 1490,
                'payment_model' => 'monthly',
                'target_audience' => 'Growing businesses',
                'sort_order' => 2,
            ],
            [
                'name' => 'Enterprise Bundle',
                'slug' => 'saas-enterprise-bundle',
                'description' => 'HubManager Pro + PitchPerfect Investor + TaskFlow Business + DataViz Pro',
                'price_monthly' => 299,
                'price_annual' => 2990,
                'payment_model' => 'monthly',
                'target_audience' => 'Large organizations',
                'sort_order' => 3,
            ],
        ];

        foreach ($saasPlans as $plan) {
            $saas->plans()->create($plan);
        }
    }
}
