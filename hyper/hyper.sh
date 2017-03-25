#!/bin/bash

declare -a hpm=('hyperterm-paste' 'hyper-statusline' 'hyperlinks' 'hyper-dark-dracula')

brew cask install hyper
npm install -g hpm-cli

for i in "${hpm[@]}"
do
  :
  hpm install $i
done
