<?php

namespace Dotfiles\Traits;

trait MapFunctionAsAttribute
{
    public function __get($name)
    {
        return $this->$name();
    }
}
