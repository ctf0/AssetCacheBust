<?php

if (!function_exists('bustfy')) {
    function bustfy($file, $secure = null)
    {
        $path = public_path($file);
        $modification_time = filemtime($path);
        $render = "{$file}?v={$modification_time}";

        return app('url')->asset($render, $secure);
    }
}
