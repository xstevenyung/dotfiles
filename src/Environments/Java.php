<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class Java extends Environment
{
    protected function installer()
    {
        return Installers\Java::class;
    }

    protected function configurator()
    {
        return Configurators\Java::class;
    }

    protected function symlinker()
    {
        return Symlinkers\Java::class;
    }
}
