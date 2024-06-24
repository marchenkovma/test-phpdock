make composer "create-project --no-scripts laravel/laravel ."

make composer run-script post-create-project-cmd

1. make composer "create-project laravel/laravel ."
2. config env for db
3. make php artisan migrate
4. chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
