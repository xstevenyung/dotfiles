<?php

namespace Dotfiles\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddInstallationCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('add:installation')
            ->setDescription('Add an installation to the config file on a selected environment')
            ->addArgument('environment', InputArgument::REQUIRED, 'What environments do you want to update?')
            ->addArgument('package-manager', InputArgument::REQUIRED, 'What command will be use to install the package?')
            ->addArgument('package', InputArgument::REQUIRED, 'What package do you want to add?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        //
    }
}
