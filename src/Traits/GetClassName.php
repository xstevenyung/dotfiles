<?php

namespace Dotfiles\Traits;

use ReflectionClass;

trait GetClassName
{
    protected function getShortName()
    {
        return (new ReflectionClass($this))->getShortName();
    }
}
