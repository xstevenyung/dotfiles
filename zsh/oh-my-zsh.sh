#!/bin/bash

# Define default Shell
chsh -s $(which zsh)

# Install Oh-My-Zsh
sh -c "$(curl -fsSL https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"

# Setup zshrc
ln -s ~/Code/dotfiles/zsh/zshrc.symlink ~/.zshrc
