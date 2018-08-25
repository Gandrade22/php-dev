# Creating PHP development environment with Docker

## Run container:
docker run -d --name php-dev -p 8080:80 -v "$PWD":/var/www/html php:7.0-apache

> This example will copy all files in your current path to '/var/www/html'. If you alter any file in your current will be reflected in application
