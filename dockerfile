# Use a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Instale as extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponha a porta 80
EXPOSE 80
