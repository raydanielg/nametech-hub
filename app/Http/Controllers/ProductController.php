<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPlan;
use App\Models\ProductFeature;
use App\Models\ProductAddon;
use App\Models\ProductFaq;
use App\Models\AcademyCourse;
use App\Models\DigitalStudioProject;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Get all products with their plans and features
     */
    public function index()
    {
        $products = Product::active()
            ->with(['plans.features', 'addons', 'faqs'])
            ->ordered()
            ->get();

        return response()->json($products);
    }

    /**
     * Get a specific product by slug
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->with(['plans.features', 'addons', 'faqs'])
            ->firstOrFail();

        return response()->json($product);
    }

    /**
     * Get products by category
     */
    public function byCategory($category)
    {
        $products = Product::byCategory($category)
            ->active()
            ->with(['plans.features', 'addons', 'faqs'])
            ->ordered()
            ->get();

        return response()->json($products);
    }

    /**
     * Get all academy courses
     */
    public function academyCourses()
    {
        $courses = AcademyCourse::active()->ordered()->get();
        
        return response()->json([
            'courses' => $courses->filter(fn($c) => !$c->is_bootcamp)->values(),
            'bootcamps' => $courses->filter(fn($c) => $c->is_bootcamp)->values(),
            'free_courses' => $courses->filter(fn($c) => $c->is_free)->values(),
        ]);
    }

    /**
     * Get digital studio project types and pricing
     */
    public function digitalStudioProjects()
    {
        $projects = DigitalStudioProject::active()
            ->ordered()
            ->get()
            ->groupBy('complexity');

        return response()->json($projects);
    }

    /**
     * Get product comparison data
     */
    public function comparison()
    {
        $products = Product::active()
            ->with(['plans' => function($query) {
                $query->active()->ordered();
            }])
            ->ordered()
            ->get();

        $comparison = $products->map(function($product) {
            $firstPlan = $product->plans->first();
            return [
                'name' => $product->name,
                'slug' => $product->slug,
                'category' => $product->category,
                'icon' => $product->icon,
                'starting_price' => $firstPlan ? $this->formatPrice($firstPlan) : 'Custom',
                'payment_model' => $firstPlan ? $firstPlan->payment_model : 'custom',
                'target_users' => $product->target_users,
                'has_free_option' => $product->has_free_option,
            ];
        });

        return response()->json($comparison);
    }

    /**
     * Get product FAQs
     */
    public function faqs($slug = null)
    {
        if ($slug) {
            $product = Product::where('slug', $slug)->firstOrFail();
            $faqs = $product->faqs()->active()->ordered()->get();
        } else {
            $faqs = ProductFaq::with('product')
                ->whereHas('product', function($query) {
                    $query->active();
                })
                ->active()
                ->orderBy('sort_order')
                ->get();
        }

        return response()->json($faqs);
    }

    /**
     * Search products
     */
    public function search(Request $request)
    {
        $query = $request->get('q');
        
        if (!$query) {
            return response()->json([]);
        }

        $products = Product::active()
            ->where(function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('description', 'like', "%{$query}%")
                  ->orWhere('target_users', 'like', "%{$query}%");
            })
            ->with(['plans' => function($query) {
                $query->active()->ordered();
            }])
            ->ordered()
            ->get();

        return response()->json($products);
    }

    /**
     * Get pricing calculator data
     */
    public function pricingCalculator()
    {
        $products = Product::active()
            ->with(['plans' => function($query) {
                $query->active()->ordered();
            }, 'addons' => function($query) {
                $query->active()->ordered();
            }])
            ->ordered()
            ->get();

        return response()->json($products);
    }

    private function formatPrice($plan)
    {
        if ($plan->price_monthly && $plan->price_annual) {
            return "\${$plan->price_monthly}/month";
        }
        
        if ($plan->price_monthly) {
            return "\${$plan->price_monthly}/month";
        }
        
        if ($plan->price_annual) {
            return "\${$plan->price_annual}/year";
        }
        
        if ($plan->setup_fee) {
            return "\${$plan->setup_fee} (one-time)";
        }
        
        if ($plan->equity_percentage) {
            return "{$plan->equity_percentage}% equity";
        }
        
        if ($plan->revenue_share_percentage) {
            return "{$plan->revenue_share_percentage}% revenue share";
        }
        
        return 'Custom';
    }
}
