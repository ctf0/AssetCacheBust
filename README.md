elixir among others create folders with the timestamp and then add the files to them,
this makes it hard to maintain and just add unnecessary extra work.

this little package makes things much easier as you dont need to change anything in your workflow and everytime you make a change to the file, its timestamp gets changed automatically and so the cache will get busted 😍.

## Installation

1- download `ctf0` folder.

2- copy the folder to `vendor`

3- from the project root open `composer.json` and add

```js
"autoload": {
    "files": [
        "vendor/ctf0/src/CacheBust.php"
    ],

    // ...
}
```

4- run `composer dump-autoload`

## Usage
1- in your view

```blade
// before
{{ asset('css/style.css') }}

// after
{{ bust('css/style.css') }}
```

**And Thats it** 💃.

## TODO

* [ ] Turn Into A Package (any help it much appreciated).
