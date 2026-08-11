FROM serversideup/php:8.3-fpm-nginx

# Switch to root to configure file permissions
USER root

# Copy application files with correct ownership for www-data
COPY --chown=www-data:www-data . /var/www/html

# Copy deploy script into entrypoint.d directory so it runs on startup
COPY --chown=www-data:www-data scripts/00-laravel-deploy.sh /etc/entrypoint.d/99-laravel-deploy.sh
RUN chmod 755 /etc/entrypoint.d/99-laravel-deploy.sh

# Switch back to www-data user
USER www-data

# Install composer dependencies
RUN composer install --no-dev --optimize-autoloader
