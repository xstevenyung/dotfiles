<?php

namespace Dotfiles\Traits;

trait InteractWithEnvironments
{
    private function environments()
    {
        return include(config_path('environments.php'));
    }

    private function environment($name)
    {
        $environments = $this->environments();

        $env = $environments[$name];

        return (new $env);
    }
}
