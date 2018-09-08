REM pahr builder

php composer.phar install --no-dev
php box.phar compile
php composer.phar install --dev
