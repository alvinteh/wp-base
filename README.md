wp-base 0.1.0
=========

A WordPress project skeleton which bootstraps common WordPress project configuration and build processes (e.g. GITIGNORE, WPackagist, SASS/Compass compilation, JS Hint).

Usage
-------

### Starting a WordPress web site with this repository

1. Create your own git repository (probably in a directory within your server document root).

2. Add this repository as a remote by running: `git remote add wpbase https://github.com/alvinteh/wp-base.git`.

3. Pull this repository by running `git pull wpbase`.

4. Initialize and install WordPress by running `composer install`.

5. Open `wp-config.php` and update it with the desired WordPress authentication configuration.

6. Open `app.php` and update it with the desired app-specific configuration. Generally speaking, you should only make changes to the section for environment-independent configuration.

7. Copy `local.sample.php` to `local.php`. Open `local.php` and populate it with the desired environment-specific configuration
(for example, database connections). Typically, you should complete at least the app and database configuration sections.

8. Set up Wordpress by pointing your internet browser to `{APP_ROOT_URL}/wordpress`. (Obviously, replace `{APP_ROOT_URL}` with your desired root URL for the web site.)

9. Log in to the WordPress admin panel by pointing your internet browser to `{APP_ROOT_URL}/wordpress/wp-admin`.

10. Navigate to `Settings > General` and update the Site URL such that it reads `{APP_ROOT_URL}/wordpress`.

11. (Optional) Open `composer.json` and replace `your-theme` in the `vendor-dir` configuration to your desired theme's name.

12. (Optional) Open `Gruntfile.js` and set `THEME_NAME` to your desired WordPress theme's name.

### Taking advantage of the bootstrapped tools

#### WordPress
* The WordPress content directory has been set to `content`, so add your themes and plugins to `content/themes` and `content/plugins` respectively.

#### Bower
* It is assumed that Bower components which are installed are specific to your theme. To that effect, they are installed in `content/themes{THEME_NAME}/inc` and the `content/themes/*/inc` folders are excluded from Git.
* See the [Bower](http://sindresorhus.com/bower-components/) site for more details on usage.

#### Composer
* It is assumed that non-WPackagist packages which are installed are specific to your theme. To that effect, they are installed in `content/themes{THEME_NAME}/inc` and `content/themes/*/inc` folders are excluded from Git.
* See the [WPackagist](http://wpackagist.org) site for more details on usage.

#### Grunt
* Use the Grunt tasks `default` and `watch` to run tasks (e.g. RequireJS optimization, SASS/Compass compilation) for production and development respectively.
* See the [Grunt](http://www.gruntjs.com) site for more details on usage.
* It is assumed that all of your theme SCSS will be found in `content/themes/{THEME_NAME}/scss`. When running the bundled SASS/Compass compilation task, the compiled CSS will be output in `content/themes/{THEME_NAME}/css/*.min.css`.

Dependencies
-------

* Composer (used for installing WordPress and third-party plugins with WPackagist)
* Grunt (optional; used for running build processes)

License
-------
Copyright 2015 Alvin Teh. Licensed under the MIT license.
