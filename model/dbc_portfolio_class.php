<?php /* dbc_portfolio_class.php */
// Create dbc_portfolio class
class dbc_portfolio extends dbc {
	// Create generate_portfolio_live method
	public function generate_portfolio_live($conn) {
		$sql = $conn->prepare('SELECT id_portfolio, portfolio_title, portfolio_url, portfolio_desc, portfolio_img, portfolio_img_large FROM portfolio WHERE portfolio_show=1 AND portfolio_live=1');
		$sql->execute(); // Execute prepared statement
		$portfolio_list_live = array(); // Create portfolio_list_live property
		$count = ''; // Create count property
		foreach($sql->fetchAll() as $record) {
			$count = $record['id_portfolio'];
			$this->portfolio_list_live[$count] = array('portfolio_title' => $record['portfolio_title'], 'portfolio_url' => $record['portfolio_url'], 'portfolio_desc' => $record['portfolio_desc'], 'portfolio_img' => $record['portfolio_img'], 'portfolio_img_large' => $record['portfolio_img_large']);
		}
		return $this->portfolio_list_live;
	}

	// Create generate_portfolio_proto method
	public function generate_portfolio_proto($conn) {
		$sql = $conn->prepare('SELECT id_portfolio, portfolio_title, portfolio_url, portfolio_desc, portfolio_img, portfolio_img_large FROM portfolio WHERE portfolio_show=1 AND portfolio_live=0');
		$sql->execute(); // Execute prepared statement
		$portfolio_list_proto = array(); // Create portfolio_list_live property
		$count = ''; // Create count property
		foreach($sql->fetchAll() as $record) {
			$count = $record['id_portfolio'];
			$this->portfolio_list_proto[$count] = array('portfolio_title' => $record['portfolio_title'], 'portfolio_url' => $record['portfolio_url'], 'portfolio_desc' => $record['portfolio_desc'], 'portfolio_img' => $record['portfolio_img'], 'portfolio_img_large' => $record['portfolio_img_large']);
		}
		return $this->portfolio_list_proto;
	}
}
?>