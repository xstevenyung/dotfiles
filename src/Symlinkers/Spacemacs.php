<?php

namespace Dotfiles\Symlinkers;

class Spacemacs extends Symlinker
{
    protected function file()
    {
        return resources_path('symlinks/spacemacs.symlink');
    }

    protected function destination()
    {
        return '~/.emacs.d';
    }
}
