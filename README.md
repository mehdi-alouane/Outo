Outo
====

A Very Simple PHP Open Source Web Addresses (URLs) Manager


your folder should be like this :
=================================
root
│
├── index.php
│
└── etc
    │
    ├── home.php
    ├── 404.php
    ├── about.php
    ├── contact.php
    │ 
    ├── header.php
    └── footer.php
      └── thread
        ├── add.php
        ├── view.php
        └── index.php


end the .htacess should look like this :
========================================
1	RewriteEngine On
2	RewriteCond %{REQUEST_FILENAME} !-f
3	RewriteCond %{REQUEST_FILENAME} !-d
4	RewriteRule ^/?(.*) index.php [L]
