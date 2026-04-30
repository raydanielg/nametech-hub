#!/bin/bash

echo "🔧 Fixing Seeder Issues & Running Enhanced Seeders"
echo "=================================================="

# Step 1: Clear cache to avoid any cached issues
echo "🧹 Clearing Laravel cache..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Step 2: Run individual seeders in correct order to avoid conflicts
echo "🌱 Running seeders in correct order..."

echo "📊 1. Running RoleSeeder..."
php artisan db:seed --class=RoleSeeder

echo "👤 2. Running UserSeeder (Fixed)..."
php artisan db:seed --class=UserSeeder

echo "🏢 3. Running AdminUserSeeder..."
php artisan db:seed --class=AdminUserSeeder

echo "🚀 4. Running StartupSeeder..."
php artisan db:seed --class=StartupSeeder

echo "👥 5. Running MentorSeeder..."
php artisan db:seed --class=MentorSeeder

echo "📊 6. Running LandingSeeder..."
php artisan db:seed --class=LandingSeeder

echo "🎓 7. Running AcademyCourseSeeder..."
php artisan db:seed --class=AcademyCourseSeeder

echo "📝 8. Running BlogSeeder..."
php artisan db:seed --class=BlogSeeder

echo "💼 9. Running DigitalStudioProjectSeeder..."
php artisan db:seed --class=DigitalStudioProjectSeeder

echo "🎯 10. Running ProductSeeders..."
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=ProductPlanSeeder
php artisan db:seed --class=ProductFeatureSeeder
php artisan db:seed --class=ProductFaqSeeder

echo "🏢 11. Running PartnerSeeder..."
php artisan db:seed --class=PartnerSeeder

echo "💰 12. Running InvestorSeeder..."
php artisan db:seed --class=InvestorSeeder

echo "📅 13. Running EventSeeder..."
php artisan db:seed --class=EventSeeder

echo "🎯 14. Running ProgramSeeder..."
php artisan db:seed --class=ProgramSeeder

echo "📢 15. Running AnnouncementSeeder..."
php artisan db:seed --class=AnnouncementSeeder

echo "💳 16. Running MembershipSeeder..."
php artisan db:seed --class=MembershipSeeder

echo "✅ All Seeders Completed Successfully!"
echo "=================================="
echo "🎉 Database is now 'Powa Sana' ready!"
echo ""
echo "📋 Login Credentials:"
echo "   • Hub Director: hub@namtech.io / password"
echo "   • Studio Director: studio@namtech.io / password"
echo "   • Founder: founder@example.com / password"
echo "   • Mentor: mentor@example.com / password"
echo "   • Investor: investor@example.com / password"
echo "   • Student: student@example.com / password"
