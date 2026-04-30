# Clear Laravel Cache Script
Write-Host "Clearing Laravel Cache..." -ForegroundColor Green

# Clear route cache
Write-Host "Clearing route cache..." -ForegroundColor Yellow
php artisan route:clear

# Clear application cache
Write-Host "Clearing application cache..." -ForegroundColor Yellow
php artisan cache:clear

# Clear configuration cache
Write-Host "Clearing configuration cache..." -ForegroundColor Yellow
php artisan config:clear

# Clear view cache
Write-Host "Clearing view cache..." -ForegroundColor Yellow
php artisan view:clear

# Clear all caches
Write-Host "Clearing all caches..." -ForegroundColor Yellow
php artisan optimize:clear

# Regenerate optimizations
Write-Host "Regenerating optimizations..." -ForegroundColor Yellow
php artisan optimize

Write-Host "Cache cleared successfully!" -ForegroundColor Green
Write-Host "Now restart your web server:" -ForegroundColor Cyan
Write-Host "For Apache: sudo systemctl restart apache2" -ForegroundColor White
Write-Host "For Nginx: sudo systemctl restart nginx" -ForegroundColor White

# Keep window open
Read-Host "Press Enter to exit"
