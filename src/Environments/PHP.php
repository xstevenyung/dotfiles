<?php

namespace Dotfiles\Environments;

use Dotfiles\{Installers, Configurators, Symlinkers};

class PHP extends Environment
{
    protected function installer()
    {
        return Installers\PHP::class;
    }

    protected function configurator()
    {
        //
    }

    protected function symlinker()
    {
        //
    }
}
