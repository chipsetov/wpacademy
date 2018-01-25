<?php

/*
Plugin Name: Custom Meta Box Template
Plugin URI: https://themefoundation.com/
Description: Provides a starting point for creating custom meta boxes.
Author: Theme Foundation
Version: 1.0
Author URI: https://themefoundation.com/
*/

/**
 * Adds a meta box to the post editing screen
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'Meta Box Title', 'prfx-textdomain' ), 'prfx_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );