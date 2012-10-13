<?php /* dbc_visitors_class.php */
// Create dbc_visitors class
class dbc_visitors extends dbc {
	// Create record_visitors method
	public function record_visitors($conn, $sb_cookie) {
		if(isset($_COOKIE[$sb_cookie])) {
			// Do nothing
		} else {
			$ip_var = ''; // Create ip_var property

			if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip_var = $_SERVER['HTTP_CLIENT_IP']; // Adjust ip_var property
			} elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip_var = $_SERVER['HTTP_X_FORWARDED_FOR']; // Adjust ip_var property
			} elseif(!empty($_SERVER['REMOTE_ADDR'])) {
				$ip_var = $_SERVER['REMOTE_ADDR']; // Adjust ip_var property
			} else {
				$ip_var = 'Unknown'; // Adjust ip_var property
			}

			$sql = $conn->prepare('INSERT INTO visitors (visitor_ip) VALUES (?)');
			$sql->bindParam(1, $ip_var, PDO::PARAM_STR); // Bind parameter
			$sql->execute(); // Execute prepared statement
			setcookie($sb_cookie, 'Visitor', time()+43200);
		}
	}
}
?>