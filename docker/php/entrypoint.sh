#!/bin/bash
set -e

cat > /etc/msmtprc <<EOF
defaults
auth           on
tls            on
tls_trust_file /etc/ssl/certs/ca-certificates.crt
logfile        /tmp/msmtp.log

account gmail
host ${SMTP_HOST}
port ${SMTP_PORT}
from ${SMTP_FROM}
user ${SMTP_USER}
password ${SMTP_PASS}

account default : gmail
EOF

chown $USER:www-data /etc/msmtprc
chmod 640 /etc/msmtprc

chown -R www-data:www-data /var/www/html/conf

exec php-fpm