<?php

namespace Dotfiles;

class Brew
{
    use InstallPackages;

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
