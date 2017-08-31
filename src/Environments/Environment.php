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
        if ($this->installer)
        {
            print("Running installer\n");

            (new $this->installer)->run();
        }

        if ($configurator = $this->configurator())
        {
            print("Running configurator\n");

            (new $configurator)->run();
        }

        if ($symlinker = $this->symlinker())
        {
            print("Running symlinker\n");

            (new $symlinker)->run();
        }
    }
}
