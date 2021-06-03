to reproduce the issue:

    docker-compose up -d
    symfony composer install
    symfony console --env=test doctrine:database:create
    symfony console --env=test doctrine:schema:update --force
    symfony console --env=test doctrine:fixtures:load -n
    symfony run bin/phpunit --repeat 100

Change `enable_authenticator_manager: false` and rerun phpunit to see memory difference
