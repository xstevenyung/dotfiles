#!/bin/bash

# PHP versions
source ~/Code/dotfiles/php/unlink.sh
brew install homebrew/php/php54
source ~/Code/dotfiles/php/unlink.sh
brew install homebrew/php/php55
source ~/Code/dotfiles/php/unlink.sh
brew install homebrew/php/php56
source ~/Code/dotfiles/php/unlink.sh
brew install homebrew/php/php70
source ~/Code/dotfiles/php/unlink.sh
brew install homebrew/php/php71
source ~/Code/dotfiles/php/unlink.sh

source ~/Code/dotfiles/php/modules.sh
brew link php71

# Composer
brew install homebrew/php/composer
composer global require phpunit/phpunit

# Valet
composer global require laravel/valet
~/.composer/vendor/bin/valet install
