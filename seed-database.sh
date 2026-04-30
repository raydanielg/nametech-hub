#!/bin/bash

echo "🌱 Seeding Enhanced Database - 'Vizuri Sana' & 'Powa Sana' Data"
echo "============================================================="

# Clear existing data (optional - comment out if you want to preserve)
echo "🗑️  Clearing existing data..."
php artisan migrate:fresh --seed

# Run specific seeders with enhanced data
echo "🚀 Running Enhanced Seeders..."

echo "📊 Seeding Landing Data with Powerful Testimonials..."
php artisan db:seed --class=LandingSeeder

echo "👥 Seeding Multiple Expert Mentors..."
php artisan db:seed --class=MentorSeeder

echo "🚀 Seeding Successful Startups..."
php artisan db:seed --class=StartupSeeder

echo "🎓 Seeding Academy Courses..."
php artisan db:seed --class=AcademyCourseSeeder

echo "📝 Seeding Blog Content..."
php artisan db:seed --class=BlogSeeder

echo "💼 Seeding Digital Studio Projects..."
php artisan db:seed --class=DigitalStudioProjectSeeder

echo "🎯 Seeding Product Plans & Features..."
php artisan db:seed --class=ProductPlanSeeder
php artisan db:seed --class=ProductFeatureSeeder
php artisan db:seed --class=ProductFaqSeeder

echo "👤 Seeding Users & Admins..."
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=AdminUserSeeder

echo "🏢 Seeding Partners & Investors..."
php artisan db:seed --class=PartnerSeeder
php artisan db:seed --class=InvestorSeeder

echo "📅 Seeding Events & Programs..."
php artisan db:seed --class=EventSeeder
php artisan db:seed --class=ProgramSeeder

echo "✅ Database Seeding Complete!"
echo "================================"
echo "📈 Enhanced Data Summary:"
echo "   • 12+ Powerful Testimonials"
echo "   • 5 Expert Mentors with Sessions"
echo "   • 6 Successful Startups with Milestones"
echo "   • Enhanced Academy Courses"
echo "   • Professional Blog Content"
echo "   • Complete Product Ecosystem"
echo "   • User Accounts & Roles"
echo "================================"
echo "🎉 Your NAMTECH-HUB is now 'Powa Sana' ready!"
