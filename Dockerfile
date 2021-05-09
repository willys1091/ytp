FROM php:7.4-apache

COPY . /var/www/html/ytp
#RUN ls -laR /var/www/html/*

RUN apt update

RUN apt install -y \
git \
curl

RUN apt clean && rm -rf /var/lib/apt/lists/*

#RUN docker-php-ext-install pdo_mysql mbstring 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


#CMD ["start-apache"]