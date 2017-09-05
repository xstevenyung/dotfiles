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

if (! function_exists('resources_path'))
{
    function resources_path($path = '')
    {
        return base_path('resources') . '/' . $path;
    }
}

if (! function_exists('app'))
{
    function app($name, $default = false)
    {
        $parameters = include(config_path('app.php'));

        return array_key_exists($name, $parameters)
            ? $parameters[$name]
            : $default;
    }
}
