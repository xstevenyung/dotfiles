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
        $cmds = self::readConfig($this->file, $this->attribute);

        foreach ($cmds as $cmd) {
            exec($cmd);
        }
    }
}
