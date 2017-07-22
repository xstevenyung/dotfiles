<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use League\CLImate\CLImate;

$climate = new CLImate;

$climate->out('Welcome to the dotfiles.');
