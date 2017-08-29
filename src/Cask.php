<?php

namespace Dotfiles;

class Cask extends Installer
{
    protected function cmd()
    {
        return 'brew cask install';
    }

    protected function file()
    {
        return 'cask.yml';
    }
}
