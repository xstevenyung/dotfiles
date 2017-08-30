<?php

namespace Dotfiles\Environments;

use Dotfiles\{Installers, Configurators, Symlinkers};

class Atom
{
    private function installer()
    {
        return Installers\Atom::class;
    }

    private function configurator()
    {
        //
    }

    private function symlinker()
    {
        return Symlinkers\Atom::class;
    }

    public function run()
    {
        if ($installer = $this->installer()) {
            (new $installer)->run();
        }

        if ($configurator = $this->configurator()) {
            (new $configurator)->run();
        }
        if ($symlinker = $this->symlinker()) {
            (new $symlinker)->run();
        }
    }
}
