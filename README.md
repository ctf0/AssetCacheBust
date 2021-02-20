<h1 align="center">
    Asset Cache Bust
    <br>
    <a href="https://packagist.org/packages/ctf0/asset-cache-bust"><img src="https://img.shields.io/packagist/v/ctf0/asset-cache-bust.svg" alt="Latest Stable Version" /></a> <a href="https://packagist.org/packages/ctf0/asset-cache-bust"><img src="https://img.shields.io/packagist/dt/ctf0/asset-cache-bust.svg" alt="Total Downloads" /></a>
</h1>

simply everytime you make a change to the file, its timestamp gets changed &amp; the cache will be busted automatically 😍.

## Installation

- `composer require ctf0/asset-cache-bust`

## Usage

- in your view

    ```blade
    // php
    <?php echo bustfy('css/style.css') ?>

    // laravel
    {{ bustfy('css/style.css') }}
    ```

<br>

### Security

If you discover any security-related issues, please email [ctf0-dev@protonmail.com](mailto:ctf0-dev@protonmail.com).
