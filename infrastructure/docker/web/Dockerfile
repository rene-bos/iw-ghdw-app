FROM nginx:1.21.4-alpine

COPY ./nginx/base/default.conf.template /etc/nginx/templates/

WORKDIR /app

ENV NGINX_DOCUMENT_ROOT /app/public
ENV NGINX_INDEX_FILE index.php

COPY . /app
