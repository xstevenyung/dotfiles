<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class Brew extends Environment
{
    protected function installer()
    {
        return Installers\Brew::class;
    }

    protected function configurator()
    {
        return Configurators\Brew::class;
    }

    protected function symlinker()
    {
        return Symlinkers\Brew::class;
    }
}
