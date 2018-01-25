<?php

function register_my_widgets(){
    register_sidebar( array(
        'name' => "Правая боковая панель сайта",
        'id' => 'child-right-sidebar',
        'description' => 'Эти виджеты будут показаны с правой колонке сайта',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ) );
}
add_action( 'widgets_init', 'register_my_widgets' );



function remove_some_widgets(){
    // Отменим регистрацию некоторых панелей виджетов
    unregister_sidebar( 'sidebar-1' );
    unregister_sidebar( 'sidebar-2' );
    unregister_sidebar( 'sidebar-3' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

function food_add_meta_boxes( $post ){
    add_meta_box( 'food_meta_box', __( 'Nutrition facts', 'food_example_plugin' ), 'food_build_meta_box', 'food', 'side', 'low' );
}
add_action( 'add_meta_boxes_food', 'food_add_meta_boxes' );


