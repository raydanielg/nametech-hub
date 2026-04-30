#!/bin/bash

echo "Clearing Laravel Cache..."

# Clear route cache
echo "Clearing route cache..."
php artisan route:clear

# Clear application cache
echo "Clearing application cache..."
php artisan cache:clear

# Clear configuration cache
echo "Clearing configuration cache..."
php artisan config:clear

# Clear view cache
echo "Clearing view cache..."
php artisan view:clear

# Clear all caches
echo "Clearing all caches..."
php artisan optimize:clear

# Regenerate optimizations
echo "Regenerating optimizations..."
php artisan optimize

echo "Cache cleared successfully!"
echo "Now restart your web server:"
echo "For Apache: sudo systemctl restart apache2"
echo "For Nginx: sudo systemctl restart nginx"
