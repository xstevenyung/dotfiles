<?php

namespace Dotfiles;

use League\CLImate\CLImate;
use Dotfiles\{Configurators, Installers, Symlinkers};

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
            'git' => Configurators\Git::class,
            'macos' => Configurators\MacOS::class,

            'brew' => Installers\Brew::class,
            'cask' => Installers\Cask::class,
            'java' => Installers\Java::class,
            'javascript' => Installers\Javascript::class,

            'atom' => Symlinkers\Atom::class,
            'spacemacs' => Symlinkers\Spacemacs::class,
            'zsh' => Symlinkers\Zsh::class,
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
