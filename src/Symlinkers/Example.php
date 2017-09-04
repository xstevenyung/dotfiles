<?php

namespace Dotfiles\Symlinkers;

class Example extends Symlinker
{
    protected function file()
    {
        return resources_path('symlinks/example.symlink');
    }

    protected function destination()
    {
        return '~/.example';
    }
}
