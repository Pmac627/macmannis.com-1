<?php /* control_core_class.php */
// Create control core
abstract class base_controls {
	protected $registry; // Create registry property

	// Construct registry
	function __construct($registry) {
		$this->registry = $registry;
	}

	abstract function index(); // Require index method
}
?>