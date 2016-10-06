## Installation
1- open `app/Providers/AppServiceProvider.php` and add

```php
public function boot()
{
    // ...

    view()->share('v', \Cache::get('v', 0));
}
```

2- copy `AssetsCacheBust.php` to `app/Console/Commands`

3- open `app/Console/Kernel.php` and add

```php
protected $commands = [
    // ...

    App\Console\Commands\AssetsCacheBust::class,
];
```

4- run `composer dump-autoload`


## Usage
1- in your view

```blade
// before
{{ asset("css/style.css") }}

// after
{{ asset("css/style.css?v=$v") }}
```

**now whenever you push a new copy of the assets, just run `php artisan assets:bust` from the console and you are done 💯.

## TODO

* [ ] Turn Into A Package.
