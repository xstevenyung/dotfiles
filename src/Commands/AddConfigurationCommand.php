<?php

namespace Dotfiles\Commands;

use Exception;
use Dotfiles\Traits\InteractWithEnvironments;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddConfigurationCommand extends Command
{
    use InteractWithEnvironments;

    protected function configure()
    {
        $this
            ->setName('add:configuration')
            ->setDescription('Add a configuration command to the environment')
            ->addArgument('environment', InputArgument::REQUIRED, 'What environment do you want to update?')
            ->addArgument('configuration', InputArgument::REQUIRED, 'What configuration command do you want to add?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $environmentName = $input->getArgument('environment');

        if ($environment = $this->environment($environmentName)) {
            try {
                $environment->addConfiguration($input->getArgument('configuration'));
            } catch (Exception $e) {
                $io->error($e->getMessage());

                return false;
            }
        }

        $io->error("Environment not found: {$environmentName}");

        return false;
    }
}
