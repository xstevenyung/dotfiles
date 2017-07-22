<?php

namespace Dotfiles;

class InstallCommand
{
    function run()
    {
        foreach ($this->packages as $package) {
            exec("{$this->cmd} {$package}");
        }
    }
}
