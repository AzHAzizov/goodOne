init:
	composer dump-autoload
	php artisan migrate:fresh --seed
	php artisan serve