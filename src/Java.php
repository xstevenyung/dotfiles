<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

class Java
{
    use InstallPackages;

    function __construct()
    {
        $this->cmd = 'brew install';
        $this->file = file_get_contents(config_path('java.yml'));
        $this->packages = Yaml::parse($this->file);
    }
}
