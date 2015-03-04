
<?php
/**
 * This file contains app-specific configuration. Generally speeaking, only the environment-independent configuration
 * section should be modified, with environment-specific configuration defined in local.php.
 **/

require_once('local.php');

/******************************************

  Environment-independent Configuration

******************************************/

/******************************************
 General Configuration
******************************************/

define('APP_NAME', '');


/******************************************
 Google Analytics Configuration
******************************************/

define('GA_ACCOUNT', '');
define('GA_DOMAIN', '');


/******************************************
 App-specific Configuration
******************************************/

//None by default




/******************************************

  Environment-dependent Configuration

******************************************/

/******************************************
 App Configuration
******************************************/

define('APP_BASE_URL', LOCAL_APP_BASE_URL);
define('APP_ROOT_URL', LOCAL_APP_ROOT_URL);
define('APP_HOST_URL', LOCAL_APP_HOST_URL);
define('APP_DEV_DEVEL_MODE', LOCAL_APP_DEV_DEVEL_MODE);
define('APP_DEV_DEBUG_MODE', LOCAL_APP_DEV_DEBUG_MODE);


/******************************************
 Database Configuration
******************************************/

define('DB_HOST', LOCAL_DB_HOST);
define('DB_LOGIN', LOCAL_DB_LOGIN);
define('DB_PASSWORD', LOCAL_DB_PASSWORD);
define('DB_SCHEMA', LOCAL_DB_SCHEMA);


/******************************************
 Facebook Configuration
******************************************/

define('FACEBOOK_APP_ID', LOCAL_FACEBOOK_APP_ID);
define('FACEBOOK_APP_SECRET', LOCAL_FACEBOOK_APP_SECRET);
define('FACEBOOK_APP_NAMESPACE', LOCAL_FACEBOOK_APP_NAMESPACE);


/******************************************
 Instagram Configuration
******************************************/

define('INSTAGRAM_APP_ID', LOCAL_INSTAGRAM_APP_ID);
define('INSTAGRAM_APP_SECRET', LOCAL_INSTAGRAM_APP_SECRET);


/******************************************
 MailChimp Configuration
******************************************/

define('MAILCHIMP_API_KEY', LOCAL_MAILCHIMP__API_KEY);
define('MAILCHIMP_LIST_ID', LOCAL_MAILCHIMP_LIST_ID);
define('MANDRILL_API_KEY', LOCAL_MANDRILL_API_KEY);
