<?php

namespace Dotfiles\Installers;

use Dotfiles\Traits\{ReadYaml, MapFunctionAsAttribute};

abstract class Installer
{
    use ReadYaml,
        MapFunctionAsAttribute;

    protected function before()
    {
        //
    }

    public function run()
    {
        $this->before();

        $installers = self::read($this->file);

        foreach ($installers as $manager => $packages)
        {
            $cmd = self::cmd($manager);

            foreach ($packages as $package)
            {
                exec("{$cmd} {$package}");

                $this->afterEach($package);
            }
        }
    }

    protected static function cmd($manager)
    {
        $cmds = [
            'brew' => 'brew install',
            'cask' => 'brew cask install',
            'npm-global' => 'npm install -g',
            'apm' => 'apm install',
            'sh' => 'sh',
            'composer-global' => 'composer global require',
        ];

        return $cmds[$manager];
    }

    abstract protected function file();

    protected function afterEach($package)
    {
        //
    }

    protected function after()
    {
        //
    }
}
