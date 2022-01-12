FROM ghcr.io/rene-bos/iw-ghdw-php:8.1-latest

COPY . /app

# Ensure PHP can write in the `var` folder
RUN chmod -R 0777 /app/var
