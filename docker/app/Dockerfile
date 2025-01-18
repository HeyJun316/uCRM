FROM php:8.3-apache

# 設定ファイルをdockerコンテナ内のPHP、Apacheに読み込ませる
ADD php.ini /usr/local/etc/php/
ADD 000-default.conf /etc/apache2/sites-enabled/

# 必要なミドルウェア・ライブラリのインストール
RUN apt-get update \
&& apt-get install -y \
nodejs npm \
git \
zip \
unzip \
vim \
libpng-dev \
libpq-dev \
libzip-dev \
libonig-dev \
libxml2-dev \
default-mysql-client \
&& docker-php-ext-install pdo_mysql zip


# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN composer create-project laravel/laravel:^9 laravelapp --prefer-dist
RUN composer require barryvdh/laravel-debugbar
RUN composer require laravel/breeze:^1 --dev
# Apacheの設定
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite
