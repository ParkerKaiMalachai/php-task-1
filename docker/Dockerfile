FROM php:8.1-fpm-alpine

RUN apk update && \
    apk add --no-cache ca-certificates curl git bash

RUN curl -OL https://golang.org/dl/go1.21.0.linux-amd64.tar.gz && \
    tar -C /usr/local -xzf go1.21.0.linux-amd64.tar.gz && \
    rm go1.21.0.linux-amd64.tar.gz


ENV PATH="/usr/local/go/bin:${PATH}"


RUN go install github.com/mailhog/mhsendmail@latest


RUN cp /root/go/bin/mhsendmail /usr/bin/mhsendmail


RUN echo 'sendmail_path = /usr/bin/mhsendmail --smtp-addr mailhog:1025' > /usr/local/etc/php/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV PATH="$PATH:/usr/local/bin"

WORKDIR /var/www/html/

COPY ./composer.json .

RUN composer install

COPY ./app .

VOLUME [ "/var/www/html/" ]

EXPOSE 80

CMD ["php-fpm"]