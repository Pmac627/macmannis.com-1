<?php /* registry_class.php */
// Create registry core
class registry {
	private $vars = array(); // Create vars property

	// Set properties
	public function __set($index, $value) {
		$this->vars[$index] = $value; // Set value
	}

	// Get properties
	public function __get($index) {
		return $this->vars[$index]; // Return value
	}
}
?>