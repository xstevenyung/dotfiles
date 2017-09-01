<?php

namespace Dotfiles\Configurators;

use Dotfiles\Traits\ReadYaml;
use Dotfiles\Traits\MapFunctionAsAttribute;
use Dotfiles\Traits\GetClassName;

abstract class Configurator
{
    use ReadYaml,
        MapFunctionAsAttribute,
        GetClassName;

    protected function file()
    {
        $fileName = strtolower($this->getShortName());

        return "configurators/{$fileName}.yml";
    }

    public function run()
    {
        $cmds = self::readConfig($this->file);

        foreach ($cmds as $cmd) {
            exec($cmd);
        }
    }
}
