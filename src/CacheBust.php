<?php

if (!function_exists('bustfy')) {
    function bustfy($file)
    {
        $path              = getcwd() . "/$file";
        $modification_time = filemtime($path);
        $render            = "{$file}?v={$modification_time}";

        return "/$render";
    }
}
