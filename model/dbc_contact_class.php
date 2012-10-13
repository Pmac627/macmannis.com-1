<?php /* dbc_contact_class.php */
// Create dbc_contact class
class dbc_contact extends dbc {
	// Create validate_input method
	public function validate_input($string, $type, $length) {
		$type = 'is_'.$type; // Adjust type property

		if(!$type($string)) {
			return FALSE; // Kill process
		} elseif(empty($string)) {
			return FALSE; // Kill process
		} elseif(strlen($string) > $length) {
			return FALSE; // Kill process
		} else {
			return TRUE; // Continue process
		}
	}

	// Create validate_email method
	public function validate_email($email) {
		return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}

	// Create process_contact method
	public function process_contact($conn, $sb_author, $sb_cookie, $sb_app_name, $sb_title, $sb_site_email) {
		if(isset($_POST['submit'])) {
			if(isset($_COOKIE[$sb_cookie])) {
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

				$sql = $conn->prepare('SELECT id_visitor FROM visitors WHERE visitor_ip=? ORDER BY id_visitor');
				$sql->bindParam(1, $ip_var, PDO::PARAM_STR); // Bind parameter
				$sql->execute(); // Execute prepared statement
				$id_visitor = ''; // Create id_visitor property
				foreach($sql->fetchAll() as $record) {
					$this->id_visitor = $record['id_visitor'];
				}
			} else {
				$this->id_visitor = 0;
			}

			if(self::validate_input($_POST['contact_email'], 'string', 60) != FALSE && self::validate_email($_POST['contact_email']) != FALSE && self::validate_input($_POST['contact_name'], 'string', 40) != FALSE && self::validate_input($_POST['contact_message'], 'string', 500) != FALSE) {
				$id_visit = '';
				$id_visit = (int)$this->id_visitor; // Cast id_visitor property
				$contact_email = $_POST['contact_email']; // Create contact_email property
				$contact_name = $_POST['contact_name']; // Create contact_name property
				$contact_message = $_POST['contact_message']; // Create contact_message property
				$contact_date = (int)date('U'); // Create/Cast contact_date property

				$sql = $conn->prepare('INSERT INTO contact (contact_email, contact_name, contact_message, contact_date) VALUES (?, ?, ?, ?)');
				$sql->bindParam(1, $contact_email, PDO::PARAM_STR); // Bind parameter
				$sql->bindParam(2, $contact_name, PDO::PARAM_STR); // Bind parameter
				$sql->bindParam(3, $contact_message, PDO::PARAM_STR); // Bind parameter
				$sql->bindParam(4, $contact_date, PDO::PARAM_INT); // Bind parameter
				$sql->execute(); // Execute prepared statement

				$id_contact = $conn->lastInsertId();

				$sql = $conn->prepare('INSERT INTO contact_visitors (id_visitor, id_contact) VALUES (?, ?)');
				$sql->bindParam(1, $id_visit, PDO::PARAM_INT); // Bind parameter
				$sql->bindParam(2, $id_contact, PDO::PARAM_INT); // Bind parameter

				$sql->execute(); // Execute prepared statement

				setcookie($sb_cookie, $contact_name, time()+43200); // Set cookie

				$mail_to = $sb_author . ' <' . $sb_site_email . '>'; // Create mail_to property
				$mail_subject = 'Comment from ' . $sb_title . ' - ' . $sb_app_name . ''; // Create mail_subject property
				$mail_message = wordwrap('Name: ' . $contact_name . '<br />Visitor: #' . $id_visit . '<br />Date: ' . date("F j, Y @ g:i a", $contact_date) . '<br /><br />' . $contact_message . '<br /><br />' . $contact_email, 70); // Create mail_message property
				$mail_headers = 'From: no_reply@macmannis.com' . "\r\n" .
					'Reply-To: no_reply@macmannis.com' . "\r\n" .
					'MIME-Version: 1.0' . "\r\n" .
					'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
					'X-Mailer: PHP/' . phpversion(); // Create mail_headers property

				mail($mail_to, $mail_subject, $mail_message, $mail_headers); // Mail object
			} else {
				// Do nothing
			}
		} else {
			// Do nothing
		}
	}
}
?>