FROM node:18.16-alpine

RUN apk update \
    && apk upgrade \
    && apk add --no-cache --upgrade bash make g++

WORKDIR /var/www/ggbox
