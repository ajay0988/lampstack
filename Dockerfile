FROM ubuntu:20.04
ARG DEBIAN_FRONTEND=noninteractive
ENV HOSTNAME=abc.mysql.com
ENV ROOT_USERNAME=xxxabcxxx
ENV ROOT_PASSWORD=xxxxabcxxx
ENV DB_NAME=mydb
RUN apt update -y && apt install apt-utils apache2 php libapache2-mod-php  php-curl php-xml php-memcached php-mysql net-tools -y
WORKDIR /var/www/html
COPY . .
CMD ["apache2ctl","-D","FOREGROUND"]
EXPOSE 80

