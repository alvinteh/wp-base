<?php
require_once('app.php');

/******************************************
 WordPress Configuration
******************************************/

define('WP_CONTENT_DIR', './content');
define('WP_CONTENT_URL', 'http://' . APP_ROOT_URL . '/content');
define('WP_DEBUG', APP_DEV_DEBUG_MODE);

/******************************************
 Database Configuration
******************************************/

//define('DB_HOST', '');                    Defined in app.php
//define('DB_PASSWORD', '');                Defined in app.php
define('DB_USER', DB_LOGIN);
define('DB_NAME', DB_SCHEMA);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


/******************************************
 Authentication Configuration

 Generate by visiting https://api.wordpress.org/secret-key/1.1/salt/. 
******************************************/

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');


/******************************************
 Miscellaneous Configuration
******************************************/
$table_prefix  = 'wp_';
define('WPLANG', '');

if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');