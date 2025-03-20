# clinmed
clinical Med

# Create .env file and add
BB_CONNECTION=mysql
DB_HOST=sql5.freesqldatabase.com:3306
DB_PORT=3306
DB_DATABASE=sql5763372
DB_USERNAME=sql5763372
DB_PASSWORD=EFNXK6QQ9E

# Install packages
composer install

# Create and Seed database navigate to
/database/seed.php
/database/data.php

# nginx setup
server {
    listen        80;
  	listen        [::]:80 ssl;
    server_name localhost:80;

    include snippets/ssl-params.conf;

    root /path/to/folder/;
    index index.html index.htm index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
      try_files $uri $uri/ =404;
      fastcgi_split_path_info ^(.+?\.php)(/.+)?$;
      fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
      fastcgi_index index.php;
      fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
      include fastcgi_params;        
    }


    error_log  /var/log/nginx/clinmed-error.log;
    access_log /var/log/nginx/clinmed-access.log;
}

