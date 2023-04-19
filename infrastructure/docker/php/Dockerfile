FROM php:8.1.9-fpm-alpine3.16

WORKDIR /app

COPY . /app

# Ensure PHP can write in the `var` folder
RUN mkdir -p /app/var && \
    chmod -R 0777 /app/var
