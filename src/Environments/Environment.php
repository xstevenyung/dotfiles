<?php

namespace Dotfiles\Environments;

use Dotfiles\Traits\MapFunctionAsAttribute;

abstract class Environment
{
    use MapFunctionAsAttribute;

    abstract protected function installer();

    abstract protected function configurator();

    abstract protected function symlinker();

    public function run()
    {
        if ($this->installer) {
            (new $this->installer)->run();
        }

        if ($configurator = $this->configurator()) {
            (new $configurator)->run();
        }
        if ($symlinker = $this->symlinker()) {
            (new $symlinker)->run();
        }
    }
}
