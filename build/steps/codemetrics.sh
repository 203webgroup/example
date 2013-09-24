#!/bin/bash

# Composer
php composer.phar install

# Measure project size using PHPLOC
phploc --log-csv ${WORKSPACE}/build/logs/phploc.csv ${WORKSPACE}/src

# Calculate software metrics using PHP_Depend
vendor/pdepend/pdepend/src/bin/pdepend --jdepend-xml=${WORKSPACE}/build/logs/jdepend.xml --jdepend-chart=${WORKSPACE}/build/pdepend/dependencies.svg --overview-pyramid=${WORKSPACE}/build/pdepend/overview-pyramid.svg ${WORKSPACE}/src

# Perform project mess detection using PHPMD creating a log file for the continuous integration server
# phpmd src xml build/phpmd.xml --reportfile build/logs/pmd.xml

# Find coding standard violations using PHP_CodeSniffer creating a log file for the continuous integration server
# phpcs --report=checkstyle --report-file=build/logs/checkstyle.xml --standard=build/phpcs.xml src > /dev/null

# Find duplicate code using PHPCPD
# phpcpd --log-pmd build/logs/pmd-cpd.xml src
