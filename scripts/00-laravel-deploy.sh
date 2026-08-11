#!/bin/sh

# Run migrations. Seed production data manually only when required.
echo "Running migrations..."
php /var/www/html/artisan migrate --force

# Cache Laravel config & routes for performance
echo "Caching config and routes..."
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
php /var/www/html/artisan view:cache
