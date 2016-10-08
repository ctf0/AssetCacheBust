elixir among others create folders with the timestamp and then add the files to them,
this makes it hard to maintain and just add unnecessary extra work.

this little package makes things much easier as you dont need to change anything in your workflow and everytime you make a change to the file, its timestamp gets changed automatically and so the cache will get busted 😍.

## Installation

1- copy the file `src/CacheBust.php` to ur project `app/CacheBust.php`.

2- from the project root open `composer.json` and add

```js
"autoload": {
    "files": [
        "app/CacheBust.php"
    ],

    // ...
}
```

3- run `composer dump-autoload`

## Usage
1- in your view

```blade
// before
{{ asset('css/style.css') }}

// after
{{ bustfy('css/style.css') }}
```

**And Thats it** 💃.
