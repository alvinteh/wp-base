<?php
/**
 *   This file contains environment-specific configuration for the app.
 **/

/******************************************
 App Configuration
******************************************/

define('LOCAL_APP_BASE_URL', '/PATH_HERE/');
define('LOCAL_APP_ROOT_URL', 'DOMAIN_HERE' . LOCAL_APP_BASE_URL);
define('LOCAL_APP_HOST_URL', 'HOST_HERE' . LOCAL_APP_BASE_URL);
define('LOCAL_APP_DEV_DEVEL_MODE', 'dev|uat|live');
define('LOCAL_APP_DEV_DEBUG_MODE', (LOCAL_APP_DEV_DEVEL_MODE === 'live' ? false : true));


/******************************************
 Database Configuration
******************************************/

define('LOCAL_DB_HOST', '');
define('LOCAL_DB_LOGIN', '');
define('LOCAL_DB_PASSWORD', '');
define('LOCAL_DB_SCHEMA', '');


/******************************************
 Facebook Configuration
******************************************/

define('LOCAL_FACEBOOK_APP_ID', '');
define('LOCAL_FACEBOOK_APP_SECRET', '');
define('LOCAL_FACEBOOK_APP_NAMESPACE', '');


/******************************************
 Instagram Configuration
******************************************/

define('LOCAL_INSTAGRAM_APP_ID', '');
define('LOCAL_INSTAGRAM_APP_SECRET', '');


/******************************************
 MailChimp Configuration
******************************************/

define('LOCAL_MAILCHIMP_KEY', '');
define('LOCAL_MAILCHIMP_LIST_ID', '');
define('LOCAL_MANDRILL_KEY', '');
