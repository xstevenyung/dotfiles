<?php

namespace Dotfiles\Traits;

use Symfony\Component\Yaml\Yaml;

trait ReadYaml
{
    public static function read($file)
    {
        $file = file_get_contents(config_path($file));

        return Yaml::parse($file);
    }
}
