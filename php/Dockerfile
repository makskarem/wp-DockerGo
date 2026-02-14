# Берём официальный образ PHP версии 8.2 с поддержкой FPM
FROM php:8.2-fpm

# Устанавливаем расширения для работы с MySQL
# mysqli — процедурное подключение
# pdo — универсальный интерфейс БД
# pdo_mysql — драйвер MySQL для PDO
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Устанавливаем рабочую директорию внутри контейнера
# Все команды будут выполняться отсюда
WORKDIR /var/www/html
