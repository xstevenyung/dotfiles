<?php

namespace Dotfiles\Configurators;

use Dotfiles\Traits\{ReadYaml, MapFunctionAsAttribute};

class MacOS extends Configurator
{
    protected function file()
    {
        return 'configurators/macos.yml';
    }
}
