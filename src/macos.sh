#!/bin/bash

# Only show active apps
defaults write com.apple.dock static-only -bool TRUE

# Remove Dock hide / show animation
defaults write com.apple.dock autohide-time-modifier -int 0

# Enable Dock auto-hide
defaults write com.apple.dock autohide -bool true

# Reset Dock
killall Dock

echo "Note: to enable switch between windows go to: https://superuser.com/questions/299241/in-mac-os-what-is-the-keyboard-shortcut-to-switch-between-windows-of-the-same-a"
