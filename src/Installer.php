<?php

namespace Dotfiles;

class Installer
{
    public function run()
    {
        foreach ($this->packages as $package) {
            exec("{$this->cmd} {$package}");
        }
    }
}
