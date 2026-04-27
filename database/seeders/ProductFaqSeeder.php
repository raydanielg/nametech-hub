<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductFaq;
use Illuminate\Database\Seeder;

class ProductFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product FAQs
        $products = Product::all();
        
        $productFaqs = [
            [
                'question' => 'Can I use multiple products at once?',
                'answer' => 'Yes – many members use Hub + Academy + SaaS products simultaneously',
            ],
            [
                'question' => 'Do you offer discounts for bundling?',
                'answer' => 'Yes – see SaaS Bundle above (save up to 25%)',
            ],
            [
                'question' => 'Is there a free trial for paid products?',
                'answer' => 'Innovation Hub: 3-day free trial. SaaS products: 14-day free trial. Academy: free courses available.',
            ],
            [
                'question' => 'Can I upgrade/downgrade anytime?',
                'answer' => 'Yes – all subscriptions can be changed monthly',
            ],
            [
                'question' => 'What payment methods are accepted?',
                'answer' => 'Credit card (Visa, Mastercard, Amex), bank transfer, mobile money (M-Pesa, Tigo Pesa, Airtel Money)',
            ],
            [
                'question' => 'Do you offer refunds?',
                'answer' => 'Academy: 7-day refund. Hub membership: no refund but can freeze membership. SaaS: no refund but can cancel anytime.',
            ],
            [
                'question' => 'Can I pay annually for a discount?',
                'answer' => 'Yes – all annual plans offer 15-20% savings',
            ],
            [
                'question' => 'Are there student discounts?',
                'answer' => 'Yes – students get 30% off Academy courses (verified student ID required)',
            ],
        ];

        foreach ($products as $product) {
            foreach ($productFaqs as $index => $faq) {
                ProductFaq::create([
                    'product_id' => $product->id,
                    'question' => $faq['question'],
                    'answer' => $faq['answer'],
                    'sort_order' => $index + 1,
                ]);
            }
        }
    }
}
