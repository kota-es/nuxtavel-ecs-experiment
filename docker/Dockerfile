FROM  node:12.12.0-alpine
ENV HOST 0.0.0.0
ENV CHOKIDAR_USEPOLLING true
WORKDIR  /var/www
COPY ./frontend /var/www
RUN yarn cache clean
RUN yarn
RUN yarn build
ENTRYPOINT [ "yarn", "start" ]