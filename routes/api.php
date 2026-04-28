<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\MembershipController;
use App\Http\Controllers\API\StartupController;
use App\Http\Controllers\API\LaunchpadController;
use App\Http\Controllers\API\ScaleController;
use App\Http\Controllers\API\MentorController;
use App\Http\Controllers\API\MentorAssignmentController;
use App\Http\Controllers\API\MentorSessionController;
use App\Http\Controllers\API\InvestorController;
use App\Http\Controllers\API\StudioClientController;
use App\Http\Controllers\API\StudioProjectController;
use App\Http\Controllers\API\ProjectMilestoneController;
use App\Http\Controllers\API\AcademyController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\EnrollmentController;
use App\Http\Controllers\API\ResourceController;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\EventRegistrationController;
use App\Http\Controllers\API\InvoiceController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\SupportController;
use App\Http\Controllers\API\TicketReplyController;
use App\Http\Controllers\API\ReportController;
use App\Http\Controllers\API\DashboardController;
use App\Http\Controllers\API\SynergyController;
use App\Http\Controllers\API\MilestoneController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AuditLogController;

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

    // Auth routes
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware(['auth:sanctum'])->post('/logout', [AuthController::class, 'logout']);
    Route::middleware(['auth:sanctum'])->get('/me', [AuthController::class, 'me']);

    Route::middleware(['auth:sanctum'])->group(function () {

        // User routes
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/users/{id}', [UserController::class, 'show']);
        Route::put('/users/{id}', [UserController::class, 'update']);
        Route::delete('/users/{id}', [UserController::class, 'destroy']);
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/dashboard/activity', [DashboardController::class, 'recentActivity']);

        // Membership routes
        Route::apiResource('memberships', MembershipController::class);

        // Startup routes
        Route::apiResource('startups', StartupController::class);
        Route::post('launchpad/apply', [LaunchpadController::class, 'apply']);
        Route::post('scale/apply', [ScaleController::class, 'apply']);
        Route::apiResource('milestones', MilestoneController::class);

        // Mentor routes
        Route::apiResource('mentors', MentorController::class);

        // Studio routes
        Route::apiResource('studio-clients', StudioClientController::class);
        Route::apiResource('studio-projects', StudioProjectController::class);

        // Academy routes
        Route::apiResource('academy/courses', AcademyController::class);
        Route::post('academy/courses/{id}/enroll', [AcademyController::class, 'enroll']);
        Route::apiResource('courses', CourseController::class);

        // Investor routes
        Route::apiResource('investors', InvestorController::class);

        // Resources
        Route::apiResource('resources', ResourceController::class);

        // Events
        Route::apiResource('events', EventController::class);

        // Billing
        Route::apiResource('invoices', InvoiceController::class);
        Route::post('invoices/{id}/pay', [InvoiceController::class, 'pay']);

        // Support
        Route::apiResource('tickets', SupportController::class);
        Route::post('tickets/{id}/reply', [SupportController::class, 'reply']);

        // Reports
        Route::apiResource('reports', ReportController::class);

        // Synergy
        Route::apiResource('synergy/logs', SynergyController::class);

        // Admin only routes (kept for reference or future use)
        Route::middleware(['admin'])->group(function () {
            Route::apiResource('admin/users', UserManageController::class);
            Route::get('admin/stats', [AdminController::class, 'stats']);
            Route::put('admin/settings', [SettingController::class, 'update']);
            Route::get('admin/audit-logs', [AuditLogController::class, 'index']);
        });
    });

// Products API Routes (kept from existing code)
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);
Route::get('/products/category/{category}', [ProductController::class, 'byCategory']);
Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/comparison', [ProductController::class, 'comparison']);
Route::get('/products/pricing-calculator', [ProductController::class, 'pricingCalculator']);
Route::get('/products/faqs/{slug?}', [ProductController::class, 'faqs']);

// Academy Courses (kept from existing code)
Route::get('/academy/courses', [ProductController::class, 'academyCourses']);

// Digital Studio Projects (kept from existing code)
Route::get('/digital-studio/projects', [ProductController::class, 'digitalStudioProjects']);
