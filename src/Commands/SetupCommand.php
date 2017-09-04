<?php

namespace Dotfiles\Commands;

use Dotfiles\Environments;
use Dotfiles\Traits\InteractWithEnvironments;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupCommand extends Command
{
    use InteractWithEnvironments;

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

        if ($this->environmentExists($environment))
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
}
