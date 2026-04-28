<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::group(['prefix' => 'pricing', 'as' => 'pricing.'], function () {
    Route::view('/membership', 'pricing.membership')->name('membership');
    Route::view('/launchpad', 'pricing.launchpad')->name('launchpad');
    Route::view('/scale', 'pricing.scale')->name('scale');
    Route::view('/academy', 'pricing.academy')->name('academy');
    Route::view('/studio', 'pricing.studio')->name('studio');
    Route::view('/compare', 'pricing.compare')->name('compare');
});

Route::group(['prefix' => 'enterprise', 'as' => 'enterprise.'], function () {
    Route::view('/solutions', 'enterprise.solutions')->name('solutions');
});

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/latest', [BlogController::class, 'latest'])->name('latest');
    Route::get('/startup-stories', [BlogController::class, 'stories'])->name('stories');
    Route::get('/tutorials', [BlogController::class, 'tutorials'])->name('tutorials');
    Route::get('/insights', [BlogController::class, 'insights'])->name('insights');
    Route::get('/announcements', [BlogController::class, 'announcements'])->name('announcements');
    Route::get('/{blog:slug}', [BlogController::class, 'show'])->name('show');
});

Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
    Route::get('/about', [CompanyController::class, 'about'])->name('about');
    Route::get('/leadership', [CompanyController::class, 'leadership'])->name('leadership');
    Route::get('/partners', [CompanyController::class, 'partners'])->name('partners');
    Route::get('/careers', [CompanyController::class, 'careers'])->name('careers');
    Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
    Route::get('/become-partner', [CompanyController::class, 'becomePartner'])->name('become-partner');
});

