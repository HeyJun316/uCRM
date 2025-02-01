# ベースイメージとして PHP 8.3 と Apache を使用
FROM php:8.3-apache

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
    && docker-php-ext-install pdo_mysql zip \
    && apt-get clean

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer 


# Apache の設定（mod_rewrite 有効化）
RUN a2enmod rewrite

# PHP 設定ファイルの追加
COPY php.ini /usr/local/etc/php/

# Apache 仮想ホスト設定を追加
COPY 000-default.conf /etc/apache2/sites-enabled/

# 作業ディレクトリの設定
WORKDIR /var/www/html/laravelapp
# Composerとnpmのインストール
# COPY composer.json composer.lock ./
# RUN composer install --no-dev --optimize-autoloader
# COPY package*.json ./
# RUN npm install --production

# 依存関係インストールのキャッシュ効率化
# 1. Composer ファイルを先にコピー
# COPY ../../src/laravelapp/composer.json ./composer.json
# COPY ../../src/laravelapp/composer.lock ./composer.lock
# # 2. Composer の依存関係をインストール
# RUN composer install --no-dev --optimize-autoloader

# # 3. npm（Node.js）の依存関係をインストール
# COPY ../../src/laravelapp/package.json ./package.json
# COPY ../../src/laravelapp/package-lock.json ./package-lock.json
# RUN npm install --production

# # Laravel アプリケーション全体をコピー
# COPY ../../src/laravelapp /var/www/html/laravelapp

# 権限設定（ストレージとキャッシュ）
# RUN chown -R www-data:www-data /var/www/html/laravelapp/storage /var/www/html/laravelapp/bootstrap/cache \
    # && chmod -R 775 /var/www/html/laravelapp/storage /var/www/html/laravelapp/bootstrap/cache

# 最終的なポート設定
EXPOSE 80

# コンテナ起動時のデフォルトコマンド
CMD ["apache2-foreground"]
