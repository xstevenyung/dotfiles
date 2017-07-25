<?php

namespace Dotfiles;

use League\CLImate\CLImate;

class Application
{
    private $cmd;
    private $climate;
    private $installer;

    function __construct(CLImate $climate)
    {
        $this->climate = $climate;
        $this->cmd = $this->climate->arguments->get('install');
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
        if (!array_key_exists($this->cmd, $this->installer))
        {
            $this->climate->to('error')->red("Installer {$this->cmd} doesn't exists.");
            return;
        }

        (new $this->installer[$this->cmd])->run();
    }
}
