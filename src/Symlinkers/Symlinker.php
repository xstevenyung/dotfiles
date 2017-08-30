<?php

namespace Dotfiles\Symlinkers;

use Dotfiles\Traits\MapFunctionAsAttribute;

abstract class Symlinker
{
    use MapFunctionAsAttribute;

    public function run()
    {
        exec("rm -rf {$this->destination}");
        exec("ln -fs {$this->file} {$this->destination}");
    }

    abstract protected function file();

    abstract protected function destination();
}
