<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class Cask extends Environment
{
    protected function installer()
    {
        return Installers\Cask::class;
    }

    protected function configurator()
    {
        return Configurators\Cask::class;
    }

    protected function symlinker()
    {
        return Symlinkers\Cask::class;
    }
}
