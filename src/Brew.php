<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

class Brew extends Installer
{
    public function __construct()
    {
        $this->cmd = 'brew install';
        $this->file = file_get_contents(config_path('brew.yml'));
        $this->packages = Yaml::parse($this->file);
    }
}
