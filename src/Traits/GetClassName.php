<?php

namespace Dotfiles\Traits;

trait GetClassName
{
    protected function getShortName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
