<?php

namespace Dotfiles\Installers;

use Dotfiles\Traits\ReadYaml;

abstract class Installer
{
    use ReadYaml;

    public function run()
    {
        $installers = self::read($this->file);

        foreach ($installers as $manager => $packages)
        {
            $cmd = self::cmd($manager);
            $packages = implode(' ', $packages);

            exec("{$cmd} {$packages}");
        }
    }

    protected static function cmd($manager)
    {
        $cmds = [
            'brew' => 'brew install',
            'cask' => 'brew cask install',
            'npm-global' => 'npm install -g',
        ];

        return $cmds[$manager];
    }

    abstract protected function file();

    public function __get($name)
    {
        if ('cmd' === $name) {
            return $this->cmd();
        }

        if ('file' === $name) {
            return $this->file();
        }
    }
}
