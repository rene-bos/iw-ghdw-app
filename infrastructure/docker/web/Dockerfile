FROM nginx:1.25.2-alpine

COPY ./infrastructure/docker/web/default.conf.template /etc/nginx/templates/

WORKDIR /app

ENV NGINX_DOCUMENT_ROOT /app/public
ENV NGINX_INDEX_FILE index.php

COPY . /app
