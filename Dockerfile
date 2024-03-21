FROM php:8.0-apache

# Copiar archivos del proyecto al contenedor
COPY . /var/www/html/

# Exponer el puerto 80 para Apache
EXPOSE 80
