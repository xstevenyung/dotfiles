<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class MacOS extends Environment
{
    protected function installer()
    {
        return Installers\MacOS::class;
    }

    protected function configurator()
    {
        return Configurators\MacOS::class;
    }

    protected function symlinker()
    {
        return Symlinkers\MacOS::class;
    }
}
