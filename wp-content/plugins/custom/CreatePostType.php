<?php
//
///**
// * Created by PhpStorm.
// * User: AntoA
// * Date: 04.01.2018
// * Time: 18:54
// */
//class CreatePostType
//{
//    public function __construct()
//    {
//        add_action('init', array($this, 'products'));
//        add_action('wp_load')
//    }
//
//    public function InsertPostByCode()
//    {
//        $post_id = wp_insert_post( array(
//            'post_status'   => 'publish',
//            'post_type'     => 'products',
//            'post_author'   => 1,
//            'post_title'     => 'title by code',
//            'post_content'  => 'content by code',
//            'post_excerpt'   => 'excerpt by code',
//            'ping_status'   => get_option('default_ping_status'),
//            'post_parent'   => 0,
//            'menu_order'    => 0,
//            'to_ping'       => '',
//            'pinged'        => '',
//            'post_password' => '',
//            'guid'          => '',
//            'post_content_filtered' => '',
//            'post_excerpt'  => '',
//            'import_id'     => 0
//        ) );
//    }
//
//    public function products()
//    {
//            $lables = array(
//
//                'name' => 'Product',
//                'singular_name' => 'Product',
//                'add_new' => 'Add Item',
//                'all_items' => 'All items',
//                'add_new_item' => 'Add item',
//                'edit_item' => 'Edit item',
//                'new_item' => 'New item',
//                'view_item' => 'View item',
//                'search_items' => 'Search product',
//                'not_found' => 'No item found',
//                'not_found_in_trash' => 'No item found in trash',
//                'parent_item_colon' => 'Parent item',
//                'menu_name' => 'Product'
//
//            );
//            $args = array(
//
//                'labels' => $lables,
//                'public' => true,
//                'has_archive' => 'product',
//                'publicly_queryable' => true,
//                'query_var' => true,
//                'rewrite' => true,
//                'capability_type' => 'post',
//                'hierarchical' => false,
//                'supports' => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
//                'taxonomies' => array('category', 'post_tag'),
//                'menu_position' => 2,
//                'exclude_from_search' => false,
//                'menu_icon'   => 'dashicons-products'
//
//            );
//            register_post_type('product', $args);
//
//    }
//}
//
//new CreatePostType();