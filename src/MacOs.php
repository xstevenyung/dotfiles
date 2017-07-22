<?php

namespace Dotfiles;

class MacOs
{
    use InstallPackages;

    function run()
    {
        exec('defaults write com.apple.dock static-only -bool TRUE'); // Only show active apps
        exec('defaults write com.apple.dock autohide-time-modifier -int 0'); // Remove Dock hide / show animation
        exec('defaults write com.apple.dock autohide -bool true'); // Enable Dock auto-hide
        exec('killall Dock'); // Reset Dock
        exec('open https://goo.gl/6fMg2D'); // Redirect to a link enable switch between windows
    }
}
