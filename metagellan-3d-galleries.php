<?php
/**
 * Plugin Name: Metagellan 3D Galleries
 * Text Domain: metagellan-3d-galleries
 * Version: 1.0.1
 * Author: <a href="https://Metagellan.com">Metagellan</a>
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Description: Easily integrate a 3D gallery into your website with just a few clicks. Showcase your products in an innovative way. Elevate your artworks in a customizable universe. Give a new dimension to your communication and amplify the visibility of your services.
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function metagellan_plugin_block() {
    register_block_type( __DIR__ . '/build');
}
add_action( 'init', 'metagellan_plugin_block' );

