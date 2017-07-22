<?php

namespace Dotfiles;

class Brew extends InstallCommand
{
    function __construct()
    {
        $this->cmd = 'brew install';
        $this->packages = [
            'mysql',
            'tmux',
            'the_silver_searcher',
        ];
    }
}
