simply everytime you make a change to the file, its timestamp gets changed & the cache will busted automatically 😍.

## Installation

- `composer require ctf0/asset-cache-bust`

## Usage

- in your view

```blade
// normal
<?php echo bustfy('css/style.css') ?>

// laravel
{{ bustfy('css/style.css') }}
```
