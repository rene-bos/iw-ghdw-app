#!/bin/sh

REBUILD=$1
TAG=`date +"%Y%m%d_%H%M%S"`

if [ "$REBUILD" -eq "1" ]; then
    docker build . -f infrastructure/docker/php/Dockerfile -t iw-ghdw-app-php:latest
fi
docker tag iw-ghdw-app-php:latest localhost:32000/iw-ghdw-app-php:${TAG}
docker push localhost:32000/iw-ghdw-app-php:${TAG}

if [ "$REBUILD" -eq "1" ]; then
    docker build . -f infrastructure/docker/web/Dockerfile -t iw-ghdw-app-web:latest
fi
docker tag iw-ghdw-app-web:latest localhost:32000/iw-ghdw-app-web:${TAG}
docker push localhost:32000/iw-ghdw-app-web:${TAG}

#kubectl apply -f infrastructure/kubernetes/frontend-deployment.yaml
helm upgrade --install iw-ghdw-app infrastructure/helm --set imageTag=${TAG}
