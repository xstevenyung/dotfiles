<?php

namespace Dotfiles;

class Git
{
    function run()
    {
        # Setup Git user config
        exec('git config --global user.name "Steven Yung"');
        exec('git config --global user.email stevenyung@icloud.com');

        # Setup vi as default editor
        exec('git config --global core.editor vi');
    }
}
