`docker-compose up`

get into container `docker exec -it rabbit_mq_project_php-fpm_1 sh`

inside container `php bin/console messenger:consume rabbit_mq`

local rabbit management: `http://localhost:15672/` username: `guest`, password: `guest`