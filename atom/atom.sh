#!/bin/bash

declare -a apm=('vim-mode-plus')

brew cask install atom

for i in "${apm[@]}"
do
  :
  apm install $i
done
