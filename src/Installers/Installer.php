<?php

namespace Dotfiles\Installers;

use Dotfiles\Traits\InteractWithYaml;
use Dotfiles\Traits\RetrieveConfig;
use Dotfiles\Traits\MapFunctionAsAttribute;

abstract class Installer
{
    use InteractWithYaml,
        MapFunctionAsAttribute,
        RetrieveConfig;

    private $attribute = 'installations';

    protected function before()
    {
        //
    }

    protected static function cmd($manager)
    {
        $cmds = include(config_path('install-commands.php'));

        return $cmds[$manager];
    }

    public function run()
    {
        $this->before();

        $installers = self::readConfig($this->file, $this->attribute);

        foreach ($installers as $manager => $packages)
        {
            $cmd = self::cmd($manager);

            foreach ($packages as $package)
            {
                exec("{$cmd} {$package}");

                $this->afterEach($package);
            }

            $this->afterEachManager($manager);
        }

        $this->after();
    }

    public function add($manager, $package)
    {
        $configs = self::readConfig($this->file);

        $configs['installations'][$manager][] = $package;

        self::writeConfig($this->file, $configs);
    }

    protected function afterEach($package)
    {
        //
    }

    protected function afterEachManager($manager)
    {
        //
    }

    protected function after()
    {
        //
    }
}
