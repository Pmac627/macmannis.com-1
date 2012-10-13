<?php /* index.php */
error_reporting(0); // Show errors

$site_path = realpath(dirname(__FILE__)); // Declare sitepath
define('__SITE_PATH', $site_path); // Define sitepath
include('control/engine/init_core.php'); // Include engine

$registry->relay = new relay($registry); // Load relay
$registry->relay->set_path(__SITE_PATH . '/control'); // Set path to controls dir
$registry->template = new template($registry); // Set proper template
$registry->relay->loader(); // Set proper control
?>