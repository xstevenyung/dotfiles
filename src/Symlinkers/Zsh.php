<?php

namespace Dotfiles\Symlinkers;

class Zsh extends Symlinker
{
    protected function file()
    {
        return config_path('symlinks/zshrc.symlink');
    }

    protected function destination()
    {
        return '~/.zshrc';
    }
}
