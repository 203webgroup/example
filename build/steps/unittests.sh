#!/bin/bash

# Composer
php composer.phar install

# Lint
php -l src
php -l tests

# PHP unit
phpunit --log-junit build/logs/junit.xml