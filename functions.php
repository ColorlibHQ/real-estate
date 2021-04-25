<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'REAL_ESTATE_DIR_URI' ) ) {
	define( 'REAL_ESTATE_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'REAL_ESTATE_DIR_ASSETS_URI' ) ) {
	define( 'REAL_ESTATE_DIR_ASSETS_URI', REAL_ESTATE_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'REAL_ESTATE_DIR_CSS_URI' ) ) {
	define( 'REAL_ESTATE_DIR_CSS_URI', REAL_ESTATE_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'REAL_ESTATE_DIR_JS_URI' ) ) {
	define( 'REAL_ESTATE_DIR_JS_URI', REAL_ESTATE_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'REAL_ESTATE_DIR_IMGS_URI' ) ) {
	define( 'REAL_ESTATE_DIR_IMGS_URI', REAL_ESTATE_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'REAL_ESTATE_DIR_ICON_IMG_URI' ) ) {
	define( 'REAL_ESTATE_DIR_ICON_IMG_URI', REAL_ESTATE_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'REAL_ESTATE_DIR_PATH' ) ) {
	define( 'REAL_ESTATE_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'REAL_ESTATE_DIR_PATH_INC' ) ) {
	define( 'REAL_ESTATE_DIR_PATH_INC', REAL_ESTATE_DIR_PATH . 'inc/' );
}

//Real_Estate Libraries Folder Directory
if ( ! defined( 'REAL_ESTATE_DIR_PATH_LIBS' ) ) {
	define( 'REAL_ESTATE_DIR_PATH_LIBS', REAL_ESTATE_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'REAL_ESTATE_DIR_PATH_CLASSES' ) ) {
	define( 'REAL_ESTATE_DIR_PATH_CLASSES', REAL_ESTATE_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'REAL_ESTATE_DIR_PATH_HOOKS' ) ) {
	define( 'REAL_ESTATE_DIR_PATH_HOOKS', REAL_ESTATE_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function real_estate_admin_script(){
    wp_enqueue_style( 'real-estate-admin', get_template_directory_uri().'/assets/css/real-estate-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'real-estate_admin', get_template_directory_uri().'/assets/js/real-estate-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'real_estate_admin_script' );



/**
 * Include File
 *
 */
require_once( REAL_ESTATE_DIR_PATH_INC . 'real-estate-breadcrumbs.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'real-estate-widgets-reg.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'post-like.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'real-estate-functions.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'real-estate-commoncss.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'support-functions.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( REAL_ESTATE_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( REAL_ESTATE_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( REAL_ESTATE_DIR_PATH_HOOKS . 'hooks.php' );
require_once( REAL_ESTATE_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( REAL_ESTATE_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Real_Estate object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Real_Estate = new Real_Estate();