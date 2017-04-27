#!/bin/bash

# Install Homebrew
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

brew doctor
brew update

# Brew Caskroom Installation
# VM
brew cask install virtualbox
brew cask install vagrant
# Utility
brew cask install flux
