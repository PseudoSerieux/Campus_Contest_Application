echo "Mise en place de la base de donnée"
docker-compose exec php /php/bin/console doctrine:database:drop --force
docker-compose exec php /php/bin/console cache:clear
docker-compose exec php /php/bin/console doctrine:database:create
docker-compose exec php /php/bin/console doctrine:schema:create