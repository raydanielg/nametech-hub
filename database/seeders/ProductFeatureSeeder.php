<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductFeature;
use App\Models\ProductPlan;
use Illuminate\Database\Seeder;

class ProductFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Innovation Hub Features
        $innovationHub = Product::where('slug', 'innovation-hub')->first();
        $freePlan = ProductPlan::where('slug', 'innovation-hub-free')->first();
        $dayPassPlan = ProductPlan::where('slug', 'innovation-hub-day-pass')->first();
        $hotDeskPlan = ProductPlan::where('slug', 'innovation-hub-hot-desk')->first();
        $dedicatedDeskPlan = ProductPlan::where('slug', 'innovation-hub-dedicated-desk')->first();
        $privateOfficePlan = ProductPlan::where('slug', 'innovation-hub-private-office')->first();
        $virtualPlan = ProductPlan::where('slug', 'innovation-hub-virtual')->first();

        $innovationHubFeatures = [
            ['name' => 'Access to community events (2/month max)', 'plan_id' => $freePlan->id, 'sort_order' => 1],
            ['name' => 'Basic forum access', 'plan_id' => $freePlan->id, 'sort_order' => 2],
            ['name' => 'Hot desk for 1 day', 'plan_id' => $dayPassPlan->id, 'sort_order' => 1],
            ['name' => 'Wi-Fi', 'plan_id' => $dayPassPlan->id, 'sort_order' => 2],
            ['name' => 'Coffee/tea', 'plan_id' => $dayPassPlan->id, 'sort_order' => 3],
            ['name' => '10% event discount', 'plan_id' => $dayPassPlan->id, 'sort_order' => 4],
            ['name' => 'Open workspace (24/7)', 'plan_id' => $hotDeskPlan->id, 'sort_order' => 1],
            ['name' => '5hrs meeting room/month', 'plan_id' => $hotDeskPlan->id, 'sort_order' => 2],
            ['name' => '50 prints/month', 'plan_id' => $hotDeskPlan->id, 'sort_order' => 3],
            ['name' => 'Mail handling', 'plan_id' => $hotDeskPlan->id, 'sort_order' => 4],
            ['name' => '20% event discount', 'plan_id' => $hotDeskPlan->id, 'sort_order' => 5],
            ['name' => 'Assigned desk + lockable storage', 'plan_id' => $dedicatedDeskPlan->id, 'sort_order' => 1],
            ['name' => '10hrs meeting room/month', 'plan_id' => $dedicatedDeskPlan->id, 'sort_order' => 2],
            ['name' => '200 prints/month', 'plan_id' => $dedicatedDeskPlan->id, 'sort_order' => 3],
            ['name' => '30% event discount', 'plan_id' => $dedicatedDeskPlan->id, 'sort_order' => 4],
            ['name' => 'Lockable private room', 'plan_id' => $privateOfficePlan->id, 'sort_order' => 1],
            ['name' => '4 desks included', 'plan_id' => $privateOfficePlan->id, 'sort_order' => 2],
            ['name' => '20hrs meeting room/month', 'plan_id' => $privateOfficePlan->id, 'sort_order' => 3],
            ['name' => 'Unlimited printing', 'plan_id' => $privateOfficePlan->id, 'sort_order' => 4],
            ['name' => 'Signage + mail', 'plan_id' => $privateOfficePlan->id, 'sort_order' => 5],
            ['name' => 'Business address', 'plan_id' => $virtualPlan->id, 'sort_order' => 1],
            ['name' => 'Mail forwarding', 'plan_id' => $virtualPlan->id, 'sort_order' => 2],
            ['name' => '2hrs meeting room/month', 'plan_id' => $virtualPlan->id, 'sort_order' => 3],
            ['name' => '15% event discount', 'plan_id' => $virtualPlan->id, 'sort_order' => 4],
        ];

        foreach ($innovationHubFeatures as $feature) {
            ProductFeature::create([
                'product_id' => $innovationHub->id,
                'product_plan_id' => $feature['plan_id'],
                'name' => $feature['name'],
                'sort_order' => $feature['sort_order'],
            ]);
        }

        // Launchpad Features (Common to all tracks)
        $launchpad = Product::where('slug', 'launchpad')->first();
        $launchpadFeatures = [
            '6 months Hot Desk coworking access',
            'Weekly 1:1 mentorship (24 sessions total)',
            'Legal & finance advisory sessions (4 sessions)',
            'Investor network access',
            'Pitch deck review & coaching (unlimited)',
            'Demo Day participation (public pitch event)',
            'Lifetime alumni network access',
            'Partner credits ($10k value: AWS, Google, etc.)',
            'Studio prototyping support discount (20% off)',
            'Certificate of completion',
        ];

        foreach ($launchpadFeatures as $index => $feature) {
            ProductFeature::create([
                'product_id' => $launchpad->id,
                'name' => $feature,
                'sort_order' => $index + 1,
            ]);
        }

        // Scale Features (Common to all tracks)
        $scale = Product::where('slug', 'scale')->first();
        $scaleFeatures = [
            '3 months Dedicated Desk coworking',
            'Intensive 1:1 mentorship (12 sessions with scale experts)',
            'Investor matchmaking & pitch coaching',
            'Fundraising CRM access',
            'Due diligence preparation support',
            'PR & media exposure',
            'International accelerator network access',
            'Legal support for term sheets & investment docs',
            'Exclusive investor-only Demo Day',
            'Partner credits ($25k value)',
            'Post-program alumni support (6 months)',
        ];

        foreach ($scaleFeatures as $index => $feature) {
            ProductFeature::create([
                'product_id' => $scale->id,
                'name' => $feature,
                'sort_order' => $index + 1,
            ]);
        }
    }
}
