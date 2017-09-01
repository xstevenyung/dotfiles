<?php

namespace Dotfiles\Environments;

use Dotfiles\Installers;
use Dotfiles\Configurators;
use Dotfiles\Symlinkers;

class Atom extends Environment
{
    protected function installer()
    {
        $class = '\\Dotfiles\\Installers\\' . $this->getShortName();

        if (class_exists($class)) {
            return (new $class);
        }

        return false;
    }

    protected function configurator()
    {
        $class = '\\Dotfiles\\Configurators\\' . $this->getShortName();

        if (class_exists($class)) {
            return (new $class);
        }

        return false;
    }

    protected function symlinker()
    {
        $class = '\\Dotfiles\\Symlinkers\\' . $this->getShortName();

        if (class_exists($class)) {
            return (new $class);
        }

        return false;
    }

    private function getShortName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
