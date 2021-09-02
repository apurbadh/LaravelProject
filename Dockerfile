FROM composer:latest
WORKDIR /app
COPY * /app/
RUN composer update --no-scripts
RUN apk add sqlite sqlite-dev
RUN docker-php-ext-install pdo_sqlite && docker-php-ext-enable pdo_sqlite
USER root
RUN echo 'PROMPT_COMMAND="chmod 777 -R /app"' > ~/.bashrc