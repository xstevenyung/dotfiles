<?php

namespace Dotfiles;

class Java
{
    use InstallPackages;

    function __construct()
    {
        $this->cmd = 'brew install';
        $this->packages = [
            'java',
            'intellij-idea',
            'sts',
        ];
    }
}
