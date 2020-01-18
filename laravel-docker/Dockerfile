FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx/
COPY . /usr/share/nginx
RUN chmod -R 775 /usr/share/nginx/html/*
RUN ls -s public html
