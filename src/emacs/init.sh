#!/bin/bash

# Install emacs
brew cask install emacs

# Install spacemacs
git clone https://github.com/syl20bnr/spacemacs ~/.emacs.d

# Link spacemacs file
ln -fs ~/Code/dotfiles/emacs/spacemacs.symlink ~/.spacemacs
