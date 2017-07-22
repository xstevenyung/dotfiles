#!/bin/bash

# Create Code/
mkdir ~/Code

# Clone this repository
cd ~/Code
git clone https://github.com/stvnyung/dotfiles.git

# Install Homebrew
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

brew doctor
brew update

source brew.sh
source cask.sh
source git.sh
source javascript.sh
source macos.sh
source atom/init.sh
# source emacs/init.sh
source php/init.sh
# source vagrant/init.sh
source zsh/init.sh
