<?php /* init_core.php */
include(__SITE_PATH . '/control/engine/control_core.php'); // Include control core
include(__SITE_PATH . '/control/engine/registry_core.php'); // Include registry core
include(__SITE_PATH . '/control/engine/relay_core.php'); // Include relay core
include(__SITE_PATH . '/control/engine/template_core.php'); // Include template core

// Autoload classes
function __autoload($class) {
	$class_name = strtolower($class) . '_class.php';
	$class_include = __SITE_PATH . '/model/' . $class_name;

	if(file_exists($class_include) == FALSE) {
		return FALSE; // Kill if statement
	} else {
		include($class_include); // Include class
	}
}

$registry = new registry; // Create registry
$registry->dbc = dbc::get_instance(); // Create db instance
?>