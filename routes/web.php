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

use App\Http\Controllers\Auth\VerificationController;

Auth::routes();

// OTP Verification Routes
Route::get('/verify-email', [VerificationController::class, 'showVerifyForm'])->name('verify.otp');
Route::post('/verify-email', [VerificationController::class, 'verify'])->name('verify.otp.submit');
Route::get('/verify-email/resend', [VerificationController::class, 'resend'])->name('verify.otp.resend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Super Admin Routes
    Route::middleware(['has.role:super_admin'])->prefix('admin')->as('admin.')->group(function () {
        // DASHBOARD
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/stats', [App\Http\Controllers\Admin\AdminDashboardController::class, 'stats'])->name('dashboard.stats');
        Route::get('/dashboard/activity', [App\Http\Controllers\Admin\AdminDashboardController::class, 'activity'])->name('dashboard.activity');
        Route::get('/dashboard/health', [App\Http\Controllers\Admin\AdminDashboardController::class, 'health'])->name('dashboard.health');

        // User Management
        Route::get('/users', [App\Http\Controllers\Admin\AdminDashboardController::class, 'users'])->name('users.index');
        Route::get('/users/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'addUser'])->name('users.add');
        Route::post('/users', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeUser'])->name('users.store');
        Route::get('/users/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'editUser'])->name('users.edit');
        Route::put('/users/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'updateUser'])->name('users.update');
        Route::delete('/users/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'destroyUser'])->name('users.destroy');
        Route::post('/users/{id}/restore', [App\Http\Controllers\Admin\AdminDashboardController::class, 'restoreUser'])->name('users.restore');
        Route::post('/users/{id}/approve', [App\Http\Controllers\Admin\AdminDashboardController::class, 'approveUser'])->name('users.approve');
        Route::post('/users/{id}/reject', [App\Http\Controllers\Admin\AdminDashboardController::class, 'rejectUser'])->name('users.reject');
        Route::get('/users/roles', [App\Http\Controllers\Admin\AdminDashboardController::class, 'roles'])->name('users.roles');
        Route::post('/users/roles', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeRole'])->name('users.roles.store');
        Route::put('/users/roles/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'updateRole'])->name('users.roles.update');
        Route::delete('/users/roles/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'destroyRole'])->name('users.roles.destroy');
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
        Route::get('/studio/projects/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'addStudioProject'])->name('studio.projects.add');
        Route::post('/studio/projects', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeStudioProject'])->name('studio.projects.store');
        Route::get('/studio/projects/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'editStudioProject'])->name('studio.projects.edit');
        Route::put('/studio/projects/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'updateStudioProject'])->name('studio.projects.update');
        Route::delete('/studio/projects/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'destroyStudioProject'])->name('studio.projects.destroy');
        
        Route::get('/studio/clients', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioClients'])->name('studio.clients');
        Route::get('/studio/clients/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'addStudioClient'])->name('studio.clients.add');
        Route::post('/studio/clients', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeStudioClient'])->name('studio.clients.store');
        Route::get('/studio/clients/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'editStudioClient'])->name('studio.clients.edit');
        Route::put('/studio/clients/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'updateStudioClient'])->name('studio.clients.update');
        Route::delete('/studio/clients/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'destroyStudioClient'])->name('studio.clients.destroy');
        
        Route::get('/studio/developers', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioDevelopers'])->name('studio.developers');
        Route::get('/studio/developers/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'addStudioDeveloper'])->name('studio.developers.add');
        Route::post('/studio/developers', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeStudioDeveloper'])->name('studio.developers.store');
        Route::get('/studio/developers/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'editStudioDeveloper'])->name('studio.developers.edit');
        Route::put('/studio/developers/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'updateStudioDeveloper'])->name('studio.developers.update');
        Route::delete('/studio/developers/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'destroyStudioDeveloper'])->name('studio.developers.destroy');
        
        Route::get('/studio/repos', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioRepos'])->name('studio.repos');
        Route::get('/studio/repos/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'addStudioRepo'])->name('studio.repos.add');
        Route::post('/studio/repos', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeStudioRepo'])->name('studio.repos.store');
        Route::get('/studio/repos/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'editStudioRepo'])->name('studio.repos.edit');
        Route::put('/studio/repos/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'updateStudioRepo'])->name('studio.repos.update');
        Route::delete('/studio/repos/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'destroyStudioRepo'])->name('studio.repos.destroy');
        
        Route::get('/studio/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'studioSettings'])->name('studio.settings');
        Route::post('/studio/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeStudioSettings'])->name('studio.settings.store');

        // Academy
        Route::get('/academy/courses', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyCourses'])->name('academy.courses');
        Route::get('/academy/courses/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyAddCourse'])->name('academy.courses.add');
        Route::post('/academy/courses/store', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyStoreCourse'])->name('academy.courses.store');
        Route::get('/academy/courses/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyEditCourse'])->name('academy.courses.edit');
        Route::put('/academy/courses/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyUpdateCourse'])->name('academy.courses.update');
        Route::delete('/academy/courses/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyDestroyCourse'])->name('academy.courses.destroy');
        
        Route::get('/academy/students', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyStudents'])->name('academy.students');
        Route::get('/academy/students/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyAddStudent'])->name('academy.students.add');
        Route::post('/academy/students', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyStoreStudent'])->name('academy.students.store');
        Route::get('/academy/students/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyEditStudent'])->name('academy.students.edit');
        Route::put('/academy/students/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyUpdateStudent'])->name('academy.students.update');
        Route::delete('/academy/students/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyDestroyStudent'])->name('academy.students.destroy');
        
        Route::get('/academy/enrollments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyEnrollments'])->name('academy.enrollments');
        Route::post('/academy/enrollments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyStoreEnrollment'])->name('academy.enrollments.store');
        Route::put('/academy/enrollments/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyUpdateEnrollment'])->name('academy.enrollments.update');
        Route::delete('/academy/enrollments/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyDestroyEnrollment'])->name('academy.enrollments.destroy');
        
        Route::get('/academy/certificates', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyCertificates'])->name('academy.certificates');
        Route::post('/academy/certificates', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyStoreCertificate'])->name('academy.certificates.store');
        Route::post('/academy/certificates/{id}/download', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyDownloadCertificate'])->name('academy.certificates.download');
        Route::delete('/academy/certificates/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyDestroyCertificate'])->name('academy.certificates.destroy');
        
        Route::get('/academy/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academySettings'])->name('academy.settings');
        Route::post('/academy/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'academyStoreSettings'])->name('academy.settings.store');

        // Finance
        Route::get('/finance/invoices', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeInvoices'])->name('finance.invoices');
        Route::get('/finance/invoices/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeAddInvoice'])->name('finance.invoices.add');
        Route::post('/finance/invoices', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStoreInvoice'])->name('finance.invoices.store');
        Route::get('/finance/invoices/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeEditInvoice'])->name('finance.invoices.edit');
        Route::put('/finance/invoices/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeUpdateInvoice'])->name('finance.invoices.update');
        Route::delete('/finance/invoices/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeDestroyInvoice'])->name('finance.invoices.destroy');
        Route::post('/finance/invoices/{id}/send', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeSendInvoice'])->name('finance.invoices.send');
        Route::post('/finance/invoices/{id}/mark-paid', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeMarkInvoicePaid'])->name('finance.invoices.mark-paid');
        
        Route::get('/finance/payments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financePayments'])->name('finance.payments');
        Route::post('/finance/payments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStorePayment'])->name('finance.payments.store');
        Route::get('/finance/payments/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeEditPayment'])->name('finance.payments.edit');
        Route::put('/finance/payments/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeUpdatePayment'])->name('finance.payments.update');
        Route::delete('/finance/payments/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeDestroyPayment'])->name('finance.payments.destroy');
        Route::post('/finance/payments/{id}/refund', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeRefundPayment'])->name('finance.payments.refund');
        
        Route::get('/finance/revenue', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeRevenue'])->name('finance.revenue');
        Route::get('/finance/expenses', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeExpenses'])->name('finance.expenses');
        Route::get('/finance/expenses/add', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeAddExpense'])->name('finance.expenses.add');
        Route::post('/finance/expenses', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStoreExpense'])->name('finance.expenses.store');
        Route::get('/finance/expenses/{id}/edit', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeEditExpense'])->name('finance.expenses.edit');
        Route::put('/finance/expenses/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeUpdateExpense'])->name('finance.expenses.update');
        Route::delete('/finance/expenses/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeDestroyExpense'])->name('finance.expenses.destroy');
        
        Route::get('/finance/stripe', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStripe'])->name('finance.stripe');
        Route::post('/finance/stripe/sync', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStripeSync'])->name('finance.stripe.sync');
        Route::get('/finance/stripe/webhooks', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStripeWebhooks'])->name('finance.stripe.webhooks');
        
        Route::get('/finance/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeSettings'])->name('finance.settings');
        Route::post('/finance/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'financeStoreSettings'])->name('finance.settings.store');

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
        Route::post('/system/settings', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeSystemSettings'])->name('system.settings.store');
        Route::get('/system/emails', [App\Http\Controllers\Admin\AdminDashboardController::class, 'emailSettings'])->name('system.emails');
        Route::post('/system/emails', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeEmailSettings'])->name('system.emails.store');
        Route::get('/system/payments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'paymentSettings'])->name('system.payments');
        Route::post('/system/payments', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storePaymentSettings'])->name('system.payments.store');
        Route::get('/system/api-keys', [App\Http\Controllers\Admin\AdminDashboardController::class, 'apiKeys'])->name('system.api-keys');
        Route::post('/system/api-keys', [App\Http\Controllers\Admin\AdminDashboardController::class, 'storeApiKey'])->name('system.api-keys.store');
        Route::post('/system/api-keys/{id}/revoke', [App\Http\Controllers\Admin\AdminDashboardController::class, 'revokeApiKey'])->name('system.api-keys.revoke');
        Route::get('/system/audit-logs', [App\Http\Controllers\Admin\AdminDashboardController::class, 'auditLogs'])->name('system.audit-logs');
        Route::get('/system/backup', [App\Http\Controllers\Admin\AdminDashboardController::class, 'backup'])->name('system.backup');
        Route::post('/system/backup', [App\Http\Controllers\Admin\AdminDashboardController::class, 'createBackup'])->name('system.backup.create');
        Route::get('/system/status', [App\Http\Controllers\Admin\AdminDashboardController::class, 'systemStatus'])->name('system.status');
        Route::get('/system/status/data', [App\Http\Controllers\Admin\AdminDashboardController::class, 'systemStatusData'])->name('system.status.data');
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

    // Mentor Routes
    Route::middleware(['has.role:mentor'])->prefix('mentor')->as('mentor.')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Mentor\MentorDashboardController::class, 'index'])->name('dashboard.main');
        Route::get('/mentees', [App\Http\Controllers\Mentor\MentorDashboardController::class, 'mentees'])->name('mentees');
        Route::get('/sessions', [App\Http\Controllers\Mentor\MentorDashboardController::class, 'sessions'])->name('sessions');
        Route::get('/resources', [App\Http\Controllers\Mentor\MentorDashboardController::class, 'resources'])->name('resources');
    });

    // Investor Routes
    Route::middleware(['has.role:investor'])->prefix('investor')->as('investor.')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Investor\InvestorDashboardController::class, 'index'])->name('dashboard.main');
        Route::get('/pipeline', [App\Http\Controllers\Investor\InvestorDashboardController::class, 'pipeline'])->name('pipeline');
        Route::get('/portfolio', [App\Http\Controllers\Investor\InvestorDashboardController::class, 'portfolio'])->name('portfolio');
    });

    // Student Routes
    Route::middleware(['has.role:student'])->prefix('student')->as('student.')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Student\StudentDashboardController::class, 'index'])->name('dashboard.main');
        Route::get('/courses', [App\Http\Controllers\Student\StudentDashboardController::class, 'courses'])->name('courses');
        Route::get('/events', [App\Http\Controllers\Student\StudentDashboardController::class, 'events'])->name('events');
    });
});
