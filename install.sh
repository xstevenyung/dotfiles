#!/bin/bash

declare -a brew=('adblock' 'bash' 'composer' 'elasticsearch@2.4' 'freetype' 'gettext' 'heroku' 'icu4c' 'jpeg' 'libpng' 'libxml2' 'mongodb' 'mysql' 'node' 'openssl' 'pcre' 'php56' 'php56-mongo' 'php70' 'php71' 'postgresql' 'readline' 'symfony-installer' 'unixodbc' 'watchman' 'wget' 'yarn' 'youtube-dl');
declare -a brewCask=('avast' 'calibre' 'discord' 'dropbox' 'evernote' 'firefox' 'flux' 'google-chrome' 'google-drive' 'google-hangouts' 'java' 'postman' 'psequel' 'robomongo' 'sequel-pro' 'skype' 'slack' 'sourcetree' 'spotify' 'the-unarchiver' 'transmission' 'vlc' 'imageoptim' 'dash' 'vagrant' 'vagrant-manager' 'virtualbox');

for i in "${brew[@]}"
do
  :
  brew install $i
done

for i in "${brewCask[@]}"
do
	:
brew cask install $i
done
