#!/bin/bash

# Install Oh-My-Zsh
sh -c "$(curl -fsSL https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"

# Define default Shell
chsh -s $(which zsh)

# Setup zshrc
rm -rf ~/.zshrc
ln -s ~/Code/dotfiles/zsh/zshrc.symlink ~/.zshrc
