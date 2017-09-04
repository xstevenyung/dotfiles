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

    private function environmentExists($name)
    {
        return in_array($name, array_keys($this->environments()));
    }

    private function activeEnvironments()
    {
        return array_filter($this->environments(), function ($environment) {
            return (new $environment)->isActive();
        });
    }
}
