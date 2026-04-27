<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductAddon;
use Illuminate\Database\Seeder;

class ProductAddonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Innovation Hub Add-ons
        $innovationHub = Product::where('slug', 'innovation-hub')->first();
        $innovationHubAddons = [
            ['name' => 'Extra meeting room hour', 'price' => 15, 'price_type' => 'per_hour'],
            ['name' => 'Event space (100+ people)', 'price' => 200, 'price_type' => 'per_day'],
            ['name' => 'Extra printing (per page)', 'price' => 0.10, 'price_type' => 'per_page'],
            ['name' => 'Mail forwarding (outside city)', 'price' => 10, 'price_type' => 'per_month'],
            ['name' => 'Locker rental', 'price' => 15, 'price_type' => 'per_month'],
            ['name' => 'Guest day pass (monthly)', 'price' => 25, 'price_type' => 'per_month'],
        ];

        foreach ($innovationHubAddons as $addon) {
            ProductAddon::create(array_merge($addon, ['product_id' => $innovationHub->id]));
        }
    }
}
