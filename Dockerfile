# Stage 1: Builder - copy source code
FROM php:8.2-fpm-alpine AS builder
WORKDIR /app
COPY html/ .

# Stage 2: Production - PHP-FPM only
FROM php:8.2-fpm-alpine

# Install MySQL extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html

# Copy code from builder stage
COPY --from=builder /app .

HEALTHCHECK --interval=30s --timeout=3s \
  CMD php-fpm-healthcheck || exit 1

EXPOSE 9000
CMD ["php-fpm"]
