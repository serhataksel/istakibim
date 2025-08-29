<?php
/**
 * Plugin Name: Webnary Mobile Header
 * Description: Optimized mobile navigation drawer for WordPress.
 * Version: 1.0.0
 * Author: Webnary
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Enqueue assets only on mobile.
function webnary_mobile_header_enqueue() {
    if ( ! wp_is_mobile() ) {
        return;
    }
    $url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'webnary-mobile-header', $url . 'assets/css/mobile-header.css', [], '1.0.0' );
    wp_enqueue_script( 'webnary-mobile-header', $url . 'assets/js/mobile-header.js', [], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'webnary_mobile_header_enqueue' );

// Render markup.
function webnary_mobile_header_render() {
    if ( ! wp_is_mobile() ) {
        return;
    }
    include __DIR__ . '/template.php';
}
add_action( 'wp_body_open', 'webnary_mobile_header_render' );
?>
