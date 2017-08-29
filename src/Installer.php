<?php

namespace Dotfiles;

abstract class Installer
{
    public function run()
    {
        foreach ($this->packages as $package) {
            exec("{$this->cmd} {$package}");
        }
    }

    abstract protected function cmd();

    abstract protected function file();
}
