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

- Redirect when `Exceptions` (404, 500 ...)

	=>	App\Exceptions\Handler.php
		In Kernel move    
```
$ Kernel.php    
\Illuminate\Session\Middleware\StartSession::class,    
\Illuminate\View\Middleware\ShareErrorsFromSession::class,    
```    
		from `$middlewareGroups` to `$middleware`

- It is unsafe to run [Dusk](http://terrapinssky.blogspot.com/2017/10/laravelresolved-it-is-unsafe-to-run.html) in production.

```
$ composer.json    
`extra`: {    
	`laravel`: {    
		`dont-discover`: [    
			`laravel/dusk`    
		]    
	}    
}    
```    
		then run `composer dump-autoload`
