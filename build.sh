#!/usr/bin/env bash

php composer.phar install --no-dev
php box.phar compile
php composer.phar install --dev
