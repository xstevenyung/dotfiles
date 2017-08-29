<?php

namespace Dotfiles;

abstract class Installer
{
    public function run()
    {
        $this->cmd = $this->cmd();
        $this->file = file_get_contents(config_path($this->file()));
        $this->packages = Yaml::parse($this->file);
        
        foreach ($this->packages as $package) {
            exec("{$this->cmd} {$package}");
        }
    }

    abstract protected function cmd();

    abstract protected function file();
}
