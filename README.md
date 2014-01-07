wp-base 0.1.0
=========

A WordPress project skeleton which bootstraps common WordPress project configuration and build processes (e.g. GITIGNORE, WPackagist, SASS/Compass compilation, JS Hint).

Usage
-------

### Starting a WordPress web site with this repository

1. Create your own git repository (probably in a directory within your server document root).

2. Add this repository as a remote by running: `git remote add wpbase https://github.com/alvinteh/wp-base.git`.

3. Pull this repository by running `git pull wpbase`.

4. Initialize and update the WordPress Git submodule by running `git submodule init` and `git submodule update`.

5. Open `wp-config.php` and update it with the desired WordPress authentication configuration.

6. Open `app.php` and update it with the desired app-specific configuration. Generally speaking, you should only make changes to the section for environment-independent configuration.

7. Copy `local.sample.php` to `local.php`. Open `local.php` and populate it with the desired environment-specific configuration
(for example, database connections). Typically, you should complete at least the app and database configuration sections.

8. Set up Wordpress by pointing your internet browser to `{APP_ROOT_URL}/wordpress`. (Obviously, replace `{APP_ROOT_URL}` with your desired root URL for the web site.)

9. Log in to the WordPress admin panel by pointing your internet browser to `{APP_ROOT_URL}/wordpress/wp-admin`.

10. Navigate to `Settings > General` and update the Site URL such that it reads `{APP_ROOT_URL}/wordpress`.


### Taking advantage of the bootstrapped tools

#### Composer
* Strive to have all WordPress plugins installed using Composer with WPackagist.
* See the [WPackagist](http://wpackagist.org) site for more details on usage.

#### Grunt
* Open `Gruntfile.js` and set `THEME_NAME` to your desired WordPress theme's name.
* Use the Grunt tasks `default` and `watch` to run tasks (e.g. RequireJS optimization, SASS/Compass compilation) for production and development respectively. 
* See the [Grrunt](http://www.gruntjs.com) site for more details on usage.

Dependencies
-------

* WordPress 3.5+
* Composer (optional; used for installing WordPress and third-party plugins with WPackagist)
* Grunt (optional; used for running build processes)

License
-------
Copyright 2014 Alvin Teh. Licensed under the MIT license.