# mon_projet_php/Dockerfile 
# Utilise l'image officielle PHP avec Apache 
FROM php:8.4-apache 
# Installe les extensions PHP nécessaires 
RUN docker-php-ext-install pdo pdo_mysql 
RUN apt update
RUN apt install nano
# Expose le port 80 pour accéder au serveur web 
EXPOSE 80 