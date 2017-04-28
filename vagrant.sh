#!/bin/bash

# Homestead
vagrant box add laravel/homestead
git clone git@github.com:laravel/homestead.git ~/Code/homestead
cd ~/Code/homestead
open https://scotch.io/tutorials/getting-started-with-laravel-homestead
