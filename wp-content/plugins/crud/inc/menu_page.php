<?php 

add_action('admin_menu', 'da_display_esm_menu');
function da_display_esm_menu()
{

    add_menu_page('EMS', 'EMS', 'manage_options', 'emp-list', 'da_ems_list_callback');
    add_submenu_page('emp-list', 'Employee List', 'Employee List', 'manage_options', 'emp-list', 'da_ems_list_callback');
    add_submenu_page('emp-list', 'Add Employee', 'Add Employee', 'manage_options', 'add-emp', 'da_ems_add_callback');

}