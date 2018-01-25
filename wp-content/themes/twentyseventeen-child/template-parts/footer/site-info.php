<?php
/**
 * Created by PhpStorm.
 * User: AntoA
 * Date: 09.11.2017
 * Time: 18:14
 */
$current_user = wp_get_current_user();



if ( 0 == $current_user->ID ) {
    echo "please, login";
} else {
    echo 'User first name: ' . $current_user->user_firstname;
}
