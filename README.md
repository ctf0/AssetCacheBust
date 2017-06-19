elixir among others create folders with the timestamp and then add the files to them,
this makes it hard to maintain and just add unnecessary extra work.

this little package makes things much easier as you dont need to change anything in your workflow and everytime you make a change to the file, its timestamp gets changed automatically and so the cache will get busted 😍.

## Installation

- `composer require ctf0/asset-cache-bust`

- add the service provider to `config/app.php`

```php
'providers' => [
    ctf0\AssetCacheBust\AssetCacheBustServiceProvider::class,
]
```

## Usage

- in your view

```blade
// before
{{ asset('css/style.css') }}

// after
{{ bustfy('css/style.css') }}
```

