<?php

namespace Dotfiles;

use League\CLImate\CLImate;
use Dotfiles\{Configurators, Installers, Symlinkers, Environments};

class Application
{
    private $cmd;
    private $climate;
    private $installer;

    public function __construct(CLImate $climate)
    {
        $this->climate = $climate;
        $this->cmd = $this->climate->arguments->get('install');
        $this->environment = [
            'atom' => Environments\Atom::class,
            'zsh' => Environments\Zsh::class,

            // 'git' => Configurators\Git::class,
            // 'macos' => Configurators\MacOS::class,
            //
            // // 'atom' => Installers\Atom::class,
            // 'brew' => Installers\Brew::class,
            // 'cask' => Installers\Cask::class,
            // 'java' => Installers\Java::class,
            // 'javascript' => Installers\Javascript::class,
            //
            // // 'atom' => Symlinkers\Atom::class,
            // 'spacemacs' => Symlinkers\Spacemacs::class,
            // // 'zsh' => Symlinkers\Zsh::class,
        ];
    }

    function run()
    {
        if (!$this->cmd) {
            $this->cmd = $this->climate->radio('Choose the environment to setup:', array_keys($this->environment))->prompt();
        }

        if (!array_key_exists($this->cmd, $this->environment))
        {
            $this->climate->to('error')->red("Installer {$this->cmd} doesn't exists.");
            return;
        }

        (new $this->environment[$this->cmd])->run();
    }
}
