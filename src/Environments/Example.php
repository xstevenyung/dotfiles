<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class Example extends Environment
{
    protected function installer()
    {
        return Installers\Example::class;
    }

    protected function configurator()
    {
        return Configurators\Example::class;
    }

    protected function symlinker()
    {
        return Symlinkers\Example::class;
    }
}
