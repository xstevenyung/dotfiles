<?php

namespace Dotfiles;

use Symfony\Component\Yaml\Yaml;

abstract class Installer
{
    public function run()
    {
        $file = file_get_contents(config_path($this->file));
        $installers = Yaml::parse($file);

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
