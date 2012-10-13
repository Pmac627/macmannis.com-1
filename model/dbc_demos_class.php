<?php /* dbc_demos_class.php */
// Create dbc_demos class
class dbc_demos extends dbc {
	// Create generate_demos_live method
	public function generate_demos_live($conn) {
		$sql = $conn->prepare('SELECT id_demo, demo_title, demo_url, demo_desc, demo_img, demo_img_large FROM demos WHERE demo_show=1 AND demo_live=1');
		$sql->execute(); // Execute prepared statement
		$demos_list_live = array(); // Create demos_list_live property
		$count = ''; // Create count property
		foreach($sql->fetchAll() as $record) {
			$count = $record['id_demo'];
			$this->demos_list_live[$count] = array('demo_title' => $record['demo_title'], 'demo_url' => $record['demo_url'], 'demo_desc' => $record['demo_desc'], 'demo_img' => $record['demo_img'], 'demo_img_large' => $record['demo_img_large']);
		}
		return $this->demos_list_live;
	}

	// Create generate_demos_proto method
	public function generate_demos_proto($conn) {
		$sql = $conn->prepare('SELECT id_demo, demo_title, demo_url, demo_desc, demo_img, demo_img_large FROM demos WHERE demo_show=1 AND demo_live=0');
		$sql->execute(); // Execute prepared statement
		$demos_list_proto = array(); // Create demos_list_proto property
		$count = ''; // Create count property
		foreach($sql->fetchAll() as $record) {
			$count = $record['id_demo'];
			$this->demos_list_proto[$count] = array('demo_title' => $record['demo_title'], 'demo_url' => $record['demo_url'], 'demo_desc' => $record['demo_desc'], 'demo_img' => $record['demo_img'], 'demo_img_large' => $record['demo_img_large']);
		}
		return $this->demos_list_proto;
	}
}
?>