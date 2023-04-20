FROM nginx:1.24.0-alpine

COPY ./infrastructure/docker/web/default.conf.template /etc/nginx/templates/

WORKDIR /app

ENV NGINX_DOCUMENT_ROOT /app/public
ENV NGINX_INDEX_FILE index.php

COPY . /app
