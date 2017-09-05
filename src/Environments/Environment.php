<?php

namespace Dotfiles\Environments;

use Exception;
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

        if ($this->configurator)
        {
            print("Running configurator\n");

            $this->configurator->run();
        }

        if ($this->symlinker)
        {
            print("Running symlinker\n");

            $this->symlinker->run();
        }

        $this->after();
    }

    public function addPackage($manager, $package)
    {
        if ($this->installer) {
            return $this->installer->add($manager, $package);
        }

        $name = $this->getShortName();

        throw new Exception("Installer doesn't exists for {$name}");
    }

    public function addConfiguration($configuration)
    {
        if ($this->configurator) {
            return $this->configurator->add($configuration);
        }

        $name = $this->getShortName();

        throw new Exception("Configurator doesn't exists for {$name}");
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
