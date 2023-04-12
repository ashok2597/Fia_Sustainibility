<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if( !defined( 'FIA_POST_POST_TYPE' ) ) {
    define( 'FIA_POST_POST_TYPE', 'post' );
}
if( !defined( 'FIA_PAGE_POST_TYPE' ) ) {
    define( 'FIA_PAGE_POST_TYPE', 'page' );
}
if( !defined( 'FIA_PRODUCT_POST_TYPE' ) ) {
    define( 'FIA_PRODUCT_POST_TYPE', 'fia_product' );
}
if( !defined( 'FIA_PRODUCT_POST_TAX' ) ) {
    define( 'FIA_PRODUCT_POST_TAX', 'fia_product_tax' );
}
if( !defined( 'FIA_META_PREFIX' ) ) {
    define( 'FIA_META_PREFIX', '_fia_' );
}

// Include custom post types & taxonomies
require get_stylesheet_directory() . '/includes/custom-posttypes.php';

//include custom scripts file
require get_stylesheet_directory() . '/includes/custom-scripts.php';

//include custom widgets file
require get_stylesheet_directory() . '/widgets/class-custom-followus-widget.php';

/**
* Escape Tags & Slashes
*
* Handles escapping the slashes and tags
*/
function fia_escape_attr($data) {
    return !empty( $data ) ? esc_attr( stripslashes( $data ) ) : '';
}

/**
* Strip Slashes From Array
*/
function fia_escape_slashes_deep($data = array(),$flag=true) {

    if($flag != true) {
         $data = fia_nohtml_kses($data);
    }
    $data = stripslashes_deep($data);
    return $data;
}

/**
* Strip Html Tags 
* 
* It will sanitize text input (strip html tags, and escape characters)
*/
function fia_nohtml_kses($data = array()) {

    if ( is_array($data) ) {
        $data = array_map(array($this,'fia_nohtml_kses'), $data);
    } elseif ( is_string( $data ) ) {
        $data = wp_filter_nohtml_kses($data);
    }
   return $data;
}

/**
 * Display Short Content By Character
 */
function fia_excerpt_char( $content, $length = 40 ) {
    
    $text = '';
    if( !empty( $content ) ) {
        $text = strip_shortcodes( $content );
        $text = str_replace(']]>', ']]&gt;', $text);
        $text = strip_tags($text);
        $excerpt_more = apply_filters('excerpt_more', ' ' . ' ...');
        $text = substr($text, 0, $length);
        $text = $text . $excerpt_more;
    }
    return $text;
}

/**
 * search in posts and pages
 */
function fia_filter_search( $query ) {
    if( !is_admin() && $query->is_search ) {
        $query->set( 'post_type', array( FIA_POST_POST_TYPE, FIA_PAGE_POST_TYPE ) );
    }
    return $query;
}

/*
 * Custom Theme Options
 */
if( function_exists('acf_add_options_page') ) {
    
    // Theme General Settings
    $general_settings   = array(
                                'page_title' 	=> __( 'Theme General Settings', 'fia' ),
                                'menu_title'	=> __( 'Theme Settings', 'fia' ),
                                'menu_slug' 	=> 'theme-general-settings',
                                'capability'	=> 'edit_posts',
                                'redirect'	=> false
                            );
    acf_add_options_page( $general_settings );

    // Theme Social Settings
    $menu_setting    = array(
                                    'page_title'    => __( 'Theme Menu Settings', 'fia' ),
                                    'menu_title'    => __( 'Main Menu', 'fia' ),
                                    'parent_slug'   => 'theme-general-settings',
                            );
    acf_add_options_sub_page( $menu_setting );

 
}

/*
 * Remove wp logo from admin bar
 */
function fia_remove_wp_logo() {
    global $wp_admin_bar;
    
    if( fia_check_acf_activation() ) {
        $wp_help  = get_field( 'fia_options_wp_help', 'option' );
        if( empty( $wp_help ) ) {
            $wp_admin_bar->remove_menu('wp-logo');
        }
    }
}

/*
 * Custom login logo
 */
function fia_custom_login_logo() {
    if( fia_check_acf_activation() ) {
        $wp_login_logo  = get_field( 'fia_options_login_logo', 'option' );

        if( !empty( $wp_login_logo ) ) {
?>
        <style type="text/css">
            .login h1 a {
                background-image: url('<?php echo $wp_login_logo; ?>');
                background-size: 203px auto;
                height: 66px;
                width: 203px;
            }
        </style>
<?php
        }
    }
}

/*
 * Change custom login page url
 */
function fia_loginpage_custom_link() {
    $site_url = esc_url( home_url( '/' ) );
    return $site_url;
}

/*
 * Change title on logo
 */
function fia_change_title_on_logo() {
    $site_title = get_bloginfo( 'name' );
    return $site_title;
}

/*
 * check acf plugin is activated or not
 */
function fia_check_acf_activation() {
    
    if( !function_exists( 'is_plugin_active' ) ) {
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    }
    if( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ){
        return true;
    }
    return false;
}
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="V2-dropdown-menu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 
//add filter to search in posts and pages
add_filter( 'pre_get_posts', 'fia_filter_search' );

//add filter to add shortcode in widget
add_filter( 'widget_text', 'do_shortcode' );

//add action to modify the wp admin bar
add_action( 'wp_before_admin_bar_render', 'fia_remove_wp_logo' );

//add action to change login logo
add_action( 'login_enqueue_scripts', 'fia_custom_login_logo' );

//add filter to change custom login page url
add_filter( 'login_headerurl', 'fia_loginpage_custom_link' );

//add filter to change title on logo
//add_filter( 'login_headertitle', 'fia_change_title_on_logo' );
add_filter( 'login_headertext', 'fia_change_title_on_logo' );  //change for new wordpress version
?>