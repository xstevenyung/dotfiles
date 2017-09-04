<?php

namespace Dotfiles\Commands;

use Dotfiles\Environments;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupCommand extends Command
{
    private function environments()
    {
        return [
            'atom' => Environments\Atom::class,
            'brew' => Environments\Brew::class,
            'cask' => Environments\Cask::class,
            'git' => Environments\Git::class,
            'macos' => Environments\MacOS::class,
            'php' => Environments\PHP::class,
            'valet' => Environments\Valet::class,
            'zsh' => Environments\Zsh::class,
        ];
    }

    protected function configure()
    {
        $this
            ->setName('setup')
            ->setDescription('Setup one or more environments')
            ->addArgument('environment', InputArgument::REQUIRED, 'What environments you want to setup?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $environment = $input->getArgument('environment');

        if (in_array($environment, array_keys($this->environments())))
        {
            $this->environment($environment)->run();

            return;
        }

        if ('all' === $environment)
        {
            foreach ($this->environments() as $key => $env)
            {
                $io->section("Setting {$key}");

                (new $env)->run();
            }

            return;
        }

        $io->error("Environment not found: {$environment}");
    }

    private function environment($name)
    {
        $environments = $this->environments();

        $env = $environments[$name];

        return (new $env);
    }
}
