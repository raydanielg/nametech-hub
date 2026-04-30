# Enhanced Database Seeder - 'Vizuri Sana' & 'Powa Sana' Data
Write-Host "🌱 Seeding Enhanced Database - 'Vizuri Sana' & 'Powa Sana' Data" -ForegroundColor Green
Write-Host "=============================================================" -ForegroundColor Yellow

# Ask user if they want to clear existing data
$clearData = Read-Host "Do you want to clear existing data? (y/N)"
if ($clearData -eq 'y' -or $clearData -eq 'Y') {
    Write-Host "🗑️  Clearing existing data..." -ForegroundColor Red
    php artisan migrate:fresh --seed
} else {
    Write-Host "📊 Running seeders without clearing data..." -ForegroundColor Blue
}

# Run specific seeders with enhanced data
Write-Host "🚀 Running Enhanced Seeders..." -ForegroundColor Cyan

Write-Host "📊 Seeding Landing Data with Powerful Testimonials..." -ForegroundColor Yellow
php artisan db:seed --class=LandingSeeder

Write-Host "👥 Seeding Multiple Expert Mentors..." -ForegroundColor Yellow
php artisan db:seed --class=MentorSeeder

Write-Host "🚀 Seeding Successful Startups..." -ForegroundColor Yellow
php artisan db:seed --class=StartupSeeder

Write-Host "🎓 Seeding Academy Courses..." -ForegroundColor Yellow
php artisan db:seed --class=AcademyCourseSeeder

Write-Host "📝 Seeding Blog Content..." -ForegroundColor Yellow
php artisan db:seed --class=BlogSeeder

Write-Host "💼 Seeding Digital Studio Projects..." -ForegroundColor Yellow
php artisan db:seed --class=DigitalStudioProjectSeeder

Write-Host "🎯 Seeding Product Plans & Features..." -ForegroundColor Yellow
php artisan db:seed --class=ProductPlanSeeder
php artisan db:seed --class=ProductFeatureSeeder
php artisan db:seed --class=ProductFaqSeeder

Write-Host "👤 Seeding Users & Admins..." -ForegroundColor Yellow
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=AdminUserSeeder

Write-Host "🏢 Seeding Partners & Investors..." -ForegroundColor Yellow
php artisan db:seed --class=PartnerSeeder
php artisan db:seed --class=InvestorSeeder

Write-Host "📅 Seeding Events & Programs..." -ForegroundColor Yellow
php artisan db:seed --class=EventSeeder
php artisan db:seed --class=ProgramSeeder

Write-Host "✅ Database Seeding Complete!" -ForegroundColor Green
Write-Host "================================" -ForegroundColor Cyan
Write-Host "📈 Enhanced Data Summary:" -ForegroundColor White
Write-Host "   • 12+ Powerful Testimonials" -ForegroundColor White
Write-Host "   • 5 Expert Mentors with Sessions" -ForegroundColor White
Write-Host "   • 6 Successful Startups with Milestones" -ForegroundColor White
Write-Host "   • Enhanced Academy Courses" -ForegroundColor White
Write-Host "   • Professional Blog Content" -ForegroundColor White
Write-Host "   • Complete Product Ecosystem" -ForegroundColor White
Write-Host "   • User Accounts & Roles" -ForegroundColor White
Write-Host "================================" -ForegroundColor Cyan
Write-Host "🎉 Your NAMTECH-HUB is now 'Powa Sana' ready!" -ForegroundColor Green

# Keep window open
Read-Host "Press Enter to exit"
