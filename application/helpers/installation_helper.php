<?php defined('BASEPATH') or exit('No direct script access allowed');



/**
 * Check if Tooth Software is installed.
 *
 * This function will check some factors to determine if Tooth Software is installed or not. It is possible that the
 * installation is properly configure without being recognized by this method.
 *
 * Notice: You can add more checks into this file in order to further check the installation state of the application.
 *
 * @return bool Returns whether E!A is installed or not.
 */
function is_app_installed()
{
    $CI =& get_instance();

    return $CI->db->table_exists('users');
}
