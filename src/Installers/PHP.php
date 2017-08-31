<?php

namespace Dotfiles\Installers;

class PHP extends Installer
{
    protected function before()
    {
        $this->unlinkAll();
    }

    protected function file()
    {
        return 'installers/php.yml';
    }

    protected function afterEach($package)
    {
        $this->unlinkAll();
    }

    protected function afterEachManager($manager)
    {
        $this->unlinkAll();

        $this->link('php71');
    }

    protected function after()
    {
        //
    }

    private function unlinkAll()
    {
        exec('brew unlink php54');
        exec('brew unlink php55');
        exec('brew unlink php56');
        exec('brew unlink php70');
        exec('brew unlink php71');
    }

    private function link($version)
    {
        exec("brew link {$version}");
    }
}
