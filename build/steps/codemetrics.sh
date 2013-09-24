#!/bin/bash

# Measure project size using PHPLOC
phploc --log-csv build/logs/phploc.csv src

# Calculate software metrics using PHP_Depend
# pdepend --jdepend-xml=build/logs/jdepend.xml --jdepend-chart=build/pdepend/dependencies.svg --overview-pyramid=build/pdepend/overview-pyramid.svg src

# Perform project mess detection using PHPMD creating a log file for the continuous integration server
# phpmd src xml build/phpmd.xml --reportfile build/logs/pmd.xml

# Find coding standard violations using PHP_CodeSniffer creating a log file for the continuous integration server
# phpcs --report=checkstyle --report-file=build/logs/checkstyle.xml --standard=build/phpcs.xml src > /dev/null

# Find duplicate code using PHPCPD
# phpcpd --log-pmd build/logs/pmd-cpd.xml src
