Starting php-web container:
- remove mysql-data/ dir in ./docker
- docker compose up -d php-web
- docker-compose exec -u 1000:1000 php-web bash
- php artisan migrate:fresh --seed

OR
docker-compose exec -u 1000:1000 php-web sh -c "php artisan migrate:fresh -n --force"
