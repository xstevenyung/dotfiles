#!/bin/bash

# Install Atom
brew cask install atom

####################
### Config Files ###
####################

mkdir ~/.atom
ln -fs ~/Code/dotfiles/atom/atom.symlink ~/.atom

############################
### Package Installation ###
############################

apm install vim-mode-plus
apm install language-blade
apm install language-vue
