# Устанавливает переменную среды
ARG PHP_VERSION

# Использует базовый образ PHP с использованием переменной среды
FROM php:${PHP_VERSION}-fpm

# Обновляет список пакетов и устанавливает необходимые пакеты
# git - для установки пакетов через Composer, которые находятся в репозиториях Git
# curl - для скачивания самого Composer, а также его пакетов из интернета
# zip, unzip - для сжатия и распаковки архивов
# libpng-dev - для обработки изображений
# libonig-dev - для работы с регулярными выражениями. Необходима для установки и работы с расширением mbstring
# libxml2-dev - для работы с XML
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Устанавливает Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Устанавливает и включает необходимые PHP-расширения
# pdo_mysql - для работы с базами данных MySQL черещ PDO
# mbstring - для работы с многобайтовыми строками. Laravel активно использует это для работы с текстом
# exif - для чтения методанных EXIF из изображений
# pcntl - для управления процессами, полезен для выполнения фоновых задач и обработки очередей в Laravel
# bcmath - для работы с числами произвольной тосночсти
# sockets - для работы с сокетами
# gd - для обработки изображений
RUN docker-php-ext-install pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    sockets \
    gd

# Устанавливает рабочий каталог
WORKDIR /var/www

# Описывает открытый порт внутри контейнера
EXPOSE 9000
