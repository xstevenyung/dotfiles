<?php

namespace Dotfiles\Configurators;

use Dotfiles\Traits\ReadYaml;
use Dotfiles\Traits\MapFunctionAsAttribute;
use Dotfiles\Traits\GetClassName;
use Dotfiles\Traits\RetrieveConfig;

abstract class Configurator
{
    use ReadYaml,
        MapFunctionAsAttribute,
        RetrieveConfig;

    private $dir = 'configurators';

    public function run()
    {
        $cmds = self::readConfig($this->file);

        foreach ($cmds as $cmd) {
            exec($cmd);
        }
    }
}
