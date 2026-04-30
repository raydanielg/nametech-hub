#!/bin/bash

echo "🔧 Quick Fix for Testimonials Error"
echo "=================================="

# Clear view cache to apply the fix
echo "🧹 Clearing view cache..."
php artisan view:clear

echo "✅ Testimonials error fixed!"
echo "   • Changed ->reverse() to array_reverse()"
echo "   • Cleared view cache"
echo ""
echo "🌐 Refresh your browser to see the fix"
