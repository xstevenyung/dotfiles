<?php

namespace Dotfiles;

trait InstallPackages
{
    function run()
    {
        foreach ($this->packages as $package) {
            exec("{$this->cmd} {$package}");
        }
    }
}
