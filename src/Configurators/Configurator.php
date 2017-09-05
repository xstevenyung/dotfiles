<?php

namespace Dotfiles\Configurators;

use Dotfiles\Traits\InteractWithYaml;
use Dotfiles\Traits\MapFunctionAsAttribute;
use Dotfiles\Traits\GetClassName;
use Dotfiles\Traits\RetrieveConfig;

abstract class Configurator
{
    use InteractWithYaml,
        MapFunctionAsAttribute,
        RetrieveConfig;

    private $attribute = 'configurations';

    public function run()
    {
        $cmds = self::readResources($this->file, $this->attribute);

        foreach ($cmds as $cmd) {
            exec($cmd);
        }
    }

    public function add($configuration)
    {
        $resources = self::readResources($this->file);

        $resources[$this->attribute][] = $configuration;

        self::writeResources($this->file, $resources);

        return true;
    }
}
