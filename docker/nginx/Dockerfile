FROM node:14.11.0 as node-build 

COPY ./backend /var/www

WORKDIR /var/www

RUN apt-get update
RUN npm install
RUN npm run prod

FROM nginx:1.19.2 

WORKDIR /var/www

RUN apt-get update

COPY ./docker/nginx/ecs/conf.d/default.conf /etc/nginx/conf.d/default.conf

COPY --from=node-build /var/www/public /var/www/public

EXPOSE 80