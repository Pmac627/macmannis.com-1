<?php /* template_class.php */
// Create template core
class template {
	private $registry; // Create registry property
	private $vars = array(); // Create vars property

	// Construct registry
	function __construct($registry) {
		$this->registry = $registry;
	}

	// Set properties
	public function __set($index, $value) {
		$this->vars[$index] = $value; // Set value
	}

	// Create show method
	function show($name) {
		$path = __SITE_PATH . '/view/default/' . $name . '.php'; // Compile path

		if(file_exists($path) == FALSE) {
			throw new Exception('Template does not exist: ' . $path); // Error if path doesn't exist
			return FALSE;
		}

		foreach($this->vars as $key => $value) {
			// Double $$ helps variable get correct value, not just reinput it into $key array
			$$key = $value; // Load each variable
		}

		include($path); // Include view
	}
}
?>