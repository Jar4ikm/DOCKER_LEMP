# Use the official PHP FPM image as base
FROM php:fpm

# Install the necessary extensions
RUN docker-php-ext-install mysqli

