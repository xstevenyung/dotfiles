<?php

namespace Dotfiles;

class Java extends Installer
{
    protected function cmd()
    {
        return 'brew install';
    }

    protected function file()
    {
        return 'java.yml';
    }
}
