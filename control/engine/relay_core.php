<?php /* relay_class.php */
// Create relay core
class relay
{
	private $registry; // Create registry property
	private $path; // Create path property
	private $args = array();  // Create args property
	public $file; // Create file property
	public $control; // Create control property
	public $action; // Create action property

	// Construct registry
	function __construct($registry)
	{
		$this->registry = $registry;
	}

	// Create set_path method
	function set_path($path)
	{
		if(is_dir($path) == FALSE)
		{
			throw new Exception('Control path does not exist: ' . $path); // Error if path doesn't exist
		}

		$this->path = $path; // Set path
	}

	// Create loader method
	public function loader()
	{
		$this->get_control(); // Check path

		if(is_readable($this->file) == FALSE)
		{
			$this->control = 'error';
			$this->file = $this->path . '/' . $this->control . '_controls.php'; // Set error path
		}

		include($this->file); // Include control

		$class = $this->control . '_controls';
		$control = new $class($this->registry); // Create new control instance

		if(is_callable(array($control, $this->action)) == FALSE)
		{
			$action = 'index';
		}
		else
		{
			$action = $this->action;
		}

		$control->$action(); // Process action
	}

	// Create get_control method
	private function get_control()
	{
		$relay = (empty($_GET['p'])) ? '' : $_GET['p']; // Grab _GET variable, if it exists

		if(empty($relay))
		{
			$relay = 'index'; // Set relay to default
		}
		else
		{
			$link_fragments = explode('/', $relay); // Split relay property
			$this->control = $link_fragments[0];

			if(isset($link_fragments[1]))
			{
				$this->action = $link_fragments[1]; // Assign view
			}
		}

		if(empty($this->control))
		{
			$this->control = 'index'; // Set control to default
		}

		if(empty($this->action))
		{
			$this->action = 'index'; // Set action to default
		}

		$this->file = $this->path . '/' . $this->control . '_controls.php'; // Set proper path
	}
}
?>