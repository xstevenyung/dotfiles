<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

abstract class Installer
{
    public function run()
    {
        $file = file_get_contents(config_path($this->file));
        $this->packages = Yaml::parse($file);

        foreach ($this->packages as $package) {
            exec("{$this->cmd} {$package}");
        }
    }

    abstract protected function cmd();

    abstract protected function file();

    public function __get($name)
    {
        if ('cmd' === $name)
        {
            return $this->cmd();
        }

        if ('file' === $name)
        {
            return $this->file();
        }
    }
}
