# Custom PHP-FPM image with PostgreSQL extensions
FROM php:8.0-fpm

# Install PostgreSQL client libraries and build the pgsql extensions
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends libpq-dev; \
    docker-php-ext-install -j"$(nproc)" pdo_pgsql pgsql; \
    rm -rf /var/lib/apt/lists/*

# The project will be mounted as a volume by docker-compose
WORKDIR /var/www/html
