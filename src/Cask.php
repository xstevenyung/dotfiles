<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

class Cask
{
    use InstallPackages;

    function __construct()
    {
        $this->cmd = 'brew cask install';
        $this->file = file_get_contents(config_path('cask.yml'));
        $this->packages = Yaml::parse($this->file);
    }
}
