1 - Alterar o arquivo  .env.example para .env

2 - rodar este comando docker a baixo para atualizar as dependencias do laravel 

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
	
3 - Executem este comando para criar seu banco de dados 

./vendor/bin/sail php artisan migrate	


4 - Entre na aplicação e gere uma nova chave.