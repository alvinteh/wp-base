wp-base 0.1.0
=========

A WordPress project skeleton which bootstraps common WordPress project configuration and build processes (e.g. GITIGNORE, WPackagist, SASS/Compass compilation, JS Hint).

Usage
-------

**Starting a WordPress web site with this repository**

1. Fork and clone the repository (probably in a directory within your server document root). Be sure to initialize and update the WordPress Git submodule too (this can be done by
running `git submodule init` and `git submodule update`).

2. Open `wp-config.php` and update it with the desired WordPress authentication configuration.

3. Open `app.php` and update it with the desired app-specific configuration. Generally speaking, you should only make changes to the section for environment-independent configuration.

4. Copy `local.sample.php` to `local.php`. Open `local.php` and populate it with the desired environment-specific configuration
(for example, database connections). Typically, you should complete at least the app and database configuration sections.

5. Set up Wordpress by pointing your internet browser to `{APP_ROOT_URL}/wordpress`. (Obviously, replace `{APP_ROOT_URL}` with your desired root URL for the web site.)

6. Log in to the WordPress admin panel by pointing your internet browser to `{APP_ROOT_URL}/wordpress/wp-admin`.

7. Navigate to `Settings > General` and update the Site URL such that it reads `{APP_ROOT_URL}/wordpress`.

**Taking advantage of the bootstrapped tools**

* Strive to have all WordPress plugins installed using Composer with WPackagist.
* Use the three Grunt tasks `default`, `test` and `watch`, which are intended for production, test and development respectively.


Dependencies
-------

* WordPress 3.5+
* Composer (optional; used for WPackagist)
* Grunt (Optional; used for running build processes)

License
-------
Copyright 2014 Alvin Teh. Licensed under the MIT license.
