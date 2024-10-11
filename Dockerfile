FROM phpdockerio/php80-fpm

#cria um diretório raíz no container
WORKDIR /application/

COPY . /application/

#Permite o acesso a todos os arquivos da minnhas application 
RUN chmod -R 777 /application 

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.0-mysql \ 
        php8.0-pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


EXPOSE 9000