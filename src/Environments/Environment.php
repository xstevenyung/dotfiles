<?php

namespace Dotfiles\Environments;

use Dotfiles\Traits\RetrieveConfig;
use Dotfiles\Traits\MapFunctionAsAttribute;
use Dotfiles\Traits\InteractWithYaml;

abstract class Environment
{
    use MapFunctionAsAttribute,
        RetrieveConfig,
        InteractWithYaml;

    public function isActive()
    {
        return self::readResources($this->file, 'is_active', true);
    }

    public function run()
    {
        if ($this->installer)
        {
            print("Running installer\n");

            $this->installer->run();
        }

        if ($configurator = $this->configurator)
        {
            print("Running configurator\n");

            $this->configurator->run();
        }

        if ($symlinker = $this->symlinker)
        {
            print("Running symlinker\n");

            $this->symlinker->run();
        }

        $this->after();
    }

    public function addPackage($manager, $package)
    {
        $this->installer->add($manager, $package);
    }

    protected function after()
    {
        //
    }

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
}
