<?php

namespace Dotfiles\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EditCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('edit')
            ->setDescription('Open project directory in your favorite text editor')
            ->addArgument('editor', InputArgument::OPTIONAL, 'What text editor you want to use?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $editor = $input->getArgument('editor') ?: app('editor', 'atom');

        $dir = base_path();

        exec("{$editor} {$dir}");
    }
}
