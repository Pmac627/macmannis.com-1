<?php /* switchboard_class.php */
// Create switchboard class
class dbc_switchboard extends dbc
{
	// Create get_switchboard method
	public function get_switchboard($conn)
	{
		$sql = $conn->prepare('SELECT sb_open, sb_title, sb_charset, sb_app_name, sb_author, sb_keywords, sb_description, sb_base_url, sb_cookie, sb_site_email, sb_dc_title, sb_dc_creator, sb_dc_subject, sb_dc_description, sb_dc_publisher, sb_dc_date, sb_dc_type, sb_dc_format, sb_dc_language FROM switchboard WHERE sb_site=0');
		$sql->execute(); // Execute prepared statement
		$sb_grande = ''; // Create sb_grande property
		foreach($sql->fetchAll() as $record)
		{
			$this->sb_grande = array('sb_open' => $record['sb_open'], 'sb_title' => $record['sb_title'], 'sb_charset' => $record['sb_charset'], 'sb_app_name' => $record['sb_app_name'], 'sb_author' => $record['sb_author'], 'sb_keywords' => $record['sb_keywords'], 'sb_description' => $record['sb_description'], 'sb_base_url' => $record['sb_base_url'], 'sb_cookie' => $record['sb_cookie'], 'sb_site_email' => $record['sb_site_email'], 'sb_dc_title' => $record['sb_dc_title'], 'sb_dc_creator' => $record['sb_dc_creator'], 'sb_dc_subject' => $record['sb_dc_subject'], 'sb_dc_description' => $record['sb_dc_description'], 'sb_dc_publisher' => $record['sb_dc_publisher'], 'sb_dc_date' => $record['sb_dc_date'], 'sb_dc_type' => $record['sb_dc_type'], 'sb_dc_format' => $record['sb_dc_format'], 'sb_dc_language' => $record['sb_dc_language']);
		}
		return $this->sb_grande;
	}
}
?>