<?php

namespace Dotfiles\Environments;

class PHP extends Environment
{
    protected function after()
    {
        (new Valet)->run();
    }
}
