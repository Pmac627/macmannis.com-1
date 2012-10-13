<?php /* dbc_class.php */
// Create dbc class
class dbc {
	private static $instance = NULL; // Create instance property

	// Construct method
	private function __construct() {
		// Reserves it
	}

	// Create get_instance method
	public static function get_instance() {
		$pdo_host = 'localhost'; // Create pdo_host property
		$pdo_name = 'db_name'; // Create pdo_name property
		$pdo_declare = 'mysql:host=' . $pdo_host . ';dbname=' . $pdo_name . ''; // Create pdo_declare property
		$pdo_user = 'db_user'; // Create pdo_user property
		$pdo_pass = 'db_password'; // Create pdo_pass property

		if(!self::$instance) {
			self::$instance = new PDO($pdo_declare, $pdo_user, $pdo_pass);
			self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		return self::$instance;
	}

	// Clone method
	private function __clone() {
		// Reserves it
	}
}
?>