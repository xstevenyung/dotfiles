<?php

namespace Dotfiles\Traits;

trait MapFunctionAsAttribute
{
    public function __get($name)
    {
        if ('cmd' === $name) {
            return $this->cmd();
        }

        if ('file' === $name) {
            return $this->file();
        }
    }
}
