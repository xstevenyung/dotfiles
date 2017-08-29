<?php

namespace Dotfiles;

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
