#!/bin/bash

declare -a hpm=()

brew cask install hyper

for i in "${hpm[@]}"
do
  :
  hpm install $i
done
