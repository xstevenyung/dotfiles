#!/bin/bash
declare -a brew=('adblock' 'bash' 'composer' 'elasticsearch@2.4' 'freetype' 'gettext' 'heroku' 'icu4c' 'jpeg' 'libpng' 'libxml2' 'mongodb' 'mysql' 'node' 'openssl' 'pcre' 'php56' 'php56-mongo' 'php70' 'php71' 'postgresql' 'readline' 'symfony-installer' 'unixodbc' 'watchman' 'wget' 'yarn' 'youtube-dl');

for i in "${brew[@]}"
do
  :
  brew install $i
done
