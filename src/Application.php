<?php

namespace Dotfiles;

class Application
{
    private $cmd;

    function __construct($cmd)
    {
        $this->cmd = $cmd;
    }

    function run()
    {
        echo $this->cmd;
    }
}
