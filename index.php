<?php
include('wp-db.php');
define('WP_DEBUG',true);
define('WP_DEBUG_DISPLAY',true);
$wpdb=new wpdb('onc','123','onc-video','localhost');
// connect wpdb

global $wpdb;
$mytables=$wpdb->get_results("SHOW TABLES");
foreach ($mytables as $mytable)
{
    foreach ($mytable as $t) 
    {       
        echo $t . "<br>";
    }
}
// functions
?>


