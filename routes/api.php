<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/search', function (Request $request) {
    $query = strtolower($request->query('q'));
    
    // Mock data for search
    $data = [
        ['title' => 'Launchpad', 'description' => '6-month incubation program', 'type' => 'Program', 'url' => '/products/launchpad'],
        ['title' => 'Digital Studio', 'description' => 'Custom software development', 'type' => 'Service', 'url' => '/products/digital-studio'],
        ['title' => 'NAMTECH Academy', 'description' => 'Tech bootcamps & courses', 'type' => 'Academy', 'url' => '/products/academy'],
        ['title' => 'Startup Toolkit', 'description' => 'Templates and guides for founders', 'type' => 'Resource', 'url' => '/resources/startup-toolkit'],
        ['title' => 'Investor Network', 'description' => 'Connect with VCs and Angels', 'type' => 'Network', 'url' => '/resources/investors'],
    ];

    $results = array_filter($data, function($item) use ($query) {
        return str_contains(strtolower($item['title']), $query) || 
               str_contains(strtolower($item['description']), $query);
    });

    return response()->json(['results' => array_values($results)]);
});

// Products API Routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);
Route::get('/products/category/{category}', [ProductController::class, 'byCategory']);
Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/comparison', [ProductController::class, 'comparison']);
Route::get('/products/pricing-calculator', [ProductController::class, 'pricingCalculator']);
Route::get('/products/faqs/{slug?}', [ProductController::class, 'faqs']);

// Academy Courses
Route::get('/academy/courses', [ProductController::class, 'academyCourses']);

// Digital Studio Projects
Route::get('/digital-studio/projects', [ProductController::class, 'digitalStudioProjects']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
