# Usa una imagen base de PHP
FROM php:7.4-apache

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html/

# Configura Apache para que apunte al directorio correcto
WORKDIR /var/www/html/

# Expon el puerto 80
EXPOSE 80

# Inicia el servidor Apache
CMD ["apache2-foreground"]
