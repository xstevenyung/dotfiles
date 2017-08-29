<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

abstract class Installer
{
    public function run()
    {
        $file = file_get_contents(config_path($this->file));
        $this->installers = Yaml::parse($file);

        foreach ($this->installers as $installer)
        {
            $installer = reset($installer);
            $cmd = $installer['cmd'];
            $packages = $installer['packages'];

            foreach ($packages as $package) {
                exec("{$cmd} {$package}");
            }
        }
    }

    abstract protected function cmd();

    abstract protected function file();

    public function __get($name)
    {
        if ('cmd' === $name) {
            return $this->cmd();
        }

        if ('file' === $name) {
            return $this->file();
        }
    }
}
