<?php

namespace Dotfiles\Environments;

use Dotfiles\Traits\MapFunctionAsAttribute;

abstract class Environment
{
    use MapFunctionAsAttribute {
        __get as public __simple_get;
    }

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

        if ($configurator = $this->configurator)
        {
            print("Running configurator\n");

            (new $configurator)->run();
        }

        if ($symlinker = $this->symlinker)
        {
            print("Running symlinker\n");

            (new $symlinker)->run();
        }
    }

    protected function returnIfExists($className)
    {
        if (class_exists($className)) {
            return $className;
        }

        return false;
    }

    public function __get($name)
    {
        $className = $this->__simple_get($name);

        return $this->returnIfExists($className);
    }
}
