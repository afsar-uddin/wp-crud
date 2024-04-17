<?php 

register_activation_hook(file: __FILE__, callback: 'table_creator');

function table_creator() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix.'crud';

    $sql = "DROP TABLE IF EXIST $table_name; 
            CREATE TABLE $table_name (
                id mediumint(11) NOT NULL AUTO_INCREMENT,
                emp_id varchar(50) NOT NULL,
                emp_name varchar (250) NOT NULL,
                emp_email varchar (250) NOT NULL,
                emp_dept varchar (250) NOT NULL,
                PRIMARY KEY id(id)
            )$charset_collate;";
    require_once (ABSPATH.'wp-admin/includes/upgrade.php');

    dbDelta($sql);
}