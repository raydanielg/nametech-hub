# Fix Seeder Issues & Run Enhanced Seeders
Write-Host "🔧 Fixing Seeder Issues & Running Enhanced Seeders" -ForegroundColor Green
Write-Host "==================================================" -ForegroundColor Yellow

# Step 1: Clear cache to avoid any cached issues
Write-Host "🧹 Clearing Laravel cache..." -ForegroundColor Cyan
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Step 2: Run individual seeders in correct order to avoid conflicts
Write-Host "🌱 Running seeders in correct order..." -ForegroundColor Cyan

Write-Host "📊 1. Running RoleSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=RoleSeeder

Write-Host "👤 2. Running UserSeeder (Fixed)..." -ForegroundColor Yellow
php artisan db:seed --class=UserSeeder

Write-Host "🏢 3. Running AdminUserSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=AdminUserSeeder

Write-Host "🚀 4. Running StartupSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=StartupSeeder

Write-Host "👥 5. Running MentorSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=MentorSeeder

Write-Host "📊 6. Running LandingSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=LandingSeeder

Write-Host "🎓 7. Running AcademyCourseSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=AcademyCourseSeeder

Write-Host "📝 8. Running BlogSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=BlogSeeder

Write-Host "💼 9. Running DigitalStudioProjectSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=DigitalStudioProjectSeeder

Write-Host "🎯 10. Running ProductSeeders..." -ForegroundColor Yellow
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=ProductPlanSeeder
php artisan db:seed --class=ProductFeatureSeeder
php artisan db:seed --class=ProductFaqSeeder

Write-Host "🏢 11. Running PartnerSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=PartnerSeeder

Write-Host "💰 12. Running InvestorSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=InvestorSeeder

Write-Host "📅 13. Running EventSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=EventSeeder

Write-Host "🎯 14. Running ProgramSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=ProgramSeeder

Write-Host "📢 15. Running AnnouncementSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=AnnouncementSeeder

Write-Host "💳 16. Running MembershipSeeder..." -ForegroundColor Yellow
php artisan db:seed --class=MembershipSeeder

Write-Host "✅ All Seeders Completed Successfully!" -ForegroundColor Green
Write-Host "==================================" -ForegroundColor Cyan
Write-Host "🎉 Database is now 'Powa Sana' ready!" -ForegroundColor Green
Write-Host "" -ForegroundColor White
Write-Host "📋 Login Credentials:" -ForegroundColor White
Write-Host "   • Hub Director: hub@namtech.io / password" -ForegroundColor Gray
Write-Host "   • Studio Director: studio@namtech.io / password" -ForegroundColor Gray
Write-Host "   • Founder: founder@example.com / password" -ForegroundColor Gray
Write-Host "   • Mentor: mentor@example.com / password" -ForegroundColor Gray
Write-Host "   • Investor: investor@example.com / password" -ForegroundColor Gray
Write-Host "   • Student: student@example.com / password" -ForegroundColor Gray

# Keep window open
Read-Host "Press Enter to exit"
