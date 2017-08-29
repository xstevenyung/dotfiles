<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

class Brew extends Installer
{
    protected function cmd()
    {
        return 'brew install';
    }

    protected function file()
    {
        return 'brew.yml';
    }
}
