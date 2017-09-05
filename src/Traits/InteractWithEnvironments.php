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

        if (! array_key_exists($name, $environments)) {
            return false;
        }

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
