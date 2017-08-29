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

if (! function_exists('config_path'))
{
    function config_path($path = '')
    {
        return base_path('config') . '/' . $path;
    }
}
