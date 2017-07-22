<?php

namespace Dotfiles;

class Application
{
    private $cmd;
    private $installer;

    function __construct($cmd)
    {
        $this->cmd = $cmd;
        $this->installer = [
            'brew' => Brew::class,
            'cask' => Cask::class,
            'git' => Git::class,
            'macos' => MacOs::class,
            'java' => Java::class,
        ];
    }

    function run()
    {
        (new $this->installer[$this->cmd])->run();
    }
}
