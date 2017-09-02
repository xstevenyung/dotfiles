<?php

namespace Dotfiles\Traits;

use Symfony\Component\Yaml\Yaml;

trait ReadYaml
{
    public static function read($file)
    {
        $file = file_get_contents($file);

        return Yaml::parse($file);
    }

    public static function readConfig($file, $attribute)
    {
        $configs = self::read(config_path($file));

        return $configs[$attribute];
    }
}
