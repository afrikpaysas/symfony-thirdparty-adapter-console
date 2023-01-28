echo 'composer install'
composer install --dev

echo 'Sync Database'
./bin/console doctrine:schema:update -f

echo 'Cache clear'
./bin/console cache:clear

echo 'Run Code Review of src/ with phpcs'
./vendor/bin/phpcs src/

echo 'Run Code Review of src/ with phpmd'
./vendor/bin/phpmd src/ text cleancode,codesize,design,unusedcode,naming,controversial

echo 'Run PHP Stan Analysis of src/ with phpstan'
php -d memory_limit=-1 ./vendor/bin/phpstan analyse src

echo 'Run Psalm Analysis of src/ with psalm'
./vendor/bin/psalm --show-info=true src/