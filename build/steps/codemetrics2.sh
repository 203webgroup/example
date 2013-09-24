#!/bin/bash

# Composer
php composer.phar install

# Unit tests
phpunit --log-junit build/logs/junit.xml

# Sonar
/home/debian/sonar-runner-2.3/bin/sonar-runner