#!/usr/bin/env bash

echo "instalando..." > /var/log/container_status

bash /tmp/init/init.sh >>/var/log/startup.log 2>&1

echo "instalação completa, obrigado por utilizar o container" > /var/log/container_status

mkdir /var/log/supervisor /var/log/apache2

exec /usr/bin/supervisord