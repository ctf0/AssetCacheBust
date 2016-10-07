<?php

if (! function_exists('bust')) {
    function bust($file)
    {
        $path          = public_path($file);
        $creation_time = filemtime($path);
        $render        = "{$file}?v={$creation_time}";

        return app('url')->asset($render);
    }
}
