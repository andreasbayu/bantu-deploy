FROM dunglas/frankenphp:php8.3

WORKDIR /app

COPY --chown=www-data:www-data . .

RUN install-php-extensions \
    pcntl \
	pdo_mysql \
	gd \
	intl \
	zip \
	opcache \
    bcmath \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

RUN composer install && \
    composer require laravel/octane && \
    php artisan octane:install --server=frankenphp && \
    php artisan key:generate && \
    chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD php artisan octane:start --server=frankenphp --host=0.0.0.0 --port=8000