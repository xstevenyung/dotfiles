<?php

namespace Dotfiles\Traits;

use Symfony\Component\Yaml\Yaml;

trait InteractWithYaml
{
    public static function read($file)
    {
        $file = file_get_contents($file);

        return Yaml::parse($file);
    }

    public static function readResources($file, $attribute = null, $default = null)
    {
        $resources = self::read(resources_path($file));

        if ($attribute)
        {
            return array_key_exists($attribute, $resources)
                ? $resources[$attribute]
                : $default;
        }

        return $resources;
    }

    public static function write($file, $data)
    {
        $yaml = Yaml::dump($data);

        file_put_contents($file, $yaml);
    }

    public static function writeResources($file, $resources)
    {
        $file = resources_path($file);

        self::write($file, $resources);
    }
}
