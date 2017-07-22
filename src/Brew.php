<?php

namespace Dotfiles;

class Brew
{
    function __construct()
    {
        $this->cmd = 'brew install';
    }

    function run()
    {
        $packages = [
            'mysql',
            'tmux',
            'the_silver_searcher',
        ];

        foreach ($packages as $package) {
            exec($this->cmd . ' ' . $package);
        }
    }
}
