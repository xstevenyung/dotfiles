#!/bin/bash

# Only show active apps
defaults write com.apple.dock static-only -bool TRUE

# Remove Dock hide / show animation
defaults write com.apple.dock autohide-time-modifier -int 0

# Enable Dock auto-hide
defaults write com.apple.dock autohide -bool true

# Reset Dock
killall Dock
