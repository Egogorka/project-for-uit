<h2>A small project</h2>

Software used:
<ol>
    <li>Nginx - 1.20.1</li>
    <li>PHP-8.0.11 Non Thread Safe (for Windows x64)</li>
    <li>MySQL Community Server 8.0.27 (for Windows x64</li>
</ol>

Project structure \
web\
├project \
│   ├public \
│   │   ├───js \
│   │   └───css \
│   └───scripts \
├───php \
├───nginx-1.20.1 \
└───mysql 

Nginx configuration (nginx.conf) \
"...." stand for the rest of the absolute path (!MUST BE RESPLACED!) \
I run PHP-CGI on 9123 port, you can change it for 9000 - default one (if something goes wrong)
```ini
worker_processes  1;

events {
    worker_connections  1024;
}

http {
    include       mime.types;
    default_type  application/octet-stream;

    sendfile        on;
    keepalive_timeout  65;

    server {
        listen       80;
        server_name  localhost;

		# Move the root file path to server block.
		root ..../web/project/public/;

        location / {
            index  index.html index.htm;
        }

		location ~ \.php$ {
			fastcgi_pass   127.0.0.1:9123;
			fastcgi_index  index.php;
			fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
			include        fastcgi_params;
		}

    }

}
```

PHP Configuration (php.ini, only the lines that were changed) \
"...." stand for the rest of the absolute path
```ini
doc_root = ..../web/project/public

extension_dir = "ext"
enable_dl = On
cgi.force_redirect = 1
fastcgi.impersonate = 1
cgi.rfc2616_headers = 1

extension=php_gd2.dll
extension=curl
extension=gd
extension=mbstring
extension=exif     
extension=mysqli
extension=pdo_mysql
```

Also I added paths to mysql, php and nginx folders to PATH \
To setup MySQL I created `/data` folder in mysql directory and used `mysql --initialize`