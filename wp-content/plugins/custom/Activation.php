<!--//--><?php
////
/////**
//// * Created by PhpStorm.
//// * User: AntoA
//// * Date: 04.01.2018
//// * Time: 18:35
//// */
////class Activation
////{
////
////}
//
//
//
//class Activation {
//
//    static function activate() {
//        global $wpdb;
//        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//// необхідно для роботи функції dbDelta()
//
//        $table_name = $wpdb->prefix . 'my_plugin';
//
//        $sql = "CREATE TABLE {$table_name} (
//id bigint(20) unsigned NOT NULL auto_increment,
//contentData varchar(255) NOT NULL default '',
//PRIMARY KEY (id)
//)";
//        dbDelta($sql);
//
//    }
//
//    static function deactivate(){
//        error_log( date('Y-m-d H:i:s') . "0he plugin deactivated\r\n", 3, dirname(__FILE__) . '/filelog.log' );
//    }
//
//    static function uninstall(){
//        global $wpdb;
//        $table_name = $wpdb->prefix . 'my_plugin';
//        $sql = "DROP TABLE $table_name";
//        $wpdb->query($sql);
//        wp_mail( get_option('admin_email'), 'The plugin was removed', 'Message' );
//
//    }
//}
