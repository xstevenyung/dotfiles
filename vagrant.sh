#!/bin/bash

# Homestead
vagrant box add laravel/homestead
mkdir ~/workspace/homestead
cd ~/workspace/homestead
vagrant init laravel/homestead
vagrant up
