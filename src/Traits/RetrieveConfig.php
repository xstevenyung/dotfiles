<?php

namespace Dotfiles\Traits;

trait RetrieveConfig
{
    use GetClassName;

    private function file()
    {
        $fileName = strtolower($this->getShortName());

        return "{$this->dir}/{$fileName}.yml";
    }
}
