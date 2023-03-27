<?php

declare(strict_types=1);

/*
Plugin Name: WP Pager
Author: Serhii Cho
Author URI: https://serhii.io/about-me
Description: WP Pager is a WordPress plugin for displaying images in a form of a restaurant menu.
o
Version: 0.2.1
License: MIT
License URI: https://github.com/SerhiiCho/wp-pager/blob/main/LICENCE
Text Domain: pager
Tags: menu, album, images, files, gallery, restaurant, food, food menu, restaurant menu, restaurant menu plugin, restaurant menu wordpress, restaurant menu wordpress plugin, restaurant menu wordpress plugin free, restaurant menu wordpress
*/

use WpPager\Hook;

defined('ABSPATH') || exit('ABSPATH is not defined');
define('PAGER_VERSION', '0.2.1');
define('PAGER_PATH', plugin_dir_path(__FILE__));
define('PAGER_URL', plugin_dir_url(__FILE__));
define('PAGER_STORAGE_PATH', PAGER_PATH . 'storage/');
define('PAGER_FILES_URL', PAGER_STORAGE_PATH . 'files.json');
define('PAGER_SETTINGS_URL', PAGER_STORAGE_PATH . 'settings.json');
define('PAGER_FILES_DIR', PAGER_STORAGE_PATH . 'files');
define('PAGER_FILES_DIR_URL', PAGER_URL . 'storage/files');

error_reporting(E_ERROR | E_PARSE);

require __DIR__ . '/vendor/autoload.php';

(new Hook())->init();
