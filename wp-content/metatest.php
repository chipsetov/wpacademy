<?php
/*
* Plugin Name: metatest
*/

add_action('add_meta_boxes', 'metatest_init');

function metatest_init() {
    add_meta_box('metatest', 'MetaTest-параметры поста',
        'metatest_showup', 'post', 'side', 'default');
}

function metatest_showup() {
    echo '<p>Содержимое метабокса расположено тут</p>';
}

?> 