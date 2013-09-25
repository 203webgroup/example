#!/bin/bash

# Composer
php composer.phar install

# Unit tests
phpunit --log-junit build/logs/junit.xml

# Sonar
/home/debian/sonar-runner-2.3/bin/sonar-runner -Dsonar.projectVersion=1.0-${BUILD_NUMBER} -Dsonar.phpUnit.analyzeOnly=true -Dsonar.phpUnit.reportPath=${WORKSPACE}/build/logs/junit.xml
