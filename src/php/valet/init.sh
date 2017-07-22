#!/bin/bash

# Install
composer global require laravel/valet
~/.composer/vendor/bin/valet install

# Symlink
rm ~/.valet/config.json
ln -fs ~/Code/dotfiles/php/valet/config.json.symlink ~/.valet/config.json
