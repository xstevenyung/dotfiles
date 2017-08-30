<?php

namespace Dotfiles\Symlinkers;

class Atom extends Symlinker
{
    protected function file()
    {
        return config_path('symlinks/atom.symlink');
    }

    protected function destination()
    {
        return '~/.atom';
    }
}
