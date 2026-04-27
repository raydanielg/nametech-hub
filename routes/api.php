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

Route::middleware(['auth:sanctum'])->group(function () {

    // User routes
    Route::get('/user', [UserController::class, 'show']);
    Route::put('/user', [UserController::class, 'update']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Membership routes
    Route::apiResource('memberships', MembershipController::class);
    Route::post('memberships/{id}/renew', [MembershipController::class, 'renew']);

    // Startup routes
    Route::apiResource('startups', StartupController::class);
    Route::post('startups/{id}/apply-launchpad', [LaunchpadController::class, 'apply']);
    Route::post('startups/{id}/apply-scale', [ScaleController::class, 'apply']);
    Route::post('milestones/{id}/submit', [MilestoneController::class, 'submit']);
    Route::post('milestones/{id}/approve', [MilestoneController::class, 'approve']);

    // Mentor routes
    Route::apiResource('mentors', MentorController::class);
    Route::post('mentors/{id}/assign', [MentorAssignmentController::class, 'store']);
    Route::post('mentor-sessions/{id}/complete', [MentorSessionController::class, 'complete']);
    Route::get('mentor-match', [MentorController::class, 'match']);

    // Studio routes
    Route::apiResource('studio-clients', StudioClientController::class);
    Route::apiResource('studio-projects', StudioProjectController::class);
    Route::post('projects/{id}/milestones', [ProjectMilestoneController::class, 'store']);
    Route::post('milestones/{id}/approve', [ProjectMilestoneController::class, 'approve']);

    // Academy routes
    Route::apiResource('courses', CourseController::class);
    Route::post('courses/{id}/enroll', [EnrollmentController::class, 'store']);
    Route::get('courses/{id}/progress', [EnrollmentController::class, 'progress']);
    Route::get('certificates/{id}/download', [CourseController::class, 'downloadCertificate']);

    // Investor routes (paid access)
    Route::apiResource('investors', InvestorController::class)->middleware('role:startup,scale');
    Route::get('investor-match', [InvestorController::class, 'match']);

    // Resources
    Route::apiResource('resources', ResourceController::class);
    Route::get('resources/premium/download/{id}', [ResourceController::class, 'downloadPremium']);

    // Events
    Route::apiResource('events', EventController::class);
    Route::post('events/{id}/register', [EventRegistrationController::class, 'store']);

    // Billing
    Route::apiResource('invoices', InvoiceController::class);
    Route::post('invoices/{id}/pay', [PaymentController::class, 'process']);
    Route::get('invoices/{id}/pdf', [InvoiceController::class, 'pdf']);

    // Support
    Route::apiResource('tickets', SupportController::class);
    Route::post('tickets/{id}/reply', [TicketReplyController::class, 'store']);
    Route::post('tickets/{id}/close', [SupportController::class, 'close']);

    // Reports
    Route::get('reports/daily', [ReportController::class, 'daily']);
    Route::get('reports/monthly', [ReportController::class, 'monthly']);
    Route::get('reports/revenue', [ReportController::class, 'revenue']);

    // Synergy (Hub ↔ Studio)
    Route::get('synergy/talent-pool', [SynergyController::class, 'talentPool']);
    Route::get('synergy/revenue-split', [SynergyController::class, 'revenueSplit']);
    Route::post('synergy/idea-submit', [SynergyController::class, 'submitIdea']);

    // Admin only routes
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
