<?php

namespace Dotfiles;

class Brew
{
    const CMD = 'brew install';

    function run()
    {
        $packages = [
            'mysql',
            'tmux',
            'the_silver_searcher',
        ];

        foreach ($packages as $package) {
            exec(self::CMD . ' ' . $package);
        }
    }
}
