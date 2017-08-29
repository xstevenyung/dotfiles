<?php

namespace Dotfiles;

use League\CLImate\CLImate;
use Dotfiles\Installers\{Brew, Cask, Java, Javascript};

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
            'macos' => MacOS::class,
            'java' => Java::class,
            'javascript' => Javascript::class,
        ];
    }

    function run()
    {
        if (!$this->cmd) {
            $this->cmd = $this->climate->radio('Choose a installer to execute:', array_keys($this->installer))->prompt();
        }

        if (!array_key_exists($this->cmd, $this->installer))
        {
            $this->climate->to('error')->red("Installer {$this->cmd} doesn't exists.");
            return;
        }

        (new $this->installer[$this->cmd])->run();
    }
}
