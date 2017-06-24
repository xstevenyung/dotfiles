#!/bin/bash

# Install Homebrew
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

brew doctor
brew update

source cask.sh
source git.sh
source macos.sh
source atom/init.sh
# source emacs/init.sh
# source vagrant/init.sh
source zsh/init.sh
