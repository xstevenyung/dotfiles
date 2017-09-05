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
        if (! $this->environmentExists($name)) {
            return false;
        }

        $env = $this->environments()[$name];

        return (new $env);
    }

    private function environmentExists($name)
    {
        return array_key_exists($name, $this->environments());
    }

    private function activeEnvironments()
    {
        return array_filter($this->environments(), function ($environment) {
            return (new $environment)->isActive();
        });
    }
}
