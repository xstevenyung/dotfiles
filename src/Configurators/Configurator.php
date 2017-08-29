<?php

namespace Dotfiles\Configurators;

use Dotfiles\Traits\{ReadYaml, MapFunctionAsAttribute};

abstract class Configurator
{
    use ReadYaml,
        MapFunctionAsAttribute;

    abstract protected function file();

    public function run()
    {
        $cmds = self::read($this->file);

        foreach ($cmds as $cmd) {
            exec($cmd);
        }
    }
}
