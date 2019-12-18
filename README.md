<p align="center"><img src="https://fidweb.net/wp-content/uploads/2017/11/Sofia-Bulgaria.png" width="300"></p>

## Package
- [Core UI Laravel](https://github.com/LaravelDaily/Laravel-CoreUI-AdminPanel)

## Setup
- Clone project.
- Clone .env.example to .env `cp .env.example .env`
- Run    
	`composer install`    
	`php artisan key:generate`    
	`php artisan migrate`    
	`php artisan db:seed --class=DatabaseSeeder`

## Issues
- When run migration: `SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long;
max key length is 767 bytes (SQL: alter table "users" add unique "users_email_unique"("email"))`

	=> Fix: AppServiceProvider.php
		use Illuminate\Support\Facades\Schema;
		public function boot()
		{
			Schema::defaultStringLength(191);
		}
