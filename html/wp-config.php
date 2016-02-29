<?php
/**
 * Do not edit this file. Edit the config files found in the config/ dir instead.
 * This file is required in the root directory so WordPress can find it.
 * WP is hardcoded to look in its own directory or one directory up for wp-config.php.
 */
$root_dir = dirname(__DIR__);

require_once( $root_dir . '/vendor/autoload.php' );
require_once( $root_dir . '/config/application.php' );
require_once( ABSPATH . 'wp-settings.php' );