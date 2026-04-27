<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
