FROM ghcr.io/rene-bos/iw-ghdw-php:8.1-1.0.0

COPY . /app

# Ensure PHP can write in the `var` folder
RUN mkdir -p /app/var && \
    chmod -R 0777 /app/var
