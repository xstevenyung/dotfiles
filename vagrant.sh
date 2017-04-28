#!/bin/bash

# Homestead
vagrant box add laravel/homestead
mkdir ~/Code/homestead
cd ~/Code/homestead
vagrant init laravel/homestead
vagrant up
