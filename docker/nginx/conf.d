server {
    charset utf-8;
    client_max_body_size 128M;

    listen 80; ## listen for ipv4

    server_name localhost;
    root /var/www/public;
    index       index.php;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_pass php-fpm:9000;
        fastcgi_index index.php;
        fastcgi_read_timeout 1000;
        #fastcgi_pass unix:/var/run/php5-fpm.sock;
        try_files $uri =404;
        #fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_param PATH_INFO $fastcgi_path_info;
    }

    location ~* /\. {
        deny all;
    }
}
