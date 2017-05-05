#!/bin/bash

# Install Homebrew
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

brew doctor
brew update

##################################
### Brew Caskroom Installation ###
##################################

# VM
brew cask install virtualbox
brew cask install vagrant

# Productivity
brew cask install evernote

# Utility
brew cask install flux
brew cask install avast-mac-security

# Communication
brew cask install slack
brew cask install gitter
brew cask install discord

# Browser
brew cask install google-chrome

# Dev Tools
brew cask install sourcetree
brew cask install sequel-pro

# Entertainment
brew cask install spotify
