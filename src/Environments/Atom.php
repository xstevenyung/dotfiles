<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class Atom extends Environment
{
    protected function installer()
    {
        return Installers\Atom::class;
    }

    protected function configurator()
    {
        //
    }

    protected function symlinker()
    {
        return Symlinkers\Atom::class;
    }
}
