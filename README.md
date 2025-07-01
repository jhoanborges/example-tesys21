# Example-app

This is a good description.

## Installation
This project uses laravel [sail](https://laravel.com/docs/12.x/sail/). You must have docker installed in your local machine.

1. Instala las dependecias del proyecto
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```
2. Levanta los contenedores
```bash
./vendor/bin/sail up -d
```

## Migrations

```bash
./vendor/bin/sail artisan migrate:fresh --seed
```

## Create API documentation

```bash
./vendor/bin/sail artisan scribe:generate --force
```
3. Then you can go to http://localhost/docs


## Considerations
- This project does not ignores .env for convenience.
- If you encounter any problem please regenerate containers using 

```bash
sail build --no-cache
```