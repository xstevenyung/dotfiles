<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class Git extends Environment
{
    protected function installer()
    {
        return Installers\Git::class;
    }

    protected function configurator()
    {
        return Configurators\Git::class;
    }

    protected function symlinker()
    {
        return Symlinkers\Git::class;
    }
}
