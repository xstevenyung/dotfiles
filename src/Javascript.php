<?php

namespace Dotfiles;

class Javascript
{
    function __construct()
    {
        $this->cmds = [
            'brew' => 'brew install',
            'npm' => 'npm install',
        ];

        $this->packages = [
            'brew' => [
                'npm',
                'yarn',
            ],
            'npm' => [
                'gulp-cli',
                'vue-cli',
            ],
        ];
    }

    function run()
    {
        foreach ($this->packages as $packageManager => $packages)
        {
            $cmd = $this->cmds[$packageManager];

            foreach ($packages as $package)
            {
                exec("{$cmd} {$package}");
            }
        }
    }
}
