<?php

if (! function_exists('dd'))
{
    function dd($var)
    {
        var_dump($var);

        exit;
    }
}

if (! function_exists('base_path'))
{
    function base_path($path = '')
    {
        return implode('/', [__DIR__, '..', $path]);
    }
}

echo base_path();
