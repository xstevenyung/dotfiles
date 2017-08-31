<?php

namespace Dotfiles\Installers;

class PHP extends Installer
{
    protected function before()
    {
        $this->unlink();
    }

    protected function file()
    {
        return 'installers/php.yml';
    }

    protected function afterEach($package)
    {
        $this->unlink();
    }

    protected function afterEachManager($manager)
    {
        $this->unlink();

        exec('brew link php71');
    }

    protected function after()
    {
        //
    }

    private function unlink()
    {
        exec('brew unlink php54');
        exec('brew unlink php55');
        exec('brew unlink php56');
        exec('brew unlink php70');
        exec('brew unlink php71');
    }
}
