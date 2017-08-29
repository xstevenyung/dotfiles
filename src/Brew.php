<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

class Brew extends Installer
{
    public function __construct()
    {
        $this->cmd = $this->cmd();
        $this->file = file_get_contents(config_path($this->file()));
        $this->packages = Yaml::parse($this->file);
    }

    protected function cmd()
    {
        return 'brew install';
    }

    protected function file()
    {
        return 'brew.yml';
    }
}
