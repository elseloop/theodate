<?php

/**
 * Functions
 *
 * Core functionality and initial theme setup
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */


require_once locate_template( 'inc/init.php'                          , true, true );
require_once locate_template( 'inc/scripts.php'                       , true, true );
require_once locate_template( 'inc/menus.php'                         , true, true );
require_once locate_template( 'inc/pagination.php'                    , true, true );
require_once locate_template( 'inc/sidebars.php'                      , true, true );
require_once locate_template( 'inc/excerpts.php'                      , true, true );
require_once locate_template( 'inc/comments.php'                      , true, true );
require_once locate_template( 'inc/classes.php'                       , true, true );
require_once locate_template( 'inc/helpers.php'                       , true, true );
require_once locate_template( 'inc/services.php'                      , true, true );
require_once locate_template( 'inc/shortcodes.php'                    , true, true );
// journal specific stuff here
require_once locate_template( 'inc/journal/journal-admin-page.php'    , true, true );
require_once locate_template( 'inc/journal/lit-journal-functions.php' , true, true );

// adds theme support for WooCommerce & some commonly needed hooks & filters
// require_once locate_template( 'inc/woocommerce.php' );