<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/shop/admin/');
define('HTTP_CATALOG', 'http://localhost/shop/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/shop/admin/');
define('HTTPS_CATALOG', 'http://localhost/shop/');

// DIR
define('DIR_APPLICATION', '/Applications/XAMPP/xamppfiles/htdocs/shop/admin/');
define('DIR_SYSTEM', '/Applications/XAMPP/xamppfiles/htdocs/shop/system/');
define('DIR_IMAGE', '/Applications/XAMPP/xamppfiles/htdocs/shop/image/');
define('DIR_CATALOG', '/Applications/XAMPP/xamppfiles/htdocs/shop/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'shop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