// Legal Pages
Route::view('/terms-of-service', 'legal.terms')->name('terms');
Route::view('/privacy-policy', 'legal.privacy')->name('privacy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Super Admin Routes
    Route::middleware(['has.role:super_admin'])->prefix('admin')->as('admin.')->group(function () {
        // Dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard.main');
        Route::get('/dashboard/stats', [App\Http\Controllers\Admin\AdminDashboardController::class, 'stats'])->name('dashboard.stats');
        Route::get('/dashboard/health', [App\Http\Controllers\Admin\AdminDashboardController::class, 'health'])->name('dashboard.health');

        // User Management
        Route::get('/users', [App\Http\Controllers\Admin\AdminDashboardController::class, 'users'])->name('users.index');
        Route::get('/users/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'addUser'])->name('users.add');
        Route::get('/users/roles', [App\Http\Controllers\Admin\AdminDashboardController::class, 'roles'])->name('users.roles');
        Route::get('/users/pending', [App\Http\Controllers\Admin\AdminDashboardController::class, 'pendingUsers'])->name('users.pending');
        Route::get('/users/deleted', [App\Http\Controllers\Admin\AdminDashboardController::class, 'deletedUsers'])->name('users.deleted');

        // Hub Management
        Route::get('/hub/memberships', [App\Http\Controllers\Admin\AdminDashboardController::class, 'memberships'])->name('hub.memberships');
        Route::get('/hub/members', [App\Http\Controllers\Admin\AdminDashboardController::class, 'members'])->name('hub.members');
        Route::get('/hub/coworking', [App\Http\Controllers\Admin\AdminDashboardController::class, 'coworking'])->name('hub.coworking');
        Route::get('/hub/meeting-rooms', [App\Http\Controllers\Admin\AdminDashboardController::class, 'meetingRooms'])->name('hub.meeting-rooms');
        Route::get('/hub/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'hubSettings'])->name('hub.settings');

        // Programs
        Route::get('/programs/launchpad', [App\Http\Controllers\Admin\AdminDashboardController::class, 'launchpad'])->name('programs.launchpad');
        Route::get('/programs/scale', [App\Http\Controllers\Admin\AdminDashboardController::class, 'scale'])->name('programs.scale');
        Route::get('/programs/applications', [App\Http\Controllers\Admin\AdminDashboardController::class, 'applications'])->name('programs.applications');
        Route::get('/programs/cohorts', [App\Http\Controllers\Admin\AdminDashboardController::class, 'cohorts'])->name('programs.cohorts');
        Route::get('/programs/milestones', [App\Http\Controllers\Admin\AdminDashboardController::class, 'milestones'])->name('programs.milestones');
        Route::get('/programs/demo-day', [App\Http\Controllers\Admin\AdminDashboardController::class, 'demoDay'])->name('programs.demo-day');

        // Studio
        Route::get('/studio/projects', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioProjects'])->name('studio.projects');
        Route::get('/studio/clients', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioClients'])->name('studio.clients');
        Route::get('/studio/developers', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioDevelopers'])->name('studio.developers');
        Route::get('/studio/repos', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioRepos'])->name('studio.repos');
        Route::get('/studio/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioSettings'])->name('studio.settings');

        // Academy
        Route::get('/academy/courses', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyCourses'])->name('academy.courses');
        Route::get('/academy/courses/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyAddCourse'])->name('academy.courses.add');
        Route::get('/academy/students', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyStudents'])->name('academy.students');
        Route::get('/academy/enrollments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyEnrollments'])->name('academy.enrollments');
        Route::get('/academy/certificates', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyCertificates'])->name('academy.certificates');
        Route::get('/academy/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academySettings'])->name('academy.settings');

        // Finance
        Route::get('/finance/invoices', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeInvoices'])->name('finance.invoices');
        Route::get('/finance/payments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financePayments'])->name('finance.payments');
        Route::get('/finance/revenue', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeRevenue'])->name('finance.revenue');
        Route::get('/finance/expenses', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeExpenses'])->name('finance.expenses');
        Route::get('/finance/stripe', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStripe'])->name('finance.stripe');
        Route::get('/finance/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeSettings'])->name('finance.settings');

        // Partnerships
        Route::get('/partnerships/partners', [App\Http\Controllers\Admin\AdminDashboardController::class, 'partners'])->name('partnerships.partners');
        Route::get('/partnerships/sponsors', [App\Http\Controllers\Admin\AdminDashboardController::class, 'sponsors'])->name('partnerships.sponsors');
        Route::get('/partnerships/investors', [App\Http\Controllers\Admin\AdminDashboardController::class, 'investors'])->name('partnerships.investors');
        Route::get('/partnerships/mentors', [App\Http\Controllers\Admin\AdminDashboardController::class, 'mentors'])->name('partnerships.mentors');

        // Events
        Route::get('/events', [App\Http\Controllers\Admin\AdminDashboardController::class, 'events'])->name('events.index');
        Route::get('/events/create', [App\Http\Controllers\Admin\AdminDashboardController::class, 'createEvent'])->name('events.create');
        Route::get('/events/registrations', [App\Http\Controllers\Admin\AdminDashboardController::class, 'eventRegistrations'])->name('events.registrations');
        Route::get('/events/calendar', [App\Http\Controllers\Admin\AdminDashboardController::class, 'eventCalendar'])->name('events.calendar');

        // Resources
        Route::get('/resources', [App\Http\Controllers\Admin\AdminDashboardController::class, 'resources'])->name('resources.index');
        Route::get('/resources/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'addResource'])->name('resources.add');
        Route::get('/resources/toolkit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'toolkit'])->name('resources.toolkit');
        Route::get('/resources/downloads', [App\Http\Controllers\Admin\AdminDashboardController::class, 'downloads'])->name('resources.downloads');

        // Support
        Route::get('/support/tickets', [App\Http\Controllers\Admin\AdminDashboardController::class, 'tickets'])->name('support.index');
        Route::get('/support/tickets/open', [App\Http\Controllers\Admin\AdminDashboardController::class, 'openTickets'])->name('support.open');
        Route::get('/support/tickets/resolved', [App\Http\Controllers\Admin\AdminDashboardController::class, 'resolvedTickets'])->name('support.resolved');
        Route::get('/support/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'supportSettings'])->name('support.settings');

        // Reports
        Route::get('/reports/daily', [App\Http\Controllers\Admin\AdminDashboardController::class, 'dailyReport'])->name('reports.daily');
        Route::get('/reports/monthly', [App\Http\Controllers\Admin\AdminDashboardController::class, 'monthlyReport'])->name('reports.monthly');
        Route::get('/reports/annual', [App\Http\Controllers\Admin\AdminDashboardController::class, 'annualReport'])->name('reports.annual');
        Route::get('/reports/user-growth', [App\Http\Controllers\Admin\AdminDashboardController::class, 'userGrowth'])->name('reports.user-growth');
        Route::get('/reports/revenue', [App\Http\Controllers\Admin\AdminDashboardController::class, 'revenueReport'])->name('reports.revenue');
        Route::get('/reports/export', [App\Http\Controllers\Admin\AdminDashboardController::class, 'exportData'])->name('reports.export');

        // System
        Route::get('/system/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'systemSettings'])->name('system.settings');
        Route::get('/system/emails', [App\Http\Controllers\Admin\AdminDashboardController::class, 'emailSettings'])->name('system.emails');
        Route::get('/system/payments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'paymentSettings'])->name('system.payments');
        Route::get('/system/api-keys', [App\Http\Controllers\Admin\AdminDashboardController::class, 'apiKeys'])->name('system.api-keys');
        Route::get('/system/audit-logs', [App\Http\Controllers\Admin\AdminDashboardController::class, 'auditLogs'])->name('system.audit-logs');
        Route::get('/system/backup', [App\Http\Controllers\Admin\AdminDashboardController::class, 'backup'])->name('system.backup');
        Route::get('/system/status', [App\Http\Controllers\Admin\AdminDashboardController::class, 'systemStatus'])->name('system.status');
    });

    // Hub Director Routes
    Route::middleware(['has.role:hub_director'])->prefix('hub')->as('hub.')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\HubDirector\HubDashboardController::class, 'index'])->name('dashboard.main');
        Route::get('/members', [App\Http\Controllers\HubDirector\HubDashboardController::class, 'members'])->name('members');
        Route::get('/events', [App\Http\Controllers\HubDirector\HubDashboardController::class, 'events'])->name('events');
        Route::get('/launchpad', [App\Http\Controllers\HubDirector\HubDashboardController::class, 'launchpad'])->name('launchpad');
        Route::get('/mentors', [App\Http\Controllers\HubDirector\HubDashboardController::class, 'mentors'])->name('mentors');
    });

    // Studio Director Routes
    Route::middleware(['has.role:studio_director'])->prefix('studio')->as('studio.')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\StudioDirector\StudioDashboardController::class, 'index'])->name('dashboard.main');
        Route::get('/projects', [App\Http\Controllers\StudioDirector\StudioDashboardController::class, 'projects'])->name('projects');
        Route::get('/team', [App\Http\Controllers\StudioDirector\StudioDashboardController::class, 'teamWorkload'])->name('team');
        Route::get('/clients', [App\Http\Controllers\StudioDirector\StudioDashboardController::class, 'clients'])->name('clients');
        Route::get('/invoices', [App\Http\Controllers\StudioDirector\StudioDashboardController::class, 'invoices'])->name('invoices');
    });

    // Startup Founder Routes
    Route::middleware(['has.role:startup_founder'])->prefix('founder')->as('founder.')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\StartupFounder\FounderDashboardController::class, 'index'])->name('dashboard.main');
        Route::get('/startup', [App\Http\Controllers\StartupFounder\FounderDashboardController::class, 'myStartup'])->name('startup');
        Route::get('/milestones', [App\Http\Controllers\StartupFounder\FounderDashboardController::class, 'milestones'])->name('milestones');
        Route::get('/mentor', [App\Http\Controllers\StartupFounder\FounderDashboardController::class, 'myMentor'])->name('mentor');
        Route::get('/sessions', [App\Http\Controllers\StartupFounder\FounderDashboardController::class, 'sessions'])->name('sessions');
        Route::get('/investors', [App\Http\Controllers\StartupFounder\FounderDashboardController::class, 'investors'])->name('investors');
    });
});
