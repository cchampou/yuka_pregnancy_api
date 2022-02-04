FROM composer:latest

COPY . /app

WORKDIR /app

RUN  composer install

EXPOSE 7000

CMD php artisan serve --host=0.0.0.0 --port=7000
