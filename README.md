# Creating A Laravel Project
```php
composer create-project laravel/laravel portfolio-app

```

# Configure .env file for Database 
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolioapp
DB_USERNAME=root
DB_PASSWORD=
```

# Creating PortfolioController
```php
php artisan make:controller PortfolioController
```

# Edit the web.php for routing 
```php
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/resume', [PortfolioController::class, 'resume'])->name('resume');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'store'])->name('contact.store');
```
# Edit the PortfolioController.php for routing action
```php
public function index(): View
    {
        return view('index');
    }

    public function about(): View
    {
        return view('about');
    }

    public function resume(): View
    {
        return view('resume');
    }

    public function portfolio(): View
    {
        return view('portfolio');
    }

    public function services(): View
    {
        return view('services');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:1600',
        ]);
        return [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ];
    }
```
# Create view file by php artisan
```php
php artisan make:view app-layout
php artisan make:view index
php artisan make:view about
php artisan make:view resume
php artisan make:view portfolio
php artisan make:view services
php artisan make:view contact
```
# Edit the view files
- app-layout.blade.php
- index.blade.php
- about.blade.php
- resume.blade.php
- portfolio.blade.php
- services.blade.php
- contact.blade.php
